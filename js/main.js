const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal__dialog");

document.addEventListener("click", (event) => {
    if (
        event.target.dataset.toggle == "modal" || 
        event.target.parentNode.dataset.toggle == "modal" ||
        (!event.composedPath().includes(modalDialog) && 
            modal.classList.contains("is-open"))
    ) {
        event.preventDefault();
        modal.classList.toggle('is-open');
    }
});
document.addEventListener("keyup", (event) => { /* отслеживаем нажатие кнопки */
	if (event.key == "Escape" && modal.classList.contains("is-open")) { /* проверяем, что это Esc И текущее окно открыто */
        modal.classList.toggle("is-open"); /* закрываем текущее открытое окно */
	}
}); 


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
	/* если вводят семерку, добавляем ей скобку */
	if (str === "7") {
	  return "7 (";
	}
	/* если вводят восьмерку, ставим вместо нее +7 ( */
	if (str === "8") {
	  return "+7 (";
	}
	/* если пишут девятку, заменяем на +7 (9  */
	if (str === "9") {
	  return "7 (9";
	}
	/* в других случаях просто 7 (  */
	return "7 (";
  }; /* профикс в любом раскладе будет +7 () */
  
  /* Ловим события ввода в любом поле */
  document.addEventListener("input", (e) => {
	/* Проверяем, что это поле имеет класс phone-mask */
	if (e.target.classList.contains("phone-mask")) {
	  /* поле с телефоном помещаем в переменную input */
	  const input = e.target;
	  /* вставляем плюс в начале номера */
	  const value = input.value.replace(/\D+/g, "");
	  /* длинна номера 11 символов */
	  const numberLength = 11;
  
	  /* Создаем переменную, куда будем записывать номер */
	  let result;
	  /* Если пользователь ввел 8... */
	  if (input.value.includes("+8") || input.value[0] === "8") {
		/* Стираем восьмерку */
		result = "";
	  } else {
		/* Оставляем плюсик в поле */
		result = "+";
	  }
  
	  /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
	  for (let i = 0; i < value.length && i < numberLength; i++) {
		switch (i) {
		  case 0:
			/* в самом начале ставим префикс +7 ( */
			result += prefixNumber(value[i]);
			continue;
		  case 4:
			/* добавляем после "+7 (" круглую скобку ")" */
			result += ") ";
			break;
		  case 7:
			/* дефис после 7 символа */
			result += "-";
			break;
		  case 9:
			/* еще дефис  */
			result += "-";
			break;
		  default:
			break;
		}
		/* на каждом шаге цикла добавляем новую цифру к номеру */
		result += value[i];
	  }
	  /* итог: номер в формате +7 (999) 123-45-67 */
	  input.value = result;
	}
  });


const forms = document.querySelectorAll("form");
forms.forEach((form) => {
    const validation = new JustValidate(form, {
        errorFieldCssClass: "is-invalid",
    });
    validation
        .addField("[name=notify]", [
            {
                rule: "required",
                errorMessage: "Примите соглашение",
            },
        ])
        .addField("[name=userphone]", [
            {
                rule: 'required',
                errorMessage: "Укажите телефон",
            },
        ])
        .onSuccess((event) => {
            const thisForm = event.target; // наша функция
            const formData = new FormData(thisForm); // данные из нашей формы
            const ajaxSend = (formData) => {
                fetch(thisForm.getAttribute("action"), {
                    method: thisForm.getAttribute("method"),
                    body: formData, 
                }).then((response) => {
                    if (response.ok) {
                        thisForm.reset();
                        currentModal.classList.remove("is-open");
                        alertModal.classList.add("is-open");
                        currentModal = alertModal;
                        modalDialog = currentModal.querySelector(".modal-dialog"); /* назначаем новое белое диалоговое окно */
                        currentModal.addEventListener("click", event => { /* отслеживаем клик по окну и пустым облостям */
                            if (!event.composedPath().includes(modalDialog)) { /* если клик в пустую область */
                                currentModal.classList.remove("is-open"); /* закрываем окно */
                            }
                        });
                    } else {
                        alert(response.statusText);
                    }
                });
            };
            ajaxSend(formData);
        });
});
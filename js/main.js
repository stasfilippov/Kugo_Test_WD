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
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/index.css">
	<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
	<title>Kugo Test WD</title>
</head>
<body>
	<header class="header front-page">
		<div class="container-l">
			<nav class="header__nav-contacts nav-contacts">
				<div class="nav-contacts__socials">
					<div class="nav-contacts__link-wrapper">
						<a href="#" class="nav-contacts__link">Сервис</a>
						<a href="#" class="nav-contacts__link">Сотрудничество</a>
						<a href="#" class="nav-contacts__link">Заказать звонок</a>
					</div>
					<!-- /.link-wrapper -->
					<div class="nav-contacts__messangers">
						<a href="" class="nav-contacts__icon-link">
							<svg width="12px" height="12px" class="nav-contacts__icon">
								<use href="./icons/sprite.svg#viber"></use>
							</svg>
						</a>
						<a href="" class="nav-contacts__icon-link">
							<svg width="12px" height="12px" class="nav-contacts__icon">
								<use href="./icons/sprite.svg#whatsup"></use>
							</svg>
						</a>
						<a href="" class="nav-contacts__icon-link">
							<svg width="12px" height="12px" class="nav-contacts__icon">
								<use href="./icons/sprite.svg#telegram"></use>
							</svg>
						</a>
					</div>
					<!-- /.messangers -->
				</div>
				<a href="./" class="nav-contacts__logo logo">Kugoo</a>
				<a href="tel:+78005055461" class="nav-contacts__phone">+7 (800) 505-54-61</a>
				<!-- /.nav-contacts__phone -->
			</nav>
			<!-- /.nav-contacts -->
		</div>
		<div class="separator"></div>
		<div class="container-l">
			<nav class="header__nav-research nav-research">
				<a href="./" class="nav-research__logo logo">Kugoo</a>
				<!-- /.logo -->
				<div class="nav-research__presearch-wrapper">
					<div class="nav-research__btn-catalog-w btn">
						<div class="btn__burger">
							<span class="btn__line"></span>
							<span class="btn__line"></span>
							<span class="btn__line"></span>
						</div>
						<div class="btn__text">Каталог</div>
					</div>
					<!-- /.btn-catalog-w -->
					<div class="nav-research__search-w">
						<input type="search" placeholder="Искать самокат KUGO" class="nav-research__input">
						<div class="nav-research__input-control">
							<svg height="16px" width="16px" class="nav-research__icon-search">
								<use href="./icons/sprite.svg#search"></use>
							</svg>
						</div>
					</div>
					<!-- /.nav-research__presearch -->
				</div>
				<!-- /.presearch-wrapper -->
				<div class="nav-research__buttons-w">
					<a href="" class="nav-research__link">
						<picture class="nav-research__icon">
							<!-- <source type="image/webp" srcset="./images/compare.webp">
							<source type="image/png" srcset="./images/compare.png"> -->
							<img height="12px" width="20px" src="./images/compare.png">
						</picture>
					</a>
					<a href="" class="nav-research__link">
						<svg height="20px" width="20px" class="nav-research__icon">
							<use href="./icons/sprite.svg#wish"></use>
						</svg>
					</a>
					<div class="nav-research__busket-btn">
						<svg height="20px" width="20px" class="nav-research__icon">
							<use href="./icons/sprite.svg#busket"></use>
						</svg>
						<div class="nav-research__text">Корзина</div>
					</div>
				</div>
				<!-- /.buttons-w -->
			</nav>
			<!-- /.nav-research -->
		</div>
		<div class="container-b">
			<div class="header__main main">
				<div class="container-l">
					<div class="main__contacts-w">
						<svg height="15px" width="15px" class="main__icon-adress">
							<use href="./icons/sprite.svg#adress"></use>
						</svg>
						<a href="#" class="main__adress-text">Восточно-Кругликовская улица, 86</a>
						<span class="main__time-work">Вт - Сб 10:00 - 20:00</span>
					</div>
					<!-- /.contacts-w-->
					<h1 class="main__title title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
					<!-- /.title -->
					<p class="main__subtitle">в Москве без ограничения по времени</p>
					<!-- /.subtitle -->
					<div class="main__descr-w">
						<div class="main__feature-w">
							<div class="main__icon-feature">
								<svg height="16px" width="16px" class="main__icon-scooter">
									<use href="./icons/sprite.svg#scooter"></use>
								</svg>
							</div>
							<div class="main__text-feature">Поймете, какая модель вам подходит</div>
						</div>
						<div class="main__feature-w">
							<div class="main__icon-feature">
								<svg height="16px" width="16px" class="main__icon-energy">
									<use href="./icons/sprite.svg#energy"></use>
								</svg>
							</div>
							<div class="main__text-feature">Проверите лучшие самокаты в деле</div>
						</div>
					</div>
					<!-- /.descr-w -->
					<button class="main__button btn" data-toggle="modal">Записаться</button>
				</div>
			</div>
			<!-- /.header__main main -->
		</div>
	</header>
	<!-- /.header -->
	<section class="section">
		<div class="container-b">
			<div class="section__test-drive features">
				<picture class="features__img">
					<!-- <source type="image/webp" srcset="./images/compare.webp">
					<source type="image/png" srcset="./images/compare.png"> -->
					<img width="515px" height="422px" src="./images/scooter.png" alt="scooter" class="features__img">
				</picture>
				<div class="container-l">
					<div class="features__wrapper">
						<div class="features__title title">Определите максимально подходящую вам модель <br> не теоретически, а на практике</div>
						<div class="features__descr">
							<p class="features__text">Тест-драйв поможет:</p>
							<ul class="features__list">
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text"><strong>Понять</strong> подходит ли вам конкретная модель;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text"><strong>Испытать</strong> самокат в «реальной жизни»;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text"><strong>Оценить</strong> удобство хранения и эксплуатации;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text"><strong>Узнать</strong> реальные характеристики и возможности модели.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.section__test-drive features -->
		</div>
	</section>
	<!-- /.section__features-->
	<section class="section">
		<div class="container-b">
			<div class="section__training features">
				<picture class="features__img">
					<!-- <source type="image/webp" srcset="./images/compare.webp">
					<source type="image/png" srcset="./images/compare.png"> -->
					<img src="./images/training.png" alt="training" class="features__img">
				</picture>
				<div class="container-l">
					<div class="features__wrapper">
						<div class="features__title title">Научим правильной<br>и безопасной езде в городе вас или вашего ребенка</div>
						<div class="features__descr">
							<p class="features__text">На обучении специалист расскажет:</p>
							<ul class="features__list">
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text">Как подготовить самокат к поездке;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text">Как «завести» самокат;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text">Как вести себя во время поездки и обезопасить себя и окружающих;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text">Как складывать и раскладывать электросамокат;</p>
								</li>
								<li class="features__item">
									<svg height="22px" width="22px" class="features__item-icon">
										<use href="./icons/sprite.svg#check"></use>
									</svg>
									<p class="features__item-text">Как ухаживать за своим девайсом.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.section__training features -->
		</div>
	</section>
	<!-- /.section__features-->
	<section class="section store">
		<div class="container-l">
			<div class="store-w">
				<div class="store__title title">Сейчас для тест-драйва и обучения доступны следующие модели</div>
				<!-- /.store__title -->
				<div class="store__cards">
					<div class="store__card card">
						<div class="card__tag_red tag">Хит</div>
						<!-- /.card__tag tag -->
						<div class="card__icon-compare">
							<picture class="card__icon">
								<!-- <source type="image/webp" srcset="./images/compare.webp">
								<source type="image/png" srcset="./images/compare.png"> -->
								<img height="12px" width="20px" src="./images/compare.png">
							</picture>
						</div>
						<img src="./images/store-icon.png" alt="store-icon" class="card__image">
						<div class="card__content">
							<div class="card__label">Kugoo Kirin M4</div>
							<!-- /.card__label -->
							<div class="card__descr">
								<ul class="card__list">
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#battery"></use>
										</svg>
										<span class="card__item-text">2000 mAh</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#speed"></use>
										</svg>
										<span class="card__item-text">60 км/ч</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#power"></use>
										</svg>
										<span class="card__item-text">1,2 л.с.</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#timer"></use>
										</svg>
										<span class="card__item-text">5 часов</span>
									</li>
								</ul>
							</div>
							<!-- /.card__descr -->
							<div class="card__price-w">
								<div class="card__price-numb">
									<span class="card__price-old">39 900 ₽</span>
									<span class="card__price-new">29 900 ₽</span>
								</div>
								<div class="card__price-icon">
									<svg height="17px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#cart"></use>
									</svg>
								</div>
								<div class="card__price-icon">
									<svg height="20px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#wish-card"></use>
									</svg>
								</div>
							</div>
							<!-- /.card__price-w -->
							<button class="card__btn btn">Записаться на тест-драйв</button>
							<!-- /.card__btn -->
						</div>
					</div>
					<!-- /.store__card -->
					<div class="store__card card">
						<div class="card__tag_green tag">Новинка</div>
						<!-- /.card__tag tag -->
						<div class="card__icon-compare">
							<picture class="card__icon">
								<!-- <source type="image/webp" srcset="./images/compare.webp">
								<source type="image/png" srcset="./images/compare.png"> -->
								<img height="12px" width="20px" src="./images/compare.png">
							</picture>
						</div>
						<img src="./images/store-icon.png" alt="store-icon" class="card__image">
						<div class="card__content">
							<div class="card__label">Kugoo Kirin M4</div>
							<!-- /.card__label -->
							<div class="card__descr">
								<ul class="card__list">
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#battery"></use>
										</svg>
										<span class="card__item-text">2000 mAh</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#speed"></use>
										</svg>
										<span class="card__item-text">60 км/ч</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#power"></use>
										</svg>
										<span class="card__item-text">1,2 л.с.</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#timer"></use>
										</svg>
										<span class="card__item-text">5 часов</span>
									</li>
								</ul>
							</div>
							<!-- /.card__descr -->
							<div class="card__price-w">
								<div class="card__price-numb">
									<span class="card__price-old">39 900 ₽</span>
									<span class="card__price-new">29 900 ₽</span>
								</div>
								<div class="card__price-icon">
									<svg height="17px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#cart"></use>
									</svg>
								</div>
								<div class="card__price-icon">
									<svg height="20px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#wish-card"></use>
									</svg>
								</div>
							</div>
							<!-- /.card__price-w -->
							<button class="card__btn btn">Записаться на тест-драйв</button>
							<!-- /.card__btn -->
						</div>
					</div>
					<!-- /.store__card -->
					<div class="store__card card">
						<div class="card__tag_red tag">Хит</div>
						<!-- /.card__tag tag -->
						<div class="card__icon-compare">
							<picture class="card__icon">
								<!-- <source type="image/webp" srcset="./images/compare.webp">
								<source type="image/png" srcset="./images/compare.png"> -->
								<img height="12px" width="20px" src="./images/compare.png">
							</picture>
						</div>
						<img src="./images/store-icon.png" alt="store-icon" class="card__image">
						<div class="card__content">
							<div class="card__label">Kugoo Kirin M4</div>
							<!-- /.card__label -->
							<div class="card__descr">
								<ul class="card__list">
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#battery"></use>
										</svg>
										<span class="card__item-text">2000 mAh</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#speed"></use>
										</svg>
										<span class="card__item-text">60 км/ч</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#power"></use>
										</svg>
										<span class="card__item-text">1,2 л.с.</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#timer"></use>
										</svg>
										<span class="card__item-text">5 часов</span>
									</li>
								</ul>
							</div>
							<!-- /.card__descr -->
							<div class="card__price-w">
								<div class="card__price-numb">
									<span class="card__price-old">39 900 ₽</span>
									<span class="card__price-new">29 900 ₽</span>
								</div>
								<div class="card__price-icon">
									<svg height="17px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#cart"></use>
									</svg>
								</div>
								<div class="card__price-icon">
									<svg height="20px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#wish-card"></use>
									</svg>
								</div>
							</div>
							<!-- /.card__price-w -->
							<button class="card__btn btn">Записаться на тест-драйв</button>
							<!-- /.card__btn -->
						</div>
					</div>
					<!-- /.store__card -->
					<div class="store__card card">
						<div class="card__tag_green tag">Новинка</div>
						<!-- /.card__tag tag -->
						<div class="card__icon-compare">
							<picture class="card__icon">
								<!-- <source type="image/webp" srcset="./images/compare.webp">
								<source type="image/png" srcset="./images/compare.png"> -->
								<img height="12px" width="20px" src="./images/compare.png">
							</picture>
						</div>
						<img src="./images/store-icon.png" alt="store-icon" class="card__image">
						<div class="card__content">
							<div class="card__label">Kugoo Kirin M4</div>
							<!-- /.card__label -->
							<div class="card__descr">
								<ul class="card__list">
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#battery"></use>
										</svg>
										<span class="card__item-text">2000 mAh</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#speed"></use>
										</svg>
										<span class="card__item-text">60 км/ч</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#power"></use>
										</svg>
										<span class="card__item-text">1,2 л.с.</span>
									</li>
									<li class="card__item">
										<svg height="18px" width="18px" class="card__item-icon">
											<use href="./icons/sprite.svg#timer"></use>
										</svg>
										<span class="card__item-text">5 часов</span>
									</li>
								</ul>
							</div>
							<!-- /.card__descr -->
							<div class="card__price-w">
								<div class="card__price-numb">
									<span class="card__price-old">39 900 ₽</span>
									<span class="card__price-new">29 900 ₽</span>
								</div>
								<div class="card__price-icon">
									<svg height="17px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#cart"></use>
									</svg>
								</div>
								<div class="card__price-icon">
									<svg height="20px" width="20px" class="card__icon">
										<use href="./icons/sprite.svg#wish-card"></use>
									</svg>
								</div>
							</div>
							<!-- /.card__price-w -->
							<button class="card__btn btn">Записаться на тест-драйв</button>
							<!-- /.card__btn -->
						</div>
					</div>
					<!-- /.store__card -->
				</div>
				<!-- /.store__cards -->
			</div>
			
		</div>
	</section>
	<!-- /.section-store-->
	<section class="section cta">
		<div class="container-b">
			<div class="cta__wrapper">
				<div class="container-l">
					<img class="cta__img" src="./images/bg-cta.png" alt="call to action">
					<div class="cta__content-wrapper">
						<div class="cta__content">
							<div class="cta__title title">Нет нужной модели, которую хотите протестировать?</div>
							<form action="handler.php" method="POST" class="cta__form">
								<p class="cta__form-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
								<div class="cta__input-group">
									<input
										id="user-phone" 
										type="tel"
										name="userphone" 
										class="cta__input phone-mask"
										placeholder="+7 (___) __ - __ - __"
										maxlength="30"
										required
										>
									<!-- <label class="input-group-label" for="user-phone">Номер телефона</label> -->
									<button type="submit" class="btn cta__form-button">Оставить заявку на тест-драйв</button>
								</div>
								<div class="cta__form-footer notify">
									<label class="notify__wrapper">
										<input type="checkbox" class="notify__checkbox" name="notify" required>
										<span class="notify__custom-checkbox"></span>
										<div class="notify__text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="notify__link">политикой конфиденциальности</a></div>
									</label>
								</div>
								<!-- /.cta-form-footer -->
							</form>
							<!-- /.cta-form -->
						</div>
						<!-- /.cta-content -->
					</div>
					<!-- /.cta-content-wrapper -->
				</div>
			</div>
			<!-- /сta-wrapper -->
		</div>
	</section>
	<footer class="footer">
		<div class="footer__top submit">
			<div class="container-l">
				<div class="submit__wrapper">
					<div class="submit__text">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</div>
					<!-- /.submit__text -->
					<div class="submit__input-group">
						<input 
						type="email" 
						class="submit__input"
						id="user-email" 
						name="useremail" 
						placeholder="Введите Ваш email"
						maxlength="30"
						required>
						<button type="submit" class="submit__btn btn">Подписаться</button>
					</div>
				</div>
				<!-- /.submit__wrapper -->
			</div>
		</div>
		<!-- /footer-top submit-->
		<div class="footer__middle menu">
			<div class="container-l">
				<div class="menu__nav">
					<div class="menu__nav-wrapper">
						<div class="menu__title">Каталог товаров</div>
						<ul class="menu__list">
							<li class="menu__item"><a class="menu__link" href="#">Электросамокаты</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Электроскутеры</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Электровелосипеды</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Электровелосипеды</a></li>
						</ul>
					</div>
					<div class="menu__nav-wrapper">
						<div class="menu__title">Покупателям</div>
						<ul class="menu__list_col">
							<li class="menu__item"><a class="menu__link" href="#">Сервисный центр</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Доставка и оплата</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Рассрочка</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Тест-драйв</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Блог</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Сотрудничество</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Контакты</a></li>
							<li class="menu__item"><a class="menu__link" href="#">Акции</a></li>
						</ul>
					</div>
				</div>
				<!-- /.menu__nav -->
				<div class="menu__contacts">
					<div class="menu__contacts-wrapper">
						<div class="menu__title">Контакты</div>
						<div class="menu__info">
							<div class="menu__info-wrapper">
								<span class="menu__center-name">Call-центр</span>
								<span class="menu__center-phone">
									<a href="tel:+78005055461">+7 (800) 505-54-61</a>
								</span>
								<span class="menu__center-time">Пн-Вс 10:00 - 20:00</span>
							</div>
							<div class="menu__info-wrapper">
								<span class="menu__center-name">Сервисный центр</span>
								<span class="menu__center-phone">
									<a href="tel:+74993507692">+7 (499) 350-76-92</a>
								</span>
								<span class="menu__center-time">Пн-Вс 10:00 - 20:00</span>
							</div>
						</div>
					</div>
					<div class="menu__contacts-wrapper">
						<a href="" class="menu__cta">Заказать звонок</a>
					</div>
				</div>
				<!-- /.menu__contacts -->
			</div>
		</div>
		<!-- /.footer__middle menu -->
		<div class="container-l">
			<div class="footer__seporator"></div>
		</div>
		<div class="footer__bottom links-social">
			<div class="container-l">
				<div class="links-social__wrapper">
					<div class="links-social__downl">
						<div class="links-social__logo logo"><a href="./">Kugoo</a></div>
						<!-- /.link-social__logo logo -->
						<div class="links-social__apps-w">
							<div class="links-social__app">
								<a href="#" class="link-social__app-link">
									<picture class="link-social__icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/google-play.png" alt="google-play">
									</picture>
								</a>
							</div>
							<div class="links-social__app">
								<a href="#" class="link-social__app-link">
									<picture class="link-social__icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/app-store.png" alt="app-store">
									</picture>
								</a>
							</div>
						</div>
					</div>
					<!-- /.links-social__downl -->
					<div class="links-social__media">
						<div class="links-social__media-w">
							<div class="links-social__media-item vk">
								<svg height="20px" width="20px" class="link-social__icon">
									<use href="./icons/sprite.svg#vk"></use>
								</svg>
								<div class="links-social__media-content">
									<div class="links-social__media-text">Вконтакте</div>
									<div class="links-social__media-number">3 300</div>
								</div>
							</div>
							<div class="links-social__media-item youtube">
								<svg height="20px" width="20px" class="link-social__icon">
									<use href="./icons/sprite.svg#youtube"></use>
								</svg>
								<div class="links-social__media-content">
									<div class="links-social__media-text">YouTube</div>
									<div class="links-social__media-number">3 603</div>
								</div>
							</div>
							<div class="links-social__media-item telegram">
								<svg height="20px" width="20px" class="link-social__icon">
									<use href="./icons/sprite.svg#tg"></use>
								</svg>
								<div class="links-social__media-content">
									<div class="links-social__media-text">Telegram</div>
									<div class="links-social__media-number">432</div>
								</div>
							</div>
						</div>
						<!-- /.links-social__media-w -->
					</div>
					<!-- /.links-social__media -->
				</div>
			</div>
		</div>
		<!-- /.footer__bottom links-social -->
		<div class="container-l">
			<div class="footer__seporator"></div>
		</div>
		<div class="footer__bottom credits">
			<div class="container-l">
				<div class="credits__content-l">
					<div class="requisites">
						<a class="credits__link">Реквизиты</a>
					</div>
					<!-- /.requisites -->
					<div class="policy">
						<a class="credits__link">Политика конфиденциальности</a>
					</div>
				</div>
				<!-- /.credits__content-l -->
				<div class="credits__content-r">
					<div class="credits__content-r-wrapper">
						<ul class="credits__payment-list">
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/g-pay.png" alt="g-pay" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/a-pay.png" alt="a-pay" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/visa.png" alt="visa" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/master-c.png" alt="master-c" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/maestro.png" alt="maestro" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/webmoney.png" alt="webmoney" >
									</picture>
								</a>
							</li>
							<li class="credits__payment-item">
								<a href="" class="credits__payment-link">
									<picture class="credits__payment-icon">
										<!-- <source type="image/webp" srcset="./images/compare.webp">
										<source type="image/png" srcset="./images/compare.png"> -->
										<img src="./images/qivi.png" alt="qivi" >
									</picture>
								</a>
							</li>
						</ul>
					</div>
					<div class="credits__content-r-wrapper">
						<div class="credits__chats-text">Online чат:</div>
						<a href="" class="credits__chats-links">
							<svg height="16px" width="16px" class="credits__chats-icon">
								<use href="./icons/sprite.svg#viber"></use>
							</svg>
						</a>
						<a href="" class="credits__chats-links">
							<svg height="16px" width="16px" class="credits__chats-icon">
								<use href="./icons/sprite.svg#whatsup"></use>
							</svg>
						</a>
						<a href="" class="credits__chats-links">
							<svg height="16px" width="16px" class="credits__chats-icon">
								<use href="./icons/sprite.svg#telegram"></use>
							</svg>
						</a>
						<!-- /.credits__chats -->
					</div>
				</div>
				<!-- /.credits__content-r -->
			</div>
		</div>
	</footer>
	<div class="modal">
		<div class="modal__dialog">
			<a href="#" class="modal__close" data-toggle="modal">
				<svg height="20px" width="20px" class="modal__icon-close">
					<use href="./icons/sprite.svg#close"></use>
				</svg>
			</a>
			<!-- /.modal__close -->
			<div class="modal__content">
				<h2 class="modal__title title">Запишитесь на тест-драйв электросамоката</h2>
				<!-- /.modal__title title -->
				<p class="modal__subtitle">и подберите модель для себя</p>
				<p class="modal__text">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
				<form action="handler.php" method="POST" class="cta__form">
					<p class="modal__form-text">Как с вами удобнее связаться?</p>
					<div class="modal__input-group">
						<input
							id="user-phone" 
							type="tel"
							name="userphone" 
							class="modal__input phone-mask"
							placeholder="+7 (___) __ - __ - __"
							maxlength="30"
							required
							>
						<!-- <label class="input-group-label" for="user-phone">Номер телефона</label> -->
						<button type="submit" class="btn modal__form-button">Оформить предзаказ</button>
					</div>
					<div class="modal__form-footer notify">
						<label class="notify__wrapper">
							<input type="checkbox" class="notify__checkbox" name="notify" required>
							<span class="notify__custom-checkbox"></span>
							<div class="div">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <a href="#" class="notify__link">политикой конфиденциальности</a></div>
						</label>
					</div>
					<!-- /.cta-form-footer -->
				</form>
				<!-- /.cta-form -->
			</div>
			<!-- /.modal__content -->
			<div class="modal__photo">
				<picture>
					<!-- <source type="image/webp" srcset="./images/compare.webp">
					<source type="image/png" srcset="./images/compare.png"> -->
					<img src="./images/modal-photo.png" alt="girl">
				</picture>
			</div>
			<!-- /.modal__photo -->
		</div>
	</div>
	<!-- /.header__modal modal -->
	<script src="js/just-validate.production.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
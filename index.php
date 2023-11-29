<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Stoff</title>
</head>
<body>
    <div class="intro">
        <!-- HEADER -->
        <header class="intro__header header">
            <div  class="header__logo">
                <img height="37" width="180" class="header__img" src="img/header/logo.png" alt="лого">
                <p class="header__text">Центр мебельных технологий</p>
            </div>
            <nav class="header__nav">
                <ul class="header__menu-list">
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">Шкафы-купе</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">Торговая мебель</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">Кухни</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#" class="header__menu-link">Контакты</a>
                    </li>
                </ul>
            </nav>

            <a href="tel:+7345254-70-78" class="header__phone">+7 3452 54-70-78</a>
            <button class="header__button">Оставить заявку</button>
        
        </header>

        <!-- БАННЕР -->
        <div class="intro__banner banner">
            <h1 class="banner__title">Заказывайте кухню от производителя</h1>
            <p class="banner__description">Высокое качество, профессиональный подход и креативные решения</p>
            <p class="banner__subdescription">Работаем по Тюмени и Тюменской области</p>
        </div>
        <button class="intro__button button">Оставить заявку</button>
    </div>
    <main class="main">
        <!-- ВИДЫ КУХОНЬ -->
        <section class="products products_pt-160px">
            <h2 class="products__title title">Виды кухонь</h2>
            <ul class="products__list">
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/types-cuisines/linear.png" alt="пример линейной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Линейные</h3>
                    <p class="products-item__description">Такой вид кухни подойдёт в случае, если вам необходимо сэкономить место в помещении</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/types-cuisines/angular.png" alt="пример угловой кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Угловые</h3>
                    <p class="products-item__description">Угловая кухня позволит увеличить количество отсеков для посуды</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/types-cuisines/insular.png" alt="пример островной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Островные</h3>
                    <p class="products-item__description">Остров сочетает в себе систему хранения принадлежностей и обеденную зону</p>
                </li>
            </ul>
        </section>
        <!-- СТИЛИ КУХОНЬ -->
        <section class="products products_pt-80px">
            <h2 class="products__title title">Стили кухонь</h2>
            <ul class="products__list">
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/kitchen-styles/high-tech.png" alt="пример стиля Хайтек" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Хайтек</h3>
                    <p class="products-item__description">Данный стиль кухни придаст вашей квартире современный вид</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/kitchen-styles/classic.png" alt="пример стиля Классика" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Классика</h3>
                    <p class="products-item__description">Классический стиль подойдёт ценителям непревзойдённой мебели прошлых эпох</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/kitchen-styles/neo-classic.png" alt="пример стиля Неоклассика" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Неоклассика</h3>
                    <p class="products-item__description">Исполнение в стиле неоклассики — смешение античной и современной архитектуры</p>
                </li>
                <li class="products__item products-item products-item_big">
                    <div class="products-item__img-wrapper">
                        <img width="560" height="340" src="img/items-img/kitchen-styles/provence.png" alt="пример стиля Прованс" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Прованс</h3>
                    <p class="products-item__description">Этот стиль порадует истинного ценителя провинциального французского интерьера, привнеся нотки деревенского шарма, сохранив при этом изящность французского дома</p>
                </li>
                <li class="products__item products-item products-item_big">
                    <div class="products-item__img-wrapper">
                        <img width="560" height="340" src="img/items-img/kitchen-styles/japanese-style.png" alt="пример Японского стиля" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Японский стиль</h3>
                    <p class="products-item__description">Это разновидность этнических направлений в минимализме, в которой присутствуют безукоризненные цветовые комбинации и лаконичность форм в сочетании с нестандартными решениями в оформлении</p>
                </li>
            </ul>
        </section>
        <!-- ФОРМА -->
        <section class="main__wrapper-form wrapper-form">
            <h2 class="wrapper-form__title title">Оставьте заявку</h2>
            <p class="wrapper-form__description">Наши специалисты свяжутся с вами в течение одного часа</p>
            <form action="index.php" class="form">
                <input name="name" placeholder="Имя" type="text" class="form__input">
                <input name="phone" placeholder="Телефон" type="text" class="form__input">
                <button class="form__button button">Отправить</button>
            </form>
        </section>
        <!-- МАТЕРИАЛ ФАСАДА КУХОНЬ -->
        <section class="products products_pt-160px">
            <h2 class="products__title title">Материал фасада кухонь</h2>
            <ul class="products__list">
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/envelope.png" alt="пример линейной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Плёнка</h3>
                    <p class="products-item__description">Данный материал примечателен своей долговечностью, светоустойчивостью, а также огромным многообразием фактур</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/wood-shavings.png" alt="пример угловой кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Древесная стружка</h3>
                    <p class="products-item__description">Фасады из древесной стружки (мелкодисперсная фракция) хороши тем, что их можно отмыть от любой грязи</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/shipon.png" alt="пример островной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Шпон</h3>
                    <p class="products-item__description">Считается самым дорогостоящим вариантом кухонного гарнитура, так как он получается из ценных древесных пород</p>
                </li>

                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/array.png" alt="пример линейной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Массив</h3>
                    <p class="products-item__description">Кухня из массива отличается уникальностью и солидностью, а также придаёт помещению благородный внешний вид</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/plastic.png" alt="пример угловой кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Пластик</h3>
                    <p class="products-item__description">Пластик отлично вписывается во все стили дизайна интерьера и позволяет воплотить различные дизайнерские фантазии</p>
                </li>
                <li class="products__item products-item">
                    <div class="products-item__img-wrapper">
                        <img width="360" height="230" src="img/items-img/material/enamel.png" alt="пример островной кухни" class="products-item__img">
                    </div>
                    <h3 class="products-item__title">Шпон</h3>
                    <p class="products-item__description">Считается самым дорогостоящим вариантом кухонного гарнитура, так как он получается из ценных древесных пород</p>
                </li>
            </ul>
        </section>
        <!-- SERVICE -->
        <section class="main__services services services_flex-direction-row-reverse">
            <div class="services__content">
                <h2 class="services__title title">О кухнях</h2>
                <p class="services__discription">Наша компания изготавливает кухни по индивидуальному проекту, что позволит самостоятельно выбрать стиль и цвет каждого изделия.</p>
                <p class="services__discription">У нас вы найдете более 1000 цветов фартуков с фотопечатью и более 100 вариантов дверных ручек, разновидностей фурнитуры, цветов столешниц, фасадов и стеновых изделий.</p>
                <button class="services__button button">Заказать</button>
            </div>
            <div class="services__picture services__picture_about"></div>
        </section>
        <section class="services">
            <div class="services__content">
                <h2 class="services__title title">Доставка</h2>
                <p class="services__discription">Мы организуем транспортировку вашего заказа, и, при необходимости, наши сотрудники смогут сразу же произвести сборку и установку оборудования.</p>
                <p class="services__discription">Вы можете быть уверены в том, что все изделия будут перевезены в точном соответствии с установленными правилами перевозки.</p>
            </div>
            <div class="services__picture services__picture_delivery"></div>
        </section>
        <section class="services services_flex-direction-row-reverse">
            <div class="services__content">
                <h2 class="services__title title">У нас своё производство</h2>
                <p class="services__discription">Компания “Stoff” создана в апреле 2011 года инженером-технологом Дмитрием Николаевичем Важинским, имеет собственное производство и профессиональное оборудование.</p>
                <p class="services__discription">Вы можете посетить нас (Тюмень, ул.Комбинатская, д. 60, стр. 1) в любое удобное для вас время, предварительно записавшись к директору компании через сайт, либо по телефону +7 345 254 7078.</p>
                <button class="services__button button">Записаться</button>
            </div>
            <div class="services__picture services__picture_production"></div>
        </section>
        <!-- OFFER -->
        <section class="main__offer offer">
            <h2 class="offer__title title">Что мы предлагаем</h2>
            <ul class="offer__list ">
                <li class="offer__item offer-item">
                    <svg class="offer-item__icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <path d="M54.375 17.3439H48.2812V11.2502C48.2812 10.8772 48.1331 10.5195 47.8694 10.2558C47.6056 9.99207 47.248 9.84391 46.875 9.84391H37.6843C38.3213 7.13372 37.3555 4.03903 35.1341 2.14376C32.6484 0.0235993 29.3822 -0.0906585 26.25 1.78399C23.1179 -0.0910102 19.8516 0.0237164 17.366 2.14376C15.1445 4.03903 14.1788 7.13372 14.8158 9.84391H5.625C5.25204 9.84391 4.89435 9.99207 4.63063 10.2558C4.36691 10.5195 4.21875 10.8772 4.21875 11.2502V50.6252C4.21875 50.9981 4.36691 51.3558 4.63063 51.6195C4.89435 51.8833 5.25204 52.0314 5.625 52.0314H11.7188V58.1252C11.7188 58.4981 11.8669 58.8558 12.1306 59.1195C12.3944 59.3833 12.752 59.5314 13.125 59.5314H54.375C54.748 59.5314 55.1056 59.3833 55.3694 59.1195C55.6331 58.8558 55.7812 58.4981 55.7812 58.1252V18.7502C55.7812 18.3772 55.6331 18.0195 55.3694 17.7558C55.1056 17.4921 54.748 17.3439 54.375 17.3439ZM19.1914 4.28336C19.9283 3.63867 20.875 3.28485 21.8541 3.28821C22.9829 3.28821 24.2051 3.72977 25.4309 4.60821C25.6697 4.77937 25.9562 4.87142 26.25 4.87142C26.5438 4.87142 26.8303 4.77937 27.0691 4.60821C29.3557 2.96946 31.6298 2.8511 33.3086 4.28336C34.9946 5.72172 35.5649 8.20915 34.6351 10.0684C32.8766 13.5855 27.9437 16.3249 26.2492 17.1856C24.5544 16.3266 19.6281 13.5957 17.8649 10.0684C16.9351 8.20879 17.5054 5.72172 19.1914 4.28336ZM7.03125 12.6564H16.1429C19.1898 17.0567 25.3827 19.9011 25.6703 20.0311C25.8525 20.1136 26.0503 20.1563 26.2504 20.1563C26.4504 20.1563 26.6482 20.1136 26.8304 20.0311C27.1174 19.9011 33.3109 17.0567 36.3578 12.6564H45.4688V49.2189H7.03125V12.6564ZM52.9688 56.7189H14.5312V52.0314H46.875C47.248 52.0314 47.6056 51.8833 47.8694 51.6195C48.1331 51.3558 48.2812 50.9981 48.2812 50.6252V20.1564H52.9688V56.7189Z" fill="#F79C1B"></path>
                        <path d="M22.5 27.6562H37.5C37.873 27.6562 38.2306 27.5081 38.4944 27.2444C38.7581 26.9806 38.9062 26.623 38.9062 26.25C38.9062 25.877 38.7581 25.5194 38.4944 25.2556C38.2306 24.9919 37.873 24.8438 37.5 24.8438H22.5C22.127 24.8437 21.7694 24.9919 21.5056 25.2556C21.2419 25.5194 21.0938 25.877 21.0938 26.25C21.0938 26.623 21.2419 26.9806 21.5056 27.2444C21.7694 27.5081 22.127 27.6562 22.5 27.6562Z" fill="#F79C1B"></path>
                        <path d="M15 27.6562C15.7767 27.6562 16.4062 27.0267 16.4062 26.25C16.4062 25.4733 15.7767 24.8438 15 24.8438C14.2233 24.8438 13.5938 25.4733 13.5938 26.25C13.5938 27.0267 14.2233 27.6562 15 27.6562Z" fill="#F79C1B"></path>
                        <path d="M22.5 35.1562H37.5C37.873 35.1562 38.2306 35.0081 38.4944 34.7444C38.7581 34.4806 38.9062 34.123 38.9062 33.75C38.9062 33.377 38.7581 33.0194 38.4944 32.7556C38.2306 32.4919 37.873 32.3438 37.5 32.3438H22.5C22.127 32.3438 21.7694 32.4919 21.5056 32.7556C21.2419 33.0194 21.0938 33.377 21.0938 33.75C21.0938 34.123 21.2419 34.4806 21.5056 34.7444C21.7694 35.0081 22.127 35.1562 22.5 35.1562Z" fill="#F79C1B"></path>
                        <path d="M15 35.1562C15.7767 35.1562 16.4062 34.5267 16.4062 33.75C16.4062 32.9733 15.7767 32.3438 15 32.3438C14.2233 32.3438 13.5938 32.9733 13.5938 33.75C13.5938 34.5267 14.2233 35.1562 15 35.1562Z" fill="#F79C1B"></path>
                        <path d="M22.5 42.6562H37.5C37.873 42.6562 38.2306 42.5081 38.4944 42.2444C38.7581 41.9806 38.9062 41.623 38.9062 41.25C38.9062 40.877 38.7581 40.5194 38.4944 40.2556C38.2306 39.9919 37.873 39.8438 37.5 39.8438H22.5C22.127 39.8438 21.7694 39.9919 21.5056 40.2556C21.2419 40.5194 21.0938 40.877 21.0938 41.25C21.0938 41.623 21.2419 41.9806 21.5056 42.2444C21.7694 42.5081 22.127 42.6562 22.5 42.6562Z" fill="#F79C1B"></path>
                        <path d="M15 42.6562C15.7767 42.6562 16.4062 42.0267 16.4062 41.25C16.4062 40.4733 15.7767 39.8438 15 39.8438C14.2233 39.8438 13.5938 40.4733 13.5938 41.25C13.5938 42.0267 14.2233 42.6562 15 42.6562Z" fill="#F79C1B"></path>
                    </svg>
                    <h3 class="offer-item__title">Сделаем по экскизу</h3>
                    <p class="offer-item__description">Если у вас есть пожелания, изготовим кухню согласно вашим примерам</p>
                </li>
                <li class="offer__item offer-item">
                    <svg class="offer-item__icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <path d="M54.375 17.3439H48.2812V11.2502C48.2812 10.8772 48.1331 10.5195 47.8694 10.2558C47.6056 9.99207 47.248 9.84391 46.875 9.84391H37.6843C38.3213 7.13372 37.3555 4.03903 35.1341 2.14376C32.6484 0.0235993 29.3822 -0.0906585 26.25 1.78399C23.1179 -0.0910102 19.8516 0.0237164 17.366 2.14376C15.1445 4.03903 14.1788 7.13372 14.8158 9.84391H5.625C5.25204 9.84391 4.89435 9.99207 4.63063 10.2558C4.36691 10.5195 4.21875 10.8772 4.21875 11.2502V50.6252C4.21875 50.9981 4.36691 51.3558 4.63063 51.6195C4.89435 51.8833 5.25204 52.0314 5.625 52.0314H11.7188V58.1252C11.7188 58.4981 11.8669 58.8558 12.1306 59.1195C12.3944 59.3833 12.752 59.5314 13.125 59.5314H54.375C54.748 59.5314 55.1056 59.3833 55.3694 59.1195C55.6331 58.8558 55.7812 58.4981 55.7812 58.1252V18.7502C55.7812 18.3772 55.6331 18.0195 55.3694 17.7558C55.1056 17.4921 54.748 17.3439 54.375 17.3439ZM19.1914 4.28336C19.9283 3.63867 20.875 3.28485 21.8541 3.28821C22.9829 3.28821 24.2051 3.72977 25.4309 4.60821C25.6697 4.77937 25.9562 4.87142 26.25 4.87142C26.5438 4.87142 26.8303 4.77937 27.0691 4.60821C29.3557 2.96946 31.6298 2.8511 33.3086 4.28336C34.9946 5.72172 35.5649 8.20915 34.6351 10.0684C32.8766 13.5855 27.9437 16.3249 26.2492 17.1856C24.5544 16.3266 19.6281 13.5957 17.8649 10.0684C16.9351 8.20879 17.5054 5.72172 19.1914 4.28336ZM7.03125 12.6564H16.1429C19.1898 17.0567 25.3827 19.9011 25.6703 20.0311C25.8525 20.1136 26.0503 20.1563 26.2504 20.1563C26.4504 20.1563 26.6482 20.1136 26.8304 20.0311C27.1174 19.9011 33.3109 17.0567 36.3578 12.6564H45.4688V49.2189H7.03125V12.6564ZM52.9688 56.7189H14.5312V52.0314H46.875C47.248 52.0314 47.6056 51.8833 47.8694 51.6195C48.1331 51.3558 48.2812 50.9981 48.2812 50.6252V20.1564H52.9688V56.7189Z" fill="#F79C1B"></path>
                        <path d="M22.5 27.6562H37.5C37.873 27.6562 38.2306 27.5081 38.4944 27.2444C38.7581 26.9806 38.9062 26.623 38.9062 26.25C38.9062 25.877 38.7581 25.5194 38.4944 25.2556C38.2306 24.9919 37.873 24.8438 37.5 24.8438H22.5C22.127 24.8437 21.7694 24.9919 21.5056 25.2556C21.2419 25.5194 21.0938 25.877 21.0938 26.25C21.0938 26.623 21.2419 26.9806 21.5056 27.2444C21.7694 27.5081 22.127 27.6562 22.5 27.6562Z" fill="#F79C1B"></path>
                        <path d="M15 27.6562C15.7767 27.6562 16.4062 27.0267 16.4062 26.25C16.4062 25.4733 15.7767 24.8438 15 24.8438C14.2233 24.8438 13.5938 25.4733 13.5938 26.25C13.5938 27.0267 14.2233 27.6562 15 27.6562Z" fill="#F79C1B"></path>
                        <path d="M22.5 35.1562H37.5C37.873 35.1562 38.2306 35.0081 38.4944 34.7444C38.7581 34.4806 38.9062 34.123 38.9062 33.75C38.9062 33.377 38.7581 33.0194 38.4944 32.7556C38.2306 32.4919 37.873 32.3438 37.5 32.3438H22.5C22.127 32.3438 21.7694 32.4919 21.5056 32.7556C21.2419 33.0194 21.0938 33.377 21.0938 33.75C21.0938 34.123 21.2419 34.4806 21.5056 34.7444C21.7694 35.0081 22.127 35.1562 22.5 35.1562Z" fill="#F79C1B"></path>
                        <path d="M15 35.1562C15.7767 35.1562 16.4062 34.5267 16.4062 33.75C16.4062 32.9733 15.7767 32.3438 15 32.3438C14.2233 32.3438 13.5938 32.9733 13.5938 33.75C13.5938 34.5267 14.2233 35.1562 15 35.1562Z" fill="#F79C1B"></path>
                        <path d="M22.5 42.6562H37.5C37.873 42.6562 38.2306 42.5081 38.4944 42.2444C38.7581 41.9806 38.9062 41.623 38.9062 41.25C38.9062 40.877 38.7581 40.5194 38.4944 40.2556C38.2306 39.9919 37.873 39.8438 37.5 39.8438H22.5C22.127 39.8438 21.7694 39.9919 21.5056 40.2556C21.2419 40.5194 21.0938 40.877 21.0938 41.25C21.0938 41.623 21.2419 41.9806 21.5056 42.2444C21.7694 42.5081 22.127 42.6562 22.5 42.6562Z" fill="#F79C1B"></path>
                        <path d="M15 42.6562C15.7767 42.6562 16.4062 42.0267 16.4062 41.25C16.4062 40.4733 15.7767 39.8438 15 39.8438C14.2233 39.8438 13.5938 40.4733 13.5938 41.25C13.5938 42.0267 14.2233 42.6562 15 42.6562Z" fill="#F79C1B"></path>
                    </svg>
                    <h3 class="offer-item__title">Подстроимся под бюджет</h3>
                    <p class="offer-item__description">Для эскиза подберем материалы эконом, стандарт или премиум класса</p>
                </li>
                <li class="offer__item offer-item">
                    <svg class="offer-item__icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <path d="M54.375 17.3439H48.2812V11.2502C48.2812 10.8772 48.1331 10.5195 47.8694 10.2558C47.6056 9.99207 47.248 9.84391 46.875 9.84391H37.6843C38.3213 7.13372 37.3555 4.03903 35.1341 2.14376C32.6484 0.0235993 29.3822 -0.0906585 26.25 1.78399C23.1179 -0.0910102 19.8516 0.0237164 17.366 2.14376C15.1445 4.03903 14.1788 7.13372 14.8158 9.84391H5.625C5.25204 9.84391 4.89435 9.99207 4.63063 10.2558C4.36691 10.5195 4.21875 10.8772 4.21875 11.2502V50.6252C4.21875 50.9981 4.36691 51.3558 4.63063 51.6195C4.89435 51.8833 5.25204 52.0314 5.625 52.0314H11.7188V58.1252C11.7188 58.4981 11.8669 58.8558 12.1306 59.1195C12.3944 59.3833 12.752 59.5314 13.125 59.5314H54.375C54.748 59.5314 55.1056 59.3833 55.3694 59.1195C55.6331 58.8558 55.7812 58.4981 55.7812 58.1252V18.7502C55.7812 18.3772 55.6331 18.0195 55.3694 17.7558C55.1056 17.4921 54.748 17.3439 54.375 17.3439ZM19.1914 4.28336C19.9283 3.63867 20.875 3.28485 21.8541 3.28821C22.9829 3.28821 24.2051 3.72977 25.4309 4.60821C25.6697 4.77937 25.9562 4.87142 26.25 4.87142C26.5438 4.87142 26.8303 4.77937 27.0691 4.60821C29.3557 2.96946 31.6298 2.8511 33.3086 4.28336C34.9946 5.72172 35.5649 8.20915 34.6351 10.0684C32.8766 13.5855 27.9437 16.3249 26.2492 17.1856C24.5544 16.3266 19.6281 13.5957 17.8649 10.0684C16.9351 8.20879 17.5054 5.72172 19.1914 4.28336ZM7.03125 12.6564H16.1429C19.1898 17.0567 25.3827 19.9011 25.6703 20.0311C25.8525 20.1136 26.0503 20.1563 26.2504 20.1563C26.4504 20.1563 26.6482 20.1136 26.8304 20.0311C27.1174 19.9011 33.3109 17.0567 36.3578 12.6564H45.4688V49.2189H7.03125V12.6564ZM52.9688 56.7189H14.5312V52.0314H46.875C47.248 52.0314 47.6056 51.8833 47.8694 51.6195C48.1331 51.3558 48.2812 50.9981 48.2812 50.6252V20.1564H52.9688V56.7189Z" fill="#F79C1B"></path>
                        <path d="M22.5 27.6562H37.5C37.873 27.6562 38.2306 27.5081 38.4944 27.2444C38.7581 26.9806 38.9062 26.623 38.9062 26.25C38.9062 25.877 38.7581 25.5194 38.4944 25.2556C38.2306 24.9919 37.873 24.8438 37.5 24.8438H22.5C22.127 24.8437 21.7694 24.9919 21.5056 25.2556C21.2419 25.5194 21.0938 25.877 21.0938 26.25C21.0938 26.623 21.2419 26.9806 21.5056 27.2444C21.7694 27.5081 22.127 27.6562 22.5 27.6562Z" fill="#F79C1B"></path>
                        <path d="M15 27.6562C15.7767 27.6562 16.4062 27.0267 16.4062 26.25C16.4062 25.4733 15.7767 24.8438 15 24.8438C14.2233 24.8438 13.5938 25.4733 13.5938 26.25C13.5938 27.0267 14.2233 27.6562 15 27.6562Z" fill="#F79C1B"></path>
                        <path d="M22.5 35.1562H37.5C37.873 35.1562 38.2306 35.0081 38.4944 34.7444C38.7581 34.4806 38.9062 34.123 38.9062 33.75C38.9062 33.377 38.7581 33.0194 38.4944 32.7556C38.2306 32.4919 37.873 32.3438 37.5 32.3438H22.5C22.127 32.3438 21.7694 32.4919 21.5056 32.7556C21.2419 33.0194 21.0938 33.377 21.0938 33.75C21.0938 34.123 21.2419 34.4806 21.5056 34.7444C21.7694 35.0081 22.127 35.1562 22.5 35.1562Z" fill="#F79C1B"></path>
                        <path d="M15 35.1562C15.7767 35.1562 16.4062 34.5267 16.4062 33.75C16.4062 32.9733 15.7767 32.3438 15 32.3438C14.2233 32.3438 13.5938 32.9733 13.5938 33.75C13.5938 34.5267 14.2233 35.1562 15 35.1562Z" fill="#F79C1B"></path>
                        <path d="M22.5 42.6562H37.5C37.873 42.6562 38.2306 42.5081 38.4944 42.2444C38.7581 41.9806 38.9062 41.623 38.9062 41.25C38.9062 40.877 38.7581 40.5194 38.4944 40.2556C38.2306 39.9919 37.873 39.8438 37.5 39.8438H22.5C22.127 39.8438 21.7694 39.9919 21.5056 40.2556C21.2419 40.5194 21.0938 40.877 21.0938 41.25C21.0938 41.623 21.2419 41.9806 21.5056 42.2444C21.7694 42.5081 22.127 42.6562 22.5 42.6562Z" fill="#F79C1B"></path>
                        <path d="M15 42.6562C15.7767 42.6562 16.4062 42.0267 16.4062 41.25C16.4062 40.4733 15.7767 39.8438 15 39.8438C14.2233 39.8438 13.5938 40.4733 13.5938 41.25C13.5938 42.0267 14.2233 42.6562 15 42.6562Z" fill="#F79C1B"></path>
                    </svg>
                    <h3 class="offer-item__title">Гарантия 5 лет</h3>
                    <p class="offer-item__description">Наша компания занимается изготовлением мебели много лет, мы отвечаем за качество</p>
                </li>
                <li class="offer__item offer-item">
                    <svg class="offer-item__icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                        <path d="M54.375 17.3439H48.2812V11.2502C48.2812 10.8772 48.1331 10.5195 47.8694 10.2558C47.6056 9.99207 47.248 9.84391 46.875 9.84391H37.6843C38.3213 7.13372 37.3555 4.03903 35.1341 2.14376C32.6484 0.0235993 29.3822 -0.0906585 26.25 1.78399C23.1179 -0.0910102 19.8516 0.0237164 17.366 2.14376C15.1445 4.03903 14.1788 7.13372 14.8158 9.84391H5.625C5.25204 9.84391 4.89435 9.99207 4.63063 10.2558C4.36691 10.5195 4.21875 10.8772 4.21875 11.2502V50.6252C4.21875 50.9981 4.36691 51.3558 4.63063 51.6195C4.89435 51.8833 5.25204 52.0314 5.625 52.0314H11.7188V58.1252C11.7188 58.4981 11.8669 58.8558 12.1306 59.1195C12.3944 59.3833 12.752 59.5314 13.125 59.5314H54.375C54.748 59.5314 55.1056 59.3833 55.3694 59.1195C55.6331 58.8558 55.7812 58.4981 55.7812 58.1252V18.7502C55.7812 18.3772 55.6331 18.0195 55.3694 17.7558C55.1056 17.4921 54.748 17.3439 54.375 17.3439ZM19.1914 4.28336C19.9283 3.63867 20.875 3.28485 21.8541 3.28821C22.9829 3.28821 24.2051 3.72977 25.4309 4.60821C25.6697 4.77937 25.9562 4.87142 26.25 4.87142C26.5438 4.87142 26.8303 4.77937 27.0691 4.60821C29.3557 2.96946 31.6298 2.8511 33.3086 4.28336C34.9946 5.72172 35.5649 8.20915 34.6351 10.0684C32.8766 13.5855 27.9437 16.3249 26.2492 17.1856C24.5544 16.3266 19.6281 13.5957 17.8649 10.0684C16.9351 8.20879 17.5054 5.72172 19.1914 4.28336ZM7.03125 12.6564H16.1429C19.1898 17.0567 25.3827 19.9011 25.6703 20.0311C25.8525 20.1136 26.0503 20.1563 26.2504 20.1563C26.4504 20.1563 26.6482 20.1136 26.8304 20.0311C27.1174 19.9011 33.3109 17.0567 36.3578 12.6564H45.4688V49.2189H7.03125V12.6564ZM52.9688 56.7189H14.5312V52.0314H46.875C47.248 52.0314 47.6056 51.8833 47.8694 51.6195C48.1331 51.3558 48.2812 50.9981 48.2812 50.6252V20.1564H52.9688V56.7189Z" fill="#F79C1B"></path>
                        <path d="M22.5 27.6562H37.5C37.873 27.6562 38.2306 27.5081 38.4944 27.2444C38.7581 26.9806 38.9062 26.623 38.9062 26.25C38.9062 25.877 38.7581 25.5194 38.4944 25.2556C38.2306 24.9919 37.873 24.8438 37.5 24.8438H22.5C22.127 24.8437 21.7694 24.9919 21.5056 25.2556C21.2419 25.5194 21.0938 25.877 21.0938 26.25C21.0938 26.623 21.2419 26.9806 21.5056 27.2444C21.7694 27.5081 22.127 27.6562 22.5 27.6562Z" fill="#F79C1B"></path>
                        <path d="M15 27.6562C15.7767 27.6562 16.4062 27.0267 16.4062 26.25C16.4062 25.4733 15.7767 24.8438 15 24.8438C14.2233 24.8438 13.5938 25.4733 13.5938 26.25C13.5938 27.0267 14.2233 27.6562 15 27.6562Z" fill="#F79C1B"></path>
                        <path d="M22.5 35.1562H37.5C37.873 35.1562 38.2306 35.0081 38.4944 34.7444C38.7581 34.4806 38.9062 34.123 38.9062 33.75C38.9062 33.377 38.7581 33.0194 38.4944 32.7556C38.2306 32.4919 37.873 32.3438 37.5 32.3438H22.5C22.127 32.3438 21.7694 32.4919 21.5056 32.7556C21.2419 33.0194 21.0938 33.377 21.0938 33.75C21.0938 34.123 21.2419 34.4806 21.5056 34.7444C21.7694 35.0081 22.127 35.1562 22.5 35.1562Z" fill="#F79C1B"></path>
                        <path d="M15 35.1562C15.7767 35.1562 16.4062 34.5267 16.4062 33.75C16.4062 32.9733 15.7767 32.3438 15 32.3438C14.2233 32.3438 13.5938 32.9733 13.5938 33.75C13.5938 34.5267 14.2233 35.1562 15 35.1562Z" fill="#F79C1B"></path>
                        <path d="M22.5 42.6562H37.5C37.873 42.6562 38.2306 42.5081 38.4944 42.2444C38.7581 41.9806 38.9062 41.623 38.9062 41.25C38.9062 40.877 38.7581 40.5194 38.4944 40.2556C38.2306 39.9919 37.873 39.8438 37.5 39.8438H22.5C22.127 39.8438 21.7694 39.9919 21.5056 40.2556C21.2419 40.5194 21.0938 40.877 21.0938 41.25C21.0938 41.623 21.2419 41.9806 21.5056 42.2444C21.7694 42.5081 22.127 42.6562 22.5 42.6562Z" fill="#F79C1B"></path>
                        <path d="M15 42.6562C15.7767 42.6562 16.4062 42.0267 16.4062 41.25C16.4062 40.4733 15.7767 39.8438 15 39.8438C14.2233 39.8438 13.5938 40.4733 13.5938 41.25C13.5938 42.0267 14.2233 42.6562 15 42.6562Z" fill="#F79C1B"></path>
                    </svg>
                    <h3 class="offer-item__title">Проект на этапе ремонта</h3>
                    <p class="offer-item__description">Предусмотрим все нюансы и дадим рекомендации по расположению элементов кухни</p>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/style.css?' . time())}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="container">
                <div class="logo">
                    LOGO
                </div>
                <input type="checkbox" id="navcheck" role="button" title="menu">
                <label for="navcheck" class="header__label">
                    <span class="burger">
                        <span class="bar">
                            <span class="visuallyhidden">Меню</span>
                        </span>
                    </span>
                </label>
                <nav class="user__navigation">
                    <a href="{{route("courses")}}">Курсы</a>
                    <a href="#">Школы</a>
                    <a href="#">Отзывы о школах</a>
                    <a href="#">О нас</a>
                    <a href="#">Блог</a>
                </nav>
            </div>
        </header>
        <main>
            <section class="content__aft__header">
                <div class="container">
                    <div class="about__col-1 about__col">
                        <h1>Агрегатор онлайн-курсов</h1>
                        <p>Сравниваем онлайн-курсы по digital и IT. Мы — каталог-отзовик курсов. Выбирайте курсы по
                            отзывам, цене, продолжительности и другим критериям!</p>
                    </div>
                    <div class="about__col-2 about__col">
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="container">
                    <h2>Наши преимущества</h2>
                    <ul class="advantages__list">
                        <li class="advantage__item">
                            <div class="adv__ctn">
                                <div class="adv__title">
                                    <h3>Большой выбор онлайн-курсов</h3>
                                </div>
                                <p>
                                    Мы аккумулируем большое количество
                                    онлайн-курсов по различным направлениям,
                                    позволяя сравнивать их, и выбирать то,
                                    что вам нравится
                                </p>
                            </div>
                        </li>
                        <li class="advantage__item">
                            <div class="adv__ctn">
                                <div class="adv__title">
                                    <h3>Актуальная
                                        информация</h3>
                                </div>
                                <p>
                                    Мы регулярно обновляем наши базы данных, чтобы предоставлять вам только самую свежую
                                    информацию
                                    о новых курсах, старте обучения, скидках и предложениях от онлайн-школ
                                </p>
                            </div>
                        </li>
                        <li class="advantage__item">
                            <div class="adv__ctn">
                                <div class="adv__title">
                                    <h3>Скорость
                                        поиска</h3>
                                </div>
                                <p>
                                    Агрегатор курсов создан для экономии вашего времени. Вы можете с легкостью найти
                                    подходящий курс в нашем каталоге
                                    по различным фильтрам
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="footer-col">
                    <div class="logo-footer">
                        Logo
                    </div>
                    <div class="copyright">
                        &copy; 2022. Все права защищены
                    </div>
                </div>
                <div class="footer-col">
                    <div class="social-medias">
                        <div class="social-media">
                            <a href="vk.com">
                                <img src="{{asset("public/storage/icons/vk.svg")}}" alt="">
                            </a>
                        </div>
                        <div class="social-media">
                            <a href="telegram.com">
                                <img src="{{asset("public/storage/icons/tele.svg")}}" alt="">
                            </a>
                        </div>
                        <div class="social-media">
                            <a href="youtube.com">
                                <img src="{{asset("public/storage/icons/youtube.svg")}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

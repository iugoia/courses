@extends('layout.main')
@section('title')
    Главная страница
@endsection

@section('content')
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
                    <h2 class="h2">Наши преимущества</h2>
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
@endsection

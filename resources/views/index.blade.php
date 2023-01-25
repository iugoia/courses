@extends('layout.main')
@section('title')
    Главная страница
@endsection
<?php
    $schools = \Illuminate\Support\Facades\DB::table('schools')->get();
?>
@section('content')
        <main>
            <section class="content__aft__header">
                <div class="container">
                    <div class="about__col-1 about__col">
                        <h1>Агрегатор онлайн-курсов</h1>
                        <p>Сравниваем онлайн-курсы по digital и IT. Мы — каталог-отзовик курсов. Выбирайте курсы по
                            отзывам, цене, продолжительности и другим критериям!</p>
                        <a href="{{route('courses')}}" class="secondary__link">Выбрать курс</a>
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
            <section class="courses__slider">
                <div class="container">
                    <h2 class="h2">Школы</h2>
                    <div class="carousel">
                        @foreach($schools as $school)
                        <div class="carousel__item">
                            <div class="carousel__ctn">
                                <p>{{$school->name}}</p>
                                <img src="{{$school->image}}" alt="{{$school->name}}">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a href="{{route('schools')}}" class="primary__btn">Все школы</a>
                </div>
            </section>
        </main>
@endsection
@section('custom_js')
    <script defer>
        window.onload = function() {
            const screenWidth = window.screen.width;
            if (screenWidth > 1400){
                $('.carousel').slick({
                    slidesPerRow: 3,
                    rows: 2,
                    responsive: [
                        {
                            breakpoint: 478,
                            settings: {
                                slidesPerRow: 1,
                                rows: 1,
                            }
                        }
                    ]
                });
            }
            else if (screenWidth > 768 && screenWidth < 1439){
                $('.carousel').slick({
                    slidesPerRow: 2,
                    rows: 2,
                    responsive: [
                        {
                            breakpoint: 478,
                            settings: {
                                slidesPerRow: 1,
                                rows: 1,
                            }
                        }
                    ]
                });
            }
            else {
                $('.carousel').slick({
                    slidesPerRow: 1,
                    rows: 2,
                    responsive: [
                        {
                            breakpoint: 478,
                            settings: {
                                slidesPerRow: 1,
                                rows: 1,
                            }
                        }
                    ]
                });
            }
        }
    </script>
@endsection

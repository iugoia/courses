@extends('layout.main')

@section('title')
    О нас
@endsection

@section('content')
    <section class="rck">
        <div class="rck__title">
            <div class="container">
                <h1>О нас</h1>
            </div>
        </div>
        <div class="container">
            <div class="purpose">
                <div class="row">
                    <div class="purpose__schools__courses">
                        <div class="left">
                            <p class="count__courses">
                                {{$numSchools}}
                            </p>
                            <p>школ</p>
                        </div>
                        <div class="right">
                            <p class="count__courses">
                                {{$numCourses}}
                            </p>
                            <p>курсов</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    Цель нашего сайта – помочь вам выбрать лучший онлайн-курс на рынке современного образования. С нашей помощью вы сэкономите время, силы и деньги при выборе курса по дизайну, программированию или маркетингу. На сайте используются реферальные ссылки на онлайн-курсы наших партнеров, если вы решите купить курс, нам заплатят небольшое вознаграждение. Создатели курсов не влияют на формирование нашего рейтинга РЦК. Мы размещаем только те курсы, в качестве которых уверены.
                </div>
            </div>
            <div class="about__schools">
                <h2>Наши партнеры</h2>
                <ul class="schools__list__about">
                    @foreach($schools as $school)
                    <li class="about__school__item">
                        <div class="about__school__item__ctn">
                            <img src="{{$school->image}}" alt="{{$school->name}}">
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

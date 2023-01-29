<div class="courses__all">
    <div class="container">
        <div>
            <input type="text" placeholder="Курс, школа.." wire:model="searchTerm" class="form-control search-form">
            <p class="courses__gray">Обновлено: <span class="date_black">{{$date}}</span></p>
        </div>
    </div>
    <ul class="couse_list">
        <li class="head">
            <div class="container">
                <p>
                    <img src="https://choosecourse.ru/wp-content/uploads/2022/01/count.svg" alt="count">
                </p>
                <p>Курс</p>
                <div class="hidden_tip_show">
                    <a href="#" class="showme">
                        РЦК
                        <span>?</span>
                    </a>
                    <div class="tip_container">
                        <div>
                            РЦК — рейтинг ценности курса, с помощью которого мы оцениваем онлайн курсы. Для объективной оценки используется формула, основанная на классической методике сравнительного анализа, модели цена-ценность, а также конджоинт-анализ (conjoint analysis). В процессе оценки задействованы не только основные атрибуты продукта (такие как школа, цена или длительность курса и др.), но и оценки клиентов.
                        </div>
                        <div>
                            <span>8-10 баллов</span> — курс рекомендован к покупке, его ценность превышает цену
                        </div>
                        <div>
                            <span>5-7 баллов</span> — цена курса соответствует его ценности, к покупке рекомендуется
                        </div>
                        <a href="{{route('about-rck')}}" class="link__rck primary__link">Подробнее про РЦК</a>
                    </div>
                </div>
                <p>Школа</p>
                <p>Стоимость</p>
                <p>В рассрочку</p>
                <p>Длительность</p>
                <p>Ссылка на курс</p>
            </div>
        </li>
        @foreach($courses as $course)
            <li class="line0">
                <div class="container">
                    <p>{{$course->id}}</p>
                    <div>
                        <h2><a href="{{$course->link}}" target="_blank">{{$course->name}}</a></h2>
                        <a href="{{$course->link}}" target="_blank">Ссылка на курс</a>
                    </div>
                    <div>{{$course->rck}}</div>
                    <p>{{$course->school}}</p>
                    <p>
                        @if($course->price == 0)
                            <span class="free__course">
                                                Бесплатно
                                            </span>
                        @endif
                        @if ($course->price > 0)
                            <span>
                                                {{$course->price}} ₽
                                            </span>
                        @endif
                    </p>
                    <p>
                        @if ($course->price_credit > 0)
                            {{$course->price_credit}} ₽/мес
                        @endif
                    </p>
                    <p>{{$course->during}}</p>
                    <p><a href="{{$course->link}}" target="_blank">Перейти к курсу</a></p>
                </div>
            </li>
        @endforeach
    </ul>
    <div class="paginator-center">
        {{$paginator->onEachSide(1)->links()}}
    </div>
</div>

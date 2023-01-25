<div>
    <div class="allSchoolsBg">
        <div class="container">
            <ul class="schools__list">
                @foreach($schools as $school)
                <li class="school__item">
                    <div class="school__item__ctn">
                        <div class="school__item__title__image">
                            <h2>{{$school->name}}</h2>
                            <div class="school__item__image__ctn">
                                <img src="{{$school->image}}" alt="">
                            </div>
                        </div>
                        <hr>
                        <div class="school__item__content">
                            {{$school->description}}
                        </div>
                        <hr>
                        <div class="school__item__buttons">
                            <a href="{{route('school', $school->id)}}">Подробнее о школе</a>
                            <a href="{{$school->link}}" target="_blank">На сайт школы</a>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="paginator-center">
                {{$paginator->onEachSide(1)->links()}}
            </div>
        </div>
    </div>
</div>

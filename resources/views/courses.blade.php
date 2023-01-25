@extends('layout.main')
@section('title')
    Курсы
@endsection
@section('content')
        <main>
            <section class="allCourses">
                <div class="courses_block">
                    <div class="container">
                        <p class="stat_string">В рейтинге
                            <img src="https://choosecourse.ru/wp-content/themes/choosecourse2/assets/images/trip.svg">
                            <span>{{$count}} курсов</span>
                            по цене от {{$min}}р. до {{$max}}р.
                        </p>
                    </div>
                    @livewire('course-table')
                </div>
            </section>
        </main>
    @livewireScripts
@endsection

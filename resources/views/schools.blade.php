@extends('layout.main')

@section('title')
    Список всех популярных школ Рунета
@endsection

@section('content')
    <section class="rck">
        <div class="rck__title school__title">
            <div class="container">
                <h1>Школы</h1>
            </div>
        </div>
        @livewire('school-list')
    </section>
    @livewireScripts
@endsection

@extends('admin.layout.main')

@section('title')
    Вход в админ-панель
@endsection
<style>
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    button{
        margin: 0 auto !important;
        display: block !important;
    }
</style>
@section('content')
    <section class="form">
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{session()->get('error')}}
            </div>
        @endif
        <form action="{{route('admin.auth')}}" method="post" class="form-admin-panel">
            @csrf
            @method('POST')
            <label for="login">Логин</label>
            <input type="text" class="form-control mb-2" name="login" id="login">
            <label for="password">Пароль</label>
            <input type="password" class="form-control mb-4" name="password" id="password">
            <button type="submit" class="btn btn-primary">Войти</button>
            <p class="text-center mt-5">
                <a href="{{route('index')}}">Вернуться на главную страницу</a>
            </p>
        </form>
    </section>
@endsection

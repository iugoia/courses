<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('public/storage/favicon.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Регистрация</title>
</head>
<style>
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
<div class="form-admin">
    <a href="{{route('index')}}" class="mb-4 d-block text-center">Главная страница</a>
    <form method="post" action="{{route('admin.register')}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="loginHelp" placeholder="Введите логин">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
        </div>
        <button type="submit" class="btn btn-primary mt-4 d-block">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>

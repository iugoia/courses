<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="shortcut icon" href="{{asset('public/storage/favicon.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('public/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/morris.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/c3.min.css')}}">
    <title>@yield('title')</title>
</head>

    @yield('content')

</html>

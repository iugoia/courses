<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/style.css?' . time())}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
<div class="wrapper">
    <header>
        <div class="container">
            <div class="logo">
                LOGO
            </div>
            <input type="checkbox" id="navcheck" role="button" title="menu">
            <label for="navcheck" class="header__label">
                    <span class="burger">
                        <span class="bar">
                            <span class="visuallyhidden">Меню</span>
                        </span>
                    </span>
            </label>
            <nav class="user__navigation">
                <a href="{{route("index")}}">Главная</a>
                <a href="{{route("courses")}}">Курсы</a>
                <a href="{{route("schools")}}">Школы</a>
                <a href="{{route('about-rck')}}">РЦК</a>
                <a href="{{route('about')}}">О нас</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container">
            <div class="footer-col">
                <div class="logo-footer">
                    Logo
                </div>
                <div class="copyright">
                    &copy; 2022. Все права защищены
                </div>
            </div>
            <div class="footer-col">
                <div class="social-medias">
                    <div class="social-media">
                        <a href="vk.com">
                            <img src="{{asset("public/storage/icons/vk.svg")}}" alt="">
                        </a>
                    </div>
                    <div class="social-media">
                        <a href="telegram.com">
                            <img src="{{asset("public/storage/icons/tele.svg")}}" alt="">
                        </a>
                    </div>
                    <div class="social-media">
                        <a href="youtube.com">
                            <img src="{{asset("public/storage/icons/youtube.svg")}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="{{asset('public/js/script.js')}}"></script>
</body>

</html>

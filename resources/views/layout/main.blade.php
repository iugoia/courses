<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/css/style.css?' . time())}}">
    <link rel="shortcut icon" href="{{asset('public/storage/favicon.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/slick-theme.css?' . time())}}">
    @yield('css')
</head>

<div class="wrapper">
    <body>
        <header>
            <div class="container">
                <div class="logo">
                    <a href="{{route('index')}}">
                        <picture>
                            <source media="(min-width: 1400px)" srcset="{{asset('public/storage/logo.png')}}">
                            <img src="{{asset('public/storage/logo_tablet.png')}}" alt="Логотип">
                        </picture>
                    </a>
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
                    <a href="{{route("index")}}" class="link__none">Главная</a>
                    <a href="{{route("courses")}}">Курсы</a>
                    <a href="{{route("schools")}}">Школы</a>
                    <a href="{{route('about-rck')}}">РЦК</a>
                    <a href="{{route('about')}}">О нас</a>
                    @if (\Illuminate\Support\Facades\Auth::user())
                        <a href="{{route('admin.panel')}}">Dashboard</a>
                    @endif
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{asset('public/js/script.js')}}"></script>
        @yield('custom_js')
    </body>
</div>

</html>

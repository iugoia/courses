@extends('admin.layout.main')

@section('title')
    Все курсы
@endsection

@section('content')
    <?php
        use App\Models\Course;
        $courses = Course::all();
    ?>
    <?php
        $lastnum = \Illuminate\Support\Facades\DB::table('courses')->count();
    ?>
    <body class="fix-header fix-sidebar card-no-border">
    <style>
        .align-self-center:last-of-type a{
            float: right;
        }
        .topbar{
            background: #FFF;
            border: 1px solid rgba(120, 130, 140, 0.13);
        }
        .navbar-header{
            border-right: 1px solid rgba(120, 130, 140, 0.13);
        }
        .navbar-collapse{
            border: 0 !important;
        }
    </style>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <b>
                            <img src="{{asset('public/storage/favicon.png')}}" alt="homepage" class="dark-logo">
                        </b>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="fa fa-times"></i></a></form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{route('index')}}" aria-expanded="false">
                                <i class="fa-sharp fa-solid fa-house"></i>
                                <span class="hide-menu">Главная страница</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.panel')}}" aria-expanded="false">
                                <i class="fa fa-tachometer"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.courses')}}" aria-expanded="false">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <span class="hide-menu">Курсы</span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{route('admin.schools')}}" aria-expanded="false">
                                <i class="fa-sharp fa-solid fa-building-columns"></i>
                                <span class="hide-menu">Школы</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.comments')}}" aria-expanded="false">
                                <i class="fa-solid fa-comment"></i>
                                <span class="hide-menu">Отзывы</span>
                            </a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('logout')}}" aria-expanded="false">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="hide-menu">Выйти</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                @if (session()->has('success'))
                    <?php
                    $num = \Illuminate\Support\Facades\DB::table('courses')->count();
                    ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{session()->get('success')}}</h4>
                        <p>Добавлено {{$num}} курсов</p>
                    </div>
                @endif
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Курсы</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{route('parse.course')}}" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white">Обновить курсы</a>
                    </div>
                </div>
                @livewire('courses-admin')
            </div>
            <footer class="footer"> © 2023 Admin panel by odd1</footer>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a60cb12451.js" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('public/js/waves.js')}}"></script>
    <script src="{{asset('public/js/sidebarmenu.js')}}"></script>
    <script src="{{asset('public/js/custom.min.js')}}"></script>
    <script src="{{asset('public/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/js/morris.min.js')}}"></script>
    <script src="{{asset('public/js/d3.min.js')}}"></script>
    <script src="{{asset('public/js/c3.min.js')}}"></script>
    <script src="{{asset('public/js/dashboard1.js')}}"></script>
    @livewireScripts
    </body>
@endsection

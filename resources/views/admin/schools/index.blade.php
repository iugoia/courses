@extends('admin.layout.main')

@section('title')
    Все школы
@endsection

@section('content')
    <?php
    use App\Models\Course;
    $schools = \App\Models\School::all();
    ?>
    <body class="fix-header fix-sidebar card-no-border">
    <style>
        .align-self-center:last-of-type a{
            float: right;
        }
    </style>
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <div id="main-wrapper">
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{route('index')}}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Главная страница</span></a>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.panel')}}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.courses')}}" aria-expanded="false"><i
                                    class="fa fa-table"></i><span class="hide-menu">Курсы</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.schools')}}" aria-expanded="false"><i
                                    class="fa fa-smile-o"></i><span class="hide-menu">Школы</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('admin.comments')}}" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">Отзывы</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('logout')}}" aria-expanded="false"><i
                                    class="fa fa-question-circle"></i><span class="hide-menu">Выйти</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                @if (session()->has('success'))
                    <?php
                    $num = \Illuminate\Support\Facades\DB::table('schools')->count();
                    ?>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">{{session()->get('success')}}</h4>
                        <p>Добавлено {{$num}} школ</p>
                    </div>
                @endif
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Школы</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="{{route('parse.school')}}" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down text-white">Обновить школы</a>
                    </div>
                </div>
                @livewire('schools-admin')
            </div>
            <footer class="footer"> © 2023 Admin panel by odd1</footer>
        </div>
    </div>
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

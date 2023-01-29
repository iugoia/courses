@extends('admin.layout.main')

@section('title')
    Админ-панель
@endsection

@section('content')
    <?php
        use App\Models\Comment;
        use App\Models\Course;
        use App\Models\School;
        $comments = Comment::latest()->take(5)->get();
        $courses = Course::orderBy('id')->take(10)->get();
        $schools = School::inRandomOrder()->limit(7)->get();
    ?>
    <body class="fix-header fix-sidebar card-no-border">
    <style>
        .card-body:last-of-type .bg-light-info{
            width: 40px;
            height: 40px;
        }

        .card-body:last-of-type .bg-light-info img{
            width: 100%;
            height: 100%;
            object-fit: cover;
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
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                </div>
                <div>
                    <!-- Column -->
                    <div class="d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="card-title">Последние отзывы</h5>
                                    </div>
                                </div>
                                <div class="table-responsive mt-3 no-wrap">
                                    <table class="table vm no-th-brd pro-of-month">
                                        <thead>
                                        <tr>
                                            <th>Почта</th>
                                            <th>Имя</th>
                                            <th>Школа</th>
                                            <th>Комментарий</th>
                                            <th>Дата написания</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($comments as $comment)
                                            <tr>
                                                <td>
                                                    <span>{{$comment->email}}</span>
                                                </td>
                                                <td>
                                                    <h6>{{$comment->name}}</h6>
                                                </td>
                                                <td>
                                                    <?php
                                                        $school = School::find($comment->school_id);
                                                        echo $school->name;
                                                    ?>
                                                </td>
                                                <td>{{$comment->comment}}</td>
                                                <td>{{$comment->created_at}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Notification -->
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-body mailbox">
                            <h5 class="card-title">Последние добавленные курсы</h5>
                            <div class="message-center" style="height: 420px !important;">
                                @foreach($courses as $course)
                                <a href="{{$course->link}}" target="_blank">
                                    <div class="btn btn-success btn-circle">
                                        <i class="fa fa-link"></i>
                                    </div>
                                    <div class="mail-contnet">
                                        <h6 class="text-dark font-medium mb-0">{{$course->name}}</h6> <span class="mail-desc">{{$course->price}} Р</span>
                                        <span class="time">{{$course->school}}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Последние добавленные школы</h5>
                                <ul class="feeds">
                                    @foreach($schools as $school)
                                    <li>
                                        <div class="bg-light-info">
                                            <img src="{{$school->image}}" width="40" height="40" alt="">
                                        </div>
                                        <a href="{{$school->link}}" target="_blank">
                                            {{$school->name}}
                                        </a> <span class="text-muted"></span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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
    </body>
@endsection

@extends('layout.main')

@foreach($school as $item)
@section('title')
    {{$item->name}}
@endsection
@endforeach

@section('content')
    @foreach($school as $item)

    <section class="rck">
        <div class="rck__title school__title">
            <div class="container">
                <h1>{{$item->name}}</h1>
            </div>
        </div>
        <div class="allSchoolsBg schoolAllCtn">
            <div class="container">
                <div class="schools_row">
                    <div class="school_left">
                        <p class="pre-line">{{$item->description}}</p>
                        @if ($comments)
                        <div class="comments">
                            <h2>Отзывы</h2>
                            <ul class="comments_list">
                                @foreach($comments as $comment)
                                <li class="comment_item">
                                    <div class="comment_item_ctn">
                                        <p class="comment_author">{{$comment->name}}</p>
                                        <div class="date_in">
                                            <p class="comment_date">
                                                {{$comment->created_at}}
                                            </p>
                                        </div>
                                        <p class="comment_description">{{$comment->comment}}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form_container">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{session()->get('success')}}
                                </div>
                            @endif
                            <h2>Оставить отзыв</h2>
                            <form class="form" method="post" action="{{route('comment.create')}}">
                                <input type="hidden" name="school_id" value="{{$item->id}}">
                                <div class="form-item">
                                    <input type="text" class="form-input" required name="name">
                                    <label class="form-label">Имя <span class="red">*</span></label>
                                </div>
                                <div class="form-item">
                                    <input type="email" class="form-input" name="email" required>
                                    <label class="form-label">Email <span class="red">*</span></label>
                                </div>
                                <textarea class="message-form" name="comment" cols="30" rows="10" placeholder="Комментарий"></textarea>
                                <button type="submit">Отправить комментарий</button>
                            </form>
                        </div>
                    </div>
                    <div class="school_right">
                        <div class="school_card">
                            <img src="{{$item->image}}" alt="{{$item->name}}">
                            <a href="{{$item->link}}" target="_blank">На сайт школы</a>
                        </div>
                        {!! $item->right !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection

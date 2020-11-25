@extends("layouts.main")
@section('content')
    <div id="main-wrapper">
<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<div class="uc-mobile-menu-pusher">
<div class="content-wrapper">
@include("inc.header")
@foreach ($posts as $post)
<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        <img class="img-responsive top_static_article_img" src="assets/img/feature-top.jpg"
                             alt="feature-top">
                    </div>
                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">{{$post->category}}</a></div>
                        <div class="feature_article_title">
                            <form action="{{ route('delete') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$post->id}}">
                            <h1><a href="{{ route('post',['id'=>$post->id]) }}" target="_self">{{$post->title}}</a></h1>
                        </div>
                        <div class="feature_article_date"><a href="#" target="_self">Stive Clark</a>,<a href="#"
                                                                                                         target="_self">Aug
                            4, 2015</a></div>
                        <div class="feature_article_content">
                            {{$post->short_description}}
                        </div>
                        <div class="article_social">
                                <span><button class="btn btn-danger">წაშლა</button></span>
                                <span><a href="{{ route('edit',['id'=>$post->id]) }}" class="btn btn-warning"> განახლება </a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@include("inc.footer")
@endsection
@extends('frontend.master')
@section('title','Danh sách thể loại')
@section('main')
    <link rel="stylesheet" href="css/category.css">
    <div class="post">
    <div id="head">
        <br>
        <div id="name" STYLE="margin-left: 110px; color: #1f1f1f">DANH SÁCH BÀI BÁO KHOA HỌC {{$cate_name -> cate_name}}</div>
    </div>
    <div class="con" style="margin-left: 60px; margin-top: 10px">
            @foreach($post as $posts)
                <ul class="list" >
                    <li>
                        <span class="title">{{$posts -> prod_acticle}}</span>
                        <div class="info">
                            <br>
                            {{$posts -> prod_author}}, {{$posts-> prod_publisher}}, {{$posts -> prod_chapter}}, {{$posts -> prod_year}}
                        </div>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
    </div>
@stop


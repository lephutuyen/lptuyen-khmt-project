@extends('frontend.master')
@section('title','Thông tin giảng viên')
@section('main')
    <div class="post">
        <div id="head">
            <br>
            <div id="name" STYLE="margin-left: 20%;margin-bottom: 10px;">DANH SÁCH BÀI BÁO KHOA HỌC</div>
        </div>
        @foreach($categories as $cate)
            @if($cate->count_post > 0)
                <div class="con" style="margin-left: 60px">
                    <div class="tb_title">{{$cate -> cate_name}}</div>
                    <div class="tb">
                        @foreach($posts as $post)
                            @if($cate->cate_id == $post->prod_cate)
                                <ul class="list">
                                    <li>
                                        <span class="title">{{$post -> prod_acticle}}</span>
                                        <div class="info">
                                            <br>
                                            {{$post -> prod_author}}, {{$post-> prod_publisher}}, {{$post -> prod_chapter}}, {{$post -> prod_year}}
                                        </div>
                                    </li>
                                </ul>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@stop

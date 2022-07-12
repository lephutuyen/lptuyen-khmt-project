@extends('frontend.home-master')
@section('title','Trang chủ')
@section('home')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <div class="aside-widget">
{{--                <div class="section-title" style="margin-top: 20px">--}}
{{--                    <h2>Danh mục bài viết</h2>--}}
{{--                </div>--}}
{{--                <div class="header-search">--}}
{{--                    <form style="max-width: 400px; margin-left: 400px" action="{{asset('search/')}}" role="search" method="get" >--}}
{{--                        <input id="resultt" name="resultt" style="border: 0px solid lightgrey; width: 70%;"class="input" placeholder="Nhập tên bài viết cần tìm">--}}
{{--                        <button type="submit" class="search-btn" style="background-color: #0263b6; height: 45px;width: 94px">Search</button>--}}
{{--                    </form>--}}
{{--                </div>--}}

                <div class="category-widget" style="margin-top: -20px; text-align: center">
                    <ul >
                        @foreach($infocatelist as $infocate)
                            <li style="display: inline-table; font-size: 18px; font-weight: 600; padding-left: 30px"><a href="{{asset('category/'.$infocate->post_cate_id)}}">{{$infocate->post_cate_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="header-search" style="position: center; max-width: 400px; margin: 20px 400px 0 400px">
                    <form  style="align-items: center" action="{{asset('search/')}}" role="search" method="get" >
                        <input  id="resultt" name="resultt" style="border: 0px solid lightgrey; width: 70%;"class="input" placeholder="Nhập tên bài viết cần tìm">
                        <button  type="submit" class="search-btn" style="background-color: #0263b6; height: 45px;width: 94px">Search</button>
                    </form>
                </div>
            </div>
{{--            <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <ul class="navbar-nav mr-auto">--}}
{{--                        @foreach($infocatelist as $infocate)--}}
{{--                            <li><a href="{{asset('category/'.$infocate->post_cate_id)}}">{{$infocate->post_cate_name}}</a></li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                    <form class="form-inline my-2 my-lg-0" role="search" method="get" action="{{asset('search/')}}">--}}
{{--                        <input class="form-control mr-sm-2" type="text" placeholder="Nhập vào..." name="resultt" aria-label="Search">--}}
{{--                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </nav>--}}
            <!-- row -->
            <div class="row">
{{--                <div class="col-md-8">--}}
{{--                    <div class="row">--}}
{{--                        <!-- post -->--}}
{{--                        @foreach($informationAlltake1 as $info)--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="post post-thumb">--}}
{{--                                    <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 800px; height: 300px;pointer-events: none;" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>--}}
{{--                                    <div class="post-body">--}}
{{--                                        <div class="post-meta">--}}
{{--                                            <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>--}}
{{--                                            <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="post-title"><a style="background-color: #0263b6; padding: 5px 12px; text-transform: uppercase; border-radius: 2px" href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                        <!-- /post -->--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="section">
                    <!-- container -->

                    <div class="container">
                        <div class="section-title">
                            <h2>Bài viết mới nhất</h2>
                        </div>
                        <!-- row -->
                        <div class="row">

                            <!-- post -->
                            @foreach($informationAll as $info)
                                <div class="col-md-4">
                                    <div class="post">
                                        <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 383px; height: 255px" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>
                                                <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>
                                            </div>
                                            <div style="width: 100%; height:40px; overflow: hidden; text-overflow: ellipsis; text-align: justify;">
                                                <h3 class="post-title"><a href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>
                                            </div>
                                            <div style="width: 100%; height: 52.9px; overflow: hidden; text-overflow: ellipsis; margin-top: 0px; ">
                                                <p style="font-family: sans-serif; font-size: 16px; color: #3d455c;">{{$info->info_content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12" style="text-align: center; font-size: 20px; margin: 10px 0px">
                                {{$informationAll->links()}}
                            </div>
                            <!-- /post -->
                        </div>
                        <!-- /row -->
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@stop


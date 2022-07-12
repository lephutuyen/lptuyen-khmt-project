@extends('frontend.home-master')
@section('title','Chi tiết bài viết')
@section('home')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Post content -->
                <div class="col-md-8">
                    <div class="section-row">
                        <div class="main-post">
                            <h2>{{$information -> info_title}}</h2>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$information->info_cate_id)}}">{{$information->post_cate_name}}</a>
                                    <span class="post-date">{{date('d/m/Y',strtotime($information -> date_post))}}</span>
                                </div>
                            </div><br>
                            <figure class="figure-img">
                                <img style="object-fit: cover; width: 900px;height: 450px" class="img-responsive" src="{{asset('lib/storage/app/informations/'.$information -> info_image)}}">
                            </figure>
                            <p style="text-align: justify;"></p>

                            <textarea style="width:100%; height: 505px; border: none; resize: none; background-color: white; text-align: justify;" disabled>{!!strip_tags($information -> info_content)!!}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /Post content -->

                <!-- aside -->
                <div class="col-md-4">
                    <div class="header-search">
                        <form action="{{asset('search/')}}" role="search" method="get" >
                            <input id="resultt" name="resultt" style="border: 0px solid lightgrey; width: 70%;"class="input" placeholder="Nhập tên bài viết cần tìm">
                            <button type="submit" class="search-btn" style="background-color: #0263b6; height: 45px;width: 94px">Search</button>
                        </form>
                    </div>
                    <div class="aside-widget">
                        <div class="section-title" style="margin-top: 20px">
                            <h2>Danh mục bài viết</h2>
                        </div>
                        <div class="category-widget" style="margin-top: -20px">
                            <ul>
                                @foreach($infocatelist as $infocate)
                                    <li><a href="{{asset('category/'.$infocate->post_cate_id)}}">{{$infocate->post_cate_name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /catagories -->

                    <!-- post widget -->
                    <div class="aside-widget">
                        <div class="section-title" style="margin-top: 30px">
                            <h2>Bài viết mới nhất</h2>
                        </div>
                        @foreach($informationAlltake5new as $info)
                            <div class="post post-thumb">
                                <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 383px; height: 215px" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>
                                        <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>
                                    </div>
                                    <div style="width: 100%; height:74px; overflow: hidden; text-overflow: ellipsis; text-align: justify;">
                                        <h3 class="post-title"><a style="background-color: #0263b6; padding: 5px 12px; text-transform: uppercase; border-radius: 2px; text-align: center" href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /post widget -->
                </div>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@stop

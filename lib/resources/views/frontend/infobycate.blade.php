@extends('frontend.home-master')
@section('title','Bài viết theo danh mục')
@section('home')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!-- post -->
                    @foreach($informationNewTake1 as $info)
                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 796px; height: 450px" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>
                                        <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>
                                    </div>
                                    <h3 class="post-title"><a style="background-color: #0263b6; padding: 5px 12px; text-transform: uppercase; border-radius: 2px; text-align: center" href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /post -->

                    <!-- post -->
                    @foreach($informationNewTake2 as $info)
                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 383px; height: 255px " src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>
                                        <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>
                                    </div>
                                    <div style="width: 100%; height:40px; overflow: hidden; text-overflow: ellipsis; text-align: justify;">
                                        <h3 class="post-title"><a href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


{{--                    <div class="clearfix visible-md visible-lg"></div>--}}

{{--                    <!-- ad -->--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="section-row">--}}
{{--                            <a href="http://shopee.vn">--}}
{{--                                <img class="img-responsive center-block" src="./img/shopee.jpg">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ad -->--}}

                    <!-- post -->
                    @foreach($informationAll as $info)
                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 318px; height: 212px" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>
                                        <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>
                                    </div>
                                    <div style="width: 100%; height:40px; overflow: hidden; text-overflow: ellipsis; text-align: justify;">
                                        <h3 class="post-title" ><a href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>
                                    </div>
                                    <div style="width: 100%; height:89px; overflow: hidden; text-overflow: ellipsis; text-align: justify; margin-top: 10px;">
                                        <p style="font-family: sans-serif; font-size: 16px; color: #3d455c;">{{$info->info_content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- /post -->
                    <div class="col-md-12" style="text-align: center; font-size: 20px; margin: 10px 0px">
                        {{$informationAll->links()}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-search">
                    <form action="{{asset('search/')}}" role="search" method="get" >
                        <input id="resultt" name="resultt" style="border: 0px solid lightgrey; width: 76%;"class="input" placeholder="Nhập tên bài viết cần tìm">
                        <button type="submit" class="search-btn" style="background-color: #0263b6; height: 45px;width: 94px">Search</button>
                    </form>
                </div>
                <!-- catagories -->
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

            <div class="col-md-4">
                <!-- catagories -->


{{--                <!-- ad -->--}}
{{--                <div class="aside-widget text-center">--}}
{{--                    <a href="http://lazada.com" style="display: inline-block;margin: auto;">--}}
{{--                        <img class="img-responsive" src="./img/lazada.jpg" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <!-- /ad -->--}}
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<!-- section -->
{{--<div class="section">--}}
{{--    <!-- container -->--}}
{{--    <div class="container">--}}
{{--        <!-- row -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Bài viết khác</h2>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- post -->--}}
{{--            @foreach($informationOther as $info)--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="post">--}}
{{--                        <a class="post-img" href="{{asset('detail/'.$info->info_id)}}"><img style="object-fit: cover;width: 383px; height: 255px" src="{{asset('lib/storage/app/informations/'.$info->info_image)}}"></a>--}}
{{--                        <div class="post-body">--}}
{{--                            <div class="post-meta">--}}
{{--                                <a class="post-category" style="background-color: #d10024;" href="{{asset('category/'.$info->info_cate_id)}}">{{$info->post_cate_name}}</a>--}}
{{--                                <span class="post-date">{{date('d/m/Y',strtotime($info -> date_post))}}</span>--}}
{{--                            </div>--}}
{{--                            <div style="width: 100%; height:40px; overflow: hidden; text-overflow: ellipsis; text-align: justify;">--}}
{{--                                <h3 class="post-title"><a href="{{asset('detail/'.$info->info_id)}}">{{$info->info_title}}</a></h3>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            <!-- /post -->--}}
{{--        </div>--}}
{{--        <!-- /row -->--}}

{{--    </div>--}}
{{--    <!-- /container -->--}}
{{--</div>--}}
<!-- /section -->
@stop

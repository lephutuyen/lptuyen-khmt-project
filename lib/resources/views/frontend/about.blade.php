@extends('frontend.home-master')
@section('title','Đào tạo')
@section('home')

<!-- section -->

<!-- section -->
@foreach($introlist as $intro)
<div class="section layout_padding">
    <div style="margin-top: -50px" class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full blog_cont">
                    <h3 style="color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif; font-size: 22px">{{$intro -> intro_title}}</h3>
                    <p style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a; margin-top: -15px">{{$intro -> intro_text}}</p>
                </div>
            </div>
            <div class="col-md-6">
                <img style="width: 600px; height: 420px; object-fit: cover; margin-top: 40px" src="{{asset('lib/storage/app/avatar/'.$intro->intro_img)}}"/>
            </div>

        </div>
    </div>
</div>
<div class="section layout_padding" style="margin-top: -50px">
    <div style="margin-top: -50px" class="container">
        <div class="row" >
            <div class="col-md-6" >
                <div class="full blog_cont">
                    <h3 style="color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif; font-size: 22px; ">{{$intro -> intro_title_2}}</h3>
                    <p style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a; margin-top: -15px">{{$intro -> intro_text_2}}</p>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="full blog_cont">
                    <h3 style="color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif; font-size: 22px">{{$intro -> intro_title_3}}</h3>
                    <p style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a; margin-top: -15px">{{$intro -> intro_text_3}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->

<!-- section -->
{{--<div style="margin-top: -40px; margin-bottom: 20px " class="row">--}}
{{--    <div class="col-md-4" ><div class="title-box clearfix "><h2 class="title-box_primary" style="color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif;font-size: 22px;">{{$intro -> intro_title_2}}</h2></div>--}}
{{--        <p style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a">{{$intro -> intro_text_2}}</p>--}}
{{--    </div>--}}


{{--    <div class="col-md-4" style="max-width: 45%; margin-left: 100px"><div class="title-box clearfix "><h2 class="title-box_primary" style="font-size: 22px;color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif;">{{$intro -> intro_title_3}}</h2></div>--}}
{{--            <p style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a">{{$intro -> intro_text_3}}</p>--}}
{{--    </div>--}}
{{--</div>--}}
@endforeach
<!-- Gallery -->
<div style="margin-top: -150px">
<section class="page-heading" style="margin-top: -30px">
    <div class="container">
        <h2 style="color: #6ec1e4; font-weight: 600; font-family: Roboto, sans-serif; font-size: 22px; margin-right: 30px">Hoạt động ngoại khóa</h2>
    </div>
</section>
<section style="margin-top: -70px"  class="latest-news">
    <div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
        <div class="owl-two owl-carousel">
            @foreach($gallist as $gal)
            <div class="news-wrap" itemprop="event">
                <div class="news-img-wrap" itemprop="image">
                    <img style="object-fit: cover;width: 555px; height: 312px" src="{{asset('lib/storage/app/avatar/'.$gal->gal_img)}}">
                </div>
                <div style="width: 486px; height: 76px; margin-top: 30px" class="news-detail" itemprop="description">
                    <h1 style="font-family: Roboto, sans-serif; font-size: 16px; color: #7a7a7a">{{$gal -> gal_title}}</h1>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</div>
@stop

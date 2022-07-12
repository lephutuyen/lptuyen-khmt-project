@extends('frontend.home-master')
@section('title','Nghiên cứu khoa học')
@section('home')
    <section id="body" style="margin-left: 20%">
        <div class="container">
            <div class="row">
                <div id="cv" style="border: 2px solid black" class="border content">
                    @foreach($productlist->take(1) as $profile)
                    <div id="head" style="border-bottom: 1px solid #e9ecef;">
                            <img style="object-fit: cover; width: 180px; height: 180px" id="image" src="{{asset('lib/storage/app/avatar/'.$profile->prol_image)}}" class="thumbnail"><div id="name">{{$profile->prol_name}}</div>
                            <div id="position" style="margin-left: 80px">{{$profile->prol_info}}</div>
                            <table id="tb_ephone" style="margin-left: 20px">
                                <tbody><tr>
                                    <td class="dob">
                                        <img class="icon" src="nlcs/img/home/sinhnhat.jpg">{{$profile->prol_date}}</td>
                                    <td class="sex">
                                        <img class="icon" src="nlcs/img/home/gioitinh.png">{{$profile->prol_sex}}</td>
                                </tr>
                                <tr>
                                    <td class="email">
                                        <img class="icon" src="nlcs/img/home/hopthu.png">{{$profile->prol_mail}}</td>
                                    <td class="phone">
                                        <img class="icon" src="nlcs/img/home/dienthoai.png">{{$profile->prol_phone}}</td>
                                </tr>
                                <tr>
                                    <td class="email"><img class="icon" src="nlcs/img/home/quadiacau1.png">{{$profile->prol_contact}}</td>
                                </tr>
                                <tr>
                                    <td class="address" colspan="2">
                                        <img class="icon" src="nlcs/img/home/location1.jpg">{{$profile->prol_address}}</td>
                                </tr>
                                </tbody>
                            </table>

                        <div id="intro">
                        </div>
                    </div>
                    @endforeach

                    <div id="main" class="col-md-9">
                        @yield('main')
                        {{--                Wrap--}}
                    </div>
                </div>
                <!-- end main -->
            </div>

    </section>

    <div class="post">
        <div id="head" style="text-align: center;">
            <br>
            <div id="name" STYLE="text-transform: uppercase">nghiên cứu khoa học</div>
        </div>

        @foreach($productlist as $profile)
                    <div class="con" style="align-items: center; margin-left: 310px; max-width: 910px; justify-content: center">
{{--                                <div class="tb_title">{{$profile -> cate_name}}</div>--}}
                        <div class="tb">
    {{--                        @foreach($posts as $post)--}}
                            @foreach($categories as $cate)
                                @if($cate->cate_id == $profile->prod_cate)
                                    <ul class="list">
                                        <li>
                                            <span class="tb_title">{{$profile -> prod_acticle}}</span>
                                            <div class="info">
                                                <br>
                                                {{$profile -> prod_author}}, {{$profile-> prod_publisher}}, {{$profile -> prod_chapter}}, {{$profile -> prod_year}}
                                            </div>
                                        </li>
                                    </ul>
                                @endif
                            @endforeach
    {{--                        @endforeach--}}
                        </div>
                    </div>

        @endforeach
    </div>
@stop

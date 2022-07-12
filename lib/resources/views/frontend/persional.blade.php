@extends('frontend.home-master')
@section('title','Nghiên cứu khoa học')
@section('home')
    <div class="About-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aboutheading">
                        <h3>NGHIÊN CỨU<span class="orange_color"> KHOA HỌC</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="body" style="margin-left: 20%">
        <div class="container">
            <div class="row">
                <div id="cv" style="border: 2px solid black" class="border content">
                    <div id="head" style="border-bottom: 1px solid #e9ecef">
                        @foreach($profilelist as $profile)
                            <img id="image" src="{{asset('lib/storage/app/avatar/'.$profile->prol_image)}}" class="thumbnail"><div id="name">{{$profile->prol_name}}</div>
                            <div id="position" style="margin-left: 70px">{{$profile->prol_info}}</div>
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
                        @endforeach
                        <div id="intro">
                        </div>
                    </div>
                    <div id="main" class="col-md-9">
                        @yield('main')
                        {{--                Wrap--}}
                    </div>
                </div>
                <!-- end main -->
            </div>
    </section>
@stop

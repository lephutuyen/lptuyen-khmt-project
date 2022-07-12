@extends('frontend.home-master')
@section('title','Giới thiệu bộ môn')
@section('home')
    <div class="page-heading">
        <div class="container">
            <h2>danh sách giảng viên</h2>
        </div>
    </div>
    <!-- Popular courses End -->
    <div class="learn-courses" style="margin-top: -70px">
        <div class="container" >
            <div class="courses" >
                <div class="owl-one owl-carousel" style="margin-bottom: 50px">
                    @foreach($profilelist as $profile)
                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap" itemprop="image"><img src="{{asset('lib/storage/app/avatar/'.$profile->prol_image)}}" alt="courses picture"></div>
                        <a href="{{asset('gioi-thieu/detail/'.$profile->prol_id)}}" class="learn-desining-banner" itemprop="name" style="background-color: #0263b6">Nghiên Cứu Khoa Học >>></a>

                        <div class="box-body" itemprop="description">

                            <section itemprop="time">
                                <p><span>Họ tên:</span> {{$profile->prol_name}}</p>
                                <p><span>Chức vụ:</span> {{$profile->prol_info}}</p>
                                <p><span>Email:</span> {{$profile->prol_mail}}</p>
                            </section>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@stop

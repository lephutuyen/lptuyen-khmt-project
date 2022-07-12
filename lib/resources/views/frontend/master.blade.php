<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('public/layout/frontend')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Bộ môn Khoa học Máy Tính - @yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/list.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        $(function() {
            var pull        = $('#pull');
            menu        = $('nav ul');
            menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
    </script>
</head>
<body>
<!-- header -->
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}"><img style="width: 50px; height: 50px" src="img/home/logodhct.png"><span class="sr-only">(current)</span></a>
                </li>
                @foreach($categories as $cate)
                    <li style="border: none; margin-top: 10px; font-size: 20px; font-family: 'Bahnschrift' " class="menu-item"><a href="{{asset('category/'.$cate->cate_id.'/'.$cate->cate_slug.'.html')}}">{{$cate -> cate_name}}</a></li>
                @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0" role="search" method="get" action="{{asset('search/')}}">
                <input class="form-control mr-sm-2" type="text" placeholder="Nhập vào..." name="result" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </nav>
</header><!-- /header -->
<!-- endheader -->

<!-- main -->
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
                                <img class="icon" src="img/home/sinhnhat.jpg">{{$profile->prol_date}}</td>
                            <td class="sex">
                                <img class="icon" src="img/home/gioitinh.png">{{$profile->prol_sex}}</td>
                        </tr>
                        <tr>
                            <td class="email">
                                <img class="icon" src="img/home/hopthu.png">{{$profile->prol_mail}}</td>
                            <td class="phone">
                                <img class="icon" src="img/home/dienthoai.png">{{$profile->prol_phone}}</td>
                        </tr>
                        <tr>
                            <td class="email"><img class="icon" src="img/home/quadiacau1.png">{{$profile->prol_contact}}</td>
                        </tr>
                        <tr>
                            <td class="address" colspan="2">
                                <img class="icon" src="img/home/location1.jpg">{{$profile->prol_address}}</td>
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
<!-- endmain -->

<!-- footer -->
<footer id="footer">
    <div id="footer-t">
        <div class="container">
            <div class="row">
                <div id="logo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
                    <a href="{{asset('/')}}"><img style="height: 80px; width: 80px; left: 0px;" src="img/home/logodhct.png"></a>
                </div>
                <div id="about" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>About us</h3>
                    <p class="text-justify">Lê Phú Tuyền / B1812319 <br> Ngành Khoa học Máy Tính <br>
                        WEB LƯU TRỮ CÁC BÀI BÁO KHOA HỌC</p>

                </div>
                <div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Hotline</h3>
                    <p>Phone Sale: (+84) 0123 456 789</p>
                    <p>Email: tuyenb1812319@student.ctu.edu.vn</p>
                </div>
                <div id="contact" class="col-md-3 col-sm-12 col-xs-12">
                    <h3>Contact Us</h3>
                    <p>Address: ĐH. Cần Thơ khu II - Đường 3/2 <br> Ninh Kiều - Cần Thơ</p>
                    <p>Address 2: VIỆT NAM - TRÁI ĐẤT - VŨ TRỤ</p>
                </div>
            </div>
        </div>
        <div id="footer-b">
            <div class="container">
                <div class="row">
                    <div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <p>Lê Phú Tuyền / B1812319</p>
                    </div>
                    <div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
                        <p>© NIÊN LUẬN CƠ SỞ NGÀNH KHMT / K1.2021-2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- endfooter -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <base href="{{asset('public/layout/frontend/jack')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="edulab/style.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/all.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="edulab/css/jquery.rateyo.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
    <link rel="stylesheet" type="text/css" href="edulab/inner-page-style.css">
    <link rel="stylesheet" type="text/css" href="edulab/style.css">


{{--    persional.css--}}
{{--    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/css/themify-icons.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/vendor/owl-carousel/owl.carousel.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/vendor/nice-select/css/nice-select.css">--}}

{{--    <link rel="stylesheet" type="text/css" href="assets/vendor/fancybox/css/jquery.fancybox.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="assets/css/virtual.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="assets/css/topbar.virtual.css">--}}
{{--    end persional--}}

{{--    nlcs--}}
    <link rel="stylesheet" href="nlcs/css/bootstrap.min.css">
    <link rel="stylesheet" href="nlcs/css/home.css">
    <link rel="stylesheet" href="nlcs/css/list.css">
    <script type="text/javascript" src="nlcs/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
    <script type="text/javascript" src="nlcs/js/bootstrap.min.js"></script>
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
{{--    end nlcs--}}

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/gallery.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/dhct_icon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="" /></div>
</div>
<!-- end loader -->
<!-- header -->
<div id="page" class="site">
    <header class="site-header">
    <!-- header inner -->
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-3 logo_section">--}}
{{--                <div class="full">--}}
{{--                    <div class="center-desk">--}}
{{--                        <div class="logo"> <a href="{{url('/')}}"><img style="width: 100px; height: 100px" src="images/logodhct.png" alt="#"></a> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-9" >--}}
{{--                <div class="menu-area" >--}}
{{--                    <div class="limit-box">--}}
{{--                        <nav class="main-menu">--}}
{{--                            <ul class="menu-area-main">--}}
{{--                                <li class="active">--}}
{{--                                    <a href="{{asset('/')}}">Trang chủ</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{asset('/dao-tao')}}">Đào tạo</a>--}}
{{--                                </li>--}}
{{--                                <li style="font-size: 15px; font-family: sans-serif; margin: 1.5px 0px 0px 0px; padding: 15px; color: #FFFFFF; text-transform: uppercase" class="menu-parent">Đảm bảo chất lượng--}}
{{--                                    <ul class="sub-menu">--}}
{{--                                        <li><a href="#">Child</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{asset('/')}}">Luận Văn</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Giảng Dạy</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">Nghiên cứu khoa học</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="main-header" style="background-color: #0263b6">
        <div class="container" >
            <div class="logo-wrap">
                <a href="{{url('/')}}"><img style="width: 100px; height: 100px" src="images/logodhct.png" alt="#"></a>
            </div>
            <div class="nav-wrap">
                <nav class="nav-desktop" >
                    <ul class="menu-list" style="color: #FFFFFF">
                        <li> <a href="{{asset('/')}}">Trang chủ</a></li>
                        <li> <a href="{{asset('/gioi-thieu')}}">Giới thiệu</a></li>
                        <li> <a href="{{asset('/dao-tao')}}">Đào tạo</a></li>
                        <li class="menu-parent">Đảm bảo chất lượng
                            <ul class="sub-menu" style=": #FFFFFF">
                                <li><a  style="color: #595959" href="{{asset('/danh-muc-minh-chung')}}">Danh mục minh chứng AUN-QA</a></li>
                            </ul>
                        </li>
                        <li><a href="{{asset('/')}}">Luận Văn</a></li>

                    </ul>
                </nav>
                <div id="bar">
                    <i class="fas fa-bars"></i>
                </div>
                <div id="close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
    </div>
</header>
</div>
    <!-- end header inner -->
</header>

{{--master o day--}}
    @yield('home')

{{--bat dau footer--}}
<!-- footer -->
<footer style="background-color: #0263b6; bottom: 0px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="{{asset('/')}}"><img style="width: 100px; height: 100px;" src="images/logodhct.png" alt="#" /></a>
{{--                <ul class="contact_information">--}}
{{--                    <li><span><img src="images/location_icon.png" alt="#" /></span><span class="text_cont">Bộ môn Khoa học Máy Tính <br>Khoa CNTT - Truyền thông <br>Đường 3/2, Ninh Kiều, Cần Thơ</span></li>--}}
{{--                    <li><span><img src="images/mail_icon.png" alt="#" /></span><span class="text_cont">TS. Trần Nguyễn Minh Thư <br> tnmthu_AT_cit.ctu.edu.vn<br><br>TS. Trần Việt Châu <br>tvchau_AT_cit.ctu.edu.vn</span></li>--}}
{{--                </ul>--}}
{{--                <ul class="social_icon">--}}
{{--                    <li><a href="https://www.facebook.com/khmt.dhct/"><i class="fa fa-facebook"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-2 col-md-6">--}}
{{--                <div class="footer_links">--}}
{{--                    <h3>Chuyển Trang</h3>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{asset('/')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Trang Chủ</a></li>--}}
{{--                        <li><a href="{{asset('/')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Luận Văn</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-3 col-md-6">--}}
{{--            </div>--}}
        </div>
    </div>
</footer>

<!-- end footer -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/gallery.js"></script>
<!-- Scrollbar Js Files -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>

{{--Edulab--}}
<script type="text/javascript" src="edulab/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="edulab/js/lightbox.js"></script>
<script type="text/javascript" src="edulab/js/all.js"></script>
<script type="text/javascript" src="edulab/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="edulab/js/owl.carousel.js"></script>
<script type="text/javascript" src="edulab/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="edulab/js/jquery.rateyo.js"></script>
<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
<script type="text/javascript" src="edulab/js/custom.js"></script>

{{--Persional--}}
{{--<script src="assets/js/jquery-3.5.1.min.js"></script>--}}

{{--<script src="assets/js/bootstrap.bundle.min.js"></script>--}}

{{--<script src="assets/vendor/owl-carousel/owl.carousel.min.js"></script>--}}

{{--<script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>--}}

{{--<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>--}}

{{--<script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>--}}

{{--<script src="assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>--}}

{{--<script src="assets/vendor/wow/wow.min.js"></script>--}}

{{--<script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>--}}

{{--<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>--}}

{{--<script src="assets/js/google-maps.js"></script>--}}

{{--<script src="assets/js/topbar-virtual.js"></script>--}}

</body>
</html>

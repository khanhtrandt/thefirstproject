<!DOCTYPE html>
<html lang="vi">
    <head>
        <base href="{{ asset('') }}">

        <title>Di Động Zin</title>
        <meta charset="utf-8">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
            rel="stylesheet">
        <link rel="shortcut icon" href="DiDongZin/assets/img/logo-min.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="DiDongZin/assets/css/style.css">

        {{-- CSS - quản lý tài khoản ------------------------}}
        <link rel="stylesheet" type="text/css" href="DiDongZin/assets/css/user_manage.css">

        {{-- CSS - khi đang nhập thành công ------}}
        <link rel="stylesheet" type="text/css" href="DiDongZin/assets/css/style-login-success.css">

        <!--open lib animation-->
        <link rel="stylesheet" type="text/css" href="DiDongZin/assets/css/animate.css">
        <!----------------------------------------------------->
    </head>
    <body>
        @include('user.layout.header')

        @yield('content')
        
        @include('user.layout.footer')

        {{-- NAVI BOTTOM ------------------}}
        <div class="nav-bottom">
            <a href="index.html"><img src="DiDongZin/assets/img/home_100px.png"></a>
            <a onclick="show_search_bar()"><img src="DiDongZin/assets/img/search_30px.png"></a>
            <a href="checkout.html">
                <img src="DiDongZin/assets/img/shopping_cart_100px.png">
                <span class="badge">3</span>
            </a>
            <a  id="myBtn2"><img src="DiDongZin/assets/img/thumbnails_100px.png"></a>
        </div>
        <img src="DiDongZin/assets/img/slide_up_50px.png" onclick="scroll_top()" id="up-btn" alt="...">
        
        @include('user.layout.modal_index')

        @yield('script')

    </body>
    @if (Auth::check())

        {{---- script của trang chủ khi đăng nhập thành công --}}
        <script src="DiDongZin/assets/js/main-login-success.js"></script>
    @else

        {{---- script của trang chủ khi chưa đăng nhập --}}
        <script src="DiDongZin/assets/js/main.js"></script>
    @endif
     
</html>
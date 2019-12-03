<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <title>@yield('title')</title>
    <style>
        html {
            background-color: black;
        }

        * {
            margin: 0;
            padding: 0;
        }

        #all {
            position: fixed;
            top: 0px;
            left: 0px;
            right: 0px;
            z-index: 1000;
            transition: All 0.4s ease;
            -webkit-transition: All 0.4s ease;
            -moz-transition: All 0.4s ease;
            -o-transition: All 0.4s ease;
            color: white;
        }

        .navi_title {
            margin-top: 4%;
            padding-left: 50%;
            height: 60px;
        }

        .navi_title h2 {
            margin-top: 50px;
        }

        .navi {
            width: 500px;
            margin: 0 auto;
            position: relative;
        }

        .navi #navibar {
            border-bottom: 2.5px solid white;
            padding-left: 20%;
        }

        #navibar a {
            text-decoration: none;
            color: white;
            padding-right: 12%;
        }

        .navilog {
            position: fixed;
            z-index: 1001;
            margin-top: 1%;
            top: 0;
            left: 90%;
            transition: All 0.4s ease;
            -webkit-transition: All 0.4s ease;
            -moz-transition: All 0.4s ease;
            -o-transition: All 0.4s ease;
        }

        .navilog a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div id="all">
        <div class="navi_title">
            <h2>8</h2>
        </div>
        <div class="navi">
            <div id="navibar">
                <a href="/../member">조원소개</a>
                <a href="/../japan">현지학기제</a>
                <a href="/../qna">QnA</a>
            </div>
        </div>
        
    </div>
    <div class="navilog" id="navilog">
        @auth
            <a href="/../logout">로그아웃</a>
        @else
            <a href="/../login">로그인</a>
        @endauth
        <!-- @guest
            <a href="/../login">로그인</a>
        @endguest
        @auth
            <a>로그아웃</a>
        @endauth -->
    </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="js/navibar.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.4/vue.js'></script>
</body>
</html>
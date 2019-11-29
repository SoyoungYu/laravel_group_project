<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
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

        .title {
            margin-top: 4%;
            padding-left: 50%;
            height: 60px;
        }

        .title h2 {
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
        <div class="title">
            <h2>8</h2>
        </div>
        <div class="navi">
            <div id="navibar">
                <a href="/../member">조원소개</a>
                <a href="/../japan">현지학기제</a>
                <a href="">QnA</a>
            </div>
        </div>
        
    </div>
    <div class="navilog" id="navilog">
        @guest
            <a href="/../login">로그인</a>
        @endguest
        @auth
            <a href="/../logout">로그아웃</a>
        @endauth
    </div>
    <div class="container">
        @yield('content')
    </div>
    <script src="js/navibar.js" type="text/javascript"></script>
</body>
</html>
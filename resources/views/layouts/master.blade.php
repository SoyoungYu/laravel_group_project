<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .title {
            width: 100px;
            margin: 0 auto;
            height: 60px;
        }

        .title h2 {
            margin-top: 50px;
        }

        .navi {
            width: 550px;
            margin: 0 auto;
            position: relative;
        }

        .navi #navibar {
            border-bottom: 2.5px solid black;
            padding-left: 20%;
        }

        #navibar a {
            text-decoration: none;
            color: black;
            padding-right: 12%;
        }
    </style>
</head>
<body>
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
    <div class="navilog">
        <div class="login">
            <a href="/../login">로그인</a>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
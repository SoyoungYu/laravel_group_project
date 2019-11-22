<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>main</title>
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

    .body {
        margin-top: 50px;
    }

    .main {
        max-height: 700px;
        overflow: hidden;
    }

    .main img {
        width: 100%;
        max-height: initial;
        margin-top: -8%;
    }

    .mem {
        width: 100%;
    }

    .mem img {
        float: left;
    }

    .mem #mems {
        text-align: left;
    }

    .jap {
        width: 100%;
        float: right;
    }

    .jap img {
        float: left;
    }

    .jap #japs {
        float: right;
        text-align: right;
        padding-top: 200px;
    }

    .qna {
        max-height: 500px;
        overflow: hidden;
        margin-top: 30%;
    }

    .qna img {
        position: relative;
        width: 100%;
        max-height: initial;
        z-index: 1;
    }

    .qna .qnas {
        position: absolute;
        text-align: center;
        color: white;
        z-index: 2;
        width: 100%;
        margin-top: 12%;
    }

    .footer {
        margin-top: 180px;
        margin-bottom: 40px;
    }

    .footer #foot {
        text-align: center;
    }

    </style>
</head>

<body>
    <div id="app">
        <main-component></main-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
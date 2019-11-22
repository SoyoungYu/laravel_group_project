<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
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
    <div id="app1">
        <login-component></login-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
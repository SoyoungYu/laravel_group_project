<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>join</title>
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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
}

.mocean-modal-wrap {
    display: flex;
    justify-content: center;
}

.btn-group {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 540px;
}

.btn-group button {
    outline: 1px solid #000;
    transform-origin: 50% 50%;
}

/* 버튼에 마우스를 댔을 때 커질 지 말지 결정 : scale(1.1) ==> 커짐 */
.btn-group button:hover {
    transform: scale(1.0);
}

button {
    appearance: none;
    border: none;
    box-shadow: inset 1px 1px 1px rgba(255, 255, 255, 0.15), 0 1px 2px rgba(0, 0, 0, 0.2), 0 1px 1px rgba(0, 0, 0, 0.2);
    flex: 1 1 10%;
    padding: 0.875rem;
    transition: 100ms all ease-in-out;
    width: 100%;
    font-weight: 600;
    font-size: 1.7em;
    text-transform: uppercase;
    background: #424242;
    color: white;
}

button:hover {
    cursor: pointer;
    background: #1C1C1C;
}

button:focus {
    outline: none;
}

.mocean-modal-wrap {
    position: fixed;
    max-width: 320px;
    width: 100%;
    z-index: 2000;
    visibility: hidden;
    backface-visibility: hidden;
    width: 100%;
    margin: auto;
}

.mocean-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    visibility: hidden;
    opacity: 0;
    transition-duration: 500ms;
    background: #151515;
}

.mocean-show.mocean-modal-wrap {
    visibility: visible;
}

.mocean-show.mocean-modal-wrap ~ .mocean-modal-overlay {
    visibility: visible;
    opacity: 1;
}

.mocean-modal {
    transition-property: all;
    transition-duration: 500ms;
    transition-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
    animation-duration: 1000ms;
    animation-fill-mode: forwards;
    animation-timing-function: cubic-bezier(0.4, 0, 0, 1.5);
}

.slide-in-top .mocean-content {
    transform: translate3d(0, -100%, 0);
    opacity: 0;
}

.mocean-show.slide-in-top .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-right .mocean-content {
    transform: translate3d(30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-right .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-bottom .mocean-content {
    transform: translate3d(0, 30%, 0);
    opacity: 0;
}

.mocean-show.slide-in-bottom .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-in-left .mocean-content {
    transform: translate3d(-30%, 0, 0);
    opacity: 0;
}

.mocean-show.slide-in-left .mocean-content {
    transform: translate3d(0, 0, 0);
    opacity: 1;
}

.slide-out-bottom .mocean-content {
    transform: translateY(100%);
    opacity: 0;
}

.slide-out-top .mocean-content {
    transform: translateY(-100%);
    opacity: 0;
}

.slide-out-right .mocean-content {
    transform: translateX(100%);
    opacity: 0;
}

.slide-out-left .mocean-content {
    transform: translateX(-100%);
    opacity: 0;
}

.mocean-perspective {
    perspective: 600px;
}

.mocean-show {
    visibility: visible;
}

    </style>
</head>
<body>
    <div id="app4">
        <jpn-component></jpn-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
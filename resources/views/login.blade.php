@extends('layouts.master')
@section('title')
    로그인
@endsection

@section('content')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <div id="login">
        <login-component></login-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
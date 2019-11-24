@extends('layouts.master')
@section('title')
    로그인
@endsection

@section('content')
    <div id="login">
        <login-component></login-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
@extends('layouts.master')
@section('title')
    회원가입
@endsection

@section('content')
    <link href="{{ asset('css/join.css') }}" rel="stylesheet">
    <div id="join">
        <join-component></join-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
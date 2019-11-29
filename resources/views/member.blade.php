@extends('layouts.master')
@section('title')
    조원소개
@endsection

@section('content')
    <link href="{{ asset('css/member.css') }}" rel="stylesheet">
    <div id="member">
        <mem-component></mem-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="js/member.js"></script>
@endsection

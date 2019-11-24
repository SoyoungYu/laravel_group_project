@extends('layouts.master')
@section('title')
    현지학기제
@endsection

@section('content')
    <div id="japan">
        <jpn-component></jpn-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/japan.css') }}" rel="stylesheet">
    <script src="js/japan.js"></script>
@endsection
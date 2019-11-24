@extends('layouts.master')
@section('title')
    메인
@endsection

@section('content')
    <div id="main">
        <main-component></main-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection



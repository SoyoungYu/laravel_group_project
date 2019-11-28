@extends('layouts.master')
@section('title')
    QnA
@endsection

@section('content')
    <div id="qna1">
        <qna1-component></qna1-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/QnACSS.css') }}" rel="stylesheet">
@endsection
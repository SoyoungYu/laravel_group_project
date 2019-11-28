@extends('layouts.master')
@section('title')
    QnA
@endsection

@section('content')
    <div id="qna2">
        <qna2-component></qna2-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/QnACSS.css') }}" rel="stylesheet">
@endsection
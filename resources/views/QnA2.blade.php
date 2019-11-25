@extends('layouts.master')
@section('title')
    QnA2
@endsection

@section('content')
    <div id="qna2">
        <qna2-component></qna2-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/QnACSS2.css') }}" rel="stylesheet">
@endsection

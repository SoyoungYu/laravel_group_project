@extends('layouts.master')
@section('title')
    QnA3
@endsection

@section('content')
    <div id="qna3">
        <qna3-component></qna3-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/QnACSS3.css') }}" rel="stylesheet">
@endsection

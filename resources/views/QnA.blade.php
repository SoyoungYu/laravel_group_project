@extends('layouts.master')
@section('title')
    QnA
@endsection

@section('content')
    <div id="qna">
        <qna-component></qna-component> <!-- resources/app.js -->
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/QnACSS.css') }}" rel="stylesheet">
@endsection
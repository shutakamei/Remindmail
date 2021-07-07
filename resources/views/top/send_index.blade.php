@extends('top.send')

@section('title', 'Send')

@section('menubar')
    @parent
    かんりょうしました！
@endsection

@section('content')
    <p>リマインダーメールを予約しました。</p>
    {{$when}}<br>
    {{$now}}<br>
    {{$date}}<br>
@endsection

@section('footer')
    copyright 2021 kamei.
@endsection
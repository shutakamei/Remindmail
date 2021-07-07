@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    サンプルページ
@endsection

@section('content')
    <p>ここがサンプルページのコンテンツです。</p>
    <a href="/">トップページへ</a></br>
    <a href="/login">ログインページへ</a>
@endsection

@section('footer')
    copyright 2021 kamei.
@endsection
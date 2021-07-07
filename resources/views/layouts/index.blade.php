@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    <a href="/sample">よそのページへ</a><br>
    <a href="/login">ログインページへ</a>
@endsection

@section('footer')
    copyright 2021 kamei.
@endsection


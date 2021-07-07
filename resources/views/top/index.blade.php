@extends('top.top')

@section('title', 'Top')

@section('menubar')
    @parent
    トップページ
@endsection

@section('content')
    <p>ここは
    {{$user->name}}
    さんのコンテンツです。</p>
    <p>リマインダーメールを送ることが出来ます。</p>
@endsection

@section('footer')
    copyright 2021 kamei.
@endsection
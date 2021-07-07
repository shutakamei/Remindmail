@extends('top.email_verify')

@section('title', 'Top')

@section('menubar')
    @parent
    トップページ
@endsection

@section('content')
    <p>ここは
    {{$user->name}}
    さんのコンテンツです。</p>
    <p>email認証をお願いします。</p>
@endsection

@section('footer')
    copyright 2021 kamei.
@endsection
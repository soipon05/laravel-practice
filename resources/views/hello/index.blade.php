@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
    <p>index</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>
    <p>必要な記述ができます</p>
@endsection

@section('footer')
copyright 2017 
@endsection
@extends('layouts.helloapp')

@section('title', 'Index')
@section('menubar')
    @parent
    インデックスページ
    <p>index</p>
@endsection

@section('content')
    <p>ここが本文のコンテンツです</p>

    @each('components.item', $data, 'item')

@endsection

@section('footer')
copyright 2017 
@endsection
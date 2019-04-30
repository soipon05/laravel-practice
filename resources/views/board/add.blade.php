@extends('layouts.helloapp')

@section('title', 'Board.add')
@section('menubar')
    @parent
    投稿ページ
    <p>Board.add</p>
@endsection

@section('content')
    <table>
        <form action="/board/add" method="post">
            {{ csrf_field() }}
            <tr>
                <th>person id: </th>
                <td><input type="number" name="person_id" ></td>
            </tr>
            <tr>
                <th>title: </th>
                <td><input type="text" name="title" ></td>
            </tr>
            <tr>
                <th>message: </th>
                <td><input type="text" name="message" ></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>
@endsection

@section('footer')
copyright 2017 
@endsection
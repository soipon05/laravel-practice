@extends('layouts.helloapp')

@section('title', 'Person.add')
@section('menubar')
    @parent
    投稿ページ
    <p>Person.add</p>
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
                <th>person title: </th>
                <td><input type="text" name="person_title" ></td>
            </tr>
            <tr>
                <th>person message: </th>
                <td><input type="text" name="person_message" ></td>
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
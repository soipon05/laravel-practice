@extends('layouts.helloapp')

@section('title', 'Person.Index')
@section('menubar')
    @parent
    インデックスページ
    <p>Person.index</p>
@endsection

@section('content')
<p>ID: name(age)</p>
    <table>
        <tr>
            <th>Data</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 
@endsection
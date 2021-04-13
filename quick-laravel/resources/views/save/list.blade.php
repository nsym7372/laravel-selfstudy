@extends('layouts.base')

@section('main')

<table>
    <tr>
        <th>ID</th>
        <th>ISBN</th>
        <th>書名</th>
        <th>価格</th>
        <th>出版社</th>
        <th>出版日</th>
        <th></th>
        <th></th>
    </tr>


    @foreach($books as $book)

    <tr>
        <td>{{$book->id}}</td>
        <td>{{$book->isbn}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->publisher}}</td>
        <td>{{$book->published}}</td>
        <td> <a href="{{action('SaveController@edit', ['id' => $book->id])}}">編集</a> </td>
        <td> <a href="{{action('SaveController@show', ['id' => $book->id])}}">削除</a> </td>
    </tr>

    @endforeach
</table>

@endsection
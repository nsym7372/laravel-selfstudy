@extends('layouts.base')
@section('title', '詳細')

@section('main')

<form action="/save/{{$book->id}}" method="POST">
    @csrf
    @method('DELETE')

    <div class="pl-2"><span>ISBNコード：</span><br>{{$book->isbn}}</div>
    <div class="pl-2"><span>書名：</span><br>{{$book->title}}</div>
    <div class="pl-2"><span>価格：</span><br>{{$book->price}}</div>
    <div class="pl-2"><span>出版社：</span><br>{{$book->publisher}}</div>
    <div class="pl-2"><span>刊行日：</span><br>{{$book->published}}</div>
    <div class="pl-2"><input type="submit" value="削除"></div>
</form>
@endsection
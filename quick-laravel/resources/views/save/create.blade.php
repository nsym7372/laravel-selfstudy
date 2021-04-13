@extends('layouts.base')
@section('title', '書籍情報フォーム')

@section('main')

<form action="/save/create" method="POST">
    @csrf
    <div class="pl-2"><label id="isbn">ISBNコード：</label><br><input type="text" name="isbn" id="isbn" value="{{old('isbn')}}"></div>
    <div class="pl-2"><label id="title">書名：</label><br><input type="text" name="title" id="title" value="{{old('title')}}"></div>
    <div class="pl-2"><label id="price">価格：</label><br><input type="text" name="price" id="price" value="{{old('price')}}"></div>
    <div class="pl-2"><label id="publisher">出版社：</label><br><input type="text" name="publisher" id="publisher" value="{{old('publisher')}}"></div>
    <div class="pl-2"><label id="published">刊行日：</label><br><input type="text" name="published" id="published" value="{{old('published')}}"></div>
    <div class="pl-2"><input type="submit" value="送信"></div>
</form>

@endsection
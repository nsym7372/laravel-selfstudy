@extends('layouts.base');

@section('main')

<h3>{{$book->title}}のレビュー</h3>

@foreach($book->reviews as $review)
    <li>{{$review->body}}{{$review->name}}</li>
@endforeach

@endsection
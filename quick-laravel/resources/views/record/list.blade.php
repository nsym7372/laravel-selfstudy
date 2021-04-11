@extends('layouts.base')

@section('main')

@foreach($records as $record)
    <p> {{$record->title}} </p>
@endforeach

@endsection
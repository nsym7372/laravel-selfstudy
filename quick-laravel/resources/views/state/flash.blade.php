@extends('layouts.base')

@section('main')

@if(session('alert'))
    <div class="alert">{{session('alert')}}</div>
@endif


<form method="post" action="flash">
    @csrf
    <input type="text" name="name" value="{{old('name', '')}}" />
    <button type="submit">post</button>
</form>

{{$result ?? ''}}

@endsection
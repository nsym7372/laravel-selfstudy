@extends('layouts.base')
@section('title', 'レイアウト基本')

@section('main')
    @component('components.alert', ['type'=>'success'])

        @slot('alert_title')
        初めてのコンポーネント
        @endslot

        コンポーネントは普通のビューと同じように、.blade.phpファイルで定義できます

    @endcomponent
@endsection
{!! $msg !!}

{{$msg}}

<p>
    @{{$msg}}
</p>

{{--
bladeコメント
--}}

<!--
    htmlコメント
-->

<form method="post" action="methodfunc">
{{ csrf_field() }}
    <button type="submit">登録</button>
</form>
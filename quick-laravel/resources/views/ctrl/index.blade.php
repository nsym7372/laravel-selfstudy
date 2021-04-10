@foreach($values as $key => $node)
    <li>{{ $key }}: {{ $node }}</li>
@endforeach

<form method="post" action="index">
    @csrf
    <button type="submit">to redirect:100</button>
</form>

<form method="post" action="index2">
    {{ csrf_field() }}
    <button type="submit">to redirect:200</button>
</form>
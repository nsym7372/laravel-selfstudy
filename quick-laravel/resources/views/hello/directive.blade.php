@if($random < 50)
    <p>{{$random}} は50未満です</p>
@else
    <p>{{$random}} は50以上です</p>
@endif


@unless($random < 50)
    <p>50以上</p>
@endunless

@isset($msg)
    <p> 変数msgは {{$msg}} です </p>
@endisset

@empty($msg)
    <p> メッセージがありません</p>
@endempty

<p>{{$random2}}</p>
@switch($random2)
    @case(1)
        <p>1です</p>
        @break
    @case(2)
        <p>2</p>
        @break
    @default
        <p>その他</p>
@endswitch
    
<table class="table">
    <tr>
        <th>value</th>
        <th>index</th>
        <th>iteration</th>
        <th>count</th>
        <th>first</th>
        <th>last</th>
        <th>even</th>
        <th>odd</th>
        <th>depth</th>
    </tr>
    @foreach($weeks as $week)
        @continue($loop->odd)
    <tr>
        <td>{{$week}}</td>
        <td>{{$loop->index}}</td>
        <td>{{$loop->iteration}}</td>
        <td>{{$loop->count}}</td>
        <td>{{$loop->first}}</td>
        <td>{{$loop->last}}</td>
        <td>{{$loop->even}}</td>
        <td>{{$loop->odd}}</td>
        <td>{{$loop->depth}}</td>
    </tr>
    @endforeach
</table>


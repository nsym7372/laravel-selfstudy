<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <h1>{{$msg}}</h1>
    <p>   現在の日時{{date('Y 年 m 月 d 日 h:i:s')}}</p>

    <table class="table">
        <tr>
            <th>書名</th>
            <th>価格</th>
            <th>出版社</th>
            <th>刊行日</th>
        </tr>
        @foreach($records as $r)
            <tr>
                <td>{{$r->title}}</td>
                <td>{{$r->price}}</td>
                <td>{{$r->publisher}}</td>
                <td>{{$r->published}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
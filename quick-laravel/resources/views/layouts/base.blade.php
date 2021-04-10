<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
    <hr />

    @section('main')
    <p>共通View側のコンテンツです</p>
    @show
    
    <hr />
    <p>Copyright(c) xxx</p>
</body>
</html>
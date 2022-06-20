<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (Auth::check())
<p>ログイン中</P>
@else
<p>未ログイン</p> <a href ="/music/loguin">ログイン</a>|<a href="/music/kaiin">会員登録</a>
@endif
<h1>予約したい日にちを入力してください</h1>
<input type="date"><br>
<a href="/music/choose">次へ</a>
</body>
</html>
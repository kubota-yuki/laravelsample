
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kakuninn</title>
</head>
<body>
    <table>
        @csrf
        @foreach ($items as $item)
        <input type ="hidden" name="id" value="{{$item->id}}">
        <tr><th>予約日</th><th>{{$item->date}}</th></tr>
        <tr><th>スタジオ</th><th>{{$item->place}}</th></tr>
        <tr><th>時間帯</th><th>{{$item->time}}</th></tr>
        @endforeach
    </table>
</body>
</html> 

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
        <tr><th>予約日</th><th>スタジオ</th><th>時間帯</th><th>詳細</th></tr>
        @foreach ($items as $item)
        <input type ="hidden" name="id" value="{{$item->id}}">
        
        <tr><td>{{$item->date}}</td><td>{{$item->place}}<td>{{$item->time}}</td><td><a href="/edit?={{$item->id}}">{{$item->id}}の詳細</a></td></tr>
        
        @endforeach
    </table>

    <a href="/">Top</a>

</body>
</html> 
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaaa</title>
</head>
<body>
     <table>
        <tr><th>id</th><th>Name</th><th>birthday</th><th>birthplace</th><th>詳細</th><th>削除</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> birthday}}</td>
                <td>{{$item -> birthplace}}</td>
                <td> <a href="/hello/show?id={{$item->id}}">詳細</a></td>
                <td> <a href="/hello/del?id={{$item->id}}">削除</a></td>
            </tr>
        @endforeach
     </table>
     <a href="/hello/add">データの追加</a>
</body>
</html>
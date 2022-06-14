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
        <tr><th>id</th><th>Name</th><th>birthday</th><th>birthplace</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item -> id}}</td>
                <td>{{$item -> name}}</td>
                <td>{{$item -> birthday}}</td>
                <td>{{$item -> birthplace}}</td>
            </tr>
        @endforeach
     </table>
</body>
</html>
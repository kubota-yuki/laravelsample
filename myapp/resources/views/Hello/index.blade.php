<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aaaaaa</title>
</head>
<body>
    @section('content')
     <table>
        <tr><th>Name</th><th>birthday</th><th>birthplace</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item -> title}}</td>
                <td>{{$item -> title2}}</td>
                <td>{{$item -> title3}}</td>
                <td>{{$item -> title4}}</td>
            </tr>
     </table>
</body>
</html>
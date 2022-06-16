<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/hello/add" method="post">
    <table>
        @csrf
        <tr><th>id:</th><td><input type= "hidden" name = "id"></td></tr>
        <tr><th>name:</th><td><input type= "text" name = "name"></td></tr>
        <tr><th>birthday:</th><td><input type= "text" name = "birthday"></td></tr>
        <tr><th>birthplace:</th><td><input type= "text" name = "birthplace"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form>
</body>
</html>

 
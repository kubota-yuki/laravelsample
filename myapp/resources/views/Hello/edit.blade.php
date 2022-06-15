<form action="/hello/edit" method="post">
    <table>
        @csrf
        <tr><th>id</th><td><input type= "hidden" name = "id" value="{{$from->id}}"></td></tr>
        <tr><th>name</th><td><input type= "text" name = "name" value="{{$from->name}}"></td></tr>
        <tr><th>birthday</th><td><input type= "text" name = "birthday" value="{{$from->birthday}}"></td></tr>
        <tr><th>birthplace</th><td><input type= "text" name = "birthplace" value="{{$from->birthplace}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
 </form>
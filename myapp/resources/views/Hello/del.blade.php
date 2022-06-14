<form action="hello/del" method="post">
<table>
    @csrf
    <tr><th>id:</th><td>{{$item->id}}</td></tr>
    <tr><th>name:</th><td>{{$item->name}}</td></tr>
    <tr><th>birthday:</th><td>{{$item->birthday}}</td></tr>
    <tr><th>birthplace:</th><td>{{$item->birthplace}}</td></tr>
    <tr><th></th><td><input type="submit" value = "del"></td></tr>
</table>
</form>
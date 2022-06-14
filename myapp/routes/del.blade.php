<from action="hello/del" method="post">
<table>
    @csrf
    <tr><th>id:</th><th>{{$item->id}}</th></tr>
    <tr><th>name:</th><th>{{$item->name}}</th></tr>
    <tr><th>birthday:</th><th>{{$item->birthday}}</th></tr>
    <tr><th>birthplace:</th><th>{{$item->birthplace}}</th></tr>
    <tr><th><input type="submit" value = "del"></tr></th>
</table>
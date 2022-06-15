<form action="/hello/del" method="post">
<table>
    @csrf
    <tr><th>id:</th><td><input type= "hidden" name = "id" value="{{$form->id}}"></td></tr>
    <tr><th>name:</th><td>{{$form->name}}</td></tr>
    <tr><th>birthday:</th><td>{{$form->birthday}}</td></tr>
    <tr><th>birthplace:</th><td>{{$form->birthplace}}</td></tr>
    <tr><th></th><td><input type="submit" value = "del"></td></tr>
</table>
</form>
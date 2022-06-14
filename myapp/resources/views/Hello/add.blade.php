@section('content')
 <from action="hello/add" method="post">
    <table>
        @csrf
        <tr><th>id</th><td><input type= "text" name = "id"></td></tr>
        <tr><th>name</th><td><input type= "text" name = "name"></td></tr>
        <tr><th>birthday</th><td><input type= "text" name = "birthday"></td></tr>
        <tr><th>birthplace</th><td><input type= "text" name = "birthplace"></td></tr>
    </table>
 </from>
 @endsection
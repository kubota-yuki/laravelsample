@section('content')
 <from action="hello/add" method="post">
    <table>
        @csrf
        <tr><th>title</th><td><input type= "text" name = "title"></td></tr>
        <tr><th>title2</th><td><input type= "text" name = "title2"></td></tr>
        <tr><th>title3</th><td><input type= "text" name = "title3"></td></tr>
        <tr><th>title4</th><td><input type= "text" name = "title4"></td></tr>
    </table>
 </from>
 @endsection
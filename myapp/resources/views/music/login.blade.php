@section('title','ユーザー認証')

@section('menuber')
   @parent
   ユーザー認証ページ
@endsection

@section('content')
<p>{{$message}}</p>
    <from action="/music/loguin" method="post">
    <table>
        @csrf
        <tr><th>mail: </th><td><input type="text"
               name="email"></td></tr>
        <tr><th>pass: </th><td><input type="password"
               name="password"></td></tr>
        <tr><th></th><td><input type="submit"
               value="send"></td></tr>
    </table>
    </form>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

               
               

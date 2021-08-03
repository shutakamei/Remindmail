<html>
<head>
    <title>@yield('title')</title>
    <style>
    body {font-size:16px; color:#999; margin: 5px; }
    h1 { font-size:50px; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4px; }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">こんにちは、{{$user->name}}さん</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr>
    <div class="content">
    @yield('content')
    </div>
    <form action="review">
        <dt>日時</dt>
        <dd><input type="datetime-local" name="date" value=""></dd>
        <dt>件名</dt>
        <dd><input type="text" name="content" value=""></dd>
        <dt>メールアドレス</dt>
        <dd>{{$user->email}}</dd>
        <button>Send</button>
　　</form>
</body>
<footer>
    @yield('footer')
    <style>
    footer { font-size: 6px; position: absolute; margin: 0; bottom: 0; padding: 0;}
    </style>
</footer>
</html>

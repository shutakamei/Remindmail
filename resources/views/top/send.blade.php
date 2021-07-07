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
    <h2 class="menutitle">ありがとう、{{$user->name}}さん</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr>
    <div class="content">
    @yield('content')
    </div>
</body>
<footer>
    @yield('footer')
    <style>
    footer { font-size: 6px; position: absolute; margin: 0; bottom: 0; padding: 0;}
    </style>
</footer>
</html>
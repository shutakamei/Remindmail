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
    <h2 class="menutitle">メニュー</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr>
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>

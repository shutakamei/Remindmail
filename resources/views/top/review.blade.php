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
    <h2 class="menutitle">ご確認ください。</h2>
    <ul>
        <li>@show</li>
    </ul>
    <hr>
    <div class="content">
    @yield('content')
    </div>
    <div>
        <dt>日時</dt>
        <dd>{{date('Y-m-d\ H:i', strtotime($date))}}</dd>
        <dt>件名</dt>
        <dd>{{$content}}</dd>
        <dt>メールアドレス</dt>
        <dd>{{$user->email}}</dd>
    </div>
    <form action="/send" method="post">
        <input type="hidden" name="date" value="<?= $date ?>">
        <input type="hidden" name="content" value="<?= $content ?>">
        <input type="hidden" name="email" value="<?= $user->email ?>">
        <button type="submit">Send</button>
        @csrf
    </form>
</body>
<footer>
    @yield('footer')
    <style>
    footer { font-size: 6px; position: absolute; margin: 0; bottom: 0; padding: 0;}
    </style>
</footer>
</html>
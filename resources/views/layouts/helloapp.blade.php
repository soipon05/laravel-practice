<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="css/app.css" />
  <script src="main.js"></script>
  <style>
    body { font-size: 16px; color: #999; margin: 5px;}
    h1 { font-size: 50px; text-align: right; color: #f6f6f6; margin: -20px 0 -30px 0; letter-spacing: -4px; }
    ul { font-size: 12px; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle { font-size: 14px; font-weight: bold; margin: 0;}
    .content { margin: 10px; }
    .footer { text-align: right; font-size: 10px; margin: 10px; border-bottom: 1px solid #ccc;}
    th { background-color: #999; color: #fff; padding: 5px 10px; }
    td { border: 1px solid #aaa; color: #999; padding: 5px 10px; }
  </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <h2 class="menutitle">※メニュー</h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
    <div class="content">
    @yield('content')
    </div>
    <div class="footer">
    @yield('footer')
    </div>
</body>
</html>
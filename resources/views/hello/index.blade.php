<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hello/Index</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;foreachディレクティブの例</p>
    <ol>
    @for ($i = 1;$i < 100;$i++)
    @if ($i % 2 == 1)
        @continue
    @elseif ($i <= 10)
    <li>No, {{$i}}</li>
    @else
        @break
    @endif
    @endfor
    </ol>
</body>
</html>
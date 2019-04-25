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
  @isset ($msg)
  <p>こんにちは、{{$msg}}さん</p>
  @else
  <p>何か書いてください</p>
  @endisset
  <form action="/hello" method="post">
      {{ csrf_field() }}
      <input type="text" name="msg">
      <input type="submit">
  </form>
</body>
</html>
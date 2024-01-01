<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if ($count === 5)
    {{$count}} = 5
  @elseIf($count > 5)
    {{$count}} > 5
  @else
    {{$count}} < 5
  @endif
</body>
</html>
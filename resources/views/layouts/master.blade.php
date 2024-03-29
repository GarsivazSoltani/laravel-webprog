<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Garsivaz | @section('title') Index Page @show</title></head>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
<body>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
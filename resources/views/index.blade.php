<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{-- @for($i=0; $i<10; $i++)
    The Current values is {{$i}} <br>
  @endfor --}}
  
  {{-- @foreach ($lists as $list)
    <li>{{$list}}</li>
  @endforeach --}}

  {{-- @forelse ($lists as $list)
    <li>{{$list}}</li>
  @empty
    <p>No List</p>
  @endforelse --}}

  @php
    $i = 5;
  @endphp
  @while ($i < 10)
    The current value is {{$i}} <br>
    @php
      $i++;
    @endphp
  @endwhile
</body>
</html>
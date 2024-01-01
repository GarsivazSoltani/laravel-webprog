@php
    $class = isset($class) ? $class : 'btn-default';
@endphp
<button class="{{$class}}">
  {{$slot}}
</button>
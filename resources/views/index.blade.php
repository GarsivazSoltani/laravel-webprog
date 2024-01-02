@extends('layouts.master')

@section('title', 'Index')

@section('content')
  <div id="main">
    <h2>Index Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem consequatur quos velit illum ducimus at voluptatem perferendis obcaecati mollitia culpa. Est minima atque harum nostrum consectetur. Sit quia voluptatum aperiam!</p>
    <a href="{{route('about')}}">About Page</a><br>
    <a href="{{route('course', ['course' => 'Laravel', 'id' => '65'])}}">Course Page</a>
  </div>
@endsection
@extends('layouts.master')

@section('title', 'Index')

@section('content')
  <div id="main">
    <h2>Index Page</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem consequatur quos velit illum ducimus at voluptatem perferendis obcaecati mollitia culpa. Est minima atque harum nostrum consectetur. Sit quia voluptatum aperiam!</p>
  </div>
  {{-- @component('components.button', ['title' => 'ارسال', 'class' => 'btn'])
    
  @endcomponent --}}
  @component('components.button', ['title' => 'ارسال'])
      {{-- @slot('title')
          <u>Submit1</u>
      @endslot --}}
      <u>Submit1</u>
  @endcomponent

  @btn
    <u>Submit2</u>
  @endbtn

  @bold(Garsivaz)
  
@endsection
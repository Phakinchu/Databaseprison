@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find jail from ID" </p>
  <h1>Jail</h1><br>
  <h2>"Jail ID :  " {{$id_jail}}</h2>
  <h2>"Name :  " {{$name}}</h2>
</div>
@endsection
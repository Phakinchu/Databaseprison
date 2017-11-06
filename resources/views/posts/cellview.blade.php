@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find cell from ID" </p>
  <h1>Activity</h1><br>
  <h2>"Cell ID :  " {{$id_cell}}</h2>
  <h2>"Area  :  " {{$id_area}}</h2>
</div>
@endsection
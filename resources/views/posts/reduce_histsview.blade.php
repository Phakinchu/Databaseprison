@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find penalty reduction history ID" </p>
  <h1>Activity</h1><br>
  <h2>"History ID :  " {{$id_reduce}}</h2>
  <h2>"Cause  :  " {{$cause}}</h2>
  <h2>"Reduction   :  " {{$reduce}}</h2>
  <h2>"Date   :  " {{$date}}</h2>
  <h2>"Prisoner ID   :  " {{$id_prisoner}}</h2>
</div>
@endsection
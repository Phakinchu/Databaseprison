@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By ID"</h1>
  <p class="lead blog-description"> "Find behavioral history from ID" </p>
  <h1>Activity</h1><br>
  <h2>"History ID :  " {{$id_behav}}</h2>
  <h2>"Guilt  :  " {{$guilt}}</h2>
  <h2>"Punishment   :  " {{$punishment}}</h2>
  <h2>"Start date  :  " {{$start_date}}</h2>
  <h2>"End date   :  " {{$end_date}}</h2>
  <h2>"Prisoner ID : " {{$id_prisoner}}"</h2>
</div>
@endsection
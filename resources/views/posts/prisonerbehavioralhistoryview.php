@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find prisonerbehavioralhistory From CODE" </p>
  <h1>prisonerbehavioralhistory</h1><br>
  <h2>"crime :  " {{$crime}}</h2>
  <h2>"guilt  :  " {{$guilt}}</h2>
  <h2>"start_date   :  " {{$start_date}}</h2>
  <h2>"end_date       :  " {{$end_date}}</h2>
  <h2>"prisonerID   :  " {{$id_prisoner}}</h2>

</div>
@endsection
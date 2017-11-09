@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Visithistory From CODE" </p>
  <h1>Visithistory</h1><br>
  <h2>"name  :  " {{$name}}</h2>
  <h2>"item   :  " {{$item}}</h2>
  <h2>"contract  :  " {{$contract_detail}}</h2>
  <h2>"datetime    :  " {{$Datetime}}</h2>
  <h2>"prisoner     :  " {{$id_prisoner}}</h2>
  <h2>"officer   :  " {{$id_officer}}</h2>

</div>
@endsection
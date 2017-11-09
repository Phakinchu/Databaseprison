@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Freeprisonhistory From CODE" </p>
  <h1>Freeprisonhistory</h1><br>
  <h2>"freedate  :  " {{$freedate}}</h2>
  <h2>"fname   :  " {{$fname}}</h2>
  <h2>"lname  :  " {{$lname}}</h2>
  <h2>"typefreedom    :  " {{$type_of_freedom}}</h2>
  <h2>"prisoner     :  " {{$id_prisoner}}</h2>

</div>
@endsection
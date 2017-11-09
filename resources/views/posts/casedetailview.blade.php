@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Search By CODE"</h1>
  <p class="lead blog-description"> "Find Casedetail From CODE" </p>
  <h1>Casedetail</h1><br>
  <h2>"section  :  " {{$case_section}}</h2>
  <h2>"punishment   :  " {{$punishment}}</h2>
  <h2>"duration   :  " {{$case_duration}}</h2>
  <h2>"officer   :  " {{$id_officer}}</h2>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Area {{$area->id_area}}"</h1>
  <p class="lead blog-description"> "Show Detail In Area" </p>
  <h1>Area Detail</h1><br>
  <h2>"Level             :  " {{$level}}</h2>
  <h2>"NumberOfPrisoner  :  " {{$numprisoner}}</h2>
  <h2>"NumberOfOfficer   :  " {{$numberofficer}}</h2>
  <h2>"JailId       :  " {{$jailid}}</h2>
  <!-- <h2>"gender    :  " {{$gender}}</h2>
  <h2>"Level     :  " {{$id_level}}</h2>
  <h2>"Officer   :  " {{$id_officer}}</h2> -->
</div>
@endsection
@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	
  background: url("http://bkk.cosprize.jp/uploads/2016/10/a04c5957072472d4d565c800f1fd669f.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1{
	color: white;
}
</style>

<div class="blog-header">
  <h1 class="blog-title"><center>Database Prisoner</center></h1>
  <h3></h3>
  <h3><a href="/prisoners">Prisoners</a></h3>
  <h3><a href="/levels">Levels</a></h3>
  <h3><a href="/officers">Officers</a></h3>
  <h3><a href="/visithistories">Visithistories</a></h3>
  <h3><a href="/activities">Activities</a></h3>
  <h3><a href="/freeprisonhistories">Freeprisonhistories</a></h3>
  <h3><a href="/prisonerbehavioralhistories">Prisonerbehavioralhistories</a></h3>
  <h3><a href="/prisonereducepunishmenthistories">Prisonereducepunishmenthistories</a></h3>
  <h3><a href="/casedetails">Casedetails</a></h3>
  <h3><a href="/cells">Cells</a></h3>
  <h3><a href="/areas">Areas</a></h3>
  <h3><a href="/relatives">Relative</a></h3>
@endsection


@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://orig00.deviantart.net/522c/f/2007/178/d/3/sunset_twilight_clouds_sky_05_by_fantasystock.jpg");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div align = "right">
<form action="/activity/search" method="post">Search By Activity Name <input type="text" name="id" value=""><input type="submit"  value="go"></form>
</div>
<div class="blog-header" align = "center">
  <h1 class="blog-title">Activity List</h1>
	 <!-- <p class="lead blog-description">All activities</p> -->
</div>	
  <table class="table table-hover">
	<tr> 
  	<td><center>ActivityID</center></td>
  	<td><center>activity</center></td>
  	<td><center>duration(hrs)</center></td>
		<td><center>นักโทษที่ทำกิจกรรม</center></td>
		<td><center>แดนที่ทำกิจกรรม</center></td>
		<td><center>แก้ไขนักโทษ</center></td>
		<td><center>แก้ไขแดนที่จัด</center></td>
  	<td><center>Edit</center></td>
  	<td><center>Delete</center></td>
    </tr>
		@foreach ($posts as $post)
    <tr>
		<td><center>{{$post->id_activity}}</center></td>
		<td><center>{{$post->activity}}</center></td>
		<td><center>{{$post->act_duration}}</center></td>
		<td><center>@foreach ($post->prisoners as $prisoner)
			ID Prisoner :{{$prisoner->id_prisoner}}
			<br>
		@endforeach 
		</center></td>
		<td><center>@foreach ($post->areas as $area)
			ID Area :{{$area->id_area}}
			<br>
		@endforeach 
		</center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/edit_activity_prison_supervisepage">Click</a></center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/edit_activity_area_supervisepage">Click</a></center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/editpage">Click</a></center></td>
		<td><center><a href="/activity/{{$post->id_activity}}/delete">Click</a></center></td>
	</tr>
  @endforeach
	</table><br>
  <center><form action="/activities/insertpage"><input type="submit" value="Add Activity"></form></center>
	<div align = "right"><form action="/admin"><input type="submit" value="back"></form></div>
</div>
@endsection

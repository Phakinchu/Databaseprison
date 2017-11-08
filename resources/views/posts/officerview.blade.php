@extends('layouts.app')

@section('content')
<div class="blog-header">
	<h1 class="blog-title">{{$title}}</h1>
	<p class="lead blog-description">Search value = {{$officer->id_officer}}</p>
	
		<table border=2>
			<tr>
				<td><center>{{$officer->id_officer}}</center></td>
				<td><center>{{$officer->name}}</center></td>
				<td><center>{{$officer->position}}</center></td>
				<td><center>{{$officer->gender}}</center></td>
				<td><center>{{$officer->dob}}</center></td>
			</tr>
		</table><br>
</div>
@endsection
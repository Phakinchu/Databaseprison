@extends('layouts.app')

@section('content')
<style>

body{
	color: blue;
	
  background: url("https://thumbs-prod.si-cdn.com/DJIUXbGowKdgM_Hj1o_mAdNzuPU=/1072x720/filters:no_upscale()/https://public-media.smithsonianmag.com/filer/19/ec/19ecd23c-95e3-4d48-9e2d-49b9e4a3688e/42-20916028.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
h1{
	color: blue;
}
h3{
	color: blue;
}
</style>
<div align = "center">
<h1 class="blog-title"></h1><br>
	<form action='/login/save' method="post">
	<table>
		<tr>
			<h2><td height = "30">id_login : </td></h2>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
		<h3><td height = "30">password : </td></h3>
			<td><input type="text" name="pwd"></td>
		</tr>
		</table><br>
		
			<input type="submit" name="submit" value="Add">
		
		<br><br>
	</form>
	<form action="/">
    <input type="submit" value="Back">
	</form>
</div>
@endsection

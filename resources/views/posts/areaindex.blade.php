@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://i0.wp.com/thechurchofstjude.org/wp-content/uploads/2017/01/Sunrise-Wallpapers.jpg");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
<div class="blog-header">
  <h1 class="blog-title"> "Area"</h1><br>
  <!-- <p class="lead blog-description"> "Area page" </p> -->
  @foreach ($areas as $area)
      <?php $countprisonum = 0; ?>  
      <?php $countofficernum = 0; ?> 
      <h3><center>area {{$area->id_area}} </center></h3>
      <h3>ID cell :
      @foreach ($area->cells as $cell)
        <font size="5">{{$cell->id_cell}} </font>  
      @endforeach
      </h3>

      @foreach ($area->cells as $cell)
         @foreach ($cell->prisoners as $prisoner)
          <?php $countprisonum++ ; ?>  
         @endforeach
      @endforeach
 
      @foreach ($area->officers as $officer)
      <?php $countofficernum++ ; ?>  
      @endforeach

      <h3>number of prisoner in this area : {{$countprisonum}}</h3>
      <h3>number of officer in this area : {{$countofficernum}}</h3>
      <br>
  @endforeach

  <form action="/areas/insertpage"><input type="submit" value="Add Area"></form>

</div>
@endsection
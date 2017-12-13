@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Cell"</h1><br>
  <!-- <p class="lead blog-description"> "cell page" </p> -->
  @foreach ($cells as $cell)
    <br>
    <div style="border: 5px solid #000000;">
    <font size="6"><center> Cell number {{$cell->id_cell}}</center></font>
    <h3>Area : {{$cell->id_area}}</h3>
    <h3>officer name :
      @foreach ($cell->areas->officers as $officer)
        {{$officer->name}}  
      @endforeach
    </h3>
    <h3> Prisoner name : 
    @foreach ($cell->prisoners as $prisoner)
        {{$prisoner->fname}} 
      @endforeach
    <br>
    </div>
  @endforeach
  


</div>
@endsection



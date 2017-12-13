@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> <center>"Cell"</center></h1><br>
  <!-- <p class="lead blog-description"> "cell page" </p> -->
  @foreach ($cells as $cell)
    <br>
    
      <font size="6"><center> Cell Number {{$cell->id_cell}}</center></font>
      <div style="border: 5px solid #000000;">
      <h3>Area : {{$cell->id_area}}</h3>
      <h3> 
      Prisoner name :
      @foreach ($cell->prisoners as $prisoner)
       // {{$prisoner->fname}}  
       
      @endforeach
        </h3>
      <h3>Officer Name :
        @foreach ($cell->areas->officers as $officer)
        // {{$officer->name}}  
        
        @endforeach
      </h3>
    
      
      <br>
    </div><br>
  @endforeach
  


</div>
@endsection



@extends('layouts.app')

@section('content')
<div class="blog-header">
  <h1 class="blog-title"> "Area"</h1>
  <p class="lead blog-description"> "Area page" </p>

  @foreach ($posts as $post)
    <h3>{{$id_area}}</h3>
      <table border=2><tr> 
      <td><center></center></td>
      <td><center>officer</center></td>
      <td><center>prisoner</center></td>
      </tr>
      <tr>
        <td><center>{{$prisoner}}</center></td>
        <td><center>{{$Officer}}</center></td>
        </tr>
      </table><br> 

  @endforeach
      

</div>
@endsection
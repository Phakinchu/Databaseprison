@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://upic.me/i/op/free-grunge-watercolor-stock-background-images.jpg");
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
</div>
@foreach ($posts as $post)
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
        <style>
        .panel-info>.panel-heading{
        color: #333;
        background: silver;
        border-color: hsla(89, 43%, 51%, 0.3);
        }
        </style>

          <div class="panel panel-info">
            <div class="panel-heading">
              <center><h3 class="panel-title">CaseDetail</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
             

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>section :</td>
                        <td>{{$post->case_section}}</td>
                      </tr>
                      <tr>
                        <td>Punishment :</td>
                        <td>{{$post->punishment}}</td>
                      </tr>
                      <tr>
                        <td>Duration :</td>
                        <td>{{$post->case_duration}}</td>
                      </tr>
                      <tr>
                        <td>prisoner :</td>
                        <td>{{$post->id_prisoner}}</td>
                      </tr>
                      <tr>
                        <td>officer :</td>
                        <td>@foreach ($post->officers as $officer)
                         {{$officer->name}}
                          <br>
                         @endforeach
                         </td>
                      </tr>                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection
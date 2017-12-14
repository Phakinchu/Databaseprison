@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://st.depositphotos.com/1813957/4505/i/950/depositphotos_45055461-stock-photo-pastel-blue-distressed-background.jpg");
	background-repeat: repeat;
    background-size: 120% 120%;
}
h1{
	color: black;
}
h3{
	color: black;
}
</style>
</div>@foreach ($posts as $post)
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
              <center><h3 class="panel-title">Prisoner</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="PrisonerPic" src="https://scontent-sea1-1.cdninstagram.com/t51.2885-15/s480x480/e35/17661847_384200371965942_5552834505418473472_n.jpg?ig_cache_key=MTQ4MjAwMTA4Mjk1ODc3NTk3NQ%3D%3D.2" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>FirstName :</td>
                        <td>{{$post->fname}}</td>
                      </tr>
                      <tr>
                        <td>LastName :</td>
                        <td>{{$post->lname}}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>{{$post->address}}</td>
                      </tr>
                         <tr>
                             <tr>
                        <td>Date Of Birth</td>
                        <td>{{$post->dob}}</td>
                      </tr>
                        <tr>
                        <td>Gender</td>
                        <td>{{$post->gender}}</td>
                      </tr>
                      <tr>
                        <td>Level</td>
                        <td>{{$post->id_level}}</td>
                      </tr>
                      <tr>
                        <td>Score</td>
                        <td>{{$post->scorepri}}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <span class="pull-right">
                        
                            <a href="/prisoner/{{$post->id_prisoner}}/editpage" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/prisoner/{{$post->id_prisoner}}/delete" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        <br><br><div align = "right"><form action="/prisoners"><input type="submit" value="back"></form></div>
                        </span>
                    </div>
              
          </div>
        </div>
      </div>
    </div>
    
    @endforeach
    
@endsection
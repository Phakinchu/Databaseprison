@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4fPZOZUvLQs3al3K9iDjTgy97SH1xvgMbbL3Yj7jMAgh-S8Ca");
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
              <center><h3 class="panel-title">Officer</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="officer" src="https://dl2.olozmp3.net/artwork/225788490.jpg" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>FirstName :</td>
                        <td>{{$post->name}}</td>
                      </tr>                   
                        <tr>
                        <td>Date Of Birth</td>
                        <td>{{$post->dob}}</td>
                      </tr>
                        <tr>
                        <td>Gender</td>
                        <td>{{$post->gender}}</td>
                      </tr>
                      <tr>
                        <td>Position</td>
                        <td>{{$post->position}}</td>
                      </tr>
                      <tr>
                        <td>Area</td>
                        <td>{{$post->id_area}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                    
                        <span class="pull-right">
                            <a href="/officer/{{$post->id_officer}}/editpage" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/officer/{{$post->id_officer}}/delete" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            <br><br><div align = "right"><form action="/officers"><input type="submit" value="back"></form></div>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection
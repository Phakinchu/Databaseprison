@extends('layouts.app')

@section('content')
</div>
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
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="Officer" src="https://dl2.olozmp3.net/artwork/225788490.jpg" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Officer Name :</td>
                        <td>{{$name}}</td>
                      </tr>
                      <tr>
                        <td>Gender :</td>
                        <td>{{$gender}}</td>
                      </tr>
                      <tr>
                        <td>Date Of Birth</td>
                        <td>{{$dob}}</td>
                      </tr>
                      <tr>
                        <td>Position</td>
                        <td>{{$position}}</td>
                      </tr>
                      <tr>
                        <td>Area</td>
                        <td>{{$area}}</td>
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
@endsection
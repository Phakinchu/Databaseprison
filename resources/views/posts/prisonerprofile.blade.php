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
              <center><h3 class="panel-title">Prisoner</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="PrisonerPic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>FirstName :</td>
                        <td>{{$fname}}</td>
                      </tr>
                      <tr>
                        <td>LastName :</td>
                        <td>{{$lname}}</td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td>{{$address}}</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Date Of Birth</td>
                        <td>{{$dob}}</td>
                      </tr>
                        <tr>
                        <td>Gender</td>
                        <td>{{$gender}}</td>
                      </tr>
                      <tr>
                        <td>Level</td>
                        <td>{{$level}}</td>
                      </tr>
                      <tr>
                        <td>Score</td>
                        <td>{{$score}}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
@endsection
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
              <center><h3 class="panel-title">Reduce Punishment</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="PrisonerPic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Cause :</td>
                        <td>{{$cause}}</td>
                      </tr>
                      <tr>
                        <td>Time :</td>
                        <td>{{$time}}</td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td>{{$date}}</td>
                      </tr>
                         <tr>
                             <tr>
                        <td>prisoner</td>
                        <td>{{$prisoner}}</td>
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
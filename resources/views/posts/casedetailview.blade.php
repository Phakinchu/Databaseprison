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
              <center><h3 class="panel-title">CaseDetail</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
             

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>section :</td>
                        <td>{{$case_section}}</td>
                      </tr>
                      <tr>
                        <td>Punishment :</td>
                        <td>{{$punishment}}</td>
                      </tr>
                      <tr>
                        <td>Duration :</td>
                        <td>{{$duration}}</td>
                      </tr>
                      <tr>
                        <td>prisoner :</td>
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
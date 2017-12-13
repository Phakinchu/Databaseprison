@extends('layouts.app')

@section('content')
<style>
body{
	color: black;
	background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgd4DzuIsH-3mmh_AUM6uYqH8ZwJDlj901J664jhu3qrCPRVGj");
	background-repeat: no-repeat;
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
              <center><h3 class="panel-title">Level</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
              

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Level :</td>
                        <td>{{$lv}}</td>
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
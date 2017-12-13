@extends('layouts.app')

@section('content')
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
              <center><h3 class="panel-title">Visit History</h3></center>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Visitor Name :</td>
                        <td>{{$post->name}}</td>
                      </tr>
                      <tr>
                        <td>Item :</td>
                        <td>{{$post->item}}</td>
                      </tr>
                      <tr>
                        <td>Contract</td>
                        <td>{{$post->contract_detail}}</td>
                      </tr>
                         <tr>
                             <tr>
                        <td>DateTime</td>
                        <td>{{$post->Datetime}}</td>
                      </tr>
                        <tr>
                        <td>Prisoner Name</td>
                        <td>{{$post->prisoners->fname}}</td>
                      </tr>
                      <tr>
                        <td>Officer supervise</td>
                        <td>{{$post->officers->name}}</td>
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
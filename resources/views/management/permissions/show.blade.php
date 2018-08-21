@extends('main')
@section('content')
 <div id="page-wrapper">
 	     <div class="row">
                 <div class="col-lg-12 ">
                    <h1 class="page-header">{{$permissions->name}}'s Details</h1>

                    <p>
                  <strong>{{$permissions->display_name}}</strong> <small>{{$permissions->name}}</small>
                  <br>
                  {{$permissions->description}}
                </p>
                </div>
         </div>
              
 </div>
@endsection
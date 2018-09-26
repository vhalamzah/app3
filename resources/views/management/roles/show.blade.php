@extends('main')
@section('content')
<div id="page-wrapper">
	    <div class="row page-header">
      <div class="col-lg-10">
        <h1 class="title">{{$role->display_name}}<small><em>({{$role->name}})</em></small></h1>
        <h5>{{$role->description}}</h5>
      </div>
      <div class="col-lg-2 roleBtn">
        <a href="{{route('roles.edit', $role->id)}}" class="btn btn-primary btn-large"><i class="fa fa-user-plus "></i> Edit this Role</a>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg-12"> 
    		<div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h4>Permissions assigned to  this  User(<em>{{$role->name}}</em>)</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <ul>
                              @foreach ($role->permissions as $r)
                             <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                              @endforeach
                           </ul>              
             </div>            
    	</div>
    </div>
	
</div>
</div>
@endsection
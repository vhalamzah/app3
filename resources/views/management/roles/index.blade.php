@extends('main')
@section('content')
<div id="page-wrapper"> 
 <div class="row  page-header">
                 <div class="col-lg-10 ">
                    <h1>Manage Roles</h1>
                </div>
                <div class="col-lg-2">
                	 <a href="{{url(' management/roles/create')}}" class="btn  btn-block btn-primary createBtn ">Create  New Roles</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>                
            <!-- /.row -->
            	<div class="row">
            		@foreach($roles as $role)
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="content">
                                     <h3 class="title">{{$role->display_name}}</h3>
                                     <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                                     <p>
                                       {{$role->description}}
                                     </p>
                                     </div>
                                </div>

                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                            	<a href="{{route('roles.show', $role->id)}}" class="button is-primary is-fullwidth"><span class="pull-left ">View Role</span></a>
                                <a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-fullwidth"><span class="pull-right">Edit  Role</span></a>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                       
</div>

</div>
@endsection



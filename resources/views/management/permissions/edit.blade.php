@extends('main')
@section('content')
<div id="page-wrapper">
   <div class="row page-header">
                 <div class="col-lg-10 ">
                    <h1>View & Edit Permission details</h1>
                </div>
                <div class="col-lg-2  ">
                	 <a href="{{route('permissions.edit', $permission->id)}}" class="btn  btn-block btn-primary createBtn "><i class="fa fa-permission-plus m-r-10"></i> Edit Permission</a>
                </div>
                <!-- /.col-lg-12 -->
                
                </div> 
             <div class="row">
                	<div class="col-lg-8 ">
                	<form action="{{route('permissions.update', $permission->id)}}"  method="POST">
                		{{csrf_field()}}
                		{{method_field('PUT')}}

                		 <div class="form-group" >
                              <label>Name(Display Name)</label>
                              <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Enter Name" value="{{$permission->display_name}}">
                        </div>

                         <div class="form-group" >
                              <label>Slug</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Slug" disabled value="{{$permission->name}}">
                         </div>

                         <div class="form-group" v-if="permissionType == 'basic'">
                               <label>Description</label>
                               <input type="text" name="description" id="description" value="{{$permission->description}}" class="form-control" placeholder="Describe what this permission does">
                         </div>

                         <button type="submit" class="btn btn-primary">Save Changes</button>
                	</form>              	
                </div>
             </div>
 </div>
@endsection
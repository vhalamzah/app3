@extends('main')
@section('content')
<div id="page-wrapper">
	<div class="row page-header">
	<div class="col-lg-10 ">
		<h1>Create Roles</h1>
    </div>	
	</div>	
	<form action=" {{route('roles.store')}}" method="POST">
		{{csrf_field()}}
	    <div class="row">
    	<div class="col-lg-12"> 
    		<div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Role Details:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                     	 <div>
                     	 	<div class="form-group">
                  <label>Name(User Readable )</label>
                  <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Enter Name" value="{{old('display_name')}}">
               </div>

                                 
             </div>  
              <div class="form-group">
                  <label>Slug(Fixed SLug Name)</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Slug" value="{{old('name')}}">
                </div> 
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Describe what this permission does">
                </div>   
                <input type="hidden" :value="permissionsSelected" name="permissions">      
    	</div>
    </div>
	
</div>
</div>
 <div class="row">
    	<div class="col-lg-12"> 
    		<div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Permissions For This Role:
                        </div>
                        <!-- /.panel-heading -->
            <div class="panel-body">
            	      <div class="form-group">
                      @foreach($permissions as $permission)
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" v-model="permissionsSelected" :value="{{$permission->id}}"> {{$permission->display_name}} <em>({{$permission->description}})</em>
                          </label>

                      </div>
                      @endforeach
                    </div>
                    <button class="btn btn-primary pull-right ">Create new Role</button>
             </div>            
    	</div>
    </div>
	 
</div>
</form>
</div>
@endsection

@section('scripts')
  <script>

  var app = new Vue({
    el: '#wrapper',
    data: {
      permissionsSelected: []
    }
  });

  </script>
@endsection
@extends('main')
 @section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create New Permission</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Your new permission Here
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="POST">
                                    	{{csrf_field()}}

                                         <div class="form-group" v-if="permissionType == 'basic'">
                                            <label class="radio-inline">                                                    
                                               <input type="radio"  id="permissionType" v-model="permissionType" name= "permission_type"value="basic">Basic permission
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" v-model="permissionType" value="crud">CRUD Permission
                                            </label>                                        
                                        </div>


                                        <div class="form-group" v-if="permissionType == 'basic'">
                                            <label>Name(Display Name)</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                         <div class="form-group" v-if="permissionType == 'basic'">
                                            <label>Slug</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Slug">
                                        </div>
                                        <div class="form-group" v-if="permissionType == 'basic'">
                                            <label>Description</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Describe what this permission does">
                                        </div>

                                         <div class="form-group" v-if="permissionType == 'crud'">
                                            <label for="resource" >Resource</label>
                                            <input type="text" class="form-control" name="resource" id="resource" v-model="resource" placeholder="The name of the resource">
                                        </div>

                                        <div class="row" v-if="permissionType == 'crud'">
                                        	<div class="col-lg-6">
                                        	   <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="crudSelected" value="create">Create
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="crudSelected" value="read">Read
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="crudSelected" value="update">Update
                                                </label>
                                            </div>  
                                             <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" v-model="crudSelected" value="delete">Delete
                                                </label>
                                            </div>                                            
                                                 </div>
                                        		
                                        	</div>
                                        	
                                                 <div class="row" v-if="permissionType == 'crud'">
                                                 	     	<div class="col-lg-12">
                                        		<div class="table-responsive">
                                <table class="table " v-if="resource.length >= 3 && crudSelected.length > 0">
                                    <thead>
                                        <tr>
                                          
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="item in crudSelected" >
                                            
                                            <td v-text="crudName(item)" ></td>
                                            <td v-text="crudSlug(item)"></td>
                                            <td v-text="crudDescription(item)"></td>
                                        </tr>
                           
                                    </tbody>
                                </table>
                            </div>
                                        	</div>
                                                 </div>
                                   

                                        </div>
                                        <button type="submit" class="btn btn-primary">Create Permission</button>
                                       
                                    </form>
                                </div>
                            
                                <!-- /.col-lg-6 (nested) -->

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

 @endsection

 @section('scripts')
  <script>
  	var app = new Vue({
  		el:'#wrapper',
  		data:{
  			 permissionType: 'basic',
  			 resource:'',
  			 crudSelected: ['create','read','update','delete']
  		},
  		methods:{
  			        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudSlug: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        }

  		}

  	});
  </script>
 @endsection
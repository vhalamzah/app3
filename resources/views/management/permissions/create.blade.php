@extends('main')
 @section('content')
<div id="page-wrapper">

  <div class="row">
    <div class="col-lg-12">
       <h1 class="page-header">Create New Permission</h1>
    </div>
  </div>

  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
       Add Your new permission Here
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-6"> 
            <form action= " {{ route('permissions.store') }} " method="POST">
              {{csrf_field()}}

              <div class="form-group" >
               <label class="radio-inline">                                                    
                   <input type="radio" v-model="permissionType" name= "permission_type" id="permission_type" value="basic" >Basic permission
                </label>
                <label class="radio-inline">
                    <input type="radio" v-model="permissionType"  name= "permission_type" id="permission_type" value="crud">CRUD Permission
               </label>                                        
              </div>
                   
               <div class="form-group" v-if="permissionType == 'basic'">
                  <label>Name(Display Name)</label>
                  <input type="text" name="display_name" id="display_name" class="form-control" placeholder="Enter Name">
               </div>

                <div class="form-group" v-if="permissionType == 'basic'">
                  <label>Slug</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Slug">
                </div>

                <div class="form-group" v-if="permissionType == 'basic'">
                    <label>Description</label>
                    <input type="text" name="description" id="description" class="form-control" placeholder="Describe what this permission does">
                </div>

                 <div class="form-group" v-if="permissionType =='crud'" >
                    <label> resource</label>
                    <input type="text" name="resource" id="resource"  v-model="resource" class="form-control" placeholder="the name of the resource"> 
                 </div>

                 <div class="row "  v-if="permissionType == 'crud'" >
                   <div class="col-lg-12">
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

                        
                    </div>
                   </div>
                   <input type="hidden" name="crud_selected" id="" :value="crudSelected">
                   
             

                   <div class="col-lg-12">
                   <table class="table" v-if="resource.length >= 3 && crudSelected.length > 0">
                <thead>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudSelected">
                    <td v-text="crudName(item)"></td>
                    <td v-text="crudSlug(item)"></td>
                    <td v-text="crudDescription(item)"></td>
                  </tr>
                </tbody>
              </table>
                 </div>
                 </div>

                




        
            <button type="submit" class="btn btn-primary">Create Permission</button>
            </form>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div> 
  @endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#wrapper',
      data: {
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update']
      },
      methods: {
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

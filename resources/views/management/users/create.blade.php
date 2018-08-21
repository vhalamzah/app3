@extends('main')
@section('content')
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create New User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Your new Users Here
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="{{route('users.store')}}" method="POST">
                                    	{{csrf_field()}}
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                        </div>
                                         <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="Password" v-if="!auto_password" name="password" id="password" class="form-control" placeholder="Manually Give A Password To this User">
                                        </div>
                                         <div class="form-group">
                                     
                                            <div class="checkbox">
                                                <label>
                                                    <input v-model="auto_password"type="checkbox" value=""> Auto Generate Password
                                                </label>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Create New User</button>
                                        <a href="{{route('users.index')}}" type="submit" class="btn btn-danger">Cancel</a>
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
      el: '#wrapper',
      data: {
        auto_password: true,
        
      }
    });
  </script>

@endsection
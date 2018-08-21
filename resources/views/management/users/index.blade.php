@extends('main')

@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <div class="col-lg-10 ">
                    <h1>Manage Users</h1>
                </div>
                <div class="col-lg-2">
                	 <a href="{{url('management/users/create')}}" class="btn  btn-block btn-primary createBtn "><i class="fa fa-user-plus m-r-10"></i> Create New User</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>                
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            All Rainbow&Tech Solutions Users Are Listed Below
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Date Created</th>
                                        <th>View & Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($users as $user)
                                     <tr>
                                       <th>{{$user->id}}.</th>
                                       <td>{{$user->name}}</td>
                                       <td>{{$user->email}}</td>
                                       <td>{{$user->created_at->toFormattedDateString()}}</td>
                                       <td >
                                       <a href="{{route('users.show', $user->id)}}" class="btn btn-link btn-sm">View Info</a>
                                       <a href="{{route('users.edit', $user->id)}}"  class="btn btn-link btn-sm">Edit Info</a>
                                       </td>
                                     </tr>
                                   @endforeach
                                    
                                  
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="text-center"> {{ $users->links()}}</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

  
        </div>
        <!-- /#page-wrapper -->

@endsection
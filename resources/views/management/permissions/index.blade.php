@extends('main')

@section('content')
 <div id="page-wrapper">
            <div class="row">
                 <div class="col-lg-10 ">
                    <h1>Manage permissions</h1>
                </div>
                <div class="col-lg-2">
                	 <a href="{{url('management/permissions/create')}}" class="btn  btn-block btn-primary createBtn "><i class="fa fa-permission-plus m-r-10"></i>  New permission</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>                
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            All Rainbow&Tech Solutions permissions Are Listed Below
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table class="table is-narrow is-fullwidth">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($permissions as $permission)
              <tr>
                <th>{{$permission->display_name}}</th>
                <td>{{$permission->name}}</td>
                <td>{{$permission->description}}</td>
                <td >
                                       <a href="{{route('permissions.show', $permission->id)}}" class="btn btn-link btn-sm">View Info</a>
                                       <a href="{{route('permissions.edit', $permission->id)}}"  class="btn btn-link btn-sm">Edit Info</a>
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
                    <div class="text-center"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

  
        </div>
        <!-- /#page-wrapper -->

@endsection
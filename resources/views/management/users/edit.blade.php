@extends('main')
@section('content')
  <div id="page-wrapper">
  	<div class="row" >
  		<div class="col-lg-12">
  			<h1 class="page-header">Edit {{$user->name}}'s Details</h1>
  		</div>
  	</div>

  	<div class="row">
  		<div class="col-lg-12">
  			<div class="panel-heading">
  				Edit User here
  			</div>
  			<div class="panel-body">
  				<div class="row">
  					<div class="col-lg-6">
                                    <form action="{{route('users.update', $user->id)}}" method="POST">
                                    	{{method_field('PUT')}}
                                    	{{csrf_field()}}
                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{$user->name}}">
                                        </div>
                                         <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{$user->email}}">
                                        </div>
                                      <!--  <div class="form-group">
                                            <label for="password">Password:</label>
                                            <input type="Password" v-if="!auto_password" name="password" id="password" class="form-control" placeholder="Manually Give A Password To this User">
                                        </div>-->
                                        <div class="form-group">

                                            <label  for="password">Password:</label>
                                            <p>
                                                     <input type="text" class="input form-control" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user">
                                                    </p>  

                                            <div class="radio">
                                               <label  for="password">
                                            <input type="radio"
                                                   name="password_options"
                                                   id="password_options"
                                                   value="keep" 
                                                   v-model="password_options">
                                                     Do Not Change Password                                                     
                                           </label>
                                                
                                            </div>

                                            <div class="radio">
                                               <label  for="password">
 

                                            <input type="radio"
                                                   name="password_options"
                                                   id="password_options"
                                                   value="manual" 
                                                   v-model="password_options">

                                                     Manually Set New Password
                                                      
                                           </label>
                                                
                                            </div>

                                            <div class="radio">
                                                <label  for="password">

                                            <input type="radio"
                                                   name="password_options"
                                                   id="password_options"
                                                   value="auto" 
                                                   v-model="password_options">

                                                    Auto-Generate New Password    

                                           </label>

                                               
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Update </button>
                                        <a href="{{route('users.show', $user->id)}}" type="submit" class="btn btn-danger">Cancel</a>
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
        password_options: 'keep',
        

      }
    });

  </script>
@endsection


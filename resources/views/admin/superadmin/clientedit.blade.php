@extends('admin/layouts/app')

@section('main-content')
	
	<div class="content-wrapper">

		<section class="content-header">
	      <h1>
	        Edit Client
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="{{ route('client')}}">Clients</a></li>
	        <li class="active">Edit Client</li>
	      </ol>
	    </section>

	    <section class="content">
	    	<div class="row">

	    		<div class="col-md-12">
		          	<div class="box box-info">
			            <div class="box-header with-border">
			              <h3 class="box-title">Client Profile</h3>
			            </div>
			            
			            <form class="form-horizontal" action="{{ route('client.update',$user->id) }}" method="POST">

			            	{{ csrf_field() }}

			            	{{ method_field('PUT') }}

			              	<div class="box-body">

			              		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
				                  <label for="name" class="col-sm-2 control-label">Name</label>

				                  <div class="col-sm-10">
				                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $user->name }}" required>

				                    @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
				                  </div>
				                </div>

				                <div class="form-group {{ $errors->has('organization') ? ' has-error' : '' }}">
				                  <label for="organization" class="col-sm-2 control-label">Organization</label>

				                  <div class="col-sm-10">
				                    <input type="text" name="organization" class="form-control" id="organization" placeholder="Organization" value="{{ $user->organization }}" required>

				                    @if ($errors->has('organization'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('organization') }}</strong>
	                                    </span>
	                                @endif
				                  </div>
				                </div>

				                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
				                  <label for="email" class="col-sm-2 control-label">Email</label>

				                  <div class="col-sm-10">
				                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $user->email }}" required>

				                    @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
				                  </div>
				                </div>

				                <div class="form-group">
				                  <label for="role" class="col-sm-2 control-label">Role</label>

				                  	<div class="col-sm-10">
				                     	<select id="role" name="role" class="form-control">
					                  		<option value="2">Staff</option>
					                  		<option value="3">Admin</option>
					                  	</select>
				                  	</div>
				                </div>
			              	</div>

				            <div class="box-footer">
				                <button type="submit" class="btn btn-success">Update</button>
				                <a href="{{ route('client') }}" class="btn btn-warning">Cancel</a>
				            </div>	              
			            </form>
		          	</div>
        		</div>
	    	</div>
	    </section>		
	</div>
@endsection
@extends('admin/layouts/app')

@section('main-content')

	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
		  	<div class="row">
			    <div class="col-md-12">
			      	<div class="box">
				        <div class="box-header with-border">
				          <h3 class="box-title">My Profile</h3>
				        </div>
				        <!-- /.box-header -->
				        <div class="box-body">
				          	<table class="table table-bordered">
					            <tr>
					              <th>Name</th>
					              <th>Organization</th>
					              <th>Email</th>
					              <th>Role</th>
					              <th>Action</th>
					            </tr>
					            <tr>
					              <td>{{ Auth::user()->name}}</td>
					              <td>{{ Auth::user()->organization}}</td>
					              <td>{{ Auth::user()->email}}</td>
					              <td></td>
					              <td>
					              	<a href="{{ route('profile.edit', Auth::user()->id) }}"><span class="glyphicon glyphicon-edit"></span></a>
					              </td>
					            </tr>
				          	</table>
				        </div>		        
			      	</div>
			      	<!-- /.box -->
			    </div>	    
		  	</div>
		  	<!-- /.row -->	  
		</section>
		<!-- /.content -->
	</div>
@endsection
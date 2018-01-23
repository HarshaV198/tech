@extends('admin/layouts/app')

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Super Admin User Management
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        {{--  <li><a href="#">Examples</a></li>
	        <li class="active">Blank page</li>  --}}
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">

					<div class="box">
							<div class="box-body table-responsive no-padding" style="padding-top: 10px">
								<table class="table table-hover">
									<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Organisation</th>
										<th>Permission</th>
										<th>Action</th>
									</tr>
									@for($i=0;$i< 10;$i++)
									<tr>
										<td>Mahesh</td>
										<td>mahesh@gmail.com</td>
										<td>Wsim</td>
										<td>SuperAdmin</td>
										<td>
											<button class="btn btn-primary">Edit</button>
											<button class="btn btn-danger">Delete</button>
										</td>
									</tr>
									@endfor
								</table>
							</div>
							<!-- /.box-body -->
						</div>

	    </section>
	    <!-- /.content -->
  	</div>
  	<!-- /.content-wrapper -->
	
@endsection
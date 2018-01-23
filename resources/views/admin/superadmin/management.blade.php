@extends('admin/layouts/app')

@section('headSection')
	<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')
	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	        Data Tables
	        <small>advanced tables</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Tables</a></li>
	        <li class="active">Data tables</li>
	      </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Data Table With Full Features</h3>
			            </div>
			            <!-- /.box-header -->
		            	<div class="box-body">
			              	<table id="example1" class="table table-bordered table-striped">
				                <thead>
					                <tr>
					                  <th>Name</th>
					                  <th>Email</th>
					                  <th>Organization</th>
					                  <th>Role</th>
					                  <th>Edit</th>
					                  <th>Delete</th>
					                </tr>
				                </thead>
				                <tbody>

				                	@foreach ($users as $user)

						                <tr>
						                  <td>{{ $user->name }}</td>

						                  <td>{{ $user->email }}</td>

						                  <td>{{ $user->organization }}</td>

						                  <td>{{ $user->role_id }}</td>

						                  <td>
						                  	<a href="#"><span class="glyphicon glyphicon-edit fa-lg"></span></a>
						                  </td>

						                  <td>
						                  	<form action="{{ route('user.destroy', $user->id) }}" style="display: none">
						                  		{{ csrf_field() }}

						                  		{{ method_field('DELETE') }}
						                  	</form>

						                  	<a href="#"><span class="glyphicon glyphicon-trash fa-lg"></span></a>
						                  </td>
						                </tr>
						            @endforeach
				               </tbody>                
			              	</table>
			            </div>
			            <!-- /.box-body -->
	          		</div>
	    		</div>
	    	</div>
	    </section>
	</div>
@endsection

@section('footerSection')
	<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
	<script>
	  $(function () {
	    $('#example1').DataTable()
	    $('#example2').DataTable({
	      'paging'      : true,
	      'lengthChange': false,
	      'searching'   : false,
	      'ordering'    : true,
	      'info'        : true,
	      'autoWidth'   : false
	    })
	  })
	</script>
@endsection
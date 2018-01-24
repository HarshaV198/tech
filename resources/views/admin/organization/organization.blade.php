@extends('admin/layouts/app')

@section('headSection')
	<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')
	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	        List of All Organization Staff
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Organization Staff</li>
	      </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Organization Management</h3>
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

				                	@foreach ($staffs as $staff)

						                <tr>
						                  <td>{{ $staff->name }}</td>

						                  <td>{{ $staff->email }}</td>

						                  <td>{{ $staff->organization }}</td>

						                  <td>{{ config('app.role')[$staff->role_id] }}</td>

						                  <td>
						                  	<a href="{{ route('staff.edit', $staff->id) }}"><span class="glyphicon glyphicon-edit fa-lg"></span></a>
						                  </td>

						                  <td>
						                  	<form id="delete-form-{{ $staff->id }}" method="POST" action="{{ route('staff.destroy', $staff->id) }}" style="display: none">
						                  		{{ csrf_field() }}

						                  		{{ method_field('DELETE') }}
						                  	</form>

						                  	<a href="" onclick="event.preventDefault();document.getElementById('delete-form-{{ $staff->id }}').submit();"><span class="glyphicon glyphicon-trash fa-lg"></span></a>
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
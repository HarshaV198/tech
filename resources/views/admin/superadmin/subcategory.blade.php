@extends('admin.layouts.app')

@section('headSection')
	<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	        List of Sub Category
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

						<div class="box-body">
							<div class="col-md-12">
								<div align="center">
									<button type="button" data-toggle="modal" data-target="#addSubCategoryModal" class="btn btn-warning">
											<i class="glyphicon glyphicon-plus"></i> Add Subcategory
									</button>
								</div>
							</div>
			            </div>
 
		            	<div class="box-body">
			              	<table id="example1" class="table table-bordered table-striped">
								
								@if(count($subcategories) == 0)

									<div>
										<p>No Sbucategories Found</p>
									</div>								
								@else
					                <thead>
						                <tr>
						                  <th>Category Name</th>
						                  <th>Subcategory Name</th>
						                  <th>Edit</th>
						                  <th>Delete</th>
						                </tr>
					                </thead>
					                <tbody>
					                	@foreach($subcategories as $subcategory)
						                    <tr>
							                  <td>{{ $subcategory->categories->name }}</td>
							                  <td>{{ $subcategory->name }}</td>

							                  <td>
							                  	<a href="#"><span class="glyphicon glyphicon-edit fa-lg"></span></a>
							                  </td>

							                  <td>

							                  	<a href="#"><span class="glyphicon glyphicon-trash fa-lg"></span></a>
							                  </td>
							                </tr>
						                @endforeach							            
					                </tbody>           
					            @endif     
			              	</table>
			            </div>
			            <!-- /.box-body -->
	          		</div>
	    		</div>
	    	</div>
	    </section>
	</div>
	<div class="modal fade add-board-modal"  id="addSubCategoryModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Subcategory</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ route('subcategory.store') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<select class="form-control" required name="category">
										<option value="" disabled selected></option>
										@if(isset($categories) && count($categories))
											@foreach($categories as  $category)
											<option value="{{ $category->id }}">{{ $category->name }}</option>
											@endforeach
										@endif
									</select>
								</div>
								<div class="form-group">
									<lable>Subcategory</lable>
									<input type="text" name="subcategory" class="form-control" required/>
								</div>								
								<div class="btn-class" style="margin-top: 25px">
									<button type="submit" class="btn btn-success">SAVE</button>		
								</div>
							</form>
						</div>
				</div>
		</div>
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
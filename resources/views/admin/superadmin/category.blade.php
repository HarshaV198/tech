@extends('admin.layouts.app')

@section('headSection')
	<link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection

@section('main-content')

	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	        List of Categories
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Category List</li>
	      </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">

						<div class="box-body">
							<div class="col-md-12">
								<div align="center">
									<button type="button" data-toggle="modal" data-target="#addCategoryModal" class="btn btn-warning">
											<i class="glyphicon glyphicon-plus"></i> Add Category
									</button>
								</div>
							</div>
			            </div>

			            <!-- /.box-header -->
		            	<div class="box-body">
			              	<table id="example1" class="table table-bordered table-striped">
								
								@if (count($categories) == 0)
									<dir>
										<p>No Categories Found Show</p>
									</dir>
								@else
					                <thead>
						                <tr>
						                  <th>Category Name</th>
						                  <th>Edit</th>
						                  <th>Delete</th>
						                </tr>
					                </thead>
					                <tbody>  
					                	@foreach ($categories as $category)     
							                <tr>
							                  <td>{{ $category->name }}</td>

							                  <td>
							                  	<a href="{{ route('category.edit', $category->id) }}" class="btn btn-info"><span class="glyphicon glyphicon-edit fa-lg"></span></a>
							                  </td>

							                  <td>

							                  	<a href="#" data-id="{{ $category->id }}" class="btn btn-danger btn-sm delete-category"><span class="glyphicon glyphicon-trash fa-lg"></span></a>
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
	<div class="modal fade add-board-modal"  id="addCategoryModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Category</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ route('category.store') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<lable>Category Name</lable>
									<input type="text" name="name" class="form-control" required/>
								</div>
					
								<div class="btn-class" style="margin-top: 25px">
									<button type="submit" class="btn btn-success">SAVE</button>
								</div>
							</form>
						</div>
				</div>
		</div>
	</div>

	<div class="modal fade add-board-modal"  id="deleteCategoryModal"   tabindex="-1" role="dialog" data-backdrop="static">
			<div class="modal-dialog modal-md" role="document">
			
			<div class="modal-content">
				<div class="modal-header" style="border-bottom: none;padding-bottom: 0">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
				</div>
				<div class="modal-body text-center" style="padding-top: 0">
					<p style="font-size: 16px">Are you sure you want to delete the Category?..</p>
					<button id="deleteConfirm" type="submit" class="btn btn-default btn-primary" style="margin-right:10px;font-size: 14px;color: #fff;padding: 6px 15px">YES</button>
					<button type="button" data-dismiss="modal" class="btn btn-default" style="font-size: 14px;padding: 6px 15px">NO</button>
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

	<script>
		$(document).ready(function(){

			$(document).on('click','.delete-category',function(){
				var id = $(this).attr('data-id');
				$('#deleteCategoryModal').find('#deleteConfirm').attr('data-id',id);
				$('#deleteCategoryModal').modal('show');
				$(this).closest('tr').addClass('delete-block');
			});

			$(document).on('click','#deleteConfirm',function(){
				var id = $(this).attr('data-id');
				var data = {};
				data.slug = id;
				$(this).css('pointer-events','none');
				$(this).addClass('disabled');
				$.ajax({
					url: '/api/category/delete',
					type: 'POST',
					data: data,
					timeout: 30000,
					success: function (response) {
						if(response['data']){
							$('.delete-block').detach();
							$('.modal').modal('hide');
							$('#deleteConfirm').css('pointer-events','');
							$('#deleteConfirm').removeClass('disabled');
							setTimeout(function(){
								$.notify({
								message: 'Board Deleted Successfully'
							}, {
								type: 'success'
							});
							},500);
						}
					}, error: function () {

					}
				});
			});

			$('#deleteBoardModal').on('hidden.bs.modal',function(){
				$('tr').removeClass('delete-block');
			});
		});
	</script>
@endsection
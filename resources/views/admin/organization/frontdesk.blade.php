@extends('admin/layouts/app')

@section('main-content')
	<style>
		table{
			table-layout: fixed;
		}
		.modal-title{
			font-size: 20px;
			font-weight: 500;
		}
		.modal-header .close{
			font-size: 14px;
		}
		button:active,button:focus{
			outline: none;
		}
	</style>
	<div class="content-wrapper">
		<section class="content-header">
	      <h1>
	      Front Desks
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li>Settings</li>
	      <li class="active">Front Desks</li>
	    </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">
			          <div class="box-header">
			            <h3 class="box-title">Services:</h3>
			          </div><!-- /.box-header -->
			          <div class="box-body">

			            <div align="right">
			            	<button type="button" data-toggle="modal" data-target="#addServiceModal" class="btn btn-warning">
			             	 	<i class="glyphicon glyphicon-plus"></i> Add New
			            	</button>
			            </div> <br>

			            <table class="table table-bordered">
			              <tr>
			                <th>Name</th>
			                <th colspan="2">Description</th>
			                <th>Token Prefix</th>
			                <th>Actions</th>
			              </tr>
										@if(isset($services) && count($services))
										@foreach($services as $service)
										<tr>                
			                <td>
												@if(isset($service->name) && $service->name)
													{{ $service->name }}
												@endif
											</td>
			                <td colspan="2">
												@if(isset($service->description) && $service->description)
													{{ $service->description }}
												@endif
											</td>
			                <td>
												@if(isset($service->token_prefix) && $service->token_prefix)
													{{ $service->token_prefix }}
												@endif
											</td>
			                <td>
												<button data-id="{{ $service->id }}" type="button" class="btn btn-info btn-sm edit-service">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
											</button>
											<button data-id="{{ $service->id }}" type="button" class="btn btn-danger btn-sm delete-service">
													<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete
											</button>
			                </td>
										</tr>
										@endforeach
										@endif
			            </table>
			          </div><!-- /.box-body -->
			        </div><!-- /.box -->
	    		</div>

	    		<div class="col-xs-12">
				        <div class="box">
				          <div class="box-header">
				            <h3 class="box-title">Frontdesk Configuration:</h3><br><br>
				          </div>
				            <div class="box-body table-responsive">
											<div align="right">
												<button type="button" data-toggle="modal" data-target="#addNewConfiguration" class="btn btn-warning">
														<i class="glyphicon glyphicon-plus"></i> Add New
												</button>
											</div><br>
				              <table class="table table-bordered">
				                <thead>
				                  <tr>
				                    <th>Name</th>
				                    <th>IP Address</th>
				                    <th>Service</th>
				                    <th>Display Board</th>
				                    <th>Status</th>
				                    <th>Actions</th>
				                  </tr>
				                </thead>
				                <tbody>
				                  <tr>
				                  	<td></td>
				                  	<td></td>
				                  	<td></td>
				                  	<td></td>
				                  	<td></td>
				                  	<td>
				                  		<button type="button" class="btn btn-info btn-sm">
					                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
					                    </button>
					                    <button type="button" class="btn btn-danger btn-sm">
					                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete
					                    </button>
				                  	</td>
				                  </tr>
				                </tbody>                
				              </table>             
				            </div>      
				          <!-- /.box-body -->
				        </div>
				        <!-- /.box -->  
				    </div>

	          		<div class="col-xs-6" style="display: none">
				        <div class="box">
					        <div class="box-header">
					            <h3 class="box-title">Audit Log:</h3><br><br>
					        </div>         

				          	<div class="box-body table-responsive no-padding">
					            <table class="table table-hover">
					              	<thead>
						                <tr>
						                  <th>Updated on</th>
						                  <th>Staff</th>
						                  <th>Configuration Name</th>
						                  <th>Action</th>
						                </tr>
					              	</thead>
					              	<tbody>
						                <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                </tr>
					              	</tbody>
					            </table>
				          	</div>      
				          <!-- /.box-body -->
				        </div>
			        	<!-- /.box -->  
			      	</div>
	    	</div>
	    </section>
	</div>
	<div class="modal fade add-service-modal"  id="addServiceModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Service</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ url('/service/create') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<lable>Name</lable>
									<input type="text" name="name" class="form-control" required/>
								</div>
								<div class="form-group">
									<lable>Description</lable>
									<textarea style="max-width: 100%" class="form-control" rows="4" name="description"></textarea>
								</div>
								<div class="form-group">
										<lable>Token Prefix</lable>
										<input type="text" class="form-control" name="token_prefix" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-length="[1,1]" data-parsley-pattern-message="Only alphabet allowed" data-parsley-length-message="Only one character allowed" required/>
								</div>
								<div class="btn-class" style="margin-top: 25px">
										<button type="submit" class="btn btn-success">SAVE</button>
								</div>
							</form>
						</div>
				</div>
		</div>
	</div>
	<div class="modal fade edit-service-modal"  id="editServiceModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Service</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ url('/service/edit/save') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<input type="hidden" name="slug" value="">
								<div class="form-group">
									<lable>Name</lable>
									<input type="text" name="name" class="form-control" required/>
								</div>
								<div class="form-group">
									<lable>Description</lable>
									<textarea style="max-width: 100%" class="form-control" rows="4" name="description"></textarea>
								</div>
								<div class="form-group">
										<lable>Token Prefix</lable>
										<input type="text" class="form-control" name="token_prefix" data-parsley-pattern="^[a-zA-Z]+$" data-parsley-length="[1,1]" data-parsley-pattern-message="Only alphabet allowed" data-parsley-length-message="Only one character allowed" required/>
								</div>
								<div class="btn-class" style="margin-top: 25px">
										<button type="submit" class="btn btn-success">SAVE</button>
								</div>
							</form>
						</div>
				</div>
		</div>
	</div>
	<div class="modal fade delete-service-modal"  id="deleteServiceModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
			
			<div class="modal-content">
				{{--  <form data-parsley-validate="">  --}}
					<div class="modal-header" style="border-bottom: none;padding-bottom: 0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
						{{--  <h6 class="modal-title">Edit Board</h6>  --}}
					</div>
					<div class="modal-body text-center" style="padding-top: 0">
						<p style="font-size: 16px">Are you sure you want to delete this Service?</p>
						<button id="deleteConfirm" type="submit" class="btn btn-default btn-primary" style="margin-right:10px;font-size: 14px;color: #fff;padding: 6px 15px">YES</button>
						<button type="button" data-dismiss="modal" class="btn btn-default" style="font-size: 14px;padding: 6px 15px">NO</button>
					</div>
				{{--  </form>  --}}
			</div>
		</div>
	</div>
	<div class="modal fade add-service-modal"  id="addNewConfiguration"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Frontdesk</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ url('/service/create') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<lable>Name</lable>
									<input type="text" name="name" class="form-control" required/>
								</div>
								<div class="form-group">
									<lable>IP Address</lable>
									<input type="text" name="ip" class="form-control" required/>								</div>
								<div class="form-group" name="service">
										<lable>Service</lable>
										<select class="form-control">
											<option value="" disabled>Select Service</option>
										</select>
								</div>
								<div class="form-group" name="board">
										<lable>Display Board</lable>
										<select class="form-control">
											<option value="" disabled>Select Board</option>
										</select>
								</div>
								<div class="form-group" name="status">
										<lable>Status</lable>
										<select class="form-control">
											<option value="1">Active</option>
											<option value="2">Inactive</option>
										</select>
								</div>
								<div class="btn-class" style="margin-top: 25px">
										<button type="submit" class="btn btn-success">SAVE</button>
								</div>
							</form>
						</div>
				</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('form').submit(function(){
				if($(this).parsley().isValid()){
					$(this).find('button[type=submit]').css('pointer-events','none');
					$(this).find('button[type=submit]').addClass('disabled');
				}
			});

			$('#addServiceModal,#editServiceModal').on('hidden.bs.modal',function(){
				$(this).find('form').parsley().reset();
			});

			
			$(document).on('click','.edit-service',function(){
				var id = $(this).attr('data-id');
				var data = {};
				data.slug = id;
				$.ajax({
					url: '/api/service/edit/view',
					type: 'POST',
					data: data,
					timeout: 30000,
					success: function (response) {
						if(response['data']){
							var editModal = $('#editServiceModal');
							editModal.find('input[name="name"]').val(response['data']['name']);
							editModal.find('textarea').val(response['data']['description']);
							editModal.find('input[name="token_prefix"]').val(response['data']['token_prefix']);
							editModal.find('input[name="slug"]').val(response['data']['id']);
							editModal.modal('show');
						}
					}, error: function () {

					}
				});
			});

			$(document).on('click','.delete-service',function(){
				var id = $(this).attr('data-id');
				$('#deleteServiceModal').find('#deleteConfirm').attr('data-id',id);
				$('#deleteServiceModal').modal('show');
				$(this).closest('tr').addClass('delete-block');
			});

			$(document).on('click','#deleteConfirm',function(e){
				$(this).css('pointer-events','none');
				$(this).addClass('disabled');
				var id = $(this).attr('data-id');
				var data = {};
				data.slug = id;
				$.ajax({
					url: '/api/service/delete',
					type: 'POST',
					data: data,
					timeout: 30000,
					success: function (response) {
						if(response['data']){
							$('.delete-block').detach();
							$('.modal').modal('hide');
							$('#deleteConfirm').css('pointer-events','none');
							$('#deleteConfirm').removeClass('disabled');
							setTimeout(function(){
								$.notify({
								message: 'Service Deleted Successfully'
							}, {
								type: 'success'
							});
							},500);
						}
					}, error: function () {

					}
				});
			});

			$('#deleteServiceModal').on('hidden.bs.modal',function(){
				$('tr').removeClass('delete-block');
			});


		});
	</script>

@endsection

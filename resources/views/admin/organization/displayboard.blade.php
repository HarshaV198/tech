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
	        Display Board
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Settings</a></li>
	        <li class="active">Display Board</li>
	      </ol>
	    </section>

	    <section class="content">
	    	<div class="row">
	    		<div class="col-xs-12">
	    			<div class="box">
			            <div class="box-header">
			              <h3 class="box-title">Display Board Configuration</h3><br><br>
			              <p>Note: Display boards are optional for an organization but will provide an enanced user experience</p><br>
			              <p>To order dispaly boards and other items<a href="#">click here </a></p><br>
			              <p>Please contact 1-800-xxx xxxx if you want us to set up your oraganization for free.</p>
			            </div>

			            <div class="box-body">
							<div class="col-md-12">
								<div align="right">
									<button type="button" data-toggle="modal" data-target="#addBoardModal" class="btn btn-warning">
											<i class="glyphicon glyphicon-plus"></i> Add Board
									</button>
								</div>
							</div>
			            </div>


			            <!-- /.box-header -->
		            	<div class="box-body">
			              	<table id="example1" class="table table-bordered table-striped">
				                <thead>
					                <tr>
					                  <th colspan="2">Name</th>
					                  <th colspan="2">Description</th>
					                  <th colspan="2">Status</th>
					                  <th colspan="2">Actions</th>
					                </tr>
				                </thead>
				                <tbody>
									@if(isset($boards) && count($boards))
									@foreach($boards as $board)
									<tr>
										<td colspan="2">
											@if(isset($board->name) && $board->name)
											 {{ $board->name }}
											@endif
										</td>
										<td colspan="2">
											@if(isset($board->description) && $board->description)
												{{ $board->description }}
											@endif
										</td>
										<td colspan="2">
											@if(isset($board->status) && $board->status)
												@if(isset(config('app.board_status')[$board->status]))
													{{config('app.board_status')[$board->status]}}
												@endif
											@endif
										</td>
										<td colspan="2">
											{{--  <button data-id="{{ $board->id }}" class="btn btn-primary edit-board"><i class="glyphicon glyphicon-pencil"></i></button>
											<button data-id="{{ $board->id }}" class="btn btn-danger delete-board"><i class="glyphicon glyphicon-trash"></i></button>  --}}
											<button data-id="{{ $board->id }}" type="button" class="btn btn-info btn-sm edit-board">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
											</button>
											<button data-id="{{ $board->id }}" type="button" class="btn btn-danger btn-sm delete-board">
												<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete
											</button>
										</td>
									</tr>
									@endforeach
									@endif		                	
				               </tbody>                
			              	</table>
			            </div>
			            <!-- /.box-body -->
	          		</div>

	          		<div class="col-xs-6" style="display: none">
									<div class="row">
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
																			<th>Board ID</th>
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
									</div>
			        	<!-- /.box -->  
			      	</div>
	    		</div>
	    	</div>
	    </section>
	</div>
	<div class="modal fade add-board-modal"  id="addBoardModal"   tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
							<h6 class="modal-title">Add Board</h6>
					</div>
						<div class="modal-body">
							<form method="POST" action="{{ url('/board/create') }}" data-parsley-validate="" enctype="multipart/form-data">
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
										<lable>Status</lable>
										<select class="form-control" name="status">
											<option value="1">Active</option>
											<option value="2">Inactive</option>
										</select>
								</div>
								<div class="btn-class" style="margin-top: 25px">
										<button type="submit" class="btn btn-success">SAVE</button>
										{{--  <img class="loader-img" src="{{ asset('img/loader.svg') }}" style="height: 40px;display:none"/>  --}}
								</div>
							</form>
						</div>
				</div>
		</div>
	</div>
	<div class="modal fade add-board-modal"  id="editBoardModal"   tabindex="-1" role="dialog" data-backdrop="static">
			<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
						<h6 class="modal-title">Edit Board</h6>
					</div>
					<div class="modal-body">
						<form method="POST" action="{{ url('/board/edit/save') }}" data-parsley-validate="" enctype="multipart/form-data">
							{{ csrf_field() }}
							<input type="hidden" name="slug" value=""/>
							<div class="form-group">
								<lable>Name</lable>
								<input type="text" name="name" class="form-control" required/>
							</div>
							<div class="form-group">
								<lable>Description</lable>
								<textarea style="max-width: 100%" class="form-control" rows="4" name="description"></textarea>
							</div>
							<div class="form-group">
								<lable>Status</lable>
								<select class="form-control" name="status">
									<option value="1">Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
							<div class="btn-class" style="margin-top: 25px">
								<button type="submit" class="btn btn-success">SAVE</button>
								{{--  <img class="loader-img" src="{{ asset('img/loader.svg') }}" style="height: 40px;display:none"/>  --}}
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade add-board-modal"  id="deleteBoardModal"   tabindex="-1" role="dialog" data-backdrop="static">
			<div class="modal-dialog modal-md" role="document">
				
				<div class="modal-content">
					<div class="modal-header" style="border-bottom: none;padding-bottom: 0">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative;top: -5px"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;position: relative;top: -2px;margin-right: 5px">&times;</span><span>CLOSE</span></button>
						{{--  <h6 class="modal-title">Edit Board</h6>  --}}
					</div>
					<div class="modal-body text-center" style="padding-top: 0">
						<p style="font-size: 16px">Are you sure you want to delete the Project?</p>
						<button id="deleteConfirm" type="submit" class="btn btn-default btn-primary" style="margin-right:10px;font-size: 14px;color: #fff;padding: 6px 15px">YES</button>
						<button type="button" data-dismiss="modal" class="btn btn-default" style="font-size: 14px;padding: 6px 15px">NO</button>
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

			$(document).on('click','.edit-board',function(){
				var id = $(this).attr('data-id');
				var data = {};
				data.slug = id;
				$.ajax({
					url: '/api/board/edit/view',
					type: 'POST',
					data: data,
					timeout: 30000,
					success: function (response) {
						if(response['data']){
							var editModal = $('#editBoardModal');
							editModal.find('input[name="name"]').val(response['data']['name']);
							editModal.find('textarea').val(response['data']['description']);
							editModal.find('select').val(response['data']['status']);
							editModal.find('input[name="slug"]').val(response['data']['id']);
							editModal.modal('show');
						}
					}, error: function () {

					}
				});
			});

			$(document).on('click','.delete-board',function(){
				var id = $(this).attr('data-id');
				$('#deleteBoardModal').find('#deleteConfirm').attr('data-id',id);
				$('#deleteBoardModal').modal('show');
				$(this).closest('tr').addClass('delete-block');
			});

			$(document).on('click','#deleteConfirm',function(){
				var id = $(this).attr('data-id');
				var data = {};
				data.slug = id;
				$(this).css('pointer-events','none');
				$(this).addClass('disabled');
				$.ajax({
					url: '/api/board/delete',
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

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
					                  <th colspan="4">Description</th>
					                  <th colspan="2">Status</th>
					                  <th colspan="1">Actions</th>
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
										<td colspan="4">
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
										<td colspan="1">
											<button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
											<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
										</td>
									</tr>
									@endforeach
									@endif		                	
				               </tbody>                
			              	</table>
			            </div>
			            <!-- /.box-body -->
	          		</div>

	          		<div class="col-xs-6">
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
	<script>
		$(document).ready(function(){
			console.log('testing');
			$('form').submit(function(){
				$(this).find('button[type=submit]').css('pointer-events','none');
				$(this).find('button[type=submit]').addClass('disabled');
			});
		});
	</script>
@endsection

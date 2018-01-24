@extends('admin/layouts/app')

@section('main-content')
	<style>
	
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
														<button type="button" data-toggle="modal" data-target="#add_service_Modal" class="btn btn-warning">
																<i class="glyphicon glyphicon-plus"></i> Add New
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
					                <tr>
					                  <td colspan="2">
															Testong
														</td>
					                  <td colspan="4">
															Testing
														</td>
					                  <td colspan="2">
															Testing
														</td>
					                  <td colspan="1">
					                  	<button class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></button>
					                  	<button class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
					                  </td>
					                </tr>
						           
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
	<div class="modal fade add-board-modal"  tabindex="-1" role="dialog" data-backdrop="static">
		<div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;">&times;</span><span>CLOSE</span></button>
							<h6>Change Password</h6>
					</div>
						<div class="modal-body">
							{{--  <form method="POST" action="{{ url('/user/change_password') }}" data-parsley-validate="" enctype="multipart/form-data">
								{{ csrf_field() }}
								<div class="form-group">
									<input type="password" name="old_pwd" placeholder="Enter Current Password" class="form-control" required/>
								</div>
								<div class="form-group">
									<input id="pwd" type="password" name="new_pwd" placeholder="Enter New Password" class="form-control"/ required>
								</div>
								<div class="form-group">
									<input id="cpwd" data-parsley-equalto-message="Passwords are not matching" data-parsley-equalto="#pwd" type="password" name="confirm_pwd" placeholder="Confirm Password" class="form-control"/ required>
								</div>
								<div class="btn-class">
										<button type="submit" class="btn btn-default">CHANGE</button>
										{{--  <img class="loader-img" src="{{ asset('img/loader.svg') }}" style="height: 40px;display:none"/>  --}}
								</div>
							</form>  --}}
						</div>
				</div>
		</div>
	</div>
@endsection

@extends('admin/layouts/app')

@section('main-content')
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

			            	<fieldset class="scheduler-border">
						    	<form class="form-inline">

									<div class="form-group">
									   <label for="inputUniqueID">ID</label>
									   <input type="text" class="form-control" name="uniqid" id="inputUniqueID" placeholder="unique ID">
									</div>

									<div class="form-group">
									  <label for="inputDescription">Description</label>
									  <input type="text" class="form-control" name="description" id="inputDescription" placeholder="For new accounts"/>
									</div>

									<div class="form-group">
									  <label for="inputStatus">Status</label>
									  <select class="form-control" id="inputStatus" name="boardstatus">
						                    <option value=""> Select </option>
						              </select>
									</div>

									<button class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add</button>
							  	</form>
							</fieldset><br><br>
			            </div>


			            <!-- /.box-header -->
		            	<div class="box-body">
			              	<table id="example1" class="table table-bordered table-striped">
				                <thead>
					                <tr>
					                  <th>ID</th>
					                  <th>Description</th>
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

					                  <td>
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
			        	<!-- /.box -->  
			      	</div>
	    		</div>
	    	</div>
	    </section>
	</div>
@endsection

@extends('admin/layouts/app')

@section('main-content')
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
			            	<button type="button" data-toggle="modal" data-target="#add_service_Modal" class="btn btn-warning">
			             	 	<i class="glyphicon glyphicon-plus"></i> Add New
			            	</button>
			            </div> <br>

			            <table class="table table-bordered">
			              <tr>
			                <th>Name</th>
			                <th>Description</th>
			                <th>Token Prefix</th>
			                <th>Actions</th>
			              </tr>

			              <tr>                
			                <td></td>
			                <td></td>
			                <td></td>
			                <td>
			                	<button type="button" class="btn btn-primary">
			                		<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
			                	</button>

			                  <button type="button" class="btn btn-danger">
			                		<i class="fa fa-trash-o" aria-hidden="true"></i> Delete
			                	</button>	
			                </td>
			              </tr>
			            </table>
			          </div><!-- /.box-body -->
			        </div><!-- /.box -->
	    		</div>

	    		<div class="col-xs-12">
				        <div class="box">
				          <div class="box-header">
				            <h3 class="box-title">Frontdesk Configuration:</h3><br><br>
				          </div>
				            <div class="box-body table-responsive no-padding">

				              <table class="table table-bordered">
				                <thead>
				                  <tr>
				                    <th>Name</th>
				                    <th>IP Address</th>
				                    <th>Service Description</th>
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
@endsection

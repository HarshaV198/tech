@extends('admin/layouts/app')


@section('main-content')
	
	<div class="content-wrapper">
		<section class="content-header">
		  <h1>
		    Issue Token -Staff
		  </h1>
		  <ol class="breadcrumb">
		    <li><a href="/about"><i class="fa fa-dashboard"></i> Home</a></li>
	      	<li><a href="#"><i class="fa fa-user-circle"></i>Issue Token</a></li>
		  </ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box">
					  	<div class="box-body">
					  		<div class="container">
					  			<div class="col-md-offset-3 col-md-6">
								    <div class="panel panel-primary">
								        <div class="panel-heading clearfix">
								        	<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Current serving Token #: <###></h4>

								          	<!-- <div class="input-group">
							                    <input class="form-control" placeholder="Search" type="text">
			                				</div> -->
								        </div>
								    </div>
								</div>
								<!-- <div class="col-md-6"></div>							 -->
							</div><br><br>

						    <form class="form-horizontal col-md-offset-3">

						    	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Name</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<name>">
							        </div>
						      	</div><br>

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Telephone *</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<telephone #>">
							        </div>
						      	</div><br>

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Email</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<email ID>">
							        </div>
						      	</div><br>

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Custom field 1</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<custome field 1>">
							        </div>
						      	</div><br>

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Custom field 2</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<custome field 2>">
							        </div>
						      	</div><br>

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Custom field 3</label>
						    		<div class="col-xs-4">
							        	<input type="text" id="inputEmail" name="oldpassword" class="form-control" placeholder="<custome field 3>">
							        </div>
						      	</div><br>	

						      	<div class="form-group">
						    		<label for="inputEmail" class="control-label col-xs-2">Select Service</label>
						    		<div class="col-xs-4">
							        	<select class="form-control" id="inputEmail">
							        		<option value="">Select</option>
							        		<option>New Account</option>
							        		<option>Renewal</option>
							        		<option>Other</option>
							        	</select>
							        </div>
						      	</div><br>	      	
						    </form>
					  	</div>
					  	<!-- /.form-box -->					  	
					</div>
				</div>
			</div>
		</section>
	</div>

@endsection




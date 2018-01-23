@extends('admin/layouts/app')

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <h1>
	        Blank page
	        <small>it all starts here</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li><a href="#">Examples</a></li>
	        <li class="active">Blank page</li>
	      </ol>
	    </section>

	    <!-- Main content -->
	    <section class="content">

	      <div class="col-md-offset-3 col-md-6">
	      	<div class="box box-info">
	            <div class="box-header with-border">
	              <h3 class="box-title">Update Profile</h3>
	            </div>
	            <!-- /.box-header -->
	            <!-- form start -->
	            <form class="form-horizontal">
	              <div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

	                  <div class="col-sm-10">
	                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
	                  </div>
	                </div>

	                <div class="form-group">
	                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

	                  <div class="col-sm-10">
	                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
	                  </div>
	                </div>
	                
	              <!-- /.box-body -->
	              <div class="box-footer">
	                <button type="submit" class="btn btn-default">Cancel</button>
	                <button type="submit" class="btn btn-info pull-right">Update</button>
	              </div>
	              <!-- /.box-footer -->
	            </form>
	        </div>
	      </div>

	    </section>
	    <!-- /.content -->
  	</div>
  	<!-- /.content-wrapper -->
	
@endsection
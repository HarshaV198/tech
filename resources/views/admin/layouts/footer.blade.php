
<div class="modal fade change-password-modal"  tabindex="-1" role="dialog" data-backdrop="static">
	<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="font-size:24px; vertical-align:middle;">&times;</span><span>CLOSE</span></button>
						<h6>Change Password</h6>
				</div>
					<div class="modal-body">
						<form method="POST" action="{{ url('/user/change_password') }}" data-parsley-validate="" enctype="multipart/form-data">
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
						</form>
					</div>
			</div>
	</div>
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.


    <!-- jQuery 3 -->
	<script src="{{ asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<!-- SlimScroll -->
	<script src="{{ asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<!-- FastClick -->
	<script src="{{ asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
	<script src="{{ asset('js/parsley.min.js')}}"></script>

	<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

	@section('footerSection')

  	@show
  </footer>
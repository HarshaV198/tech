<!DOCTYPE html>

<html>

<head>

    @include('admin.layouts.head')

</head>


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">

	<div class="wrapper">

		@include('admin.layouts.header')

		@include('admin.layouts.sidebar')

		@section('main-content')

			@show

		@if(Session::has('error'))
            @include('inc.flash', ['key' => Session::get('error'),'type'=>'danger'])
        @endif

        @if(Session::has('warning'))
            @include('inc.flash', ['key' => Session::get('warning'),'type'=>'warning'])
        @endif

        @if(Session::has('success'))
            @include('inc.flash', ['key' => Session::get('success'),'type'=>'success'])
        @endif

		@include('admin.layouts.footer')
	</div>    
</body>

</html>
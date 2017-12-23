<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | {{ $page_title }}</title>

	<!-- Tell the browser to be responsive to screen width -->
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  	
	<link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/bower_components/Ionicons/css/ionicons.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ url('assets/dist/css/skins/_all-skins.min.css') }}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<!-- Site wrapper -->
<div class="wrapper">

  @include('layoutPages.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('layoutPages.sideNav')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $heading }}
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box box-primary">
        <div class="box-body">
          @yield('content')
        </div>
        <!-- /.box-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- =============================================== -->

  <!-- footer -->
  @include('layoutPages.footer')
</div>
<!-- ./wrapper -->

	<script type="text/javascript" src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/dist/js/demo.js') }}"></script>
</body>
</html>
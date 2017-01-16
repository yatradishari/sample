<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->   
	<link rel="stylesheet" href="{{ asset('/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <!-- MetisMenu CSS -->   
	<link rel="stylesheet" href="{{ asset('/public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}">

    <!-- Timeline CSS -->    
	<link rel="stylesheet" href="{{ asset('/public/admin/dist/css/timeline.css') }}">

    <!-- Custom CSS -->    
	<link rel="stylesheet" href="{{ asset('/public/admin/dist/css/sb-admin-2.css') }}">

    <!-- Morris Charts CSS -->    
	<link rel="stylesheet" href="{{ asset('/public/admin/bower_components/morrisjs/morris.css') }}">

    <!-- Custom Fonts -->   
	<link rel="stylesheet" href="{{ asset('/public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.includes.header')  
            <!-- /.navbar-header -->
			@include('admin.includes.top_menu')            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                @include('admin.includes.sidebar')
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">            
            <!-- /.row -->
			@yield('content');
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->    
	<script src="{{ asset('/public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->    
	<script src="{{ asset('/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->   
	<script src="{{ asset('/public/admin/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->   
	<!-- <script src="{{ asset('/public/admin/bower_components/raphael/raphael-min.js') }}"></script>-->
    
	<!-- <script src="{{ asset('/public/admin/bower_components/morrisjs/morris.min.js') }}"></script>-->
    
	<!-- <script src="{{ asset('/public/admin/js/morris-data.js') }}"></script> -->

    <!-- Custom Theme JavaScript --> 
	<script src="{{ asset('/public/admin/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>

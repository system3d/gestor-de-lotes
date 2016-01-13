<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Steel4Web | Garcia</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By Luciano Tonet">
    <meta name="keywords" content="Bootstrap 3, Laravel 5.1, Responsive">
    <!-- bootstrap 3.3.6 -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Morris chart -->
    <link href="{{ asset('css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="{{ asset('css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="{{ asset('css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="{{ asset('css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Select -->
    <link href="{{ asset('css/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- DATATABLES -->
    {{-- <link rel="stylesheet" href="{{ asset('css/datatables/jquery.dataTables.min.css') }}"> --}}
    <!-- DATATABLES BOOTSTRAP CSS-->
    <link rel="stylesheet" href="{{ asset('css/datatables/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/select.dataTables.min.css') }}">

    <!-- Theme style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

</head>
<body class="skin-black">
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <a href="{{ url('/') }}" class="logo">
            STEEL<strong class="text-primary">4</strong>WEB
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">


            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li class="{{ Request::is('lotes*') ? 'active' : '' }}">
                        <a href="{!! url('/lotes') !!}">
                            <i class="fa fa-th"></i> <span>Gestor de Lotes</span>
                        </a>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->

        </aside>


        <aside class="right-side">

            <!-- Main content -->
            <section class="content">

                <!-- System Notifications -->
                @if(Session::has('sys_notifications'))
                <div class="alert-group">
                    @foreach ( Session::get('sys_notifications') as $sys_notification )
                    <div class="alert alert-{!! $sys_notification['type'] or 'info' !!}">
                        @if ( !@$sys_notification['important'] )
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        @endif
                        {!! $sys_notification['message'] !!}
                    </div>
                    @endforeach
                </div>
                @endif
                <!-- /System Notifications -->

                <!-- MAIN CONTENT -->
                @yield('content')
                <!-- /MAIN CONTENT -->

                @include('templates.modal')

            </section><!-- /.content -->

            <div class="footer-main">
                <small>Steel4Web | Copyright &copy Garcia, <?php echo date('Y') ?></small>
            </div>

        </aside><!-- /.right-side -->

    </div><!-- ./wrapper -->


    <!-- MODAL -->
    <div class="modal fade" id="modal">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>

    @include('templates.scripts')

</body>
</html>
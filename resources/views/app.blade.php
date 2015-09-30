<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="UTF-8">
        <title>AdminLTE 2 | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="{!! asset('/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/dist/css/AdminLTE.min.css') !!}" rel="stylesheet" type="text/css" />
        folder instead of downloading all of them to reduce the load. -->
        <link href="{!! asset('/dist/css/skins/_all-skins.min.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/iCheck/flat/blue.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/morris/morris.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/datepicker/datepicker3.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/daterangepicker/daterangepicker-bs3.css') !!}" rel="stylesheet" type="text/css" />
        <link href="{!! asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}" rel="stylesheet" type="text/css" />
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            @include('includes.header')
            @include('includes.sidebar')
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                    Dashboard
                    <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                <section class="content">
                    @yield('content')
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

        <script src="{!! asset('/plugins/jQuery/jQuery-2.1.4.min.js') !!}"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="{!! asset('/bootstrap/js/bootstrap.min.js') !!}" type="text/javascript"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{!! asset('/plugins/morris/morris.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/sparkline/jquery.sparkline.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/knob/jquery.knob.js') !!}" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="{!! asset('/plugins/daterangepicker/daterangepicker.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/datepicker/bootstrap-datepicker.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/iCheck/icheck.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/slimScroll/jquery.slimscroll.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/plugins/fastclick/fastclick.min.js') !!}"></script>
        <script src="{!! asset('/dist/js/app.min.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/dist/js/pages/dashboard.js') !!}" type="text/javascript"></script>
        <script src="{!! asset('/dist/js/demo.js') !!}" type="text/javascript"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('includes.header');
            <!-- /.navbar-top-links -->

            @include('includes.sidebar');
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    @yield('add_js')
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>

<head>

    @include ('layouts.head')

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


       @include('layouts.nav')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layouts.siderbar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    @include ('layouts.bread')
                    <!-- end page title -->
                    @yield('contenido')

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            @include('layouts.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include ('layouts.scripts')

</body>

</html>
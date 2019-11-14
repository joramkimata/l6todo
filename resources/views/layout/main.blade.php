<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/blue/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2019 03:20:07 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="">

    <!-- plugin css -->
    <link href="{{url('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

    @yield('styles')

    <!-- Custom box css -->
    <link href="{{url('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">

    <!-- App css -->
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{url('assets/images/user.png')}}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">TodoApp!</h6>
                            </div>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{route('app.logout')}}" class="dropdown-item notify-item">
                                <i class="remixicon-logout-box-line"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>



                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index-2.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="20">
                            <!-- <span class="logo-lg-text-light">Xeria</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">X</span> -->
                            <img src="assets/images/logo-sm.png" alt="" height="24">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

                    <li class="dropdown d-none d-lg-block">
                        <a style="color: white; font-size: 24px" class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="{{route('app.dashboard')}}" role="button" aria-haspopup="false" aria-expanded="false">
                            TodoApp
                        </a>
                    </li>


                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                @include('partials._navbar')
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            @yield('main')

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    {{date('Y')}} &copy; Powered By <a href="#">Izweb Technologies</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->


    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="{{url('rightbar-overlay')}}"></div>

    <!-- Vendor js -->
    <script src="{{url('assets/js/vendor.min.js')}}"></script>

    <!-- Modal-Effect -->
    <script src="{{url('assets/libs/custombox/custombox.min.js')}}"></script>

    <script src="{{url('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{url('assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- Peity chart-->
    <script src="{{url('assets/libs/peity/jquery.peity.min.js')}}"></script>

    <!-- init js -->
    <script src="{{url('assets/js/pages/dashboard-2.init.js')}}"></script>

    @yield('scripts')

    <!-- App js -->
    <script src="{{url('assets/js/app.min.js')}}"></script>



</body>

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/blue/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2019 03:20:11 GMT -->

</html>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/redial/style1/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:02:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DjApp</title>
        <link rel="icon" href="{{asset('/images/favicon.ico')}}" />

        <!--Plugin CSS-->
        <link href="{{asset('/css/plugins.min.css')}}" rel="stylesheet">
        <!--main Css-->
        <link href="{{asset('/css/main.min.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- header-->
        <div id="header-fix" class="header py-4 py-lg-2 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3 col-xl-2 align-self-center">
                        <div class="site-logo">
                            <a href=""><img src="{{asset('/images/danilogo.JPG')}}" height="60" alt=""/></a>
                        </div>
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn bg-transparent float-right">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center d-none d-lg-inline-block">
                        <form>

                        </form>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-inline-block">
                        <nav class="navbar navbar-expand-lg p-0">
                            <ul class="navbar-nav notification ml-auto d-inline-flex">

                                <li class="nav-item dropdown user-profile align-self-center">
                                    <a  class="nav-link" data-toggle="dropdown" aria-expanded="false">
                                        <span class="float-right pl-3 text-white"><i class="fa fa-angle-down"></i></span>
                                        <div class="media">
                                            <img src="{{asset('/images/author.jpg')}}" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" width="45" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-2 text-white text-uppercase font-weight-bold">Admin</p>
                                                <small class="redial-primary-light font-weight-bold text-white"> Admin </small>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">

                                    <li><a class="dropdown-item py-2" href="{{route('logout')}}"><i class="fa fa-sign-out pr-2"></i> logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End header-->

        <!-- Main-content Top bar-->
        <div class="redial-relative mt-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                        <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">Dashboard</h6>
                    </div>


                </div>
            </div>
        </div>
        <!-- End Main-content Top bar-->

        <!-- main-content-->
        <div class="wrapper">
            <nav id="sidebar" class="card redial-border-light px-2 mb-4">
                <div class="sidebar-scrollarea">
                    <ul class="metismenu list-unstyled mb-0" id="menu">
                            <li><a href="{{route('category.table')}}"><span class="ti-shield pr-2"></span>  Category</a></li>
                    <li><a href="{{route('song.add')}}"><span class="ti-angle-double-up pr-2"></span> Upload Song</a></li>

                        <li><a href="{{route('song.table')}}"><span class="ti-headphone-alt pr-2"></span> Songs List</a></li>
                        <li><a href="{{route('user.add')}}"><span class="ti-stamp pr-2"></span> Create User</a></li>
                    <li><a href="{{route('user.table')}}"><span class="ti-face-smile pr-2"></span> Users List</a></li>

                    </div>
            </nav>
            <div id="content">
                @yield('content')
            </div>
        </div>
        <!-- End main-content-->

        <!-- Top To Bottom--> <a href="#" class="scrollup text-center redial-bg-primary redial-rounded-circle-50 ">
            <h4 class="text-white mb-0"><i class="icofont icofont-long-arrow-up"></i></h4>
        </a>
        <!-- End Top To Bottom-->

        <!-- Chat-->

        <!-- End Chat-->



        <!-- jQuery -->
        <script src="{{asset('/js/plugins.min.js')}}"></script>

        <script src="{{asset('/js/common.js')}}"></script>
        @yield('scripts')
    </body>

<!-- Mirrored from html.designstream.co.in/redial/style1/dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:04:41 GMT -->
</html>

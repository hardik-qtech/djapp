<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.designstream.co.in/redial/style1/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:10:04 GMT -->
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

        <!-- main-content-->
        <div class="wrapper">
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-5 mt-5">
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="mb-0 redial-font-weight-400">Sign In</h4>
                                @include('alert.alert')
                            </div>
                            <div class="redial-divider"></div>
                            <div class="card-body py-4 text-center">
                                <img src="dist/images/logo-v1.png" alt="" class="img-fluid mb-4">
                            <form method="POST" action="{{route('login')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-Mail"  name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="password" / >
                                    </div>

                                    <button class="btn btn-primary btn-md redial-rounded-circle-50 btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End main-content-->

        <!-- jQuery -->
        <script src="{{asset('/js/plugins.min.js')}}"></script>
        <script src="{{asset('/js/common.js')}}"></script>
    </body>

<!-- Mirrored from html.designstream.co.in/redial/style1/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2019 06:10:04 GMT -->
</html>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Businesses For Sale: No 1 in UK for Business Sale</title>
    <link rel="icon" href="{{url('icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Businesses For Sale: No 1 in UK for Business Sale" name="description" />
    <meta content="" name="keywords" />
    <meta content="" name="author" />
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{url('')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{url('')}}/css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link id="bootstrap-reboot" href="{{url('')}}/css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/jquery.countdown.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/style.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{url('')}}/css/colors/scheme-01.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/css/coloring.css" rel="stylesheet" type="text/css" />

    <script src="{{url('')}}/js/jquery.min.js"></script>
    <script src="{{url('')}}/js/bootstrap.min.js"></script>
    <script src="{{url('')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/js/wow.min.js"></script>
    <script src="{{url('')}}/js/jquery.isotope.min.js"></script>
    <script src="{{url('')}}/js/easing.js"></script>
    <script src="{{url('')}}/js/owl.carousel.js"></script>
    <script src="{{url('')}}/js/validation.js"></script>
    <script src="{{url('')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{url('')}}/js/enquire.min.js"></script>
    <script src="{{url('')}}/js/jquery.plugin.js"></script>
    <script src="{{url('')}}/js/jquery.countTo.js"></script>
    <script src="{{url('')}}/js/jquery.countdown.js"></script>
    <script src="{{url('')}}/js/jquery.lazy.min.js"></script>
    <script src="{{url('')}}/js/jquery.lazy.plugins.min.js"></script>
    <script src="{{url('')}}/js/designesia.js"></script>
    <script src="{{url('')}}/js/popper.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<div id="wrapper">
    <!-- header begin -->
    <header class="transparent header-light scroll-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex sm-pt10">
                        <div class="de-flex-col">
                            <div class="de-flex-col">
                                <!-- logo begin -->
                                <div id="logo" style="padding: 10px;padding-top: 20px">
{{--                                    <a href="{{url('')}}">--}}
{{--                                        <h3 style="color: black">{{env('APP_NAME')}}</h3>--}}
{{--                                    </a>--}}
                                    <a href="{{url('/')}}">
                                        <img alt="" class="logo" src="{{url('')}}/logo.png" style="height: 80px" />
                                        <img alt="" class="logo-2" src="{{url('')}}/logo.png" style="height: 80px" />
                                    </a>
                                </div>
                                <!-- logo close -->
                            </div>
                            {{--<div class="de-flex-col">--}}
                                {{--<input id="quick_search" class="xs-hide" name="quick_search" placeholder="search item here..." type="text" />--}}
                            {{--</div>--}}
                        </div>
                        <div class="de-flex-col header-col-mid">
                            <!-- mainmenu begin -->
                            @if(\Request::is('/'))
{{--                            <div class="menu_side_area">--}}
{{--                                <a href="#" class="btn-main" data-toggle="modal" data-target="#myModal" style="padding: 15px!important;">Sell Your Business</a>--}}
{{--                                <span id="menu-btn"></span>--}}
{{--                            </div>--}}
                            @endif
                            <ul id="mainmenu">
                                <li>
                                    <a href="{{url('')}}">Home<span></span></a>
{{--                                    <ul>--}}
{{--                                        <li><a href="03_grey-index.html">New: Homepage Grey</a></li>--}}
{{--                                        <li><a href="index.html">Homepage 1</a></li>--}}
{{--                                        <li><a href="index-2.html">Homepage 2</a></li>--}}
{{--                                        <li><a href="index-3.html">Homepage 3</a></li>--}}
{{--                                        <li><a href="index-4.html">Homepage 4</a></li>--}}
{{--                                    </ul>--}}
                                </li>
{{--                                <li>--}}
{{--                                    <a href="#">Explore<span></span></a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="explore.html">Explore</a></li>--}}
{{--                                        <li><a href="collection.html">Collections</a></li>--}}
{{--                                        <li><a href="item-details.html">Item Details</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li>
                                    <a href="#">Buy a Business<span></span></a>
                                    <ul>
                                        <li><a href="#">Business for sale</a></li>
                                        <li><a href="#">Register as buyer</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Sell a Business<span></span></a>
                                    <ul>
                                        <li><a href="{{url('list')}}">Sell your Business</a></li>
                                        <li><a href="#">How to sell your business</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Value a business<span></span></a>
                                </li>
{{--                                <li>--}}
{{--                                    <a href="activity.html">Activity<span></span></a>--}}
{{--                                </li>--}}
                                <li>
                                   @if(\Illuminate\Support\Facades\Session::has('userId'))
                                        <a href="{{url('user-dashboard')}}">My Account<span></span></a>
                                    @else
                                        <a href="#" data-toggle="modal" data-target="#myModal1122" >Login<span></span></a>

                                    @endif
{{--                                    <ul>--}}
{{--                                        <li><a href="icons-elegant.html">Elegant Icons</a></li>--}}
{{--                                        <li><a href="icons-etline.html">Etline Icons</a></li>--}}
{{--                                        <li><a href="icons-font-awesome.html">Font Awesome Icons</a></li>--}}
{{--                                        <li><a href="accordion.html">Accordion</a></li>--}}
{{--                                        <li><a href="alerts.html">Alerts</a></li>--}}
{{--                                        <li><a href="counters.html">Counters</a></li>--}}
{{--                                        <li><a href="modal.html">Modal</a></li>--}}
{{--                                        <li><a href="popover.html">Popover</a></li>--}}
{{--                                        <li><a href="pricing-table.html">Pricing Table</a></li>--}}
{{--                                        <li><a href="progress-bar.html">Progress Bar</a></li>--}}
{{--                                        <li><a href="tabs.html">Tabs</a></li>--}}
{{--                                        <li><a href="tooltips.html">Tooltips</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li>
                                    @if(\Illuminate\Support\Facades\Session::has('userId'))
                                    @else
                                        <a href="#" >Register<span></span></a>

                                    @endif
                                </li>
                                <li>
                                    <a class="btn btn-main" href="{{url('list')}}" style="color: white;margin-left: 20px;margin-top: 20px" >CREATE AN AD<span></span></a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="myModal1122">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div>
                            <h5 class="modal-title" style="text-align: center">Welcome! Sign in:</h5>
                            <p>
                                Don't have an account yet? <a href="{{url('buyer-registration')}}">Register</a>
                            </p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                            <div class="row" style="margin-top: 20px">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Address *</label>
                                        <input class="form-control" type="text" name="email" id="loginemail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input class="form-control" type="password" name="password" id="loginpassword" placeholder="Password">
                                    </div>
                                </div>
                                <div id="loadergif" style="margin: 0 auto;max-width: 100px;display: none">
                                    <img src="{{url('loader.gif')}}" style="height: 100px">
                                </div>
                                <div style="margin-top: 20px">
                                    <button class="btn btn-main" onclick="loginUser()">Login</button>
                                </div>

                            </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
        <script>
            function loginUser(){
                let loginemail = document.getElementById('loginemail').value;
                let loginpassword = document.getElementById('loginpassword').value;
                if (loginemail === '' || loginemail === undefined){
                    showError("Email is required");
                    return;
                }
                if (loginpassword === '' || loginpassword === undefined){
                    showError("Password is required");
                    return;
                }

                let formData = new FormData();
                formData.append('email', loginemail);
                formData.append('password', loginpassword);
                formData.append("_token", "{{ csrf_token() }}");

                document.getElementById('loadergif').style.display = 'flex';
                $.ajax({
                    url: `{{env('APP_URL')}}/login-user-api`,
                    type: 'POST',
                    dataType: "JSON",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function (result) {
                        document.getElementById('loadergif').style.display = 'none';

                        if (result.status === true) {
                            window.location.href = `{{env('APP_URL')}}/user-dashboard`

                        } else {
                            swal({
                                icon: 'error',
                                title: 'Oops...',
                                text: result.message,
                            });
                        }
                    },
                    error: function (data) {
                        document.getElementById('loadergif').style.display = 'none';

                        swal({
                            icon: 'error',
                            title: 'Oops...',
                            text: "server Error",
                        });
                    }
                });
            }
        </script>
    </header>

    <!-- header close -->

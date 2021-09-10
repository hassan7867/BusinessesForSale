@extends('layout/layout')

@section('content')
    <style>
        .form-control{
            /*width: inherit!important;*/
        }

        @import url('https://fonts.googleapis.com/css?family=Roboto');

        body{
            font-family: 'Roboto', sans-serif;
        }
        * {
            margin: 0;
            padding: 0;
        }
        i {
            margin-right: 10px;
        }

        /*------------------------*/
        input:focus,
        button:focus,
        .form-control:focus{
            outline: none;
            box-shadow: none;
        }
        .form-control:disabled, .form-control[readonly]{
            background-color: #fff;
        }
        /*----------step-wizard------------*/
        .d-flex{
            display: flex;
        }
        .justify-content-center{
            justify-content: center;
        }
        .align-items-center{
            align-items: center;
        }

        /*---------signup-step-------------*/
        .bg-color{
            background-color: #333;
        }
        .signup-step-container{
            padding: 150px 0px;
            padding-bottom: 60px;
        }




        .wizard .nav-tabs {
            position: relative;
            margin-bottom: 0;
            border-bottom-color: transparent;
        }

        .wizard > div.wizard-inner {
            position: relative;
            margin-bottom: 50px;
            text-align: center;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 15px;
            z-index: 1;
        }

        .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: inline-block;
            border-radius: 50%;
            background: #fff;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 16px;
            color: #0e214b;
            font-weight: 500;
            border: 1px solid #ddd;
        }
        span.round-tab i{
            color:#555555;
        }
        .wizard li.active span.round-tab {
            background: #934A5F;
            color: #fff;
            border-color: #934A5F;
        }
        .wizard li.active span.round-tab i{
            color: #5bc0de;
        }
        .wizard .nav-tabs > li.active > a i{
            color: #0db02b;
        }

        .wizard .nav-tabs > li {
            width: 20%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: red;
            transition: 0.1s ease-in-out;
        }



        .wizard .nav-tabs > li a {
            width: 30px;
            height: 30px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
            background-color: transparent;
            position: relative;
            top: 0;
        }
        .wizard .nav-tabs > li a i{
            position: absolute;
            top: -15px;
            font-style: normal;
            font-weight: 400;
            white-space: nowrap;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: 700;
            color: #000;
        }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 0px;
        }


        .wizard h3 {
            margin-top: 0;
        }
        .prev-step,
        .next-step{
            font-size: 13px;
            padding: 8px 24px;
            border: none;
            border-radius: 4px;
            margin-top: 30px;
        }
        .next-step{
            background-color: #934A5F;
            color: white;
        }
        .skip-btn{
            background-color: #cec12d;
        }
        .step-head{
            font-size: 20px;
            text-align: center;
            font-weight: 500;
            margin-bottom: 20px;
        }
        .term-check{
            font-size: 14px;
            font-weight: 400;
        }
        .custom-file {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 40px;
            margin-bottom: 0;
        }
        .custom-file-input {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 40px;
            margin: 0;
            opacity: 0;
        }
        .custom-file-label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1;
            height: 40px;
            padding: .375rem .75rem;
            font-weight: 400;
            line-height: 2;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: .25rem;
        }
        .custom-file-label::after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 3;
            display: block;
            height: 38px;
            padding: .375rem .75rem;
            line-height: 2;
            color: #495057;
            content: "Browse";
            background-color: #e9ecef;
            border-left: inherit;
            border-radius: 0 .25rem .25rem 0;
        }
        .footer-link{
            margin-top: 30px;
        }
        .all-info-container{

        }
        .list-content{
            margin-bottom: 10px;
        }
        .list-content a{
            padding: 10px 15px;
            width: 100%;
            display: inline-block;
            background-color: #f5f5f5;
            position: relative;
            color: #565656;
            font-weight: 400;
            border-radius: 4px;
        }
        .list-content a[aria-expanded="true"] i{
            transform: rotate(180deg);
        }
        .list-content a i{
            text-align: right;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: 0.5s;
        }
        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: #fdfdfd;
        }
        .list-box{
            padding: 10px;
        }
        .signup-logo-header .logo_area{
            width: 200px;
        }
        .signup-logo-header .nav > li{
            padding: 0;
        }
        .signup-logo-header .header-flex{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .list-inline li{
            display: inline-block;
        }
        .pull-right{
            float: right;
        }
        /*-----------custom-checkbox-----------*/
        /*----------Custom-Checkbox---------*/
        /*input[type="checkbox"]{*/
        /*    position: relative;*/
        /*    display: inline-block;*/
        /*    margin-right: 5px;*/
        /*}*/
        /*input[type="checkbox"]::before,*/
        /*input[type="checkbox"]::after {*/
        /*    position: absolute;*/
        /*    content: "";*/
        /*    display: inline-block;*/
        /*}*/
        /*input[type="checkbox"]::before{*/
        /*    height: 16px;*/
        /*    width: 16px;*/
        /*    border: 1px solid #999;*/
        /*    left: 0px;*/
        /*    top: 0px;*/
        /*    background-color: #fff;*/
        /*    border-radius: 2px;*/
        /*}*/
        /*input[type="checkbox"]::after{*/
        /*    height: 5px;*/
        /*    width: 9px;*/
        /*    left: 4px;*/
        /*    top: 4px;*/
        /*}*/
        /*input[type="checkbox"]:checked::after{*/
        /*    content: "";*/
        /*    border-left: 1px solid #fff;*/
        /*    border-bottom: 1px solid #fff;*/
        /*    transform: rotate(-45deg);*/
        /*}*/
        /*input[type="checkbox"]:checked::before{*/
        /*    background-color: #934A5F;*/
        /*    border-color: #934A5F;*/
        /*}*/






        @media (max-width: 767px){
            .sign-content h3{
                font-size: 40px;
            }
            .wizard .nav-tabs > li a i{
                display: none;
            }
            .signup-logo-header .navbar-toggle{
                margin: 0;
                margin-top: 8px;
            }
            .signup-logo-header .logo_area{
                margin-top: 0;
            }
            .signup-logo-header .header-flex{
                display: block;
            }
        }


        @media screen and (max-width: 700px) {
           .respcontaineralong{
               padding-left: 0px;
               padding-right: 0px;
           }
        }

    </style>
{{--    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">--}}
    <input type="hidden" id="userSession" value="{{\Illuminate\Support\Facades\Session::has('userId') ?? ''}}">
    <div class="container" style="padding: 30px;margin-top: 100px">
        @if(\Illuminate\Support\Facades\Session::has('userId'))
            <div>
                <div style="float: right"><span></span> <a  href="{{url('user-dashboard')}}" style="margin-left: 15px">MY ACCOUNT </a></div>
            </div>
        @else
            <div>
                <div style="float: right"><span>Are you can existing member?</span> <a  href="{{url('user-login')}}"  style="margin-left: 15px">LOGIN </a></div>
            </div>
        @endif
        <div style="padding: 10px">
            <section class="signup-step-container" style="padding-top: 100px">
                <div class="container respcontaineralong">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i >Contact Details</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>BUILD AD</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Promotion</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Payment</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Done</i></a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form" action="index.html" class="login-box">
                                    <div class="tab-content" id="main_form">
{{--                                        <div id="loadergifcustom" style="margin: 0 auto;max-width: 100px;display: none">--}}
{{--                                            <img src="{{url('loader.gif')}}" style="height: 100px">--}}
{{--                                        </div>--}}
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <h4 class="text-center">Register with {{env('APP_NAME')}}</h4>
                                            <div class="row" style="margin-top: 50px">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Title *</label>
                                                        <select class="form-control" name="title" id="title" >
                                                            <option value="">Select Your Title</option>
                                                            <option value="Mr">Mr</option>
                                                            <option value="Mrs">Mrs</option>
                                                            <option value="Miss">Miss</option>
                                                            <option value="Ms">Ms</option>
                                                            <option value="Dr">Dr</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name *</label>
                                                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name *</label>
                                                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name">
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Telephone *</label>
                                                        <input class="form-control" type="text" name="telephone" id="telephone" placeholder="Telephone">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Address *</label>
                                                        <input class="form-control" type="text" name="email" id="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Password *</label>
                                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirm Password *</label>
                                                        <input class="form-control" type="password" name="conpassword" id="conpassword" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step2">
                                            <h4 class="text-center">Post an ad</h4>
                                            <p style="margin-top: 10px;margin-bottom: 10px">
                                                <a id="collapseId0" style="font-size: 18px"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    What type of business are you selling?
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample">
                                                <div class="card card-body">
                                                    <div class="form-group" style="margin-top: 10px;margin-bottom: 10px">
                                                        <label style="font-weight: bold;color: black">Business Status*</label>
                                                        <br>
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusinessforSale" value="For Sale" checked style="margin-left: 10px"> For Sale
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusinessunderOffer" value="Under Offer" style="margin-left: 10px"> Under Offer
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusinesssold" value="Sold (Subject to Contract)" style="margin-left: 10px"> Sold (Subject to Contract)
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <p style="font-weight: bold;color: black">Select Your Business Type * </p>
                                                        <div class="row">
                                                            <div class="col-md-4" id="headCategories">

                                                            </div>
                                                            <div class="col-md-4" id="subheadCategories">

                                                            </div>
                                                            <div class="col-md-4" id="subheadCategories2">

                                                            </div>
                                                        </div>
                                                        <p  style="font-weight: bold;color: black">Selected Categories will show here</p>
                                                        <div id="selected-categories">

                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div>
                                                            <p  style="font-weight: bold;color: black">Location *</p>
                                                            <select id="cities" class="form-control">
                                                                <option value="">Select Location</option>
                                                                @foreach($cities as $city)
                                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <input type="checkbox" name="dontListLocation" id="dontListLocation" style="margin-left: 10px;position: relative!important;" onclick="dontListLoc()"><span style=";margin-left: 5px">Don't list under a location</span>

                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <input type="checkbox" name="showAsConfidentialSale" id="showAsConfidentialSale" style="margin-left: 10px;position: relative!important;" ><span style=";margin-left: 5px">Show as confidential sale</span>

                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <p  style="font-weight: bold;color: black">Relocatable</p>
                                                        <input type="radio" name="relocatable" id="relocatableYes"
                                                               value="Yes" style="margin-left: 10px"> Yes
                                                        <input type="radio" name="relocatable" id="relocatableNo"
                                                               value="No" style="margin-left: 10px" checked> NO
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Location Details *</label>
                                                            <textarea class="form-control" type="text" style=";height: 150px" name="locationDetails" id="locationDetails" placeholder="Location Details.."></textarea>
                                                        </div>
                                                    </div>
                                                   <div style="margin: 0 auto;max-width: 250px;">
                                                       <button type="button" class="btn btn-outline-dark" onclick="gotoNextCollapse(0)">NEXT</button>
                                                   </div>
                                                </div>
                                            </div>
                                            <p style="margin-top: 10px;margin-bottom: 10px">
                                                <a id="collapseId1" style="font-size: 18px"  data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                                    Choose a title for your advert and tell us more about your business
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample1">
                                                <div class="card card-body">
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Advert Heading *</label>
                                                            <input class="form-control" type="text" name="heading" id="heading" placeholder="Heading">
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Business Summary *</label>
                                                            <textarea class="form-control" type="text" style=";height: 150px" name="summary" id="summary" placeholder="Summary"></textarea>
                                                        </div>
                                                    </div>
                                                    <div style="margin: 0 auto;max-width: 250px;">
                                                        <button type="button" class="btn btn-outline-dark" onclick="gotoNextCollapse(1)">NEXT</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="margin-top: 10px;margin-bottom: 10px">
                                                <a id="collapseId2" style="font-size: 18px"  data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                                    What is the asking price?
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample2">
                                                <div class="card card-body">
                                                    <div style="margin-top: 10px;margin-bottom: 10px" id="askingpricediv">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Asking Price Heading (USD) *</label>
                                                            <input class="form-control" placeholder="Asking Price" type="text" value="" name="askingSpecificPrice" id="askingSpecificPrice" ></div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Show price as *</label>
                                                            <input type="radio" name="askingPriceAs" id="askingPriceAsaskingPrice" value="Asking Price" checked style="margin-left: 10px" onclick="document.getElementById('askingpricediv').style.display = 'block'"> Asking Price
                                                            <input type="radio" name="askingPriceAs" id="askingPriceAsofferInvited" value="Offer Invited" style="margin-left: 10px" onclick="document.getElementById('askingpricediv').style.display = 'none'"> Offer Invited
                                                            <input type="radio" name="askingPriceAs" id="askingPriceAspriceOnApplication" value="Price on Application (POA)" style="margin-left: 10px" onclick="document.getElementById('askingpricediv').style.display = 'none'"> Price on Application (POA)
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Property Status *</label>
                                                            <input type="radio" value="Free Hold" name="propertyStatus" id="propertyStatusFreeHold" style="margin-left: 10px"> Free Hold
                                                            <input type="radio" value="Lease" name="propertyStatus" id="propertyStatusLease" style="margin-left: 10px"> Lease
                                                            <input type="radio" value="Both freehold and leasehold" name="propertyStatus" id="propertyStatusBoth" style="margin-left: 10px"> Both
                                                            <input type="radio" value="N/A" name="propertyStatus" id="propertyStatusNA" style="margin-left: 10px" checked> N/A
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <label  style="font-weight: bold;color: black">Turnover (USD) *</label>
                                                        <div class="row" style="margin-top: 25px">
                                                            <div class="col-md-6" style="margin-top: 5px">
                                                                <input class="form-control" placeholder="Turn over" type="text" value="" name="turnOver" id="turnOver" >
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 5px">
                                                                <select id="turnOverTerm" style="padding: 10px" class="form-control">
                                                                    <option value="Annual" selected>Annual</option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <label  style="font-weight: bold;color: black">NetProfit (USD) *</label>
                                                        <div class="row" style="margin-top: 25px">
                                                            <div class="col-md-6" style="margin-top: 5px">
                                                                <input class="form-control" placeholder="Net Profit" type="text" value="" name="netProfit" id="netProfit" >
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 5px">
                                                                <select id="netProfitTerm" style="padding: 10px" class="form-control">
                                                                    <option value="Annual" selected>Annual</option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="margin: 0 auto;max-width: 250px;">
                                                        <button type="button" class="btn btn-outline-dark" onclick="gotoNextCollapse(2)">NEXT</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <p style="margin-top: 10px;margin-bottom: 10px">
                                                <a id="collapseId3" style="font-size: 18px"  data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                                    Additional Business Information
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample3">
                                                <div class="card card-body">
                                                    <p style="color: cornflowerblue">
                                                        You can provide further information on your business in this section. For example, any competitive considerations or business handover support following a successful sale.

                                                    </p>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Website </label>
                                                            <input class="form-control" type="text" name="websiteAddress" id="websiteAddress" placeholder="https://">
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Support & training</label>
                                                            <textarea class="form-control" type="text" style="height: 150px" name="supportAndTraining" id="supportAndTraining" placeholder="Support And Training"></textarea>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Is accommodation included?</label>
                                                            <input type="radio" name="accomodationIncluded" id="accomodationIncludedYes" value="Yes"  style="margin-left: 10px"> YES
                                                            <input type="radio" name="accomodationIncluded" id="accomodationIncludedNo" value="No" style="margin-left: 10px" checked> No
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Is this business homebased?</label>
                                                            <input type="radio" name="homebased" id="homebasedYes" value="Yes"  style="margin-left: 10px"> YES
                                                            <input type="radio" name="homebased" id="homebasedNo" value="No" style="margin-left: 10px" checked> No
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Is this business In administrative/receivership</label>
                                                            <input type="radio" name="administrative" id="administrativeYes" value="Yes"  style="margin-left: 10px"> YES
                                                            <input type="radio" name="administrative" id="administrativedNo" value="No" style="margin-left: 10px" checked> No
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Trading hours</label>
                                                            <input type="text" name="tradingHours" id="tradingHours" value=""  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="form-group">
                                                            <label  style="font-weight: bold;color: black">Number of Employees</label>
                                                            <input type="text" name="numberOfEmployees" id="numberOfEmployees" value=""  class="form-control">
                                                        </div>
                                                    </div>
                                                    <div style="margin: 0 auto;max-width: 250px;">
                                                        <button type="button" class="btn btn-outline-dark" onclick="gotoNextCollapse(3)">NEXT</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <p style="margin-top: 10px;margin-bottom: 10px">
                                                <a id="collapseId4" style="font-size: 18px"  data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                                    Upload some photos videos and documents
                                                </a>
                                            </p>
                                            <div class="collapse" id="collapseExample4">
                                                <div class="card card-body">
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="row" style="margin-top: 25px">
                                                            <div class="col-md-4">
                                                                <p style="font-weight: bold;color: black">Upload Photos </p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="file" name="photos" id="photos" accept="image/png, image/gif, image/jpeg" multiple>
                                                                <p style="font-size: 12px">you can upload multiple photos by holding CTRL button</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <p style="font-weight: bold;color: black">Embed Video</p>
                                                        <input type="text" name="embededVideo" id="embededVideo" placeholder="<iframe ..."  class="form-control">
                                                    </div>
                                                    <div style="margin-top: 10px;margin-bottom: 10px">
                                                        <div class="row" style="margin-top: 25px">
                                                            <div class="col-md-4">
                                                                <p style="font-weight: bold;color: black">Upload Document </p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="file" name="documents" id="documents" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*" multiple>
                                                                <p style="font-size: 12px">you can upload multiple document by holding CTRL button</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step" style="display:none">Back</button></li>
                                                <li><button type="button" class="default-btn next-step skip-btn" style="display:none">Skip</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <h4 class="text-center">Promotion</h4>
                                            <p style="text-align: center">You have selected our {{$package->duration ?? ''}} plan in {{$package->price}} USD</p>
                                            <h3>Add Promotion to get more buyers viewing your business</h3>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="checkbox" name="promote" id="promote" onclick="promotionClick()">
                                                </div>
                                                <div class="col-md-9">
                                                    <p style="color: #0a58ca">Display your business on the home page USD 85</p>
                                                    <p>
                                                        Your business will appear on the Home page for 7 days. Inclusion on the gallery can boost your business buyer
                                                        views as much as 87%
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    @if($package->featured_promotion_worth == 0)
                                                        <input type="checkbox" name="featured" id="featured" onclick="featuredPromotionClick()">
                                                    @else
                                                        <input type="checkbox" name="featured" checked id="featured" disabled>
                                                    @endif
                                                </div>
                                                <div class="col-md-9">
                                                    <p style="color: #0a58ca">Featured your business from USD 45</p>
                                                    @if($package->featured_promotion_worth == 0)
                                                        <p>
                                                            Featured business is not included on your current selected plan.
                                                        </p>
                                                    @else
                                                        <p>
                                                            Featured business is already included on your current selected plan.
                                                        </p>
                                                    @endif

                                                </div>
                                            </div>
                                           <div class="container">
                                               <table class="table table-bordered">
                                                   <thead>
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Price</th>
                                                        </tr>
                                                   </thead>
                                                   <tbody id="totalCostPromotion">
                                                        <tr>
                                                            <td>{{$package->duration}} plan for advertising</td>
                                                            <td>{{$package->price}} USD</td>
                                                        </tr>
                                                   </tbody>
                                                   <tbody>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td id="total-after-promotion">{{$package->price}} USD</td>
                                                        </tr>
                                                   </tbody>
                                               </table>
                                           </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step" style="display:none">Back</button></li>
                                                <li><button type="button" class="default-btn next-step skip-btn" style="display:none">Skip</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <h4 class="text-center">Payment</h4>
                                            <div class="container">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="totalCostPromotion1">
                                                    <tr>
                                                        <td>{{$package->duration}} plan for advertising</td>
                                                        <td>{{$package->price}} USD</td>
                                                    </tr>
                                                    </tbody>
                                                    <tbody>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td id="total-after-promotion1">{{$package->price}} USD</td>
                                                    </tr>
                                                    </tbody>
                                                </table>


                                                <div style=";margin-top: 25px;" id="card-details">
                                                    <input type="hidden" id="stripeToken" name="stripeToken">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p style="font-weight: bold">Name on Card</p>
                                                            <input type="text" name="nameOnCard" id="nameOnCard" class="form-control">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p style="font-weight: bold">Card Number</p>
                                                            <input type="text" name="cardNumber" id="cardNumber" class="form-control">
                                                        </div>

                                                    </div>
                                                    <div style="margin-top: 20px" class="row">
                                                        <div class="col-md-4">
                                                                <p style="font-weight: bold">CVV</p>
                                                                <input type="text" name="cvv" id="cvv" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 20px" class="row">
                                                        <div class="col-md-4">
                                                            <p style="font-weight: bold">Expiry Month</p>
                                                            <input type="text" name="exp_month" id="exp_month" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div style="margin-top: 20px" class="row">
                                                        <div class="col-md-4">
                                                            <p style="font-weight: bold">Expiry Year</p>
                                                            <input type="text" name="exp_year" id="exp_year" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="margin-top: 25px">
                                                    <div>
                                                        <input type="checkbox" name="mailingList" id="mailingList" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Yes. Sign me up for the mailing list</span>

                                                    </div>
                                                    <div style="margin-top: 10px">
                                                        <input type="checkbox" name="termsAndConditions" id="termsAndConditions" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Yes. I agree to the <span style="color: blue;text-decoration: underline">terms and conditions</span></span>

                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step" style="display:none">Back</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div style="margin: 0 auto;max-width: 250px;display: none" id="loadergifcustom">
{{--                                            <h2 style="color: green">saving you data...</h2>--}}
                                            <img src="{{url('loader.gif')}}" style="height: 100px">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <input type="hidden" id="total-package-price" value="{{$package->price ?? 0}}">
    <input type="hidden" id="total-package-id" value="{{$package->id ?? 0}}">
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script>
    // ------------step-wizard-------------
    let currentStep  = 1;
    $(document).ready(function () {


        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        let sessionVal = document.getElementById('userSession').value;
        if (sessionVal !== '' && sessionVal !== undefined &&sessionVal > 0){
            currentStep = 1;
            gotoNextStep();
        }


        $(".next-step").click(function (e) {

            // var active = $('.wizard .nav-tabs li.active');
            // active.next().removeClass('disabled');
            // nextTab(active);
            if (currentStep === 1){
                saveBasicDetails();
            }
            else if (currentStep === 2){
                saveListingDetails();
                // gotoNextStep();
            }
            else if (currentStep === 3){
                saveBusinessDetails();
                // gotoNextStep();
            }
            else if (currentStep === 4){
                saveSubscriptionDetails();
            }
            else if (currentStep === 5){
                fianlizeWizard();
            }
            // gotoNextStep();
            // if (currentStep === 5){
            //     fianlizeWizard();
            // }else{
            //     gotoNextStep();
            // }



        });
        $(".prev-step").click(function (e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });

        document.getElementById('collapseId0').click();
        totalAfterPromotion = parseInt(document.getElementById('total-package-price').value);
    });

    function gotoNextCollapse(val){
        document.getElementById('collapseId' + (parseInt(val) + 1) ).click();
    }

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
        currentStep++;
        if (currentStep === 2){
            getCategories(-1);
        }
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

    let locListed = true;
    function dontListLoc(){
        if (locListed === true){
            document.getElementById('cities').setAttribute('disabled', true);
            locListed = false;
        }else{
            document.getElementById('cities').removeAttribute('disabled');
            locListed = true;
        }
    }

    let sevenDaysPromotion = 0;
    let featuredPromotion = 0;
    let totalAfterPromotion = 0;

    function promotionClick(){
        if (document.getElementById('promote').checked){
            sevenDaysPromotion = 85;
            let tr = document.createElement('tr');
            tr.setAttribute('id', 'seven-day-tr');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            td1.innerText = 'Seven days promotion';
            td2.innerText = sevenDaysPromotion + ' USD';
            tr.appendChild(td1);
            tr.appendChild(td2);
            document.getElementById('totalCostPromotion').appendChild(tr);

        }else{
            sevenDaysPromotion = 0;
            document.getElementById('seven-day-tr').remove();
        }
        totalAfterPromotion = 0;
        totalAfterPromotion = parseInt(document.getElementById('total-package-price').value);
        totalAfterPromotion  = parseInt(totalAfterPromotion) + parseInt(sevenDaysPromotion) + parseInt(featuredPromotion);
        document.getElementById('total-after-promotion').innerHTML = totalAfterPromotion + ' USD'

    }

    function featuredPromotionClick(){
        if (document.getElementById('featured').checked){
            featuredPromotion = 45;
            let tr = document.createElement('tr');
            tr.setAttribute('id', 'featured-tr');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            td1.innerText = 'Featured promotion';
            td2.innerText = featuredPromotion + ' USD';
            tr.appendChild(td1);
            tr.appendChild(td2);
            document.getElementById('totalCostPromotion').appendChild(tr);
        }else{
            featuredPromotion = 0;
            document.getElementById('featured-tr').remove();
        }
        totalAfterPromotion = 0;
        totalAfterPromotion = parseInt(document.getElementById('total-package-price').value);
        totalAfterPromotion  = parseInt(totalAfterPromotion) + parseInt(sevenDaysPromotion) + parseInt(featuredPromotion)
        document.getElementById('total-after-promotion').innerHTML = totalAfterPromotion + ' USD'

    }


    function saveBusinessDetails(){
        sevenDaysPromotion = 0;
        if (document.getElementById('promote').checked){
            sevenDaysPromotion = 85;
            let tr = document.createElement('tr');
            tr.setAttribute('id', 'seven-day-tr1');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            td1.innerText = 'Seven days promotion';
            td2.innerText = sevenDaysPromotion + ' USD';
            tr.appendChild(td1);
            tr.appendChild(td2);
            document.getElementById('totalCostPromotion1').appendChild(tr);

        }
        featuredPromotion = 0;
        if (document.getElementById('featured').checked){
            featuredPromotion = 45;
            let tr = document.createElement('tr');
            tr.setAttribute('id', 'featured-tr1');
            let td1 = document.createElement('td');
            let td2 = document.createElement('td');
            td1.innerText = 'Featured promotion';
            td2.innerText = featuredPromotion + ' USD';
            tr.appendChild(td1);
            tr.appendChild(td2);
            document.getElementById('totalCostPromotion1').appendChild(tr);
        }

        totalAfterPromotion = 0;
        totalAfterPromotion = parseInt(document.getElementById('total-package-price').value);
        totalAfterPromotion  = parseInt(totalAfterPromotion) + parseInt(sevenDaysPromotion) + parseInt(featuredPromotion)
        document.getElementById('total-after-promotion1').innerHTML = totalAfterPromotion + ' USD';
        if(totalAfterPromotion === 0){
            document.getElementById('card-details').style.display = 'none';
        }else{
            document.getElementById('card-details').style.display = 'block';
        }
        gotoNextStep();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });

    function gotoNextStep(){
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
    }

    function saveBasicDetails(){

        let title = document.getElementById('title').value;
        let firstName = document.getElementById('firstName').value;
        let lastName = document.getElementById('lastName').value;
        let telephone = document.getElementById('telephone').value;
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;
        let conpassword = document.getElementById('conpassword').value;
        if (title === '' || title === undefined){
            showError("Title is required");
            return;
        }
        if (firstName === '' || firstName === undefined){
            showError("First Name is required");
            return;
        }
        if (lastName === '' || lastName === undefined){
            showError("Last Name is required");
            return;
        }
        if (telephone === '' || telephone === undefined){
            showError("Telephone is required");
            return;
        }
        if (email === '' || email === undefined){
            showError("Email is required");
            return;
        }
        if (password === '' || password === undefined){
            showError("Password is required");
            return;
        }
        if (password !== conpassword){
            showError("Confirm Password does not match with password");
            return;
        }

        let formData = new FormData();
        formData.append('title', title);
        formData.append('firstName', firstName);
        formData.append('lastName',  lastName);
        formData.append('telephone',  telephone);
        formData.append('email',  email);
        formData.append('password',  password);


        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergifcustom').style.display = 'block';
        $.ajax({
            url: `{{env('APP_URL')}}/save-basic-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergifcustom').style.display = 'none';

                if (result.status === true) {
                    gotoNextStep();

                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {
                document.getElementById('loadergifcustom').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function saveListingDetails(){

        let forSale = document.getElementById('statusOfBusinessforSale').checked;
        let underOffer = document.getElementById('statusOfBusinessunderOffer').checked;
        let sold = document.getElementById('statusOfBusinesssold').checked;
        let cities = document.getElementById('cities').value;
        let dontListLocation = document.getElementById('dontListLocation').value;
        let showAsConfidentialSale = document.getElementById('showAsConfidentialSale').value;
        let locationDetails = document.getElementById('locationDetails').value;
        let heading = document.getElementById('heading').value;
        let summary = document.getElementById('summary').value;
        let askingSpecificPrice = document.getElementById('askingSpecificPrice').value;
        let askingPriceAsaskingPrice = document.getElementById('askingPriceAsaskingPrice').checked;
        let askingPriceAsofferInvited = document.getElementById('askingPriceAsofferInvited').checked;
        let askingPriceAspriceOnApplication = document.getElementById('askingPriceAspriceOnApplication').checked;


        let propertyStatusFreeHold = document.getElementById('propertyStatusFreeHold').checked;
        let propertyStatusLease = document.getElementById('propertyStatusLease').checked;
        let propertyStatusBoth = document.getElementById('propertyStatusBoth').checked;
        let propertyStatusNA = document.getElementById('propertyStatusNA').checked;

        let turnOver = document.getElementById('turnOver').value;
        let turnOverTerm = document.getElementById('turnOverTerm').value;

        let netProfit = document.getElementById('netProfit').value;
        let netProfitTerm = document.getElementById('netProfitTerm').value;
        let websiteAddress = document.getElementById('websiteAddress').value;
        let supportAndTraining = document.getElementById('supportAndTraining').value;

        let accomodationIncludedYes = document.getElementById('accomodationIncludedYes').checked;
        let accomodationIncludedNo = document.getElementById('accomodationIncludedNo').checked;

        let homebasedNo = document.getElementById('homebasedNo').checked;
        let homebasedYes = document.getElementById('homebasedYes').checked;

        let administrativeYes = document.getElementById('administrativeYes').checked;
        let administrativedNo = document.getElementById('administrativedNo').checked;

        let relocatableYes = document.getElementById('relocatableYes').checked;
        let relocatableNo = document.getElementById('relocatableNo').checked;

        let tradingHours = document.getElementById('tradingHours').value;
        let numberOfEmployees = document.getElementById('numberOfEmployees').value;
        let photos = document.getElementById('photos').files;
        let documents = document.getElementById('documents').files;
        let embededVideo = document.getElementById('embededVideo').value;

        let statusOfBusiness = 'For Sale';

        if (forSale === true){
            statusOfBusiness = document.getElementById('statusOfBusinessforSale').value;
        }else  if (underOffer === true){
            statusOfBusiness = document.getElementById('statusOfBusinessunderOffer').value;
        }else  if (sold === true){
            statusOfBusiness = document.getElementById('statusOfBusinesssold').value;
        }
        let askingPriceAs = 'Asking Price';
        if (askingPriceAsaskingPrice === true){
            askingPriceAs = document.getElementById('askingPriceAsaskingPrice').value;
        }else  if (askingPriceAsofferInvited === true){
            askingPriceAs = document.getElementById('askingPriceAsofferInvited').value;
        }else  if (askingPriceAspriceOnApplication === true){
            askingPriceAs = document.getElementById('askingPriceAspriceOnApplication').value;
        }
        let propertyStatus = 'N/A';
        if (propertyStatusFreeHold === true){
            propertyStatus = document.getElementById('propertyStatusFreeHold').value;
        }else  if (propertyStatusLease === true){
            propertyStatus = document.getElementById('propertyStatusLease').value;
        }else  if (propertyStatusBoth === true){
            propertyStatus = document.getElementById('propertyStatusBoth').value;
        }else  if (propertyStatusNA === true){
            propertyStatus = document.getElementById('propertyStatusNA').value;
        }
        let accomodationIncluded = 'No';
        if (accomodationIncludedYes === true){
            accomodationIncluded = document.getElementById('accomodationIncludedYes').value;
        }else  if (accomodationIncludedNo === true){
            accomodationIncluded = document.getElementById('accomodationIncludedNo').value;
        }
        let homebased = 'No';
        if (homebasedYes === true){
            homebased = document.getElementById('homebasedYes').value;
        }else  if (homebasedNo === true){
            homebased = document.getElementById('homebasedNo').value;
        }
        let administrative = 'No';
        if (administrativeYes === true){
            administrative = document.getElementById('administrativeYes').value;
        }else  if (administrativedNo === true){
            administrative = document.getElementById('administrativedNo').value;
        }

        let relocatable = 'No';
        if (relocatableYes === true){
            relocatable = document.getElementById('relocatableYes').value;
        }else  if (relocatableNo === true){
            relocatable = document.getElementById('relocatableNo').value;
        }


        if (selectedCategoriesList.length === 0){
            showError("Category not selected");
            return;
        }
        else if (cities === '' || cities === undefined){
            showError("Location is required");
            return;
        }
        else if (locationDetails === '' || locationDetails === undefined){
            showError("Location Details are required");
            return;
        }
        else if (heading === '' || heading === undefined){
            showError("Advert Heading is required");
            return;
        }
        else if (summary === '' || summary === undefined){
            showError("Business Summary/Description is required");
            return;
        }
        else if (askingPriceAsaskingPrice === true && askingSpecificPrice === ''){
            showError("Asking Price is required");
            return;
        }
        else if (turnOver === ''){
            showError("Turnover is required");
            return;
        }
        else if (turnOverTerm === ''){
            showError("Turnover Term is required");
            return;
        }
        else if (netProfit === ''){
            showError("Net Profit is required");
            return;
        }
        else if (netProfitTerm === ''){
            showError("Net Profit Term is required");
            return;
        }

        let askingprice = askingSpecificPrice;

        let formData = new FormData();
        formData.append('heading', heading);
        formData.append('summary', summary);
        formData.append('statusOfBusiness',  statusOfBusiness);
        formData.append('selectedCategoriesList',  JSON.stringify(selectedCategoriesList));
        formData.append('cities',  cities);
        formData.append('dontListLocation',  dontListLocation);
        formData.append('showAsConfidentialSale',  showAsConfidentialSale);
        formData.append('relocatable',  relocatable);
        formData.append('locationDetails',  locationDetails);
        formData.append('askingPrice',  askingprice);
        formData.append('askingPriceAs',  askingPriceAs);
        formData.append('propertyStatus',  propertyStatus);
        formData.append('turnOver',  turnOver);
        formData.append('turnOverTerm',  turnOverTerm);
        formData.append('netProfit',  netProfit);
        formData.append('netProfitTerm',  netProfitTerm);
        formData.append('websiteAddress',  websiteAddress);
        formData.append('supportAndTraining',  supportAndTraining);
        formData.append('accomodationIncluded',  accomodationIncluded);
        formData.append('homebased',  homebased);
        formData.append('administrative',  administrative);
        formData.append('tradingHours',  tradingHours);
        formData.append('numberOfEmployees',  numberOfEmployees);
        formData.append('embededVideo',  embededVideo);
        for (let i=0;i<photos.length;i++){
            formData.append('photos[]',  photos[i]);
        }
        for (let i=0;i<documents.length;i++){
            formData.append('documents[]',  documents[i]);
        }
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergifcustom').style.display = 'block';
        $.ajax({
            url: `{{env('APP_URL')}}/save-listing-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergifcustom').style.display = 'none';

                if (result.status === true) {
                    gotoNextStep();

                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {
                document.getElementById('loadergifcustom').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function onRadioSubscriptionchange(value){
        if (value !== 'limitedTrial'){
            document.getElementById('card-details').style.display = 'block';
        }else{
            document.getElementById('card-details').style.display = 'none';
        }
    }

    function fianlizeWizard(){
        let formData = new FormData();
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergifcustom').style.display = 'block';
        $.ajax({
            url: `{{env('APP_URL')}}/finalize-wizard`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergifcustom').style.display = 'none';
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
                document.getElementById('loadergifcustom').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function saveSubscriptionDetails(){

        let packageId = document.getElementById('total-package-id').value;
        let packagePrice = document.getElementById('total-package-price').value;
        let nameOnCard = document.getElementById('nameOnCard').value;
        let cardNumber = document.getElementById('cardNumber').value;
        let cvv = document.getElementById('cvv').value;
        let exp_month = document.getElementById('exp_month').value;
        let exp_year = document.getElementById('exp_year').value;
        let mailingList = document.getElementById('mailingList').checked;
        let termsAndConditions = document.getElementById('termsAndConditions').checked;
        if (parseInt(packagePrice) !== 0){
            if (nameOnCard === '' || nameOnCard === undefined){
                showError("Name on Card is required");
                return;
            }
            if (cardNumber === '' || cardNumber === undefined){
                showError("Card Number is required");
                return;
            }
            if (cvv === '' || cvv === undefined){
                showError("CVV is required");
                return;
            }
            if (exp_month === '' || exp_month === undefined){
                showError("Exp month is required");
                return;
            }
            if (exp_year === '' || exp_year === undefined){
                showError("Exp year is required");
                return;
            }
        }

        if (termsAndConditions === false){
            showError("You must accept terms and conditions");
            return;
        }

        Stripe.setPublishableKey(`{{env('STRIPE_KEY')}}`);
        Stripe.createToken({
            number: cardNumber,
            cvc: cvv,
            exp_month: exp_month,
            exp_year: exp_year
        }, stripeResponseHandler);

    }

    function stripeResponseHandler(status, response){
        var token = response['id'];
        document.getElementById('stripeToken').value = token;
        let nameOnCard = document.getElementById('nameOnCard').value;
        let cardNumber = document.getElementById('cardNumber').value;
        let cvv = document.getElementById('cvv').value;
        let exp_month = document.getElementById('exp_month').value;
        let exp_year = document.getElementById('exp_year').value;
        let mailingList = document.getElementById('mailingList').checked;
        let termsAndConditions = document.getElementById('termsAndConditions').checked;

        let packageId = document.getElementById('total-package-id').value;
        let packagePrice = document.getElementById('total-package-price').value;
        let formData = new FormData();
        formData.append('packageId', packageId);
        formData.append('nameOnCard', nameOnCard);
        formData.append('cardNumber',  cardNumber);
        formData.append('cvv',  cvv);
        formData.append('exp_month',  exp_month);
        formData.append('exp_year',  exp_year);
        formData.append('mailingList',  mailingList);
        formData.append('termsAndConditions',  termsAndConditions);
        formData.append('totalAfterPromotion',  totalAfterPromotion);
        formData.append('sevenDaysPromotion',  sevenDaysPromotion);
        formData.append('featuredPromotion',  featuredPromotion);
        formData.append('stripeToken',  token);
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergifcustom').style.display = 'block';
        $.ajax({
            url: `{{env('APP_URL')}}/save-subscription-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergifcustom').style.display = 'none';
                if (result.status === true) {
                    // document.getElementById('customerName').innerText = result.data.user.first_name + ' ' + result.data.user.last_name;
                    // document.getElementById('listingIdspan').innerText = result.data.listingId;
                    // document.getElementById('usernamespan').innerText = result.data.user.email;
                    // gotoNextStep();
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
                document.getElementById('loadergifcustom').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }


    function getCategories(parentId){
        let formData = new FormData();
        formData.append('parentId', parentId);
        formData.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: `{{env('APP_URL')}}/get-categories`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {

                if (result.status === true) {
                        document.getElementById('headCategories').innerHTML = '';
                        document.getElementById('subheadCategories').innerHTML = '';
                        document.getElementById('subheadCategories2').innerHTML = '';

                    for (let i=0;i<result.data.length;i++){
                        let p = document.createElement('p');
                        p.style.padding = '10px';
                        p.style.background = '#d3d3d36e';
                        p.style.color = 'black';
                        p.style.cursor = 'pointer';
                        p.style.borderBottom = '1px solid black';
                        if (result.data[i].has_subcategory === 1 || result.data[i].has_subcategory === '1'){
                            p.innerHTML = result.data[i].name + '<i class="fa fa-chevron-right" style="margin-left: 5px"></i>';
                            p.addEventListener("click", function() {
                               getCategories2(result.data[i].id)
                            });
                        }else{
                            p.innerHTML = result.data[i].name;
                            p.addEventListener("click", function() {
                                selectCategory(result.data[i]);
                            });
                        }
                        document.getElementById('headCategories').appendChild(p);

                    }
                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function getCategories2(parentId){
        let formData = new FormData();
        formData.append('parentId', parentId);
        formData.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: `{{env('APP_URL')}}/get-categories`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {

                if (result.status === true) {
                        document.getElementById('subheadCategories').innerHTML = '';
                        document.getElementById('subheadCategories2').innerHTML = '';

                    for (let i=0;i<result.data.length;i++){
                        let p = document.createElement('p');
                        p.style.padding = '10px';
                        p.style.background = '#d3d3d36e';
                        p.style.color = 'black';
                        p.style.cursor = 'pointer';
                        p.style.borderBottom = '1px solid black';
                        if (result.data[i].has_subcategory === 1 || result.data[i].has_subcategory === '1'){
                            p.innerHTML = result.data[i].name + '<i class="fa fa-chevron-right" style="margin-left: 5px"></i>';
                            p.addEventListener("click", function() {
                               getCategories3(result.data[i].id)
                            });
                        }else{
                            p.innerHTML = result.data[i].name;
                            p.addEventListener("click", function() {
                                selectCategory(result.data[i]);
                            });

                        }
                        document.getElementById('subheadCategories').appendChild(p);

                    }
                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function getCategories3(parentId){
        let formData = new FormData();
        formData.append('parentId', parentId);
        formData.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: `{{env('APP_URL')}}/get-categories`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {

                if (result.status === true) {
                        document.getElementById('subheadCategories2').innerHTML = '';

                    for (let i=0;i<result.data.length;i++){
                        let p = document.createElement('p');
                        p.style.padding = '10px';
                        p.style.background = '#d3d3d36e';
                        p.style.color = 'black';
                        p.style.cursor = 'pointer';
                        p.style.borderBottom = '1px solid black';
                        p.innerHTML = result.data[i].name;
                        p.addEventListener("click", function() {
                            selectCategory(result.data[i]);
                        });
                        document.getElementById('headCategories2').appendChild(p);

                    }
                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }



    let selectedCategoriesList = [];
    function selectCategory(category){
        if (selectedCategoriesList.length >= 3){
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "You already selected maximum 3 categories",
            });
            return;
        }
        if (selectedCategoriesList.indexOf(category.id) > -1){
            swal({
                icon: 'error',
                title: 'Oops...',
                text: "You already selected this category",
            });
            return;
        }
        selectedCategoriesList.push(category.id);
        let p = document.createElement('p');
        p.setAttribute('id', 'list-number' + category.id);
        p.style.padding = '10px';
        p.style.background = '#d3d3d36e';
        p.style.color = 'black';
        p.style.marginBottom = '5px';
        let span = document.createElement('span');
        span.innerText = category.name;
        let icon = document.createElement('i');
        icon.classList.add('fa', 'fa-trash');
        icon.style.float = 'right';
        icon.style.color = 'red';
        icon.style.cursor = 'pointer';
        icon.style.marginRight = '5px';

        icon.addEventListener("click", function() {
            document.getElementById('list-number' + category.id).remove();
            const index = selectedCategoriesList.indexOf(category.id);
            if (index > -1) {
                selectedCategoriesList.splice(index, 1);
            }
            console.log(selectedCategoriesList);
        });

        p.appendChild(span);
        p.appendChild(icon);
        document.getElementById('selected-categories').appendChild(p);
        console.log(selectedCategoriesList);
    }


    function getCities(region){
        let formData = new FormData();
        formData.append('region', region);
        formData.append("_token", "{{ csrf_token() }}");
        $.ajax({
            url: `{{env('APP_URL')}}/get-cities`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {

                if (result.status === true) {
                    document.getElementById('cities').innerHTML = '';
                    let option = document.createElement('option');
                    option.value = "";
                    option.innerText = "Select City/Town";
                    document.getElementById('cities').appendChild(option);
                    for (let i=0;i<result.data.length;i++){
                        let option = document.createElement('option');
                        option.value = result.data[i].id;
                        option.innerText = result.data[i].name;
                        document.getElementById('cities').appendChild(option);
                    }
                } else {
                    swal({
                        icon: 'error',
                        title: 'Oops...',
                        text: result.message,
                    });
                }
            },
            error: function (data) {

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }


    function showError(message){
        swal({
            icon: 'error',
            title: 'Oops...',
            text: message,
        });
    }

    function showSuccess(message){
        swal({
            icon: 'Success',
            title: 'Congrats',
            text: message,
        });
    }



</script>
@endsection

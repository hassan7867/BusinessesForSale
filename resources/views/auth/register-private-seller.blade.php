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
            background: #8364E2;
            color: #fff;
            border-color: #8364E2;
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
            background-color: #8364E2;
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
        /*    background-color: #8364E2;*/
        /*    border-color: #8364E2;*/
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

    </style>
{{--    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div class="container" style="padding: 30px;margin-top: 100px">
        <div>
            <div style="float: right"><span>Are you can existing member?</span> <button class="ml-2 btn-main" style="margin-left: 15px">LOGIN </button></div>
        </div>
        <div style="padding: 10px">
            <section class="signup-step-container" style="padding-top: 100px">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8">
                            <div class="wizard">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Contact Details</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Build Your Listing</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Further Business Details</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Review Your Order</i></a>
                                        </li>
                                        <li role="presentation" class="disabled">
                                            <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>Final Confirmation</i></a>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form" action="index.html" class="login-box">
                                    <div class="tab-content" id="main_form">
                                        <div id="loadergif" style="margin: 0 auto;max-width: 100px;display: none">
                                            <img src="{{url('loader.gif')}}" style="height: 100px">
                                        </div>
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
                                            <h4 class="text-center">Build Your Listing</h4>
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Listing Heading *</label>
                                                        <input class="form-control" type="text" name="heading" id="heading" placeholder="Heading">
                                                    </div>
                                                </div>


                                            </div>

                                            <div style="margin-top: 20px">
                                                <div>
                                                    <div class="form-group">
                                                        <label>Listing Summary *</label>
                                                        <textarea class="form-control" type="text" style="width: 300px!important;height: 150px" name="summary" id="summary" placeholder="Summary"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Status of Business *</label>
                                                        <br>
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusiness" value="For Sale" checked style="margin-left: 10px"> For Sale
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusiness" value="Under Offer" style="margin-left: 10px"> Under Offer
                                                        <input type="radio" name="statusOfBusiness" id="statusOfBusiness" value="Sold (Subject to Contract)" style="margin-left: 10px"> Sold (Subject to Contract)
                                                    </div>
                                                </div>
                                            </div>
                                            <p>Select Your Business Type * </p>
                                            <div class="row">
                                                <div class="col-md-4" id="headCategories">

                                                </div>
                                                <div class="col-md-4" id="subheadCategories">

                                                </div>
                                                <div class="col-md-4" id="subheadCategories2">

                                                </div>
                                            </div>
                                            <p>Selected Categories</p>
                                            <div id="selected-categories">

                                            </div>

                                            <div class='row'>
                                                <div class="col-md-6">
                                                    <p>Region *</p>
                                                    <select id="region" class="form-control" onchange="getCities(this.value)">
                                                        <option value="">Select Region</option>
                                                        @foreach($regions as $region)
                                                            <option value="{{$region->id}}">{{$region->name}}</option>
                                                        @endforeach

                                                    </select>

                                                </div>
                                                <div class="col-md-6">
                                                    <p>City/Town *</p>
                                                    <select id="cities" class="form-control">
                                                        <option value="">Select City/Town</option>


                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-3">
                                                    <p>Property Status * </p>
                                                </div>
                                                <div class="col-md-9">
                                                        <input type="radio" value="Real Property" name="propertyStatus" id="propertyStatus" style="margin-left: 10px"> Real Property
                                                        <input type="radio" value="Lease" name="propertyStatus" id="propertyStatus" style="margin-left: 10px"> Lease
                                                        <input type="radio" value="Both freehold and leasehold" name="propertyStatus" id="propertyStatus" style="margin-left: 10px"> Both freehold and leasehold
                                                        <input type="radio" value="N/A" name="propertyStatus" id="propertyStatus" style="margin-left: 10px"> N/A
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-2">
                                                    <p>Asking Price * </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <select id="askingprice" style="padding: 10px" class="form-control">
                                                        <option value="">Select...</option>
                                                        <option value="Under $100K">Under $100K</option>
                                                        <option value="$100K-$250K">$100K-$250K</option>
                                                        <option value="$250K-$500K">$250K-$500K</option>
                                                        <option value="$500K-$1m">$500K-$1m</option>
                                                        <option value="$1m-$5m">$1m-$5m</option>
                                                        <option value="Over $5m">Over $5m</option>
                                                        <option value="Undisclosed">Undisclosed</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-control" placeholder="OR speicfy the price in USD" type="text" value="" name="askingSpecificPrice" id="askingSpecificPrice" >
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-12">
                                                    <span>Quick Sale</span>    <input type="checkbox" name="quickSale" id="quickSale" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Check this box if the asking price is negotiable for a quick sale.</span>

                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-2">
                                                    <p>Sales Revenue * </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="salesRevenue" style="padding: 10px" class="form-control">
                                                        <option value="">Select...</option>
                                                        <option value="Under $100K">Under $100K</option>
                                                        <option value="$100K-$250K">$100K-$250K</option>
                                                        <option value="$250K-$500K">$250K-$500K</option>
                                                        <option value="$500K-$1m">$500K-$1m</option>
                                                        <option value="$1m-$5m">$1m-$5m</option>
                                                        <option value="Over $5m">Over $5m</option>
                                                        <option value="Undisclosed">Undisclosed</option>
                                                        <option value="NotApplicable">NotApplicable</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <input class="form-control" placeholder="OR specify the sales Revenue in USD" type="text" value="" name="salesRevenueSpecific" id="salesRevenueSpecific" >
                                                </div>
                                                <div class="col-md-3">
                                                    <select id="salesRevenueTerm" style="padding: 10px" class="form-control">
                                                        <option value="Annual">Annual</option>
                                                        <option value="Quarterly">Quarterly</option>
                                                        <option value="Weekly">Weekly</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-2">
                                                    <p>Cash Flow * </p>
                                                </div>
                                                <div class="col-md-5">
                                                    <select id="cashFlow" style="padding: 10px" class="form-control">
                                                        <option value="">Select...</option>
                                                        <option value="Under $100K">Under $100K</option>
                                                        <option value="$100K-$250K">$100K-$250K</option>
                                                        <option value="$250K-$500K">$250K-$500K</option>
                                                        <option value="$500K-$1m">$500K-$1m</option>
                                                        <option value="$1m-$5m">$1m-$5m</option>
                                                        <option value="Over $5m">Over $5m</option>
                                                        <option value="Undisclosed">Undisclosed</option>
                                                        <option value="NotApplicable">NotApplicable</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-control" placeholder="OR specify the cash flow in USD" type="text" value="" name="cashflowSpecific" id="cashflowSpecific" >
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-4">
                                                    <p>Upload Photos </p>
                                                </div>
                                                <div class="col-md-8">
                                                   <input type="file" name="photos" id="photos" accept="image/png, image/gif, image/jpeg" multiple>
                                                    <p style="font-size: 12px">you can upload multiple photos by holding CTRL button</p>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 25px">
                                                <div class="col-md-4">
                                                    <p>Upload Document </p>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="file" name="documents" id="documents" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,text/plain, application/pdf, image/*" multiple>
                                                    <p style="font-size: 12px">you can upload multiple document by holding CTRL button</p>
                                                </div>
                                            </div>
                                            <div style="margin-top: 20px">
                                                <p>Website Address</p>
                                                <input type="text" name="websiteAddress" id="websiteAddress" placeholder="https://" class="form-control">
                                            </div>
                                            <div style="margin-top: 20px">
                                                <p>Embed Video</p>
                                                <input type="text" name="embededVideo" id="embededVideo" placeholder="<iframe ..."  class="form-control">
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane" role="tabpanel" id="step3">
                                            <h4 class="text-center">Business Details</h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Location</p>
                                                        <textarea type="text" name="locationDetails" id="locationDetails" placeholder="Please describe the location of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Premises</p>
                                                        <textarea type="text" name="premises" id="premises" placeholder="Please describe the premises of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Competition</p>
                                                        <textarea type="text" name="competition" id="competition" placeholder="Please describe the competitors of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Expansion Potential</p>
                                                        <textarea type="text" name="expansion" id="expansion" placeholder="Please describe any oppurtunities for expansion of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Living Accomodation</span>    <input type="checkbox" name="livingAccomodation" id="livingAccomodation" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Check this box if accomodation is included.</span>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Living Accomodation Description</p>
                                                        <textarea type="text" name="livingAccomodationDescription" id="livingAccomodationDescription" placeholder="Please describe living accomodation description of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Size in square feet of property if applicable</p>
                                                        <textarea type="text" name="sizeInSquareFeet" id="sizeInSquareFeet" placeholder=""  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Planning Consent</p>
                                                        <textarea type="text" name="planningConsent" id="planningConsent" placeholder="Please share any details of any planning permission gained"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Years Established</p>
                                                        <input type="text" name="yearsEstablished" id="yearsEstablished" placeholder="List the number of years the business has been established"  class="form-control">
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Employees</p>
                                                        <input type="text" name="employees" id="employees" placeholder="List the number of employees of the business"  class="form-control">
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Trading Hours</p>
                                                        <textarea type="text" name="traddingHours" id="traddingHours" placeholder="List trading hours of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Support and Training</p>
                                                        <textarea type="text" name="supportAndTraining" id="supportAndTraining" placeholder="Describe any support or training provided by business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Visa Ready</span>    <input type="checkbox" name="visaReady" id="visaReady" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Check this box if the business qualifies for an E-2 investor visa.</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Relocatable</p>
                                                        <input type="radio" name="relocatable" id="relocatable" value="Yes" checked style="margin-left: 10px"> Yes
                                                        <input type="radio" name="relocatable" id="relocatable" value="No" style="margin-left: 10px">Yes
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Home Based</span>    <input type="checkbox" name="homeBased" id="homeBased" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px"> Check the box if business can be run from home</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Franchise</span>    <input type="checkbox" name="franchise" id="franchise" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Check this box if the business is a franchise resale.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Franchise Terms</p>
                                                        <textarea type="text" name="franchiseTerms" id="franchiseTerms" placeholder=""  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Business Closed or Asset Sale</span>    <input type="checkbox" name="businessClosed" id="businessClosed" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Check this box if the business is not operating and only assets are being sold.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Distressed?</span>    <input type="checkbox" name="distressed" id="distressed" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Please tick this box if the business is a turnaround oppurtunity or a bankrupcy</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Owner Financing Available?</span>    <input type="checkbox" name="ownerFinancing" id="ownerFinancing" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Please tick this box if you are willing to help finance the business sale</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Financing Available</p>
                                                        <textarea type="text" name="financingAvailable" id="financingAvailable" placeholder="If applicable, describe any available financing option"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Reason for selling</p>
                                                        <textarea type="text" name="reasonForSelling" id="reasonForSelling" placeholder="Please state reasons for selling of business"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Furniture, Fixtures and Fitting</span>    <input type="checkbox" name="furnitureFixture" id="furnitureFixture" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Please tick this box if furniture, fixture and fitting included</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Value of Furniture, Fixtures and Fitting</p>
                                                        <textarea type="text" name="valueOfFurnitureFixtures" id="valueOfFurnitureFixtures" placeholder="USD"  class="form-control"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <span>Inventory Stock</span>    <input type="checkbox" name="inventoryStock" id="inventoryStock" style="margin-left: 10px;position: relative!important;"><span style=";margin-left: 5px">Please tick this box if inventory stock included in asking price</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="margin-top: 20px">
                                                        <p>Value of Inventory Stock</p>
                                                        <textarea type="text" name="valueOfInventoryStock" id="valueOfInventoryStock" placeholder="USD"  class="form-control"></textarea>
                                                    </div>

                                                </div>

                                            </div>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step4">
                                            <h4 class="text-center">Review Your Order</h4>
                                            <div class="container">
                                                <h6>Why wait to contact interested buyer? Choose one of the advertising package below and contact all buyers immediately</h6>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div style="background: #f5f5f5;padding: 15px">
                                                            <div class="d-flex flex-wrap">
                                                                <div style="margin-top: 15px">
                                                                    <input type="radio" name="subscription" id="6months" value="6months" style="margin-left: 10px" onchange="onRadioSubscriptionchange(this.value)">

                                                                </div>
                                                                <div style="margin-left: 35px">
                                                                     <span>
                                                                <p style="font-weight: bold;font-size: 18px">6 Months</p>
                                                                <p style="color: blue;font-size: 18px;font-weight: bold">$89.0</p>
                                                            </span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div style="background: #f5f5f5;padding: 15px">
                                                            <div class="d-flex flex-wrap">
                                                                <div style="margin-top: 15px">
                                                                    <input type="radio" name="subscription" id="3months" value="3months" style="margin-left: 10px" onchange="onRadioSubscriptionchange(this.value)">

                                                                </div>
                                                                <div style="margin-left: 35px">
                                                                     <span>
                                                                <p style="font-weight: bold;font-size: 18px">3 Months</p>
                                                                <p style="color: blue;font-size: 18px;font-weight: bold">$69.0</p>
                                                            </span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div style="background: #f5f5f5;padding: 15px">
                                                            <div class="d-flex flex-wrap">
                                                                <div style="margin-top: 15px">
                                                                    <input type="radio" name="subscription" id="1months" value="1months" style="margin-left: 10px" onchange="onRadioSubscriptionchange(this.value)">

                                                                </div>
                                                                <div style="margin-left: 35px">
                                                                     <span>
                                                                <p style="font-weight: bold;font-size: 18px">1 Months</p>
                                                                <p style="color: blue;font-size: 18px;font-weight: bold">$49.0</p>
                                                            </span>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                                <div style="margin-top: 15px">
                                                    <input type="radio" name="subscription" id="limitedTrial" value="limitedTrial" style="margin-left: 10px" checked onchange="onRadioSubscriptionchange(this.value)">
                                                        <span><span style="font-weight: bold">No thanks</span> I want to continue listing my business on limited trial</span>
                                                </div>

                                                <div style=";margin-top: 25px;display: none" id="card-details">
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
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="default-btn next-step">Continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step5">
                                            <h4 class="text-center">Final Confirmation</h4>
                                            <div class="container">
                                                    <p>Thank you <span id="customerName"></span></p>
                                                    <p>Your business for sale listing has been created and is now being reviewed by our customer services team. Please allow
                                                    at least one working day for it to be processed and go live on the site.
                                                    </p>
                                                <p>
                                                    <span style="font-weight: bold">Your listing ID is : <span id="listingIdspan"></span></span><span> (Please refer this number for making inquiries)</span>
                                                </p>
                                                <p>
                                                    <span style="font-weight: bold">Your username is : </span><span id="usernamespan"></span>
                                                </p>
                                                <p>
                                                    We wish you the best of luck in finding a buyer and we will do all we can to help you sell your business quickly and easily.
                                                </p>
                                                <p>
                                                    if you have any questions <span style="color: blue">contact us</span>
                                                </p>
                                                <p>
                                                    We will send you email confirming these details
                                                </p>
                                            </div>

                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                <li><button type="button" class="default-btn next-step">Finish</button></li>
                                            </ul>
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

        $(".next-step").click(function (e) {

            // var active = $('.wizard .nav-tabs li.active');
            // active.next().removeClass('disabled');
            // nextTab(active);
            if (currentStep === 1){
                saveBasicDetails();
            }
            if (currentStep === 2){
                saveListingDetails();
            }
            if (currentStep === 3){
                saveBusinessDetails();
            }
            if (currentStep === 4){
                saveSubscriptionDetails();
            }
            if (currentStep === 5){
                fianlizeWizard();
            }

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
    });

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
        document.getElementById('loadergif').style.display = 'flex';
        $.ajax({
            url: `{{env('APP_URL')}}/save-basic-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergif').style.display = 'none';

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
                document.getElementById('loadergif').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function saveListingDetails(){

        let heading = document.getElementById('heading').value;
        let summary = document.getElementById('summary').value;
        let statusOfBusiness = document.getElementById('statusOfBusiness').value;
        let region = document.getElementById('region').value;
        let cities = document.getElementById('cities').value;
        let propertyStatus = document.getElementById('propertyStatus').value;
        let askingprice = document.getElementById('askingprice').value;
        let askingSpecificPrice = document.getElementById('askingSpecificPrice').value;
        let quickSale = document.getElementById('quickSale').checked;
        let salesRevenue = document.getElementById('salesRevenue').value;
        let salesRevenueSpecific = document.getElementById('salesRevenueSpecific').value;
        let salesRevenueTerm = document.getElementById('salesRevenueTerm').value;
        let cashFlow = document.getElementById('cashFlow').value;
        let cashflowSpecific = document.getElementById('cashflowSpecific').value;
        let photos = document.getElementById('photos').files;
        let documents = document.getElementById('documents').files;
        let websiteAddress = document.getElementById('websiteAddress').files;
        let embededVideo = document.getElementById('embededVideo').files;

        if (heading === '' || heading === undefined){
            showError("Listing Heading is required");
            return;
        }
        else if (summary === '' || summary === undefined){
            showError("Listing Summary is required");
            return;
        }
        else if (statusOfBusiness === '' || statusOfBusiness === undefined){
            showError("Select Status of business");
            return;
        }
        else if (selectedCategoriesList.length === 0){
            showError("Category not selected");
            return;
        }
        else if (region === '' || region === undefined){
            showError("Region is required");
            return;
        }
        else if (cities === '' || cities === undefined){
            showError("City/Town is required");
            return;
        }
        if (askingprice === '' && askingSpecificPrice === ''){
            showError("Asking Price is required");
            return;
        }
        else if (askingprice === '' && askingSpecificPrice === ''){
            showError("Asking Price is required");
            return;
        }
        else if (salesRevenue === '' && salesRevenueSpecific === ''){
            showError("Sales Revenue is required");
            return;
        }
        else if (cashFlow === '' && cashflowSpecific === ''){
            showError("Cash Flow is required");
            return;
        }

        if (askingprice === ''){
            askingprice = askingSpecificPrice;
        }
        if (salesRevenue === ''){
            salesRevenue = salesRevenueSpecific;
        }
        if (cashFlow === ''){
            cashFlow = cashflowSpecific;
        }

        let formData = new FormData();
        formData.append('heading', heading);
        formData.append('summary', summary);
        formData.append('statusOfBusiness',  statusOfBusiness);
        formData.append('selectedCategoriesList',  JSON.stringify(selectedCategoriesList));
        formData.append('region',  region);
        formData.append('cities',  cities);
        formData.append('propertyStatus',  propertyStatus);
        formData.append('askingPrice',  askingprice);
        formData.append('salesRevenue',  salesRevenue);
        formData.append('cashFlow',  cashFlow);

        formData.append('websiteAddress',  websiteAddress);
        formData.append('embededVideo',  embededVideo);
        formData.append('quickSale',  quickSale);
        formData.append('salesRevenueTerm',  salesRevenueTerm);
        for (let i=0;i<photos.length;i++){
            formData.append('photos[]',  photos[i]);
        }
        for (let i=0;i<documents.length;i++){
            formData.append('documents[]',  documents[i]);
        }
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergif').style.display = 'flex';
        $.ajax({
            url: `{{env('APP_URL')}}/save-listing-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergif').style.display = 'none';

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
                document.getElementById('loadergif').style.display = 'none';

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
        document.getElementById('loadergif').style.display = 'flex';
        $.ajax({
            url: `{{env('APP_URL')}}/finalize-wizard`,
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

    function saveSubscriptionDetails(){

        let limitedTrial = document.getElementById('limitedTrial').checked;
        let months6 = document.getElementById('6months').checked;
        let months3 = document.getElementById('3months').checked;
        let months1 = document.getElementById('1months').checked;
        let nameOnCard = document.getElementById('nameOnCard').value;
        let cardNumber = document.getElementById('cardNumber').value;
        let cvv = document.getElementById('cvv').value;
        let exp_month = document.getElementById('exp_month').value;
        let exp_year = document.getElementById('exp_year').value;
        let mailingList = document.getElementById('mailingList').checked;
        let termsAndConditions = document.getElementById('termsAndConditions').checked;
        if (limitedTrial === false){
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

        let limitedTrial = document.getElementById('limitedTrial').checked;
        let months6 = document.getElementById('6months').checked;
        let months3 = document.getElementById('3months').checked;
        let months1 = document.getElementById('1months').checked;
        let subscription = 'limitedTrial';
        if (limitedTrial === true){
            subscription = 'limitedTrial';
        }else if(months6 === true){
            subscription = '6months';
        }else if(months3 === true){
            subscription = '3months';
        }else if(months1 === true){
            subscription = '1months';
        }
        let formData = new FormData();
        formData.append('subscription', subscription);
        formData.append('nameOnCard', nameOnCard);
        formData.append('cardNumber',  cardNumber);
        formData.append('cvv',  cvv);
        formData.append('exp_month',  exp_month);
        formData.append('exp_year',  exp_year);
        formData.append('mailingList',  mailingList);
        formData.append('termsAndConditions',  termsAndConditions);
        formData.append('stripeToken',  token);
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergif').style.display = 'flex';
        $.ajax({
            url: `{{env('APP_URL')}}/save-subscription-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergif').style.display = 'none';
                if (result.status === true) {
                    document.getElementById('customerName').innerText = result.data.user.first_name + ' ' + result.data.user.last_name;
                    document.getElementById('listingIdspan').innerText = result.data.listingId;
                    document.getElementById('usernamespan').innerText = result.data.user.email;
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
                document.getElementById('loadergif').style.display = 'none';

                swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: "server Error",
                });
            }
        });
    }

    function saveBusinessDetails(){

        let locationDetails = document.getElementById('locationDetails').value;
        let premises = document.getElementById('premises').value;
        let competition = document.getElementById('competition').value;
        let expansion = document.getElementById('expansion').value;
        let livingAccomodation = document.getElementById('livingAccomodation').checked;
        let livingAccomodationDescription = document.getElementById('livingAccomodationDescription').value;
        let sizeInSquareFeet = document.getElementById('sizeInSquareFeet').value;
        let planningConsent = document.getElementById('planningConsent').value;
        let yearsEstablished = document.getElementById('yearsEstablished').checked;
        let employees = document.getElementById('employees').value;
        let traddingHours = document.getElementById('traddingHours').value;
        let supportAndTraining = document.getElementById('supportAndTraining').value;
        let visaReady = document.getElementById('visaReady').checked;
        let relocatable = document.getElementById('relocatable').value;
        let homeBased = document.getElementById('homeBased').checked;
        let franchise = document.getElementById('franchise').checked;
        let franchiseTerms = document.getElementById('franchiseTerms').value;
        let businessClosed = document.getElementById('businessClosed').checked;
        let distressed = document.getElementById('distressed').checked;
        let ownerFinancing = document.getElementById('ownerFinancing').checked;
        let financingAvailable = document.getElementById('financingAvailable').value;
        let reasonForSelling = document.getElementById('reasonForSelling').value;
        let furnitureFixture = document.getElementById('furnitureFixture').checked;
        let valueOfFurnitureFixtures = document.getElementById('valueOfFurnitureFixtures').value;
        let inventoryStock = document.getElementById('inventoryStock').checked;
        let valueOfInventoryStock = document.getElementById('valueOfInventoryStock').value;

        let formData = new FormData();
        formData.append('locationDetails', locationDetails);
        formData.append('premises', premises);
        formData.append('competition',  competition);
        formData.append('expansion',  expansion);
        formData.append('livingAccomodation',  livingAccomodation);
        formData.append('livingAccomodationDescription',  livingAccomodationDescription);
        formData.append('sizeInSquareFeet',  sizeInSquareFeet);
        formData.append('planningConsent',  planningConsent);
        formData.append('yearsEstablished',  yearsEstablished);
        formData.append('employees',  employees);
        formData.append('traddingHours',  traddingHours);
        formData.append('supportAndTraining',  supportAndTraining);
        formData.append('visaReady',  visaReady);
        formData.append('relocatable',  relocatable);
        formData.append('homeBased',  homeBased);
        formData.append('franchise',  franchise);
        formData.append('franchiseTerms',  franchiseTerms);
        formData.append('businessClosed',  businessClosed);
        formData.append('distressed',  distressed);
        formData.append('ownerFinancing',  ownerFinancing);
        formData.append('financingAvailable',  financingAvailable);
        formData.append('reasonForSelling',  reasonForSelling);
        formData.append('furnitureFixture',  furnitureFixture);
        formData.append('valueOfFurnitureFixtures',  valueOfFurnitureFixtures);
        formData.append('inventoryStock',  inventoryStock);
        formData.append('valueOfInventoryStock',  valueOfInventoryStock);
        formData.append("_token", "{{ csrf_token() }}");
        document.getElementById('loadergif').style.display = 'flex';
        $.ajax({
            url: `{{env('APP_URL')}}/save-business-details`,
            type: 'POST',
            dataType: "JSON",
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                document.getElementById('loadergif').style.display = 'none';

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
                document.getElementById('loadergif').style.display = 'none';

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
                        p.style.background = 'lightgray';
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
                        p.style.background = 'lightgray';
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
                        p.style.background = 'lightgray';
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
        p.style.background = 'lightgray';
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

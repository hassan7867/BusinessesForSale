@extends('layout/layout')
@section('content')
<!-- content begin -->
<style>
    .customsearchinputfield{
        padding: 15px;
        width: 250px;
        display: inline!important;
        height: 60px!important;
        border-radius: 0px!important;
    }
    .cutomsearchbtnclass{
        height: 60px!important;
        border-radius: 0px!important;
    }
    .margintopresp{
        margin-top: 80px;
    }

    .mainsecmarginresp{
        margin-top: 90px;
        height: 500px!important;
    }
    .fontsizeresp{
        font-size: 35px;
    }
    @media screen and (max-width: 700px) {
        .customsearchinputfield{
            border-radius: 10px!important;
            margin-top: 10px;
            display: block!important;
            width: 100%!important;
        }
        .cutomsearchbtnclass{
            border-radius: 10px!important;
            margin-top: 10px;
            display: block;
            width: 100%;
        }
        .margintopresp{
            margin-top: 18px!important;
        }
        .mainsecmarginresp{
            margin-top: 0px;
            height: 400px!important;
        }
        .fontsizeresp{
            font-size: 25px;
        }
        .respcontainerformobile{
            padding-right: 5px;
            padding-left: 5px;
        }

        .removeflexonmobile{
            display: block!important;
        }
    }


</style>
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100 mainsecmarginresp" data-bgimage="url(bgbg.jpg) bottom" style="background-image: url('bgbg.jpg')!important;">
            <div >
                <div class="container respcontainerformobile" >
                    <div class="row align-items-center" >
                        <div class="col-md-12 margintopresp" >
{{--                            <div class="spacer-single"></div>--}}
{{--                            <div class="spacer-10"></div>--}}
                            <h1 class="wow fadeInUp fontsizeresp" data-wow-delay=".75s" style="color: white;text-align: center;">The world's largest marketplace for Business Sale Purchase</h1>
                            <div style="margin: 0 auto;max-width: 700px;margin-top: 20px;padding: 25px!important;background: #ffffffa1">
                                <div>
                                    <div class="d-flex flex-wrap removeflexonmobile">
                                        <div>
                                            <select class="form-control customsearchinputfield" id="category-selectioninsearch">
                                                <option selected value="any">Any Category</option>
                                                @foreach($categories as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            <input id="locationselectorinsearch" list="locationlistinsearch" class="form-control customsearchinputfield" type="text" placeholder="e.g London, Birmingham..." >
                                            <datalist id="locationlistinsearch">
                                                @foreach(\App\Models\City::all() as $item)
                                                    <option value="{{$item->name}}">
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div>
                                            <button class="btn btn-main cutomsearchbtnclass" style="border-bottom-right-radius: 10px!important;border-top-right-radius: 10px!important;" onclick="searchBusinessFunc()">SEARCH</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div style="margin: 0 auto;max-width: 200px;margin-top: 10px">
                                <a style="color: white;text-decoration: underline;cursor: pointer" data-toggle="modal" data-target="#myModaladvancesearch">Advanced search <i class="fa fa-filter" style="margin-left: 10px"></i></a>
                            </div>
{{--                            <p class="wow fadeInUp lead" data-wow-delay="1s">--}}
{{--                                Unit of data stored on a digital ledger, called a blockchain, that certifies a digital asset to be unique and therefore not interchangeable</p>--}}
{{--                            <div class="spacer-10"></div>--}}
{{--                            <a href="#" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>--}}
{{--                            <div class="mb-sm-30"></div>--}}
                        </div>
{{--                        <div class="col-md-6 xs-hide">--}}
{{--                            <img src="{{url('')}}/undraw_Finance_re_gnv2.svg" class="lazy img-fluid wow fadeIn" data-wow-delay="1.25s" alt="">--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <section id="section-category" class="no-top" style="margin-top: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Popular Business Categories</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    @foreach(\App\Models\Category::where('is_popular', 1)->get() as $item)
                        <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".1s" style="margin-top: 15px">
                            <a href='#'  style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                                <i class="fa fa-sitemap"></i>
                                <span>{{$item->name}}</span>
                            </a>
                        </div>
                    @endforeach


{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-music"></i>--}}
{{--                            <span>B & Bs</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".3s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-coffee"></i>--}}
{{--                            <span>Coffee Shops</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-globe"></i>--}}
{{--                            <span>Pubs</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".5s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-vcard"></i>--}}
{{--                            <span>Hotels</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-th"></i>--}}
{{--                            <span>Boarding Kennels</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div><br>
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".1s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-image"></i>--}}
{{--                            <span>Ecommerce Business</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-music"></i>--}}
{{--                            <span>Campgrounds</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".3s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-search"></i>--}}
{{--                            <span>Internet Businesses</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-globe"></i>--}}
{{--                            <span>Petrol Stations</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".5s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-vcard"></i>--}}
{{--                            <span>Pizza Delivery Businesses</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">--}}
{{--                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">--}}
{{--                            <i class="fa fa-th"></i>--}}
{{--                            <span>Fishing Businesses</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </section>

        <section id="section-collections" class="no-bottom" style="padding-top: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Popular Business Locations</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div id="collection-carousel" class="owl-carousel wow fadeIn">

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="#"><img src="{{url('static/dubai.jpg')}}" class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_info" style="padding-top: 10px!important;margin-top: 15px">
                                <a href="#"><h4>DUBAI</h4></a>
                            </div>
                        </div>
                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="#"><img src="{{url('static/uk.png')}}" class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_info" style="padding-top: 10px!important;margin-top: 15px">
                                <a href="#"><h4>UK</h4></a>
                            </div>
                        </div>
                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="#"><img src="{{url('static/usa.jpg')}}" class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_info" style="padding-top: 10px!important;margin-top: 15px">
                                <a href="#"><h4>USA</h4></a>
                            </div>
                        </div>
                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="#"><img src="{{url('static/canada.jpg')}}" class="lazy img-fluid" style="height: 180px" alt=""></a>
                            </div>
                            <div class="nft_coll_info" style="padding-top: 10px!important;margin-top: 15px">
                                <a href="#"><h4>CANADA</h4></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



        <section id="section-popular" class="pb-5" style="padding-top: 20px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Featured Franchises</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div class="col-md-12 wow fadeIn">
                        <ol class="author_list">
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>
                            <li>
                                <div class="author_list_info">
                                    <a href="#">Testing Franchise</a>
                                </div>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-xl" >
                <div class="modal-content" style="margin-top: 200px;">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="row p-3">
                            <div class="col-lg-6" style="border-right: dotted">
                                <h4 class="text-center">Are you a <span style="color: #8364E2;font-size: 20px">Business Owner?</span></h4><br>
                                <div class="text-center"><span style="color: black;font-size: 20px">Set up your Private Seller Account and create your listing today</span></div>
                                <div class="mt-3 text-center"><a href="{{URL::to('list')}}" style="background: #8364E2;color: white;padding: 10px;border-radius: 5px;border: none;cursor: pointer">Get Started Here</a></div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="text-center">Are you a <span style="color: #4ebe3f;font-size: 20px">Business Broker?</span></h4><br>
                                <div class="text-center"><span style="color: black;font-size: 20px">Set up your BrokerWeb Account and list multiple businesses</span></div>
                                <div class="mt-3 text-center"><a style="background: #4ebe3f;color: white;padding: 10px;border-radius: 5px;border: none">Get Started Here</a></div>
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

        <div class="modal" id="myModaladvancesearch">
            <div class="modal-dialog modal-xl" >
                <div class="modal-content" style="margin-top: 200px;">

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h3>Advance Searching</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div style="margin-top: 10px">

                                    <p style="color: var(--secondary-color);font-weight: bold">Age of listing</p>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="ageAnytime" checked> <span>Anytime</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="age14"> <span>Last 14 Days</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="ageMonth"> <span>Last Month</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" name="ageListing" onchange="selectAgeofListing(this)" class="chk" id="age3Months"> <span>Last 3 Months</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div style="margin-top: 10px">
                                    <p style="color: var(--secondary-color);font-weight: bold">Type of Business</p>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="freeholdType"> <span>Freehold</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="LeaseholdType"> <span>Leasehold</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="RelocatableType"> <span>Relocatable</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="HomebasedType"> <span>Homebased</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="accommodationType"> <span>With accommodation</span>
                                    </div>
                                    <div style="margin-top: 5px">
                                        <input type="checkbox" id="Franchiseype"> <span>Franchise</span>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                    <p>Asking Price (USD)</p>
                                    <div>
                                        <div >
                                            <input type="text" class="form-control" id="lowprice" placeholder="From">
                                        </div>
                                        <div style="margin-top: 5px">
                                            <input type="text" class="form-control" id="highprice" placeholder="To">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                    <p>Turnover (USD)</p>
                                    <div>
                                        <div >
                                            <input type="text" class="form-control" id="lowturnover" placeholder="From">
                                        </div>
                                        <div style="margin-top: 5px">
                                            <input type="text" class="form-control" id="highturnover" placeholder="To">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div  style="margin-top: 10px;border-bottom: 1px solid lightgrey;padding: 10px">
                                    <p>Net Profit (USD)</p>
                                    <div>
                                        <div >
                                            <input type="text" class="form-control" id="lowProfit" placeholder="From">
                                        </div>
                                        <div style="margin-top: 5px">
                                            <input type="text" class="form-control" id="highProfit" placeholder="To">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div style="margin-top: 10px">
                            <div style="margin-top: 10px">
                                <button class="btn btn-main" onclick="searchBusinessAdvance()" style="display: block">SEARCH</button>
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
    </div>
   <!-- content close -->
    <a href="#" id="back-to-top"></a>

    <script>
        function searchBusinessFunc(){
            let category = document.getElementById('category-selectioninsearch').value;
            let location = document.getElementById('locationselectorinsearch').value;
            localStorage.setItem('category', category);
            localStorage.setItem('location', location);
            window.location.href = `{{env('APP_URL')}}/{{\Illuminate\Support\Facades\Session::get('url_code')}}/buy-a-business`;
        }

        function selectAgeofListing(ref){
            $('input.chk').not(ref).prop('checked', false);
            let ageAnytime = document.getElementById('ageAnytime').checked;
            let age14 = document.getElementById('age14').checked;
            let ageMonth = document.getElementById('ageMonth').checked;
            let age3Months = document.getElementById('age3Months').checked;
            if (ageAnytime === true){
                ageOfListing = 'anyTime';
            }else if (age14 === true){
                ageOfListing = 'age14';
            }
            else if (ageMonth === true){
                ageOfListing = 'ageMonth';
            }
            else if (age3Months === true){
                ageOfListing = 'age3Months';
            }
            localStorage.setItem('ageOfListing', ageOfListing);

        }

        function searchBusinessAdvance(){

            let freeholdType = document.getElementById('freeholdType').checked;
            let LeaseholdType = document.getElementById('LeaseholdType').checked;
            let RelocatableType = document.getElementById('RelocatableType').checked;
            let accommodationType = document.getElementById('accommodationType').checked;
            let Franchiseype = document.getElementById('Franchiseype').checked;
            let HomebasedType = document.getElementById('HomebasedType').checked;

            let lowprice = document.getElementById('lowprice').value;
            let highprice = document.getElementById('highprice').value;
            let lowturnover = document.getElementById('lowturnover').value;
            let highturnover = document.getElementById('highturnover').value;
            let lowProfit = document.getElementById('lowProfit').value;
            let highProfit = document.getElementById('highProfit').value;


            localStorage.setItem('freeholdType', freeholdType);
            localStorage.setItem('LeaseholdType', LeaseholdType);
            localStorage.setItem('RelocatableType', RelocatableType);
            localStorage.setItem('accommodationType', accommodationType);
            localStorage.setItem('Franchiseype', Franchiseype);
            localStorage.setItem('HomebasedType', HomebasedType);

            localStorage.setItem('lowprice', lowprice);
            localStorage.setItem('highprice', highprice);
            localStorage.setItem('lowturnover', lowturnover);
            localStorage.setItem('highturnover', highturnover);
            localStorage.setItem('lowProfit', lowProfit);
            localStorage.setItem('highProfit', highProfit);

            window.location.href = `{{env('APP_URL')}}/{{\Illuminate\Support\Facades\Session::get('url_code')}}/buy-a-business`;

        }
    </script>
@endsection

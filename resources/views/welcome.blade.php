@extends('layout/layout')
@section('content')
<!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100" data-bgimage="url(images/background/bg-shape-1.jpg) bottom">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="spacer-single"></div>
                            <div class="spacer-10"></div>
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">The world's largest marketplace in UK for Business Sale Purchase</h1>
{{--                            <p class="wow fadeInUp lead" data-wow-delay="1s">--}}
{{--                                Unit of data stored on a digital ledger, called a blockchain, that certifies a digital asset to be unique and therefore not interchangeable</p>--}}
                            <div class="spacer-10"></div>
                            <a href="#" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>
                            <div class="mb-sm-30"></div>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="{{url('')}}/undraw_Finance_re_gnv2.svg" class="lazy img-fluid wow fadeIn" data-wow-delay="1.25s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-category" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Popular Business Categories</h1>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".1s">
                        <a href='#'  style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-automobile"></i>
                            <span>Automobiles Businesses</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-music"></i>
                            <span>B & Bs</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".3s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-coffee"></i>
                            <span>Coffee Shops</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-globe"></i>
                            <span>Pubs</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".5s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-vcard"></i>
                            <span>Hotels</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-th"></i>
                            <span>Boarding Kennels</span>
                        </a>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".1s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-image"></i>
                            <span>Ecommerce Business</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".2s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-music"></i>
                            <span>Campgrounds</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".3s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-search"></i>
                            <span>Internet Businesses</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-globe"></i>
                            <span>Petrol Stations</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".5s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-vcard"></i>
                            <span>Pizza Delivery Businesses</span>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight" data-wow-delay=".6s">
                        <a href='#' style="height: 200px!important;" class="icon-box style-2 rounded pt-5">
                            <i class="fa fa-th"></i>
                            <span>Fishing Businesses</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-collections" class="no-bottom">
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



        <section id="section-popular" class="pb-5">
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
    </div>
   <!-- content close -->
    <a href="#" id="back-to-top"></a>
@endsection

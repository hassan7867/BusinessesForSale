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
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">The world's largest marketplace In UK for Business Sale Purchase</h1>
                            <p class="wow fadeInUp lead" data-wow-delay="1s">
                                Unit of data stored on a digital ledger, called a blockchain, that certifies a digital asset to be unique and therefore not interchangeable</p>
                            <div class="spacer-10"></div>
                            <a href="explore.html" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>
                            <div class="mb-sm-30"></div>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="images/misc/nft.png" class="lazy img-fluid wow fadeIn" data-wow-delay="1.25s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col text-center">

                        <div class="switch-set">
                            <div>Monthly</div>
                            <div><input id="sw-1" class="switch" type="checkbox" /></div>
                            <div>Yearly</div>
                            <div class="spacer-20"></div>
                        </div>

                    </div>
                </div>

                <div class="row sequence">
                    <div class="col-lg-4 col-md-6 col-sm-12 sq-item wow">
                        <div class="pricing-s1 mb30">
                            <div class="top">
                                <h2>Free</h2>
                                <p class="plan-tagline">Basic</p>
                            </div>
                            <div class="mid text-light bg-color">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">0</span>
                                    <span class="y opt-2">0</span>
                                    <span class="month">p/mo</span>
                                </p>
                            </div>

                            <div class="bottom">

                                <ul>
                                    <li><i class="fa fa-check"></i>1 device</li>
                                    <li><i class="fa fa-check"></i>Daily reminder</li>
                                    <li><i class="fa fa-check"></i>Simple reporting</li>
                                    <li><i class="fa fa-check"></i>Standart dashboard</li>
                                    <li><i class="fa fa-check"></i>Email Notification</li>
                                    <li><i class="fa fa-check"></i>Email Support</li>
                                </ul>
                            </div>

                            <div class="action">
                                <a href="register.html" class="btn-main">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 sq-item wow">
                        <div class="pricing-s1 mb30">
                            <div class="top">
                                <h2>Pro</h2>
                                <p class="plan-tagline">For Individuals
                            </div>
                            <div class="mid text-light bg-color">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">9.59</span>
                                    <span class="y opt-2">7.46</span>
                                    <span class="month">p/mo</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="fa fa-check"></i>Up to 2 devices</li>
                                    <li><i class="fa fa-check"></i>Daily reminder</li>
                                    <li><i class="fa fa-check"></i>Detailed reporting</li>
                                    <li><i class="fa fa-check"></i>Interactive dashboard</li>
                                    <li><i class="fa fa-check"></i>Email and SMS notification</li>
                                    <li><i class="fa fa-check"></i>24/7 Customer Support</li>
                                </ul>
                            </div>

                            <div class="action">
                                <a href="register.html" class="btn-main">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 sq-item wow">
                        <div class="pricing-s1 mb30">
                            <div class="top">
                                <h2>For Teams</h2>
                                <p class="plan-tagline">Best for organization</p>
                            </div>
                            <div class="mid text-light bg-color">
                                <p class="price">
                                    <span class="currency">$</span>
                                    <span class="m opt-1">24.99</span>
                                    <span class="y opt-2">16.49</span>
                                    <span class="month">p/mo</span>
                                </p>
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li><i class="fa fa-check"></i>Up to 10 devices</li>
                                    <li><i class="fa fa-check"></i>Daily reminder</li>
                                    <li><i class="fa fa-check"></i>Detailed reporting</li>
                                    <li><i class="fa fa-check"></i>Interactive dashboard</li>
                                    <li><i class="fa fa-check"></i>Email and SMS notification</li>
                                    <li><i class="fa fa-check"></i>24/7 Customer Support</li>
                                </ul>
                            </div>

                            <div class="action">
                                <a href="register.html" class="btn-main">Sign Up Now</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 offset-lg-3 text-center">
                        <small>Price shown are in USD and VAT inclusive.</small>
                    </div>
                </div>


            </div>

    </div>
    </div>
    </div>
    </div>
    </section>
    </div><!-- content close -->
    <a href="#" id="back-to-top"></a>
@endsection

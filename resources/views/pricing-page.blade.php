@extends('layout/layout')
@section('content')
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <div id="top"></div>
    <p id="country-id" style="display: none">{{$countryId}}</p>
    <br>
    <br>
    <section id="section-hero" aria-label="section" class="no-top no-bottom "
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom">
        <div class="v-center" style="min-height: 50vh!important;">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h3 class="wow fadeInUp" data-wow-delay=".75s" style="font-size: 30px">List your business in the
                            {{$countryName}}
                            Create your business listing today</h3>
                        <p class="wow fadeInUp lead" data-wow-delay="1s">
                            We help more than 1,500 owners sell their businesses every month</p>
                        <div class="spacer-10"></div>
                        <div class="mb-sm-30"></div>
                    </div>
                    <div class="col-md-8 xs-hide">
                        <img src="{{url('')}}/gallery-item-6.jpg" class="lazy img-fluid wow fadeIn"
                             data-wow-delay="1.25s" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">

            <div class="row sequence">
                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                    <div class="pricing-s1 mb30">
                        <div class="top">
                            <h3>LIMITED TRIAL</h3>
                        </div>
                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">
                            <p class="price">
                                <span class="currency">$</span>
                                <span class="m opt-1" style="font-size: 25px">0</span>
                                <span class="y opt-2" style="font-size: 25px">0</span>
                                <span class="month">p/mo</span>
                            </p>
                        </div>

                        <div class="bottom">
                            <ul>
                                <p style="color: black;padding: 20px">
                                    Advertise your business for free for 20 days. Check out buyer interest BEFORE you
                                    pay.
                                </p>
                            </ul>

                        </div>

                        <div class="action">
                            <a onclick="openSignUpPage(0)" style="cursor: pointer" class="btn-main">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                    <div class="pricing-s1 mb30">
                        <div class="top">
                            <h3>1 MONTH</h3>
                        </div>
                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">
                            <p class="price">
                                <span class="currency">$</span>
                                <span class="m opt-1" style="font-size: 25px">49</span>
{{--                                <span class="month">p/mo</span>--}}
                            </p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <p style="color: black;padding: 20px;text-align: center">Just $49 USD</p>
                            </ul>
                        </div>

                        <div class="action">
                            <a onclick="openSignUpPage(49)" style="cursor: pointer" class="btn-main">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                    <div class="pricing-s1 mb30">
                        <div class="top">
                            <h3>3 MONTHS</h3>
                        </div>
                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">
                            <p class="price">
                                <span class="currency">$</span>
                                <span class="m opt-1" style="font-size: 25px">69</span>
{{--                                <span class="month">p/mo</span>--}}
                            </p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <p style="color: black;padding: 20px;text-align: center">Just $69 USD</p>
                            </ul>
                        </div>

                        <div class="action">
                            <a onclick="openSignUpPage(69)" class="btn-main" style="cursor: pointer">Sign Up Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                    <div class="pricing-s1 mb30">
                        <div class="top">
                            <h3>6 MONTHS</h3>
                        </div>
                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">
                            <p class="price">
                                <span class="currency">$</span>
                                <span class="m opt-1" style="font-size: 25px">89</span>
{{--                                <span class="month">p/mo</span>--}}
                            </p>
                        </div>
                        <div class="bottom">
                            <ul>
                                <p style="color: black;padding: 20px;text-align: center">Just $89 USD</p>
                            </ul>
                        </div>

                        <div class="action">
                            <a onclick="openSignUpPage(89)" style="cursor: pointer" class="btn-main">Sign Up Now</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 offset-lg-3 text-center">
                    <small>All packages are billed in one installment.</small>
                </div>
            </div>


        </div>
    </section>
    <div id="section-hero" aria-label="section" class="no-top no-bottom "
         data-bgimage="url(images/background/bg-shape-1.jpg) bottom">
        <div class="v-center" style="min-height: 40vh!important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h2 class="wow fadeInUp" data-wow-delay=".75s"
                            style="color: #8364E2;border-bottom: 1px black!important;">Get a Free Online <br> Valuation
                        </h2>
                        <hr style="width: 25%">
                        <p class="wow fadeInUp lead" data-wow-delay="1s"
                           style="color: black;font-size: 18px;line-height: 1.7">
                            Set the right asking price for your business with <br>ValueRight - our online valuation
                            tool.</p>
                        <div class="spacer-10"></div>
                        <a href="#" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s"
                           style="font-size: 18px;padding: 15px">Start Your Free Valuation</a>
                        <div class="mb-sm-30"></div>
                    </div>
                    <div class="col-md-4 xs-hide">
                        <img src="{{url('')}}/valueright-graphic.webp" class="lazy img-fluid wow fadeIn"
                             data-wow-delay="1.25s" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr>
    <div id="section-hero" aria-label="section" class="no-top no-bottom "
         data-bgimage="url(images/background/bg-shape-1.jpg) bottom">
        <div class="v-center" style="min-height: 40vh!important;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h1 class="wow fadeInUp" data-wow-delay=".75s" style="color: #8364E2;">How it works
                        </h1>
                        <hr style="width: 25%">


                        <div class="bottom">

                            <ul>
                                <li style="font-size: 35px;font-weight: bold"><span style="color: #46397a">Select your package</span>
                                </li>
                                <p class="mt-3" style="color: black">Choose to advertise your business for 1, 3 or 6
                                    months.</p>
                                <li class="mt-5" style="font-size: 35px;font-weight: bold"><span style="color: #46397a">Create your listing</span>
                                </li>
                                <p class="mt-4" style="color: black;font-size: 17px">Add as much information as you
                                    like, including photos<br> and other documents, in our easy to use listing builder.
                                </p>
                                <li class="mt-5" style="font-size: 35px;font-weight: bold"><span style="color: #46397a">Review your interested buyers</span>
                                </li>
                                <p class="mt-4" style="color: black;font-size: 17px">Buyers will email you directly
                                    through the website.</p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 xs-hide">
                        <video src="{{url('')}}/Steps.mp4" class="lazy img-fluid wow fadeIn" data-wow-delay="1.25s"
                               alt="">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    </div><!-- content close -->
    <a href="#" id="back-to-top"></a>
    <script>
        function openSignUpPage(number) {
            countryId = document.getElementById('country-id').innerText
            window.location.href = `{{env('APP_URL')}}/sell-private-business/${countryId}/${number}`
        }
    </script>
@endsection

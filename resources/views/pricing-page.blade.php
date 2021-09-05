@extends('layout/layout')
@section('content')
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div id="top"></div>

    <section id="section-hero" aria-label="section" class="no-top no-bottom "
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom" style="margin-top: 50px">
        <p id="country-id" style="display: none">{{$countryId}}</p>
        <input id="session-id" style="display: none" value="{{\Illuminate\Support\Facades\Session::get('userId')}}">
        <br>
        <br>
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
                @foreach(\App\Models\SubscriptionPackage::orderBy('price', 'asc')->get() as $package)
                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">
                    <div class="pricing-s1 mb30">
                        <div class="top" style="background: rgba(147,74,95,0.54)">
                            <h3 style="color: white">{{$package->duration}}</h3>
                        </div>
                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px;background: #934A5F">
                            <p class="price">
                                <span class="currency">$</span>
                                <span class="m opt-1" style="font-size: 25px;">{{$package->price}}</span>
                            </p>
                        </div>

                        <div class="bottom">
                            <ul>
                                <p style="color: black;text-align: center">
                                    {!! $package->text !!}
                                </p>
                                <p style="font-weight: bold;text-align: center">
                                    Cash Back on Selling : <span>{{$package->cash_back}}</span>
                                </p>
                                <p style="font-weight: bold;text-align: center">
                                    Featured Promotion Worth : <span>{{$package->featured_promotion_worth}}</span>
                                </p>
                            </ul>

                        </div>

                        <div class="action">
                            <a style="cursor: pointer" class="btn btn-main" data-toggle="modal" data-target="#myModal" onclick="openSignUpPage(`{{$package->id}}`)">Get Started</a>
                        </div>
                    </div>
                </div>
                @endforeach
{{--                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">--}}
{{--                    <div class="pricing-s1 mb30">--}}
{{--                        <div class="top">--}}
{{--                            <h3>1 MONTH</h3>--}}
{{--                        </div>--}}
{{--                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">--}}
{{--                            <p class="price">--}}
{{--                                <span class="currency">$</span>--}}
{{--                                <span class="m opt-1" style="font-size: 25px">49</span>--}}
{{--                                <span class="month">p/mo</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="bottom">--}}
{{--                            <ul>--}}
{{--                                <p style="color: black;padding: 20px;text-align: center">Just $49 USD</p>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="action">--}}
{{--                            <a data-toggle="modal" data-target="#myModal" onclick="openSignUpPage(49)" style="cursor: pointer" class="btn-main">Sign Up Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">--}}
{{--                    <div class="pricing-s1 mb30">--}}
{{--                        <div class="top">--}}
{{--                            <h3>3 MONTHS</h3>--}}
{{--                        </div>--}}
{{--                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">--}}
{{--                            <p class="price">--}}
{{--                                <span class="currency">$</span>--}}
{{--                                <span class="m opt-1" style="font-size: 25px">69</span>--}}
{{--                                <span class="month">p/mo</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="bottom">--}}
{{--                            <ul>--}}
{{--                                <p style="color: black;padding: 20px;text-align: center">Just $69 USD</p>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="action">--}}
{{--                            <a data-toggle="modal" data-target="#myModal" onclick="openSignUpPage(69)" class="btn-main" style="cursor: pointer">Sign Up Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-6 col-sm-12 sq-item wow">--}}
{{--                    <div class="pricing-s1 mb30">--}}
{{--                        <div class="top">--}}
{{--                            <h3>6 MONTHS</h3>--}}
{{--                        </div>--}}
{{--                        <div class="mid text-light bg-color" style="height: 50px;padding: 15px">--}}
{{--                            <p class="price">--}}
{{--                                <span class="currency">$</span>--}}
{{--                                <span class="m opt-1" style="font-size: 25px">89</span>--}}
{{--                                <span class="month">p/mo</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="bottom">--}}
{{--                            <ul>--}}
{{--                                <p style="color: black;padding: 20px;text-align: center">Just $89 USD</p>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

{{--                        <div class="action">--}}
{{--                            <a data-toggle="modal" data-target="#myModal" onclick="openSignUpPage(89)" style="cursor: pointer" class="btn-main">Sign Up Now</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
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


    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title" style="text-align: center">Selling your business is easy with {{env('APP_NAME')}}</h5>
                        <p>Firstly create your seller account</p>
                        <p>
                            Existing account? <a href="#" onclick="document.getElementById('reg-mdl').click()" data-toggle="modal" data-target="#myModal1122">Signin here</a>
                        </p>
                    </div>
                    <button type="button" id="reg-mdl" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row" style="margin-top: 5px">
                        <div class="col-md-12">
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>First Name *</label>
                                <input class="form-control" type="text" name="firstName" id="firstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Last Name *</label>
                                <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Last Name">
                            </div>
                        </div>


                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Telephone *</label>
                                <input class="form-control" type="text" name="telephone" id="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password *</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                            </div>
                        </div>
                        <div id="loadergif" style="margin: 0 auto;max-width: 100px;display: none">
                            <img src="{{url('loader.gif')}}" style="height: 100px">
                        </div>
                        <div style="margin-top: 20px">
                            <button class="btn btn-main" onclick="saveBasicDetails()">Start Advertising</button>
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

    <br>
    <br>
    </div><!-- content close -->
    <a href="#" id="back-to-top"></a>
    <script>
        let numberVal = 0;

        function openSignUpPage(number) {
            numberVal = number;
            if (document.getElementById('session-id').value !== ''){
                countryId = document.getElementById('country-id').innerText
                window.location.href = `{{env('APP_URL')}}/sell-private-business/${countryId}/${numberVal}`
            }

        }


        function saveBasicDetails(){

            let title = document.getElementById('title').value;
            let firstName = document.getElementById('firstName').value;
            let lastName = document.getElementById('lastName').value;
            let telephone = document.getElementById('telephone').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;
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
                        countryId = document.getElementById('country-id').innerText
                        window.location.href = `{{env('APP_URL')}}/sell-private-business/${countryId}/${numberVal}`
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

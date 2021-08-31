@extends('layout/layout')
@section('content')
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="no-top no-bottom "
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom" style="margin-top: 150px;margin-bottom: 100px">
        <div class="v-center" style="min-height: 50vh!important;">
            <div class="container">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h4 style="color: black;font-size: 14px">{{$errors->first()}}</h4>
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('msg'))
                    <div class="alert alert-success" style="margin-bottom: 0px!important;">
                        <h4 style="color: black">{{\Illuminate\Support\Facades\Session::get("msg")}}</h4>
                    </div>
                @endif
                <div class="row ">
                    <div class="col-md-6" style="border-left: 2px solid #8364E2;padding-inline-start: 30px" >
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h3 class="wow fadeInUp" data-wow-delay=".75s" style="font-size: 30px">Login</h3>
                       <div style="max-width: 500px">
                          <form action="{{url('login-user-request')}}" method="post">
                              @csrf
                              <div>
                                  <p>Email</p>
                                  <input type="text" class="form-control" name="email" required>
                              </div>
                              <div style="margin-top: 10px">
                                  <p>Password</p>
                                  <input type="password" class="form-control" name="password" required>
                              </div>
                              <div style="margin-top: 10px">
                                  <button class="btn btn-primary" style="background: #8364E2">Login</button>
                              </div>
                          </form>

                       </div>
                        <div class="spacer-10"></div>
                        <div class="mb-sm-30"></div>
                    </div>
                    <div class="col-md-6" style="border-left: 2px solid #4ebe3f;padding-inline-start: 30px">
                        <div class="spacer-single"></div>
                        <div class="spacer-10"></div>
                        <h3 class="wow fadeInUp" data-wow-delay=".75s" style="font-size: 30px">Register</h3>
                        <div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href="#" id="back-to-top"></a>
@endsection

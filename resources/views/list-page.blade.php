@extends('layout/layout-simple')
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" style="padding-top: 20px!important;">
        </section>
        <section id="section-category" class="no-top" style="padding-top: 20px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Select your country to continue</h1>
                            <p style="font-size: 20px;">Note: your currency will be according to the selected country</p>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="background: rgba(128,128,128,0.27);padding: 50px">
{{--                <div class="row p-5">--}}
{{--                    <div class="text-center">--}}
{{--                        <h2>Flexible packages or a limited trial available</h2>--}}
{{--                        </div>--}}
{{--                    <div class="small-border" style="width: 100%!important;color: rgba(128,128,128,0.33)!important;"></div>--}}
{{--                </div>--}}
                <div style="margin: 0 auto;max-width: 600px">
                    <form action="{{url('select-country-submission')}}" method="post">
                        @csrf
                    <div class="row pb-5">
{{--                        <div class="col-lg-12" style="margin-top: 10px">--}}
{{--                            <p style="color: black;font-size: 14px">Find out more. Please select your country:</p>--}}
{{--                        </div>--}}
                        <div class="col-lg-12" style="margin-top: 10px">
                            <p style="font-weight: bold">Select Country</p>
                            <select id="select-country" class="form-control" name="sellist1">
                                <option value="">Select Country</option>
                                @foreach($countries as $country)
                                    <option value="{{$country->url_code}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12" style="margin-top: 10px">
                            <button type="submit" style="background: #403f83;color: white;padding: 5px;border: none;width: 100px;border-radius: 5px">GO</button>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
    <a href="#" id="back-to-top"></a>
    <script>
        function openPricingPage() {
            let selectCountry = document.getElementById('select-country').value;
            if (selectCountry === "" || selectCountry === null){
                alert("please Select Country")
                return false
            }
            window.location.href = `{{env('APP_URL')}}/pricing-table/${selectCountry}`
        }
    </script>
@endsection

@extends('layout/layout')
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section">
        </section>
        <section id="section-category" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1>Selling a business? We can help you</h1>
                            <p style="font-size: 20px;">We have been helping people buy and sell businesses online since 1996.</p>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="background: rgba(128,128,128,0.27)">
                <div class="row p-5">
                    <div class="text-center">
                        <h2>Flexible packages or a limited trial available</h2>
                        </div>
                    <div class="small-border" style="width: 100%!important;color: rgba(128,128,128,0.33)!important;"></div>
                </div>
                <div class="row pb-5">
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-3" style="margin-left: 60px">
                        <p style="color: black;font-size: 14px">Find out more. Please select your country:</p>
                    </div>
                    <div class="col-lg-3" style="margin-left: -40px">
                        <select id="select-country" class="form-control" name="sellist1">
                            <option value="">Select Country</option>
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3">
                    <button onclick="openPricingPage()" style="background: #403f83;color: white;padding: 5px;border: none;width: 100px;border-radius: 5px">GO</button>
                    </div>
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

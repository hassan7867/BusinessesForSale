@extends('layout/layout')
@section('content')
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
        }
        .fontsizeresp{
            font-size: 35px;
        }
        @media screen and (max-width: 700px) {
            .customsearchinputfield{
                border-radius: 10px!important;
                margin-top: 10px;
            }
            .cutomsearchbtnclass{
                border-radius: 10px!important;
                margin-top: 10px;
            }
            .margintopresp{
                margin-top: 18px!important;
            }
            .mainsecmarginresp{
                margin-top: 0px;
            }
            .fontsizeresp{
                font-size: 25px;
            }
        }


        .rowclassinlisting{
            padding: 20px;
            border-top: 1px solid lightgrey;
            margin-bottom: 15px;
        }
        .marginbtnfav{
            margin-left: 15px;
            margin-top: 15px;
        }
        .viewmoreresp{
            margin-top: 15px;
        }
        .margintoprespformobile{
            margin-top: 150px!important;
        }
        .heightofrespmobile{
            height: 500px!important;
        }


        @media screen and (max-width: 700px) {
            .marginbtnfav{
                margin-left: 0px;
                margin-top: 15px;
                display: block;
            }
            .viewmoreresp{
                display: block;
            }
            .colmd8class{
                margin-top: 15px;
            }
            .margintoprespformobile{
                margin-top: 10px!important;
            }
            .heightofrespmobile{
                height: 300px!important;
            }
        }
    </style>
    <!-- content begin -->
    {{--<div class="no-bottom no-top" id="content">--}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <div id="top"></div>

    <section id="section-hero" aria-label="section" class="no-top no-bottom "
             data-bgimage="url(images/background/bg-shape-1.jpg) bottom" style="margin-top: 50px">
        <input id="session-id" style="display: none" value="{{\Illuminate\Support\Facades\Session::get('userId')}}">
        <div style=";margin-bottom: 100px" class="margintoprespformobile">
            <div class="container">
                <h3 class="wow fadeInUp" data-wow-delay=".75s" style="font-size: 30px;">
                    {{$listing->heading}}
                </h3>
                <p style="font-size: 16px">
                    {{$listing->location->name}}, {{\App\Models\Countries::where('id', $listing->location->country_id)->first()['name']}}
                </p>

                    <div class="row">
                        <div class="col-md-3">
                            <p>{{$listing->asking_price_as}} : <span style="font-weight: bold;font-size: 20px">{{$countrySelected->symbol}} {{$listing->asking_price * $countrySelected->from_usd}}</span></p>
                        </div>
                        <div class="col-md-3">
                            <p>{{$listing->turn_over_term}} Turnover : <span style="font-weight: bold;font-size: 20px">{{$countrySelected->symbol}} {{$listing->turn_over * $countrySelected->from_usd}}</span></p>
                        </div>
                        <div class="col-md-3">
                            <p>{{$listing->net_profit_term}} Net Profit: <span style="font-weight: bold;font-size: 20px">{{$countrySelected->symbol}} {{$listing->net_profit * $countrySelected->from_usd}}</span></p>
                        </div>
                        <div class="col-md-3">
                             <button class="btn btn-main" disabled>Request Details</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-12">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" style="border: 4px solid var(--secondary-color)">
                                    @foreach($listing->photos as $key => $photo)
                                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                            <img class="d-block w-100 heightofrespmobile" src="{{url('get-listing-photo')}}/{{$photo->id}}" alt="First slide"  >
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

{{--                            <div class="d-flex flex-wrap">--}}
{{--                                @foreach($listing->photos as $photo)--}}
{{--                                    <div style="height: 250px;width: 280px;margin-top: 10px;margin-left: 20px">--}}
{{--                                        <a target="_blank" href="{{url('get-listing-photo')}}/{{$photo->id}}">--}}
{{--                                            <img src="{{url('get-listing-photo')}}/{{$photo->id}}" style="height: 250px;width: 280px">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}

                        </div>
                        <div class="col-md-12" style="margin-top: 40px">
                            <h3 style="color: var(--secondary-color);border-bottom: 1px solid var(--secondary-color);padding-bottom: 10px">Business Description</h3>
                            <p style="margin-top: 15px">
                                {{$listing->summary}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Trading hours: </span> {{$listing->trading_hours}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Tenure: </span> {{$listing->property_status}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Is accommodation included? : </span> {{$listing->accomodation_included}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Location Details: </span> {{$listing->location_details}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Is this business home based: </span> {{$listing->home_based}}
                            </p>
                            <p style="margin-top: 15px">
                                <span style="font-weight: bold">Website address:: </span> <a target="_blank" href="{{$listing->website_address}}">{{$listing->website_address}}</a>
                            </p>
                        </div>

                    </div>
                <hr>
                <div style="margin-top: 20px">
                   <p style="color: var(--secondary-color);font-weight: bold;font-size: 22px">Contact Seller</p>
                    <p style="margin-top: 15px">Coming soon.</p>
                </div>

                        <div class="spacer-10"></div>
                        <div class="mb-sm-30"></div>


                <div class="row">

                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <a href="#" id="back-to-top"></a>
    <script>


        $(document).ready(function(){
        });





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

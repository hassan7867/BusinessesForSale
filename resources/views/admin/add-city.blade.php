@extends('admin/layout')
@section('content')
    <div id="content" class="bg-container">
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
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-user"></i>
                            City
                        </h4>
                    </div>
                    <div class="col-lg-6 col-sm-8 col-12">
                        <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                            <li class="breadcrumb-item">
                                <a href="index1.html">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Users</a>
                            </li>
                            <li class="active breadcrumb-item">User Grid</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-white">
                        Add New City
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <div>
                            <div>
                                <div class="outer">
                                    <div class="inner bg-container">
                                        <div class="card">
                                            <div class="card-body m-t-35">
                                                <div class="form-horizontal login_validator">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row m-t-25">
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-lg-3 text-lg-right">
                                                                    <label for="pincode" class="col-form-label">City
                                                                        *</label>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-8">
                                                                    <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-plus text-primary"></i></span>
                                                                        <input type="text" placeholder=" "
                                                                               name="pincode" id="city"
                                                                               class="form-control" required>
                                                                    </div>
                                                                    <p class="text-danger" style="display: none"
                                                                       id="city-error">City Name is required</p>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-3 text-lg-right">
                                                                    <label for="pincode" class="col-form-label">Select Country</label>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-8">
                                                                    <select class="form-control chzn-select" tabindex="2" id="select-country">
                                                                        <option disabled selected value="-1">Choose a Country</option>
                                                                        @foreach($allCountries as $countries)
                                                                            <option value="{{$countries->id}}">{{$countries->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-3 text-lg-right">
                                                                    <label for="pincode" class="col-form-label">Select
                                                                        Region</label>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-8">
                                                                    <select class="form-control chzn-select"
                                                                            tabindex="2" id="select-region">
                                                                        <option disabled selected value="-1">Choose a
                                                                            Region
                                                                        </option>
                                                                        @foreach($allRegions as $regions)
                                                                            <option value="{{$regions->id}}">{{$regions->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-lg-9 ml-auto">
                                                                    <button class="btn btn-primary"
                                                                            onclick="saveRegion()" type="button">
                                                                        <i class="fa fa-user"></i>
                                                                        Save
                                                                    </button>
                                                                    <a class="btn btn-warning"
                                                                       href="{{url('manage-countries')}}"
                                                                       style="color: white" id="clear">
                                                                        <i class="fa fa-refresh"></i>
                                                                        Cancel
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function saveRegion() {
            document.getElementById('city-error').style.display = 'none'
            let city = document.getElementById('city').value;
            let country = document.getElementById('select-country').value;
            let region = document.getElementById('select-region').value;
            if (region === "" || region === null){
                document.getElementById('city-error').style.display = 'block'
                return false;
            }
            $.ajax({
                url: `{{env('APP_URL')}}/save-city`,
                type: 'POST',
                dataType: "JSON",
                data: {city: city,country: country,region: region, "_token": "{{ csrf_token() }}"},
                success: function (result) {
                    if (result.status === true) {
                        window.location.href = `{{env('APP_URL')}}/manage-city`

                    } else {
                        alert(result.message)
                    }
                },
            });
        }
    </script>
@endsection

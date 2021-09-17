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
                            Add Country
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-white">
                        Add New Country
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <div>
                            <div>
                                <div class="outer">
                                    <div class="inner bg-container">
                                        <div class="card">
                                            <form method="post" action="{{url('save-country')}}">
                                                @csrf
                                                <div class="card-body m-t-35">
                                                    <div class="form-horizontal login_validator">
                                                        <div class="row">
                                                            <div class="col-12" style="margin: 0 auto;max-width: 600px">

                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">Country Name</label>
                                                                    <input type="text" placeholder="" name="country" id="country" class="form-control" required>
                                                                </div>

                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">Country Code</label>
                                                                    <input type="text" placeholder="" name="country_code" id="country" class="form-control" required>
                                                                </div>
                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">Currency</label>
                                                                    <input type="text" placeholder="" name="currency" id="country" class="form-control" required>
                                                                </div>
                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">ISO CODE</label>
                                                                    <input type="text" placeholder="" name="iso_code" id="country" class="form-control" required>
                                                                </div>
                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">Symbol</label>
                                                                    <input type="text" placeholder="" name="symbol" id="country" class="form-control" required>
                                                                </div>
                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">URL Code</label>
                                                                    <input type="text" placeholder="E.g: ng for nigeria" name="url_code" id="url_code" class="form-control" required>
                                                                </div>
                                                                <div style="margin-top: 10px">
                                                                    <label style="font-weight: bold">USD Rate</label>
                                                                    <input type="text" placeholder="" name="from_usd" id="country" class="form-control" required>
                                                                </div>

                                                                <div class="form-group row" style="margin-top: 20px">
                                                                    <div class="col-lg-9 ml-auto">
                                                                        <button class="btn btn-primary" type="submit">
                                                                            Save
                                                                        </button>
                                                                        <a class="btn btn-warning"
                                                                           href="{{url('manage-countries')}}"
                                                                           style="color: white" id="clear">
                                                                            Cancel
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

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
        function saveCountry() {
            document.getElementById('country-error').style.display = 'none'
            let country = document.getElementById('country').value;
            if (country === "" || country === null) {
                document.getElementById('country-error').style.display = 'block'
                return false;
            }
            $.ajax({
                url: `{{env('APP_URL')}}/save-country`,
                type: 'POST',
                dataType: "JSON",
                data: {country: country, "_token": "{{ csrf_token() }}"},
                success: function (result) {
                    if (result.status === true) {
                        window.location.href = `{{env('APP_URL')}}/manage-countries`

                    } else {
                        alert(result.message)
                    }
                },
            });
        }
    </script>
@endsection

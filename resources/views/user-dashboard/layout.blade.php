@extends('layout/layout')
@section('content')
    <style>
        .itemli{
            padding: 20px;
            color: black;
            background: rgba(211, 211, 211, 0.14);
            list-style: none;
            margin-top: 10px;
            cursor: pointer;
        }
        .listinnera{
            color: black;
        }
        .selectedList{
            background: #8364E2;
            color: white;
        }
        .selectedlistinnera{
            color: white;
        }
        .selectedlistinnera:hover{
            color: white;
        }
        @media screen and (max-width: 700px) {
            .respmargininuserdashborad{
                margin-top: 50px!important;
            }
        }

        .respmargininuserdashborad{
            margin-top: 150px;
        }
    </style>
    <div class="container respmargininuserdashborad" style=";margin-bottom: 100px">
        <div class="row">
            <div class="col-md-3">
{{--                <p>--}}
{{--                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="background: #8364E2">--}}
{{--                        HOME--}}
{{--                    </a>--}}
{{--                </p>--}}
                <div id="collapseExample">
                    <div class="card card-body">
                        <ul style="list-style: none;padding-inline-start: 0px">
                            <li class="itemli {{\Request::is('user-dashboard') ? 'selectedList' : ''}}">
                                <a href="{{url('user-dashboard')}}" class="listinnera {{\Request::is('user-dashboard') ? 'selectedlistinnera' : ''}}" >
                                    Dashboard
                                </a>
                            </li>
                            <li class="itemli {{\Request::is('resources') ? 'selectedList' : ''}}">
                                <a href="{{url('resources')}}" class="listinnera {{\Request::is('resources') ? 'selectedlistinnera' : ''}}">
                                    Resources
                                </a>
                            </li>
                            <li class="itemli {{\Request::is('user-profile') ? 'selectedList' : ''}}">
                                <a href="{{url('user-profile')}}" class="listinnera {{\Request::is('user-profile') ? 'selectedlistinnera' : ''}}">
                                    Profile
                                </a>
                            </li>
                            <li class="itemli">
                                <a href="{{url('user-logout')}}" class="listinnera">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('dashboard-content')
            </div>
        </div>
    </div>
@endsection

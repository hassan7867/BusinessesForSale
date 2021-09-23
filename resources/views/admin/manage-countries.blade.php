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
                            All Countries
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-white">
                        Countries
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <a href="{{url('add-country')}}">
                            <button class="btn btn-primary">Add Country</button>
                        </a>
                        <div class="mt-2">
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                       id="editable_table" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">#
                                        </th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Country</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Country Code</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Currency</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">ISO Code</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Symbol</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Url Code</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">USD Rate</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allCountries as $key => $country)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$key+1}}</td>
                                            <td>{{$country->name}}</td>
                                            <td>{{$country->country_code}}</td>
                                            <td>{{$country->currency}}</td>
                                            <td>{{$country->iso_code}}</td>
                                            <td>{{$country->symbol}}</td>
                                            <td>{{$country->url_code}}</td>
                                            <td>{{$country->from_usd}}</td>
                                                <td> &nbsp;
{{--                                                    @if($country->is_popular == 0)&nbsp;--}}
{{--                                                    <a class="edit" data-toggle="tooltip" data-placement="top" href="{{url('popular-category')}}/{{$country->id}}"><button class="btn btn-success btn-sm">Add to Popular</button></a>&nbsp;--}}
{{--                                                    @else--}}
{{--                                                        <a class="edit" data-toggle="tooltip" data-placement="top" href="{{url('unpopular-category')}}/{{$country->id}}"><button class="btn btn-danger btn-sm">Remove Popular</button></a>&nbsp;--}}
{{--                                                    @endif--}}

                                                    <a class="edit" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('delete-country')}}/{{$country->id}}" style="margin-left: 10px"><i class="fa fa-times text-danger"></i></a>
                                                    <a class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Edit"
                                                        href="{{url('edit-country')}}/{{$country->id}}" style="margin-left: 10px"><i class="fa fa-edit text-success"></i></a>
                                                    &nbsp;</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function declineBusiness(id) {
            alert(id)
        }
    </script>
@endsection

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
                            All Cities
                        </h4>
                    </div>

                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-white">
                        Cities
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <a href="{{url('add-city')}}">
                            <button class="btn btn-primary">Add City</button>
                        </a>
                        <div class="mt-2">
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                       id="editable_table" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">#
                                        </th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Region</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Country</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($city as $key => $allCities)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$key+1}}</td>
                                            <td>{{$allCities->name}}
                                            </td>
                                            <td>{{$allCities->region}}
                                            </td>
                                            <td>{{$allCities->country}}
                                            </td>
                                            <td> &nbsp;
                                                <a
                                                        class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Delete"
                                                        href="{{url('delete-city')}}/{{$allCities->id}}"><i class="fa fa-times text-danger"></i></a>&nbsp;</td>
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

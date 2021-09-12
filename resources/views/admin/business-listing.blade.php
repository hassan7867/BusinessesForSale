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
                            All Businesses
                        </h4>
                    </div>

                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-white">
                        All Businesses
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <div>
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                       id="editable_table" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">#
                                        </th>
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Heading
                                        </th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Summary</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Location
                                            Details
                                        </th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Asking Price
                                        </th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Turn Over</th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Net Profit</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allBusinessListing as $key => $listing)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$key+1}}</td>
                                            <td class="sorting_1">{{$listing->heading}}</td>
                                            <td>{{$listing->summary}}
                                            </td>
                                            <td>{{$listing->location_details}}
                                            </td>
                                            <td>{{$listing->asking_price}}
                                            </td>
                                            <td>{{$listing->turn_over}}
                                            </td>
                                            <td>{{$listing->net_profit}}
                                            </td>
                                            @if($listing->status == 'pending')
                                            <td> &nbsp;
                                                <a
                                                        class="edit" data-toggle="tooltip" data-placement="top"
                                                        title="Decline"
                                                        href="{{url('reject-business')}}/{{$listing->id}}"><i class="fa fa-times text-danger"></i></a>&nbsp;
                                                &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                         data-placement="top" title="Approve" href="{{url('approve-business')}}/{{$listing->id}}"><i
                                                            class="fa fa-check text-success"></i></a></td>
                                            @elseif($listing->status == 'approved')
                                                <td style="color: green">
                                                    Approved
                                                </td>   @elseif($listing->status == 'rejected')
                                                <td style="color: green">
                                                    Rejected
                                                </td>
                                            @endif
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

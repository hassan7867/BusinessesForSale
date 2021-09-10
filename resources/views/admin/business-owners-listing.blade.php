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
                            All Businesses Owners
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
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Title
                                        </th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">First Name</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Last Name
                                        </th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Telephone #
                                        </th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Email</th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Package / Trial</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allBusinessOwners as $key => $owners)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$key+1}}</td>
                                            <td class="sorting_1">{{$owners->title}}</td>
                                            <td>{{$owners->first_name}}
                                            </td>
                                            <td>{{$owners->last_name}}
                                            </td>
                                            <td>{{$owners->telephone}}
                                            </td>
                                            <td>{{$owners->email}}
                                            </td>
                                            <td>{{$owners->userSubscriptionPackage}}
                                            </td>
                                            @if($owners->is_blocked == '0')
                                                <td> &nbsp;
                                                    <a
                                                            class="edit" data-toggle="tooltip" data-placement="top"
                                                            title="Decline"
                                                            href="{{url('block-accounts')}}/{{$owners->id}}"><button class="btn btn-danger">Block Account</button></a>&nbsp;</td>
                                            @elseif($owners->is_blocked == '1')
                                                <td>
                                                    <a
                                                            class="edit" data-toggle="tooltip" data-placement="top"
                                                            title="Decline"
                                                            href="{{url('unblock-accounts')}}/{{$owners->id}}"><button class="btn btn-primary">UnBlock Account</button></a>
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

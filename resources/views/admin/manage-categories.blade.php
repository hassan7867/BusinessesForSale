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
                            All Categories
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
                        Categories
                    </div>
                    <div class="card-body m-t-35" id="user_body">
                        <a href="{{url('add-category')}}">
                            <button class="btn btn-primary">Add Category</button>
                        </a>
                        <div class="mt-2">
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                       id="editable_table" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">#
                                        </th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Name</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Parent Category</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Has SubCategory</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allCategories as $key => $categories)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$key+1}}</td>
                                            <td>{{$categories->name}}
                                            </td>
                                            @if($categories->parent_category)
                                            <td>{{$categories->parent_category}}
                                            </td>
                                                @else
                                                <td><i class="fa fa-times-circle text-danger" title="No Parent Category"></i>
                                                </td>
                                            @endif
                                            @if($categories->has_subcategory == "0")
                                                <td><i class="fa fa-times-circle text-danger" title="No Subcategory"></i>
                                                </td>
                                            @else
                                                <td><i class="fa fa-check text-success" title="Has Subcategory"></i>
                                                </td>
                                            @endif
                                                <td> &nbsp;
                                                <a
                                                        class="edit" data-toggle="tooltip" data-placement="top"
                                                        href="{{url('delete-category')}}/{{$categories->id}}"><button class="btn btn-danger btn-sm">Delete</button></a>&nbsp;</td>
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

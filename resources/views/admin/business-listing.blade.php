@extends('admin/layout')
@section('content')
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-4">
                        <h4 class="nav_top_align">
                            <i class="fa fa-user"></i>
                            All Businesses
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
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <a href="add_user.html" id="editable_table_new" class=" btn btn-default">
                                    Add User <i class="fa fa-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group float-right users_grid_tools">
                                <div class="tools"></div>
                            </div>
                        </div>
                        <div>
                            <div>
                                <table class="table  table-striped table-bordered table-hover dataTable no-footer"
                                       id="editable_table" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Username
                                        </th>
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Gender</th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">City</th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Status</th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Breanna15</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="6c2e1e090d02020d423e0d1807092c040318010d0500420f0301">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">North Jadaton</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Elmo83</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="ade8c1c0c283efccdfd9c2c1c8d9d9c49e95edd4ccc5c2c283cec2c0">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Evangelinefort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Cooper.Kemmer</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="6c2f03031c091e3327090101091e2c150d040303420f0301">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Presleymouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Lamar_Parisian75</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="236f424e42517c7342514a504a424d1210635a424b4c4c0d404c4e">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Denesikton</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Ulises54</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="3f6a53564c5a4c0b0c7f465e575050115c5052">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Dillan</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Reece_Corkery</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="abf9cecec8cef4e8c4d9c0ced9d29f92ebccc6cac2c785c8c4c6">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Lake Dejuan</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Yvonne73</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="92cbe4fdfcfcf7a1a4d2fafde6fff3fbfebcf1fdff">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">New Linaside</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Greyson_Padberg89</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="1a5d687f63697574344a7b7e787f687d5a637b72757534797577">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Reingertown</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Corene.Walsh20</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="33705c41565d566c64525f405b050773545e525a5f1d505c5e">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Maggioview</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Jacinthe70</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="bdf7dcded4d3c9d5d88f8ffddad0dcd4d193ded2d0">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">North Zoilamouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Moises72</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="eda082849e889edcdead8a808c8481c38e8280">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Lake Annie</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Michel.Heidenreich</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="410c282229242d1e09242825242f3324282229777801262c20282d6f222e2c">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Pfeffershire</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Josianne.Mante</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="3c76534f555d52525912715d5248597c5b515d5550125f5351">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Westfort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brendan72</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="490b3b2c272d2827161a20392c3a7879093028212626672a2624">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">North Vicentaside</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Matt24</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="4b062a3f3f14092a3939243c380b23243f262a222765282426">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">New Westonfurt</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Kiarra.Anderson26</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="672c0e0615150638260903021514080927000a060e0b4904080a">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">West Beulah</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Kristian.Konopelski</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="3d764f544e49545c5313765253524d58514e56540e0d7d555249505c5451135e5250">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Eloise</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Isac_Romaguera15</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="460f3527256814292b2721332334277777062e29322b272f2a6825292b">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Lake Georgette</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Cedrick.Kassulke</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="b1f2d4d5c3d8d2da8385f1d9dec5dcd0d8dd9fd2dedc">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Stehrville</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Ethyl_Rolfson</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="82c7f6eafbeeb3b3c2e5efe3ebeeace1edef">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">North Daphney</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Deven_Paucek83</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="e7a382918289dfdea78f88938a868e8bc984888a">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Lake Jacinto</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Syble.Walter</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="b7e4ced5dbd287f7ced6dfd8d899d4d8da">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Aldamouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Lacy.Boehm</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="743815170d2b361b111c19341c1b0019151d185a171b19">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Cartwrightmouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Griffin.Prohaska40</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="9fd8edf6f9f9f6f1ada6dfe6fef7f0f0b1fcf0f2">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Ezra</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Garret19</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="de99bfacacbbaaefe69eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Schultzberg</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Tyrel_Murphy</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="31654843545d1f7c44434159480771595e455c50585d1f525e5c">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Lake Cathryn</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Viva_Wisozk92</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="d781bea1b6e5e397bfb8a3bab6bebbf9b4b8ba">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Nitzschefurt</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Ahmad.Nader89</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="7b3a13161a1f24351a1f1e09424a3b021a13141455181416">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">South Coleville</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gaston_Bashirian49</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="24634557504b4a7b6645574c4d564d454a171d644c4b5049454d480a474b49">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Trantowshire</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Deonte26</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="80c4e5efeef4e5b4b2c0e7ede1e9ecaee3efed">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Andreaneburgh</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Candace_Hagenes</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="a3e0c2cdc7c2c0c68debc2c4c6cdc6d09a96e3c4cec2cacf8dc0ccce">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Jeraldbury</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Margarette_Harber</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="90ddf1e2f7f1e2f5e4e4f5bed8f1e2f2f5e2a5a5d0e9f1f8ffffbef3fffd">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Port Alexzandermouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Delta59</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="2d694841594c036a5f4c49546d454259404c4441034e4240">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Clairechester</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Emanuel_Smitham</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="0f4a626e617a6a63505c62667b676e624f766e676060216c6062">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">New Giannimouth</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Henriette.Bergstrom25</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="b3fbd6ddc1dad6c7c7d68780f3cad2dbdcdc9dd0dcde">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Rogahnland</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Shaina_Daniel11</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="6c3f040d05020d42280d020509002c040318010d0500420f0301">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Streichburgh</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Alice_Rempel76</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="bafbd6d3d9df898cfad2d5ced7dbd3d694d9d5d7">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Jaquelin</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Shawn.Cruickshank</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="45162d24322b7675052228242c296b262a28">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Mayertberg</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Chesley6</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="86c5eee3f5eae3ffb0b6c6eee9f2ebe7efeaa8e5e9eb">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Shanyhaven</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Amira.Rolfson</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="edac80849f8cd5dbad8a808c8481c38e8280">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Donnieburgh</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Vivianne.Casper</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="03556a756a626d6d663631437a626b6c6c2d606c6e">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Mollieberg</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Colby98</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="73301c1f110a2c391200074046330a121b1c1c5d101c1e">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Quigleyport</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Queen_Blick23</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="2f7e5a4a4a41016d43464c44176f564e474040014c4042">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Rosalindside</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Dock.Armstrong</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="3f7b505c54607e4d524c4b4d5051587f465e575050115c5052">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">North Ashtyn</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Scot50</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="bcefdfd3c88d8dfcd4d3c8d1ddd5d092dfd3d1">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Felixshire</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Billy_Osinski</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="7a381316160325350913140911134c4c3a1d171b131654191517">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Rennerstad</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Alexandria.OConner</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="a6e7cac3dec7c8c2d4cfc79596e6c1cbc7cfca88c5c9cb">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Hellenfort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Pearlie_Lang73</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="faaa9f9b8896939fd4b69b949dc9ba92958e979b9396d4999597">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Lesleyburgh</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Jameson_Wolf55</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="c18ba0aca4b2aeaf9e96aeada781a6aca0a8adefa2aeac">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Ceceliaberg</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Maurice_Medhurst</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="571a3622253e34326f6e173f38233a363e3b7934383a">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">North Freidaborough</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Emanuel83</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="7c39111d120919104a4c3c1b111d1510521f1311">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Port Aracelyview</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Kenneth28</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="a8e3cdc6c6cddcc0f7e0cddad2c7cfe8cfc5c9c1c486cbc7c5">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Port Rockyland</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Fabian_Eichmann</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="0f496e6d666e613d4f67607b626e6663216c6062">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Gutmannfort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Tanya_Pouros</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="f0a4919e8991dea09f85829f83b0979d91999cde939f9d">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">East Frederique</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brook93</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="480a3a2727237e7c083129202727662b2725">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Schmittchester</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Suzanne_Anderson57</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="edbe98978c838388dcdaad8a808c8481c38e8280">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Nikolasstad</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Claudine.Kub82</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="21624d405445484f441410615840494e4e0f424e4c">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Devinside</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Rosalee38</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="1f4d706c7e737a7a2c5f78727e7673317c7072">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Rutherfordburgh</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Karine.Schaden61</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="6823091a01060d373b0b00090c0d06280f05090104460b0705">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Parisiantown</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brown20</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="46043429312872063f272e29296825292b">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Katrinafort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Markus13</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="9fd2feedf4eaecc0d0ecf6f1ecf4f6dff8f2fef6f3b1fcf0f2">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Nicohaven</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Lue21</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__" data-cfemail="0b477e6e3c334b6c666a626725686466">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Donnafort</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Ardella_VonRueden</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="d697a4b2b3babab78980b9b884a3b3b2b3b896beb9a2bbb7bfbaf8b5b9bb">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Buckridgeview</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Delphia_Kohler</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="cc88a9a0bca4a5adf5fa8ca4a3b8a1ada5a0e2afa3a1">[email&#160;protected]</a>
                                        </td>
                                        <td>Female</td>
                                        <td class="center">Port Mableside</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Felipe1</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="1a5c7f76736a7f45527b7773767623235a72756e777b737634797577">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Lake Nicolastown</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Simone.McCullough89</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="8ad9e3e7e5e4efd5c7e9c9ffe6e6e5ffede2b2becaede7ebe3e6a4e9e5e7">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">South Cortney</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gabriella.Boyle41</td>
                                        <td><a href="https://demo.admireadmin.com/cdn-cgi/l/email-protection"
                                               class="__cf_email__"
                                               data-cfemail="397e585b4b505c5555580101795e54585055175a5654">[email&#160;protected]</a>
                                        </td>
                                        <td>Male</td>
                                        <td class="center">Lake Nat</td>
                                        <td class="center">Approved</td>
                                        <td><a href="view_user.html" data-toggle="tooltip" data-placement="top"
                                               title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;<a
                                                    class="edit" data-toggle="tooltip" data-placement="top" title="Edit"
                                                    href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp;
                                            &nbsp;<a class="delete hidden-xs hidden-sm" data-toggle="tooltip"
                                                     data-placement="top" title="Delete" href="delete_user.html"><i
                                                        class="fa fa-trash text-danger"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="float-right" aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-btn">
<button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    </div>

    <div id="request_list">
        <div class="request_scrollable">
            <ul class="nav nav-tabs m-t-15">
                <li class="nav-item">
                    <a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <div id="settings_section">
                        <div class="layout_styles mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4>Layout settings</h4>
                                </div>
                            </div>
                            <form autocomplete="off">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Header</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_nav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF"
                                                       type="checkbox" data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">Fixed Menu</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_fixed_menunav">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF"
                                                       name="radioBox" type="checkbox" data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-left m-t-20">No Breadcrumb</div>
                                        <div class="float-right m-t-15">
                                            <div id="setting_breadcrumb">
                                                <input class="make-switch" data-on-text="ON" data-off-text="OFF"
                                                       type="checkbox" data-size="small">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mx-3">
                            <div class="row">
                                <div class="col-12 m-t-35">
                                    <h4 class="setting_title">General Settings</h4>
                                </div>
                            </div>
                            <div class="data m-t-5">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
                                    <div class="col-7">
                                        <span class="chat_name">Notifications</span><br/>
                                        Get new notifications
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-info">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Messages</span><br/>
                                        Get new messages
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-danger">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Warnings</span><br/>
                                        Get new warnings
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-warning">
                                            <input type="checkbox" value="" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="data">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
                                    </div>
                                    <div class="col-7">
                                        <span class="chat_name">Events</span><br/>
                                        Show new events
                                    </div>
                                    <div class="col-2 checkbox float-right">
                                        <label class="text-primary">
                                            <input type="checkbox" value="">
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="favourites">
                    <div id="requests" class="mx-3">
                        <div class="m-t-35">
                            <h4 class="setting_title">Favorites</h4>
                        </div>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/images1.jpg" class="message-img avatar rounded-circle" alt="avatar1">
                                </div>
                                <div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Nancy T. Strozier</span><br/>
                                    Away
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Robbinson</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                        <h4 class="setting_title">Contacts</h4>
                        <div class="data m-t-10">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Chester Hardesty</span><br/>
                                    Busy
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Peter</span><br/>
                                    Online
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-warning"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1">
                                </div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Devin Hartsell</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/4.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Kimy Zorda</span><br/>
                                    Available
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle text-success"></i>
                                </div>
                            </div>
                        </div>
                        <div class="data">
                            <div class="row">
                                <div class="col-2">
                                    <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle"
                                         alt="avatar1"></div>
                                <div class="col-8 message-data">
                                    <span class="chat_name">Jessica Bell</span><br/>
                                    Offline
                                </div>
                                <div class="col-1">
                                    <i class="fa fa-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="right">
        <div class="right_content">
            <div class="well-small dark m-t-15">
                <div class="row m-0">
                    <div class="col-lg-12 p-d-0">
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
                            <div class="skin_blue skin_size b_t_r"></div>
                            <div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
                            <div class="skin_green skin_size b_t_r"></div>
                            <div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
                            <div class="skin_purple skin_size b_t_r"></div>
                            <div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
                            <div class="skin_orange skin_size b_t_r"></div>
                            <div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
                            <div class="skin_red skin_size b_t_r"></div>
                            <div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
                        </div>
                        <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
                            <div class="skin_mint skin_size b_t_r"></div>
                            <div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
                        </div>

                        <div class="skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
                        <div class="skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
                        <div class="skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow"
                             onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
                    </div>
                    <div class="col-lg-12 text-center m-t-15">
                        <button class="btn btn-dark button-rounded"
                                onclick="javascript:loadjscssfile('black_skin.html','css')">Dark
                        </button>
                        <button class="btn btn-secondary button-rounded default_skin"
                                onclick="javascript:loadjscssfile('default.html','css')">Default
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

@endsection

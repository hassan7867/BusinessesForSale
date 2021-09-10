<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('')}}/admin/img/logo1.ico" />

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/custom.css" />

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/chartist/css/chartist.min.css" />
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/circliful/css/jquery.circliful.css">
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/pages/index.css">
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
</head>
<body class="body">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{url('')}}/admin/img/loader.gif" style=" width: 50px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top">

        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand" href="index-2.html">
                    <h4><img src="{{url('')}}/admin/img/logo1.ico" class="admin_img" alt="logo">Admin Panel</h4>
                </a>
                <div class="menu mr-sm-auto">
<span class="toggle-left" id="menu-toggle">
<i class="fa fa-bars"></i>
</span>
                </div>
                {{--<div class="top_search_box d-none d-md-flex">--}}
                    {{--<form class="header_input_search">--}}
                        {{--<input type="text" placeholder="Search" name="search">--}}
                        {{--<button type="submit">--}}
                            {{--<span class="font-icon-search"></span>--}}
                        {{--</button>--}}
                        {{--<div class="overlay"></div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                <div class="topnav dropdown-menu-right">
                    <div class="btn-group small_device_search" data-toggle="modal" data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    {{--<div class="btn-group">--}}
                        {{--<div class="notifications no-bg">--}}
                            {{--<a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i class="fa fa-envelope-o fa-1x"></i>--}}
                                {{--<span class="badge badge-pill badge-warning notifications_badge_top">8</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">--}}
                                {{--<div class="popover-header">You have 8 Messages</div>--}}
                                {{--<div id="messages">--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data"><strong>hally</strong>--}}
                                                {{--sent you an image.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data"><strong>Meri</strong>--}}
                                                {{--invitation for party.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<strong>Remo</strong>--}}
                                                {{--meeting details .--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<strong>David</strong>--}}
                                                {{--upcoming events list.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data"><strong>hally</strong>--}}
                                                {{--sent you an image.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data"><strong>Meri</strong>--}}
                                                {{--invitation for party.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<strong>Remo</strong>--}}
                                                {{--meeting details .--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<strong>David</strong>--}}
                                                {{--upcoming events list.--}}
                                                {{--<br>--}}
                                                {{--<small>add to timeline</small>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="popover-footer">--}}
                                    {{--<a href="mail_inbox.html" class="text-white">Inbox</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="btn-group">--}}
                        {{--<div class="notifications messages no-bg">--}}
                            {{--<a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i class="fa fa-bell-o"></i>--}}
                                {{--<span class="badge badge-pill badge-danger notifications_badge_top">9</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">--}}
                                {{--<div class="popover-header">You have 9 Notifications</div>--}}
                                {{--<div id="notifications">--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>Remo</strong>--}}
                                                {{--sent you an image--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">just now.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>clay</strong>--}}
                                                {{--business propasals--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">20min Back.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>John</strong>--}}
                                                {{--meeting at Ritz--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">2hrs Back.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>Luicy</strong>--}}
                                                {{--Request Invitation--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">Yesterday.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>Remo</strong>--}}
                                                {{--sent you an image--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">just now.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>clay</strong>--}}
                                                {{--business propasals--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">20min Back.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>John</strong>--}}
                                                {{--meeting at Ritz--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">2hrs Back.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>Luicy</strong>--}}
                                                {{--Request Invitation--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">Yesterday.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="data">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-2">--}}
                                                {{--<img src="{{url('')}}/admin/img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>--}}
                                            {{--<div class="col-10 message-data">--}}
                                                {{--<i class="fa fa-clock-o"></i>--}}
                                                {{--<strong>Remo</strong>--}}
                                                {{--sent you an image--}}
                                                {{--<br>--}}
                                                {{--<small class="primary_txt">just now.</small>--}}
                                                {{--<br>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="popover-footer">--}}
                                    {{--<a href="#" class="text-white">View All</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="btn-group">--}}
                        {{--<div class="notifications request_section no-bg">--}}
                            {{--<a class="btn btn-default btn-sm messages" id="request_btn"> <i class="fa fa-sliders" aria-hidden="true"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                <img src="{{url('')}}/admin/img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>Admin</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admire Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user"></i>
                                    User Status
                                </a>
                                <a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
                                    Inbox</a>
                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="{{ url('logout-admin') }}"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </nav>


    </div>

    <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="#">
                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="{{url('')}}/admin/img/admin.jpg">
                                <p class="user-info menu_hide">Welcome Admin</p>
                            </a>
                        </div>
                    </div>
                    <hr />
                </div>
                <ul id="menu">
                    <li class="dropdown_menu">
                        <a href="{{url('all-businesses')}}">
                            <i class="fa fa-th"></i>
                            <span class="link-title menu_hide">&nbsp; All Businesses</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="{{url('all-businesses-owners')}}">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; All Businesses Owners</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="{{url('manage-countries')}}">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Manage Countries</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="{{url('manage-region')}}">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Manage Region</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="{{url('manage-city')}}">
                            <i class="fa fa-sitemap"></i>
                            <span class="link-title menu_hide">&nbsp; Manage City/Town</span>
                        </a>
                    </li>
                    <li class="dropdown_menu">
                        <a href="{{url('manage-categories')}}">
                            <i class="fa fa-retweet"></i>
                            <span class="link-title menu_hide">&nbsp; Manage Categories</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

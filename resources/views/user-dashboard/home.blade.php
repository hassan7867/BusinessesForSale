@extends('user-dashboard.layout')
@section('dashboard-content')
    <div class="container">
        <h3 style="text-align: center">Private Seller Account</h3>
        <p>Below is the list of your listings</p>
        <div style="float: right;margin-bottom: 10px">
            <a class="btn btn-success" href="{{url('sell-private-business')}}/1/0">ADD NEW LISTING</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Heading</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($listings as $key => $listing)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$listing->heading}}</td>
                    <td>{{$listing->status}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

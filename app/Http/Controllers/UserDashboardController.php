<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserDashboardController extends Controller
{
    public function userDashboard(){
        $listings = Listing::where('user_id', Session::get('userId'))->get();
        return view('user-dashboard.home')->with(['listings' => $listings]);
    }

    public function resources(){
        return view('user-dashboard.resources');
    }

    public function userLogout(){
        Session::flush();
        return redirect('');
    }

    public function userProfile(){
        return view('user-dashboard.profile');
    }
}

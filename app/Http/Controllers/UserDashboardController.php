<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserDashboardController extends Controller
{
    public function userDashboard()
    {
        $listings = Listing::where('user_id', Session::get('userId'))->get();
        return view('user-dashboard.home')->with(['listings' => $listings]);
    }

    public function resources()
    {
        return view('user-dashboard.resources');
    }

    public function userLogout()
    {
        Session::forget('userId');
        return redirect('');
    }

    public function userProfile()
    {
        return view('user-dashboard.profile');
    }

    public function changePassword(Request $request)
    {
        try {
            $user = User::where('id', Session::get('userId'))->first();
            $user->password = md5($request->newPassword);
            $user->update();
            return json_encode(['status'=>true]);
        } catch (\Exception $exception) {
            return json_encode(['status'=>false,'message'=>"Server Error, Please Try Again Later"]);
        }

    }
}

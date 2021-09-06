<?php

namespace App\Http\Controllers;

use App\Models\AdminTable;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $totalUsers = count(User::all());
        $totalBusiness = count(Listing::all());
        return view('admin/admin-dashboard')->with(['totalUsers'=>$totalUsers,'totalBusiness'=>$totalBusiness]);
    }

    public function loginPage()
    {
        return view('admin/login');
    }

    public function adminLogin(Request $request)
    {
        if (AdminTable::where(['email' => $request->email, 'password' => md5($request->password)])->exists()) {
            $id = AdminTable::where(['email' => $request->email, 'password' => md5($request->password)])->first()['id'];
            Session::put('id', $id);
            Session::put('isAdmin', true);
            return json_encode(['status' => true]);
        } else {
            return json_encode(false);
        }
    }

    public function logoutAdmin()
    {
        Session::flush();
        return redirect('/admin-login');
    }

    public function allBusinessesPage()
    {
       return view('admin/business-listing');
    }
}

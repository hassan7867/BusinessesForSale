<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerPrivateSellerPage(){
        return view('auth.register-private-seller');
    }

    public function openPricingPage()
    {
        return view('pricing-page');
    }
}

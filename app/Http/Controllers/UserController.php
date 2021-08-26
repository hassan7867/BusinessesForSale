<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registerPrivateSellerPage(){
        return view('auth.register-private-seller');
    }

    public function saveBasicDetails(Request $request)
    {
        try {
            if (empty($request->title) || empty($request->firstName) || empty($request->lastName) || empty($request->telephone) || empty($request->email) || empty($request->password)) {
                return json_encode(['status' => false, 'message' => "Invalid Inputs"]);
            }
            if (User::where('email', $request->email)->exists()) {
                return json_encode(['status' => false, 'message' => "Email Address Already taken"]);
            }
            $user = new User();
            $user->title = $request->title;
            $user->first_name = $request->firstName;
            $user->last_name = $request->lastName;
            $user->telephone = $request->telephone;
            $user->email = $request->email;
            $user->password = md5($request->password);
            $user->user_type = "business_owner";
            $user->save();
            return json_encode(['status' => true, 'message' => "Details Saved Successfully"]);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function openPricingPage()
    {
        return view('pricing-page');
    }
}

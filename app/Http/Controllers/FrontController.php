<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function openList(){
        $getCountries = Countries::all();
            return view('list-page')->with(['countries'=>$getCountries]);
    }

    public function selectCountrySubmission(Request $request){
        if (empty($request->sellist1)){
            return redirect()->back();
        }
        Session::put('url_code', $request->sellist1);
        return redirect('' . '/' . $request->sellist1);
    }
}

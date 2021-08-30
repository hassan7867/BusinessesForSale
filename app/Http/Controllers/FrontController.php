<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function openList(){
        $getCountries = Countries::all();
            return view('list-page')->with(['countries'=>$getCountries]);
    }
}

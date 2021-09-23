<?php

namespace App\Http\Controllers;

use App\Models\AdminTable;
use App\Models\Category;
use App\Models\City;
use App\Models\Countries;
use App\Models\Listing;
use App\Models\Region;
use App\Models\Subscription;
use App\Models\SubscriptionPackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        $totalUsers = count(User::all());
        $totalBusiness = count(Listing::all());
        return view('admin/admin-dashboard')->with(['totalUsers' => $totalUsers, 'totalBusiness' => $totalBusiness]);
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
        Session::forget('id');
        Session::forget('isAdmin');
        return redirect('/admin-login');
    }

    public function popularCategory($id){
        $cat = Category::where('id', $id)->first();
        $cat->is_popular = 1;
        $cat->update();
        session()->flash('msg', 'Added successfully!');
        return redirect()->back();
    }

    public function unpopularCategory($id){
        $cat = Category::where('id', $id)->first();
        $cat->is_popular = 0;
        $cat->update();
        session()->flash('msg', 'Removed successfully!');
        return redirect()->back();
    }

    public function allBusinessesPage()
    {
        $allBusinessListing = Listing::all();
        return view('admin/business-listing')->with(['allBusinessListing' => $allBusinessListing]);
    }

    public function allBusinessOwners()
    {
        $allBusinessOwners = User::where("user_type",'business_owner')->get();
        for ($i=0; $i<count($allBusinessOwners);$i++){
            $userPackageId = Subscription::where('user_id',$allBusinessOwners[$i]['id'])->first()['subscription'];
            $allBusinessOwners[$i]['userSubscriptionPackage']  = SubscriptionPackage::where('id',$userPackageId)->first()['duration'];
        }
        return view('admin/business-owners-listing')->with(['allBusinessOwners' => $allBusinessOwners]);
    }

    public function manageCountries()
    {
        $allCountries = Countries::all();
        return view('admin/manage-countries')->with(['allCountries' => $allCountries]);
    }

    public function manageRegion()
    {
        $allRegions = Region::all();
        for ($i=0;$i<count($allRegions);$i++){
            $allRegions[$i]['country'] = Countries::where('id',$allRegions[$i]['country_id'])->first()['name'];
        }
        return view('admin/manage-regions')->with(['regions' => $allRegions]);
    }

    public function manageCity()
    {
        $allCities = City::all();
        for ($i = 0; $i < count($allCities); $i++) {
            $allCities[$i]['region'] = Region::where('id', $allCities[$i]['region_id'])->first()['name'];
            $allCities[$i]['country'] = Countries::where('id', $allCities[$i]['country_id'])->first()['name'];
        }
        return view('admin/manage-city')->with(['city' => $allCities]);
    }

    public function manageCategories()
    {
        $allCategories = Category::all();
        for ($i = 0; $i < count($allCategories); $i++) {
            $allCategories[$i]['parent_category'] = Category::where('id', $allCategories[$i]['parent_id'])->first()['name'];
        }
        return view('admin/manage-categories')->with(['allCategories' => $allCategories]);
    }

    public function addNewCountry()
    {
        return view('admin/add-country');
    }

    public function addNewRegion()
    {
        $allCountries = Countries::all();
        return view('admin/add-region')->with(['allCountries'=>$allCountries]);
    }

    public function addNewCity()
    {
        $allCountries = Countries::all();
        $allRegions = Region::all();
        return view('admin/add-city')->with(['allCountries' => $allCountries,'allRegions'=>$allRegions]);
    }

    public function addNewCategory()
    {
        $allCategories = Category::all();
        return view('admin/add-category')->with(['allCategories' => $allCategories]);
    }

    public function saveCountry(Request $request)
    {
        try{
            $country = new Countries();
            $country->name = $request->country;
            $country->country_code = $request->country_code;
            $country->currency = $request->currency;
            $country->iso_code = $request->iso_code;
            $country->symbol = $request->symbol;
            $country->url_code = $request->url_code;
            $country->from_usd = $request->from_usd;
            $country->save();
            session()->flash('msg', 'Country added!');
            return redirect('manage-countries');
        }
        catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function editCountry($id)
    {
        try{
            $country = Countries::where('id', $id)->first();
            return view('admin.edit-countries')->with(['country' => $country]);
        }
        catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function updateCountry(Request $request)
    {
        try{
            $country = Countries::where('id', $request->countryId)->first();
            $country->name = $request->country;
            $country->country_code = $request->country_code;
            $country->currency = $request->currency;
            $country->iso_code = $request->iso_code;
            $country->symbol = $request->symbol;
            $country->url_code = $request->url_code;
            $country->from_usd = $request->from_usd;
            $country->update();
            session()->flash('msg', 'Country updated!');
            return redirect('manage-countries');
        }
        catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function saveRegion(Request $request)
    {
        try {
            $region = new Region();
            $region->name = $request->region;
            $region->country_id = $request->country;
            $region->save();
            return json_encode(['status' => true]);
        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function saveCity(Request $request)
    {
        try {
            $city = new City();
            $city->name = $request->city;
            $city->country_id = $request->country;
            $city->region_id = $request->region;
            $city->save();
            return json_encode(['status' => true]);
        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }


    public function saveCategory(Request $request)
    {
        try {
            $category = new Category();
            $category->name = $request->category;
            $category->parent_id = $request->parentCategory;
            $category->has_subcategory = $request->isSubCategory;
            $category->save();
            return json_encode(['status' => true]);
        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function approveBusiness($id)
    {
        try {
            $listingId = Listing::where('id', $id)->first();
            $listingId->status = "approved";
            $listingId->update();
            session()->flash('msg', 'Approved');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function rejectBusiness($id)
    {
        try {
            $listingId = Listing::where('id', $id)->first();
            $listingId->status = "rejected";
            $listingId->update();
            session()->flash('msg', 'Rejected');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function blockAccounts($id)
    {
        try {
            $userId = User::where('id', $id)->first();
            $userId->is_blocked = "1";
            $userId->update();
            session()->flash('msg', 'Account Blocked Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function unblockAccounts($id)
    {
        try {
            $userId = User::where('id', $id)->first();
            $userId->is_blocked = "0";
            $userId->update();
            session()->flash('msg', 'Account Unblocked Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function deleteCountry($id)
    {
        try {
            $countryId = Countries::where('id', $id)->first();
            $countryId->delete();
            session()->flash('msg', 'Country Deleted Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function deleteCategory($id)
    {
        try {
            $categoryId = Category::where('id', $id)->first();
            $categoryId->delete();
            session()->flash('msg', 'Category Deleted Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function deleteRegion($id)
    {
        try {
            $regionId = Region::where('id', $id)->first();
            $regionId->delete();
            session()->flash('msg', 'Region Deleted Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }

    public function deleteCity($id)
    {
        try {
            $city = City::where('id', $id)->first();
            $city->delete();
            session()->flash('msg', 'City Deleted Successfully');
            return redirect()->back();
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }

    }
}

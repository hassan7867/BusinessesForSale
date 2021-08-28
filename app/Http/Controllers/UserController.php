<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Listing;
use App\Models\ListingCategory;
use App\Models\ListingDocuments;
use App\Models\ListingPhotos;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function registerPrivateSellerPage($countryId){
        $regions = Region::where('country_id', $countryId)->get();
        return view('auth.register-private-seller')->with(['regions' => $regions]);
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
            Session::put('userId', $user->id);
            Session::put('userType', $user->user_type);
            return json_encode(['status' => true, 'message' => "Details Saved Successfully"]);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function getCategories(Request $request){
        try {
            $categories = Category::where('parent_id', $request->parentId)->get();
            return json_encode(['status' => true, 'data' => $categories]);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function getCities(Request $request){
        try {
            $cities = City::where('region_id', $request->region)->get();
            return json_encode(['status' => true, 'data' => $cities]);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function openPricingPage()
    {
        return view('pricing-page');
    }

    public function saveListingDetails(Request $request){
        try {
            $listing  = new Listing();
            $listing->heading = $request->heading;
            $listing->summary = $request->summary;
            $listing->status_of_business = $request->statusOfBusiness;
            $listing->region_id = $request->region;
            $listing->city_id = $request->cities;
            $listing->property_status = $request->propertyStatus;
            $listing->asking_price = $request->askingPrice;
            $listing->quick_sale = $request->quickSale;
            $listing->sales_revenue = $request->salesRevenue;
            $listing->sales_revenue_term = $request->salesRevenueTerm;
            $listing->cash_flow = $request->cashFlow;
            $listing->website_address = $request->websiteAddress;
            $listing->embeded_video = $request->embededVideo;
            $listing->user_id = 1;
            $listing->save();
            $listingCategories = json_decode($request->selectedCategoriesList, true);
            foreach ($listingCategories as $category){
               $categotyTable = new ListingCategory();
                $categotyTable->listing_id = $listing->id;
                $categotyTable->category_id = $category;
                $categotyTable->save();
            }
            if ($request->hasfile('photos')) {
                $files = $request->file('photos');
                foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $name = rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/files/', $name);
                    $photo = new ListingPhotos();
                    $photo->listing_id = $listing->id;
                    $photo->photo = $name;
                    $photo->save();
                }

            }
            if ($request->hasfile('documents')) {
                $files = $request->file('documents');
                foreach ($files as $file){
                    $extension = $file->getClientOriginalExtension();
                    $name = rand(0, 1000) . time() . '.' . $file->getClientOriginalExtension();
                    $file->move(base_path('/data') . '/files/', $name);
                    $doc = new ListingDocuments();
                    $doc->listing_id = $listing->id;
                    $doc->document = $name;
                    $doc->save();
                }

            }

            return json_encode(['status' => true, 'message' => 'Data Saved']);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }
}

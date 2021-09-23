<?php

namespace App\Http\Controllers;

use App\Models\BusinessDetail;
use App\Models\Category;
use App\Models\City;
use App\Models\Countries;
use App\Models\Listing;
use App\Models\ListingCategory;
use App\Models\ListingDocuments;
use App\Models\ListingPhotos;
use App\Models\Region;
use App\Models\Settings;
use App\Models\Subscription;
use App\Models\SubscriptionPackage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;
use services\email_messages\InvitationMessageBody;
use services\email_services\EmailAddress;
use services\email_services\EmailBody;
use services\email_services\EmailMessage;
use services\email_services\EmailSender;
use services\email_services\EmailSubject;
use services\email_services\MailConf;
use services\email_services\PhpMail;
use services\email_services\SendEmailService;

class UserController extends Controller
{
    public function welcome(Request $request){
        if (Session::has('url_code')){
            if (empty($request->lng)){
                return redirect('' .'?lng=' . Session::get('url_code'));
            }
//            return redirect('' . '/' . Session::get('url_code'));
            $categories = Category::where('has_subcategory', 0)->get();
            foreach ($categories as $item){
                $item->listingCount = ListingCategory::where('category_id', $item->id)->count();
            }
            return view('welcome')->with(['categories' => $categories]);
        }else{
//            dd('here you go!');
//            return;
            $getCountries = Countries::all();
            return view('list-page')->with(['countries'=>$getCountries]);
        }
//        if (empty($urlCode)){
//            return "ok";
//            return redirect('' . '/' . Session::get('url_code'));
//        }
//        if (Session::has('url_code')){
//            return view('welcome');
//        }else{
//            return redirect('select-your-country');
//        }
    }


    public function openList(){
        $getCountries = Countries::all();
        return view('list-page')->with(['countries'=>$getCountries]);
    }

    public function registerPrivateSellerPage($countryId, $priceId){
        $countryId = Countries::where('url_code', $countryId)->first()['id'];
        $regions = Region::where('country_id', $countryId)->get();
        $cities = City::all();
        $selectedCountry = Countries::where('id', $countryId)->first();
        $package = SubscriptionPackage::where('id', $priceId)->first();
        return view('auth.register-private-seller')->with(['regions' => $regions, 'priceId' => $priceId, 'cities' => $cities, 'package' => $package, 'selectedCountry' => $selectedCountry]);
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

    public function openPricingPage($countryId)
    {
        $country = Countries::where('url_code', $countryId)->first();
        return view('pricing-page')->with(['countryId'=>$country->id, 'countryName' => $country->name, 'country' => $country]);
    }

    public function buyBusiness(){
        $categories = Category::where('has_subcategory', 0)->get();
        foreach ($categories as $item){
           $item->listingCount = ListingCategory::where('category_id', $item->id)->count();
        }
        return view('buy-a-business')->with(['categories' => $categories]);
    }

    public function businessDetails($lng, $businessId){
        $listing = Listing::where('id', $businessId)->first();
        $listing->location = City::where('id', $listing->city_id)->first();
        $listing->photos = ListingPhotos::where('listing_id', $listing->id)->get();
        $categories = ListingCategory::where('listing_id', $listing->id)->get();
        $listing->categories = '';
        foreach ($categories as $cat){
            $listing->categories .= ' ' . Category::where('id', $cat->category_id)->first()['name'] . ' |';
        }
        $listing->categories = substr_replace($listing->categories ,"",-1);
        $countrySelected = \App\Models\Countries::where('url_code', $lng)->first();
        return view('listing-detail')->with(['listing' => $listing, 'countrySelected' => $countrySelected]);
    }

    public function searchBusiness(Request $request){
        try {

           $listing = Listing::where('status','approved');

            if (!empty($request->categorySelected) && $request->categorySelected != 'any'){
                $categoryId = $request->categorySelected;
                $listing = $listing->whereExists(function ($query) use ($categoryId) {
                    $query->select(DB::raw('*'))
                        ->from('listing_categories')
                        ->whereRaw('listings.id = listing_categories.listing_id')->where('category_id',$categoryId);
                });
            }
            if (!empty($request->locationSelector)){
                $cityId = City::where('name', $request->locationSelector)->first()['id'];
                $listing = $listing->where('city_id', $cityId);
            }

            if ($request->ageOfListing == "age14"){
                $listing = $listing->where('created_at', '>=', Carbon::now()->subDays(14)->toDateTimeString());
            }
            else if ($request->ageOfListing == "ageMonth"){
                $listing = $listing->where('created_at', '>=', Carbon::now()->subDays(30)->toDateTimeString());
            }
            else if ($request->ageOfListing == "age3Months"){
                $listing = $listing->where('created_at', '>=', Carbon::now()->subDays(90)->toDateTimeString());
            }

            if ($request->freeholdType == 'true'){
                $listing = $listing->where('property_status', 'Free Hold');
            }
            if ($request->LeaseholdType == 'true'){
                $listing = $listing->where('property_status', 'Lease');
            }
            if ($request->RelocatableType == 'true'){
                $listing = $listing->where('relocatable', 'Yes');
            }
            if ($request->HomebasedType == 'true'){
                $listing = $listing->where('home_based', 'Yes');
            }
            if ($request->accommodationType == 'true'){
                $listing = $listing->where('accomodation_included', 'Yes');
            }
            if ($request->Franchiseype == 'true'){
                $listing = $listing->where('administrative', 'Yes');
            }

            if ((int)$request->lowprice >= 0 && (int)$request->highprice > 0){
                $listing = $listing->where('asking_price', '>=', (int)$request->lowprice)->where('asking_price', '<=', (int)$request->highprice);
            }
            if ((int)$request->lowturnover >= 0 && (int)$request->highturnover > 0){
                $listing = $listing->where('turn_over', '>=', (int)$request->lowturnover)->where('turn_over', '<=', (int)$request->highturnover);
            }
            if ((int)$request->lowProfit >= 0 && (int)$request->highProfit > 0){
                $listing = $listing->where('net_profit', '>=', (int)$request->lowProfit)->where('net_profit', '<=', (int)$request->highProfit);
            }

            if ($request->sortby == 'most-recent'){
              $listing = $listing->OrderBy('id', 'DESC');
            }
            else if ($request->sortby == 'price-lowest'){
                $listing = $listing->OrderBy('asking_price', 'ASC');
            }
            else if ($request->sortby == 'price-highest'){
                $listing = $listing->OrderBy('asking_price', 'DESC');
            }
            else if ($request->sortby == 'turnover-high-low'){
                $listing = $listing->OrderBy('turn_over', 'DESC');
            }
            else if ($request->sortby == 'profit-high-low'){
                $listing = $listing->OrderBy('net_profit', 'DESC');
            }



            $listing = $listing->offset($request->offset)->limit($request->limit)->get();
            $totalItems = count($listing);
            $countrySelected = \App\Models\Countries::where('url_code', Session::get('url_code'))->first();
            foreach ($listing as $item){
                $item->location = City::where('id', $item->city_id)->first()['name'];
                $item->photos = ListingPhotos::where('listing_id', $item->id)->get();
                $categories = ListingCategory::where('listing_id', $item->id)->get();
                $item->categories = '';
                foreach ($categories as $cat){
                    $item->categories .= ' ' . Category::where('id', $cat->category_id)->first()['name'] . ' |';
                }
                $item->categories = substr_replace($item->categories ,"",-1);
                $item->asking_price = $item->asking_price * $countrySelected->from_usd;
                $item->price_symbol = $countrySelected->symbol;
            }
            return json_encode(['status' => true, 'data' => $listing, 'totalItems' => $totalItems]);

        }catch (\Exception $exception){
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function getListingPhoto($id){
        $fileN = ListingPhotos::where('id', $id)->first()['photo'];
        $file =  base_path('/data') . '/files' . '/' . $fileN;
        $type = mime_content_type($file);
        header('Content-Type:' . $type);
        header('Content-Length: ' . filesize($file));
        return readfile($file);
    }

    public function userlogin(){
        return view('auth.login');
    }

    public function userloginRequest(Request $request){
        try {
            if(!empty($request->email) && !empty($request->password)){
                if (User::where('email', $request->email)->exists()){
                    $user = User::where('email', $request->email)->first();
                    if ($user->password == md5($request->password)){
                        Session::put('userId', $user->id);
                        return redirect('user-dashboard');
                    }else{
                        return redirect()->back()->withErrors(["Invalid email or password"]);
                    }

                }else{
                    return redirect()->back()->withErrors(["Invalid email or password"]);
                }
            }else{
                return redirect()->back()->withErrors(["Invalid email or password"]);
            }
            session()->flash('msg', 'Login successfully!');
            return redirect('user-dashboard');

        }catch (\Exception $exception){
            return redirect()->back()->withErrors([$exception->getMessage()]);
        }
    }

    public function loginUserApi(Request $request){
        try {
            if(!empty($request->email) && !empty($request->password)){
                if (User::where('email', $request->email)->exists()){
                    $user = User::where('email', $request->email)->first();
                    if ($user->password == md5($request->password)){
                        Session::put('userId', $user->id);
                        return json_encode(['status' => true, 'message' => "Success"]);
                    }else{
                        return json_encode(['status' => false, 'message' =>"Invalid email or password"]);
                    }

                }else{
                    return json_encode(['status' => false, 'message' => "Invalid email or password"]);
                }
            }else{
                return json_encode(['status' => false, 'message' => "Invalid email or password"]);
            }


        }catch (\Exception $exception){
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function saveListingDetails(Request $request){
        try {
            $listing  = new Listing();
            $listing->heading = $request->heading;
            $listing->summary = $request->summary;
            $listing->status_of_business = $request->statusOfBusiness;
            $listing->show_as_confidential_sale = $request->showAsConfidentialSale;
            $listing->dont_list_location = $request->dontListLocation;
            $listing->relocatable = $request->relocatable;
            $listing->location_details = $request->locationDetails;
//            $listing->region_id = $request->region;
            $listing->city_id = $request->cities;
            $listing->property_status = $request->propertyStatus;
            $listing->asking_price = $request->askingPrice;
            $listing->asking_price_as = $request->askingPriceAs;
            $listing->turn_over = $request->turnOver;
            $listing->turn_over_term = $request->turnOverTerm;
            $listing->net_profit = $request->netProfit;
            $listing->net_profit_term = $request->netProfitTerm;
            $listing->website_address = $request->websiteAddress;
            $listing->support_and_training = $request->supportAndTraining;
            $listing->accomodation_included = $request->accomodationIncluded;
            $listing->home_based = $request->homebased;
            $listing->administrative = $request->administrative;
            $listing->trading_hours = $request->tradingHours;
            $listing->number_of_employees = $request->numberOfEmployees;
            $listing->embeded_video = $request->embededVideo;
            $listing->user_id = Session::get('userId');
            $listing->save();
            Session::put('listingId', $listing->id);
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

    public function saveSubscriptionDetails(Request $request){
        try {
            $userId = Session::get('userId');
            $subscription = new Subscription();
            $subscription->user_id = $userId;
            $subscription->subscription = $request->packageId;
//            $amount = round((int)$request->totalAfterPromotion / $request->from_usd,2);
            $amount = (int)$request->totalAfterPromotion;
            if ($amount > 0){
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create([
                    "amount" => $amount * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "This payment is for subscription"
                ]);
                $subscription->amount = $amount;

                if ((int)$request->sevenDaysPromotion != 0){
                    $subscription->is_promoted = 'Yes';
                    $subscription->promotion_start = date('Y-m-d');
                }else{
                    $subscription->is_promoted = 'No';
                    $subscription->promotion_start = '';
                }

                if ((int)$request->featuredPromotion != 0){
                    $subscription->is_featured = 'Yes';
                }else{
                    $subscription->is_featured = 'No';
                }

                $subscription->save();

            }else{
                $subscription->amount = 0;
                if ((int)$request->sevenDaysPromotion != 0){
                    $subscription->is_promoted = 'Yes';
                    $subscription->promotion_start = date('Y-m-d');
                }else{
                    $subscription->is_promoted = 'No';
                    $subscription->promotion_start = '';
                }

                if ((int)$request->featuredPromotion != 0){
                    $subscription->is_featured = 'Yes';
                }else{
                    $subscription->is_featured = 'No';
                }

                $subscription->save();
            }

            $settings = new Settings();
            $settings->user_id = $userId;
            $settings->mailing_list = $request->mailingList;
            $settings->terms_and_conditions = $request->termsAndConditions;
            $settings->save();
            $user = User::where('id', $userId)->first();

            $user = User::where('id', Session::get('userId'))->first();
            $listing = Listing::where('id', Session::get('listingId'))->first();
            $subscription = Subscription::where('user_id', $user->id)->latest()->first();
            $package = SubscriptionPackage::where('id', $subscription->subscription)->first();
            $subject = new SendEmailService(new EmailSubject("Your ". env("APP_NAME") ." Listing"));
            $mailTo = new EmailAddress($user->email);
            $message = new InvitationMessageBody();
            $emailBody = $message->invitationMessageBody($listing->heading, $listing->id, $package->duration);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf(env("MAIL_HOST"), env("MAIL_USERNAME"), env("MAIL_PASSWORD"))));
            $result = $sendEmail->send($emailMessage);

            return json_encode(['status' => true, 'data' => ['listingId' => Session::get('listingId'), 'user' => $user]]);

        } catch (\Exception $exception) {
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }

    public function finalizeWizard(Request $request){
        try{
            $user = User::where('id', Session::get('userId'))->first();
            $listing = Listing::where('id', Session::get('listingId'))->first();
            $subscription = Subscription::where('user_id', $user->id)->latest()->first();
            $package = SubscriptionPackage::where('id', $subscription->subscription)->first();
            $subject = new SendEmailService(new EmailSubject("Your ". env("APP_NAME") ." Listing"));
            $mailTo = new EmailAddress($user->email);
            $message = new InvitationMessageBody();
            $emailBody = $message->invitationMessageBody($listing->heading, $listing->id, $package->duration);
            $body = new EmailBody($emailBody);
            $emailMessage = new EmailMessage($subject->getEmailSubject(), $mailTo, $body);
            $sendEmail = new EmailSender(new PhpMail(new MailConf(env("MAIL_HOST"), env("MAIL_USERNAME"), env("MAIL_PASSWORD"))));
            $result = $sendEmail->send($emailMessage);
            return json_encode(['status' => true, 'message' => 'Successfull']);
        }catch (\Exception $exception){
            return json_encode(['status' => false, 'message' => $exception->getMessage()]);
        }
    }
}

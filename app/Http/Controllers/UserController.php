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
use Illuminate\Http\Request;
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
    public function registerPrivateSellerPage($countryId, $priceId){
        $regions = Region::where('country_id', $countryId)->get();
        $cities = City::all();
        $package = SubscriptionPackage::where('id', $priceId)->first();
        return view('auth.register-private-seller')->with(['regions' => $regions, 'priceId' => $priceId, 'cities' => $cities, 'package' => $package]);
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
        return view('pricing-page')->with(['countryId'=>$countryId, 'countryName' => Countries::where('id', $countryId)->first()['name']]);
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

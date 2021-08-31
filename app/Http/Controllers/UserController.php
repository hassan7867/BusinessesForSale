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
        return view('auth.register-private-seller')->with(['regions' => $regions, 'priceId' => $priceId]);
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

    public function saveBusinessDetails(Request $request){
        try {
            $business = new BusinessDetail();
            $business->listing_id = Session::get('listingId');
            $business->user_id = Session::get('userId');
            $business->location_details = $request->locationDetails;
            $business->premises = $request->premises;
            $business->competition = $request->competition;
            $business->expansion = $request->expansion;
            $business->living_accomodation = $request->livingAccomodation;
            $business->living_accomodation_description = $request->livingAccomodationDescription;
            $business->size_in_square_feet = $request->sizeInSquareFeet;
            $business->planning_consent = $request->planningConsent;
            $business->years_established = $request->yearsEstablished;
            $business->employees = $request->employees;
            $business->tradding_hours = $request->traddingHours;
            $business->support_and_training = $request->supportAndTraining;
            $business->visa_ready = $request->visaReady;
            $business->relocatable = $request->relocatable;
            $business->home_based = $request->homeBased;
            $business->franchise = $request->franchise;
            $business->franchise_terms = $request->franchiseTerms;
            $business->business_closed = $request->businessClosed;
            $business->distressed = $request->distressed;
            $business->owner_financing = $request->ownerFinancing;
            $business->financing_available = $request->financingAvailable;
            $business->reason_for_selling = $request->reasonForSelling;
            $business->furniture_fixture = $request->furnitureFixture;
            $business->value_of_furniture_fixtures = $request->valueOfFurnitureFixtures;
            $business->inventory_stock = $request->inventoryStock;
            $business->value_of_inventory_stock = $request->valueOfInventoryStock;
            $business->save();
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
            $subscription->subscription = $request->subscription;
            if ($request->subscription != 'limitedTrial'){
                $amount = 0;
                if ($request->subscription == '6months'){
                    $amount = 89;
                }
                else if ($request->subscription == '3months'){
                    $amount = 69;
                }
                else if ($request->subscription == '1months'){
                    $amount = 49;
                }
                Stripe::setApiKey(env('STRIPE_SECRET'));
                Charge::create([
                    "amount" => $amount * 100,
                    "currency" => "usd",
                    "source" => $request->stripeToken,
                    "description" => "This payment is for subscription"
                ]);
                $subscription->amount = $amount;
                $subscription->save();

            }else{
                $subscription->amount = 0;
                $subscription->save();
            }

            $settings = new Settings();
            $settings->user_id = $userId;
            $settings->mailing_list = $request->mailingList;
            $settings->terms_and_conditions = $request->termsAndConditions;
            $settings->save();
            $user = User::where('id', $userId)->first();
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
            $subject = new SendEmailService(new EmailSubject("Your ". env("APP_NAME") ." Listing"));
            $mailTo = new EmailAddress($user->email);
            $message = new InvitationMessageBody();
            $emailBody = $message->invitationMessageBody($listing->heading, $listing->id, $subscription->subscription);
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

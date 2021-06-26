<?php

namespace App\Http\Controllers;

use App\Page;
use App\Flight;
use App\Airports;

use Illuminate\Http\Request;
use DB;
// use Illuminate\Support\Facades\DB;

// use Illuminate\Http;
// use GuzzleHttp\Client;

class MainController extends Controller
{
    public function airports(Request $request){
        $search = $request->name;
        $airports = Airports::Select('name','iata_code')
        ->Where('type', '=', 'large_airport')
        ->Where('iata_code','<>','')
        ->where(function($query) use ($search){
                            $query->where('municipality', 'LIKE', '%'.$search.'%')
                                  ->orWhere('name', 'LIKE', '%'.$search.'%')
                                  ->orWhere('iata_code', 'LIKE', '%'.$search.'%');
                        })
        ->get();

        return json_encode($airports);


    }

    public function index(){
       
        $page = Page::where('slug','home')->first();
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

        return view('home',compact('page','flight_destinations','flight_destinations2'));
    }
    public function sitemap(){
        // $page = Page::where('slug','home')->first();
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

        return view('sitemap',compact('flight_destinations','flight_destinations2'));
    }
    public function hotels(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels',compact('flight_destinations','flight_destinations2'));
    }
    public function flights(Request $request){
        $segmentdes = $request->segment(2);
        if ($segmentdes) {
            $page = Flight::where('slug',$segmentdes)->first();
        }else{
            $page = Page::where('slug','flights')->first();
        }
            

            $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
             //dd($flight_destinations);
        return view('flights',compact('page','flight_destinations','flight_destinations2'));
    }
    public function cars(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('cars',compact('flight_destinations','flight_destinations2'));
    }

    public function mytrip(Request $request){
        if ($request->name)
    {
        
        $client = new \GuzzleHttp\Client(); 
        $stream = '{search:"'.$request->name.'"}';
        $response = $client->request('POST','https://skyhikes.com/Search/GetAirportAutoSearch',['body' => $stream,'headers' =>['Content-Type'=> 'application/json']]);
        return $response->getBody(); 
        die;
    }
         
       
        
        
    
        return view('mytrip');
    }

    public function login(){
        return view('login');
    }
    public function help(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('help',compact('flight_destinations','flight_destinations2'));
    }
    public function about(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();

            // dd($flight_destinations2);
        return view('about',compact('flight_destinations','flight_destinations2'));
    }
    public function contact(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('contact',compact('flight_destinations','flight_destinations2'));
    }
    public function privacy(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('privacy',compact('flight_destinations','flight_destinations2'));
    }

    public function terms(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('terms',compact('flight_destinations','flight_destinations2'));
    }

    public function airlines(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('airlines',compact('flight_destinations','flight_destinations2'));
    }
    public function hotel_destinations(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotel_destinations',compact('flight_destinations','flight_destinations2'));
    }
    public function flight_destinations(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights',compact('flight_destinations','flight_destinations2'));
    }
    public function flight_listing(Request $request){
        // echo"<pre>";
        // print_r($request->all());
        
        // die();
        $request->validate([
            'originCode' => 'required',
            'destCode' => 'required',
            'adult' => 'required'
        ]);
        
        $tripType = $request->tripType;

        if ($tripType == 2) {
        $dater = $request->daterange;
        $datea = explode(' - ',$dater);
        $departureDate = $datea[0];
        $return_date = $datea[1]; 
        }else{
            $departureDate = $request->daterangesingle;
            $return_date = ''; 
        }
        $token = $request->_token;
        $originCode = $request->originCode;
        $destCode = $request->destCode;
        $adult = $request->adult;
        $child = $request->child;
        $infant = $request->infant;
        $cabinClass = $request->cabinClass;
        // $child = $request->child;
        // $child = $request->child;
        $tottal = $adult+$child+$infant;
        $ip =  request()->ip();

        $data = array("searchID"=> 0, "portalID"=> 1001, "originCode"=> $originCode, "originCityCode"=> $originCode, "destCode"=> $destCode, "destCityCode"=> $destCode, "departureDate"=> $departureDate, "returnDate"=> $return_date, "senior"=> 0, "adult"=> $adult, "child"=> $child, "infant"=> $infant, "infantInLap"=> 0, "tripType"=> $tripType, "cabinClass"=> $cabinClass, "preferredCarrier"=> null, "customerIpAddress"=> "103.226.226.207", "serverMachineName"=> null, "flightGuid"=> $token, "totalPaxCount"=> $tottal, "flexiblityqualifier"=> null, "refundableFaresOnly"=> false, "isDirectFlight"=> false, "isFlexibalFlight"=> false, "appServer"=> null, "searchDate"=> $departureDate);
        $stream = json_encode($data);
        // $data = array("searchID"=> 0, "portalID"=> 1001, "originCode"=> "NYC", "originCityCode"=> "NYC", "destCode"=> "MCO", "destCityCode"=> "MCO", "departureDate"=> "2021-08-30", "returnDate"=> null, "senior"=> 0, "adult"=> 1, "child"=> 0, "infant"=> 0, "infantInLap"=> 0, "tripType"=> 1, "cabinClass"=> 2, "preferredCarrier"=> null, "customerIpAddress"=> "103.226.226.207", "serverMachineName"=> null, "flightGuid"=> "cmVzdWx0MC42ODUwNTMwMDk1NzE5Nzg2=", "totalPaxCount"=> 1, "flexiblityqualifier"=> null, "refundableFaresOnly"=> false, "isDirectFlight"=> false, "isFlexibalFlight"=> false, "appServer"=> null, "searchDate"=> "2021-05-03");
         $url = 'http://travelapish.test.com/api/mobile/SearchFlights';
         $client = new \GuzzleHttp\Client(); 
        $response = $client->request("POST", $url, ['body'=>$stream,'headers' =>['Content-Type'=> 'application/json','X-Signature' => '263HDKLJDJ*@723923HCC$BCB%76HJUI%$2#R']]);
          $response = $response->getBody()->getContents();
         //die;
         $resultdatao = json_decode($response);

        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights.listing',compact('flight_destinations','flight_destinations2','resultdatao','response'));
    }
    public function flight_payment(Request $request){
            $data = array("ContractID"=> $request->id, "CacheKey"=> $request->CacheKey);
        $stream = json_encode($data);
        
         $url = 'http://travelapish.test.com/api/mobile/RateRuleDetails';
         $client = new \GuzzleHttp\Client(); 
        $response = $client->request("POST", $url, ['body'=>$stream,'headers' =>['Content-Type'=> 'application/json','X-Signature' => '263HDKLJDJ*@723923HCC$BCB%76HJUI%$2#R']]);
          $response = $response->getBody()->getContents();
         //die;
          //echo"<pre>";
         $resultdatao = json_decode($response);
         // print_r($resultdatao);
         // die;

        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights.payment',compact('flight_destinations','flight_destinations2','resultdatao'));
    }

    public function flight_pay(Request $request){
         foreach($request->FirstName as $key => $value ) {
            $travellers[$key]['PaxTItle']=$request->PaxTItle[$key];
            $travellers[$key]['FirstName']=$request->FirstName[$key];
            $travellers[$key]['MiddleName']=$request->MiddleName[$key];
            $travellers[$key]['LastName']=$request->LastName[$key];
            $travellers[$key]['Gender']=$request->Gender[$key];
            $travellers[$key]['Email']=null;
            $travellers[$key]['MealPreference']=null;
            $travellers[$key]['PaxOrder']=0;
            $travellers[$key]['PaxType']=2;
            }

         $data = array ('CacheKey' => $request->CacheKey, 'ContractID' => $request->ContractID, 'TravellerDetails' => $travellers, 'BillingDetails' => array ('TransactionID' => 0, 'CCHolderName' => $request->CCHolderName, 'CardNumber' => $request->CardNumber, 'CVVNumber' => $request->CVVNumber, 'ExpiryMonth' => $request->ExpiryMonth, 'ExpiryYear' => $request->ExpiryYear, 'Country' => $request->Country, 'State' => $request->State, 'ZipCode' => $request->ZipCode, 'AddressLine1' => $request->AddressLine1, 'AddressLine2' => $request->AddressLine2, 'AddressLine3' => NULL, 'City' => $request->City, 'BillingPhone' => $request->BillingPhone, 'BillingPhoneCode' => NULL, 'ContactPhone' => $request->ContactPhone, 'ContactPhoneCode' => NULL, 'Email' => $request->Email, 'CardType' => 1, 'PaymentPaidFor' => 0, 'TotalAmount' => 0, ), );

         $fidata = json_encode($data);

         $url = 'http://travelapish.test.com/api/mobile/bookflights';
         $client = new \GuzzleHttp\Client(); 
        $response = $client->request("POST", $url, ['body'=>$fidata,'headers' =>['Content-Type'=> 'application/json','X-Signature' => '263HDKLJDJ*@723923HCC$BCB%76HJUI%$2#R']]);
          $response = $response->getBody()->getContents();
         $resultdatao = json_decode($response);
         echo "<pre>";
         print_r($resultdatao);
         die('endresult');
    }


    public function flight_thankyou(){
       $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('flights.thankyou',compact('flight_destinations','flight_destinations2')); 
    }
    public function hotel_listing(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels.listing',compact('flight_destinations','flight_destinations2'));
    }
    public function hotel_payment(){
        $flight_destinations = Flight::select('slug','heading')->where('footer_link',1)->where('type',1)->limit(12)->get();
            $flight_destinations2 = Flight::select('slug','heading')->where('footer_link',1)->where('type',2)->limit(12)->get();
        return view('hotels.payment',compact('flight_destinations','flight_destinations2'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactFrom;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Mail;
use Illuminate\Support\Facades\Hash;


use Session;
class BazarController extends Controller
{
   public function bazar(){
    
    return view('bazar');


   }
   public function mango(){
    
      return view('mango');
  
  
     }
     										
     public function order(Request $request){
      $order = array();  
      $order['order_id'] = Str::random(8);
      $order['name'] =  $request->name;
      $order['phone'] =  $request->phone;
      $order['email'] =  $request->email;
      $order['type'] = $request->type;

      $payment = array();
      $payment['order_id'] = $order['order_id'];
      $payment['method'] = $request->method;
      $payment['number'] = $request->number;
      $payment['txt_id'] = $request->txid;


     
      
      $order['measurement'] =  $request->measurement;
      $res = DB::table('delivarycost')
        ->first();
      $order['delivary_charge'] =  $res->cost;
      $order['city'] = $request->city;
      $order['address'] = $request->address; 
      $order['d_status'] = 'pending';  

            
      $mntype = DB::table('mangotype')
        ->where('name',$request->type)
        ->first();
       $order['price_per_unit'] = $mntype->price;
       Session::put('mntype',$mntype->price);
       
       $total = $request->measurement * $mntype->price;
       $order['total_price'] = $total+$order['delivary_charge'];
       
      $or = DB::table('order')
         ->insert($order);
       
      $pay = DB::table('payment')
         ->insert($payment);  
      
      if($or && $pay){
        return 'success';
      }

      if(!$pay){
        return 'paynot';
      }
      
  
     }

     public function price(Request $request){
      $price = DB::table('mangotype')
             ->where('name',$request->mango_type)     
            
             ->first();

      $p = $price->price;
      return $p;
      
           
     }
}

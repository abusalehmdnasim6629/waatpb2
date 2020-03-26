<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


use Session;


use RealRashid\SweetAlert\Facades\Alert;
session_start();

class ContentController extends Controller
{
    public function content(){

            $about =  DB::table('tbl_about')
              ->first();
            $history =  DB::table('tbl_history')
              ->first();
            $header =  DB::table('tbl_header')
              ->first();
            $event =   DB::table('tbl_event')
                       ->limit(3)
                       ->get();
            $gallary =  DB::table('tbl_gallary')
                        ->limit(12)
                        ->get();          
           
              
           return view('welcome')->with('about',$about)->with('history',$history)->with('header',$header)->with('event',$event)->with('gallary',$gallary);   


    }
    public function join_event(){
         
     $login_check =  Session::get('lcheck');
     $e_id =  Session::get('e_id');
    

       if($login_check !=null){
         
          $join = array();
          $join['member_id'] = $login_check;
          $join['event_id'] = $e_id;

        $res =  DB::table('tbl_join_event')
           ->insert($join);
         
         if($res){
          Alert::success('success', 'Join successfully');
          return Redirect::to('/');
         } 
        
    }else{

      Alert::warning('Fail', 'You have to login first');
          return Redirect::to('/');
    }
  }

  public function full_history(){


    return view('history');
  }

  public function view_event(){

        return view('view_all_event');
  }

   public function profile(){

       
         return view('/profile');
       
   }




}
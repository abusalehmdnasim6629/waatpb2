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


use Session;


use RealRashid\SweetAlert\Facades\Alert;

session_start();

class ContentController extends Controller
{
  public function content()
  {

    $about =  DB::table('tbl_about')
      ->first();
    $history =  DB::table('tbl_history')
      ->first();
    $header =  DB::table('tbl_header')
      ->first();
    $event =   DB::table('tbl_event')->where('event_date', '>', \Carbon\Carbon::now())
      ->limit(3)
      ->get();
    $gallary =  DB::table('tbl_gallary')
      ->limit(12)
      ->get();


    return view('welcome')->with('about', $about)->with('history', $history)->with('header', $header)->with('event', $event)->with('gallary', $gallary);
  }
  public function join_event()
  {

    $login_check =  Session::get('lcheck');
    $e_id =  Session::get('e_id');


    if ($login_check != null) {

      $join = array();
      $join['member_id'] = $login_check;
      $join['event_id'] = $e_id;

      $res =  DB::table('tbl_join_event')
        ->insert($join);

      if ($res) {
        Alert::success('success', 'Join successfully');
        return Redirect::to('/');
      }
    } else {

      Alert::warning('Fail', 'You have to login first');
      return Redirect::to('/');
    }
  }

  public function full_history()
  {


    return view('history');
  }

  public function view_event()
  {

    return view('view_all_event');
  }

  public function profile()
  {


    return view('/profile');
  }
  public function update_profile(Request $request)
  {
    $mid = Session::get('lcheck');
    $update = array();
    $update_skill = array();


    $update['member_name'] = $request->name;
    $update['email_address'] = $request->email;
    $update['nid'] = $request->nid;
    $update['designation'] = $request->designation;
    $update['present_address'] = $request->p_a;

    $update['present_organization'] = $request->p_o;
    $update['blood_group'] = $request->b_g;
    $update['password'] = $request->pass;
    $update_skill['member_skill'] = $request->member_skill;
    $update_skill['member_hobby'] = $request->member_hobby;


    DB::table('tbl_member')
      ->where('member_id', $mid)
      ->update($update);

    DB::table('tbl_member_skill')
      ->where('member_id', $mid)
      ->update($update_skill);



    return Redirect::to('/profile');
  }
  public function view_all()
  {


    return view('gallary');
  }


  public function sendContactMail(Request $request)
  {
    Mail::to('contact@rappleslimited.com')->send(new ContactFrom($request));

    $successMail = "Your query has been send!";
    return redirect()->back()->with($successMail);
  }
}

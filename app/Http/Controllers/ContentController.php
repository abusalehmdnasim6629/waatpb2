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

    $welfare = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'welfare' . '%')
      ->first();

    $training = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'training' . '%')
      ->first();
    $job = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'job' . '%')
      ->first();

    $research = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'research' . '%')
      ->first();
    $blood = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'blood' . '%')
      ->first();
    $database = DB::table('tbl_service')
      ->where('service_title', 'like', '%' . 'database' . '%')
      ->first();








    return view('welcome')->with('about', $about)->with('history', $history)->with('header', $header)->with('event', $event)->with('gallary', $gallary)->with('welfare', $welfare)->with('job', $job)->with('research', $research)->with('blood', $blood)->with('training', $training)->with('database', $database);

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
        $data = array();
        $data['member_name'] = $request->name;
        $data['email_address'] = $request->email;
        $data['nid'] = $request->nid;
        $data['password'] = bcrypt($request->pass);
        $data['department'] = $request->department;
        $data['present_address'] = $request->p_a;
        $data['designation'] = $request->designation;
    


        $data['contact_number'] = $request->contact_number;
        $data['present_organization'] = $request->p_o;
        $data['blood_group'] = $request->b_g;
        $data['member_skill'] = $request->member_skill;
        $data['member_hobby'] = $request->member_hobby;





        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $data['image'] = $image_url;
                DB::table('tbl_member')->where('member_id', $mid)->update($data);
                return Redirect::to('/profile');
            }
        }
        // else{

        //     $data['image'] = "";
        //     DB::table('tbl_member')->insert($data);
        //     return Redirect::to('/Registration');
        // }





    }

  // public function update_profile(Request $request)
  // {
  //   $mid = Session::get('lcheck');
  //   $update = array();
  //   $update_skill = array();


  //   $update['member_name'] = $request->name;
  //   $update['email_address'] = $request->email;
  //   $update['nid'] = $request->nid;
  //   $update['designation'] = $request->designation;
  //   $update['present_address'] = $request->p_a;

  //   $update['present_organization'] = $request->p_o;
  //   $update['blood_group'] = $request->b_g;
  //   $update['password'] = $request->pass;
  //   $update_skill['member_skill'] = $request->member_skill;
  //   $update_skill['member_hobby'] = $request->member_hobby;


  //   DB::table('tbl_member')
  //     ->where('member_id', $mid)
  //     ->update($update);

  //   DB::table('tbl_member_skill')
  //     ->where('member_id', $mid)
  //     ->update($update_skill);



  //   return Redirect::to('/profile');
  // }
  public function view_all()
  {


    return view('gallary');
  }


  public function sendContactMail(Request $request)
  {
    Mail::to('contact@rappleslimited.com')->send(new ContactFrom($request));
    Alert::success('success', 'Your query has been send!');
    return redirect()->back();
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
}

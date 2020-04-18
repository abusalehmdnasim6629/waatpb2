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

    $advertisement =  DB::table('tbl_advertisement')
      ->limit(3)
      ->get();

     $g_category= DB::table('gallary_category')
                  ->get(); 







    return view('welcome')
            ->with('about', $about)
            ->with('history', $history)
            ->with('header', $header)
            ->with('advertisement',$advertisement)
            ->with('event', $event)
            ->with('gallary', $gallary)
            ->with('g_category', $g_category)
            ->with('welfare', $welfare)
            ->with('job', $job)
            ->with('research', $research)
            ->with('blood', $blood)
            ->with('training', $training)
            ->with('database', $database);

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
    // if ($request->pass != null) {
    //   $validator = Validator::make($request->all(), [
    //     'image' => 'image|mimes:jpeg,png|max:2000|dimensions:width=200,height=200',
    //     'pass' => 'min:6',

    //   ]);

    //   if ($validator->fails()) {
    //     $errors = $validator->errors();
    //     return redirect()
    //       ->back()
    //       ->withErrors($validator);
    //   }

    //   $mid = Session::get('lcheck');
    //   $data = array();
    //   $data['member_name'] = $request->name;
    //   $data['email_address'] = $request->email;
    //   $data['nid'] = $request->nid;
    //   $data['password'] = bcrypt($request->pass);
    //   $data['pass-text'] = $request->pass;
    //   $data['department'] = $request->department;
    //   $data['present_address'] = $request->p_a;
    //   $data['designation'] = $request->designation;



    //   $data['contact_number'] = $request->contact_number;
    //   $data['present_organization'] = $request->p_o;
    //   $data['blood_group'] = $request->b_g;
    //   $data['member_skill'] = $request->member_skill;
    //   $data['member_hobby'] = $request->member_hobby;





    //   if ($request->hasfile('image')) {

    //     $image = $request->file('image');

    //     $image_name = Str::random(20);
    //     $ext = strtolower($image->getClientOriginalExtension());
    //     $image_full_name = $image_name . '.' . $ext;
    //     $upload_path = public_path() . '/image/';
    //     $image_url = 'image/' . $image_full_name;
    //     $success = $image->move($upload_path, $image_full_name);

    //     if ($success) {
    //       $data['image'] = $image_url;
    //       DB::table('tbl_member')->where('member_id', $mid)->update($data);
    //       return Redirect::to('/profile');
    //     }
    //   } else {


    //     DB::table('tbl_member')->where('member_id', $mid)->update($data);
    //     return Redirect::to('/profile');
    //   }
    // } else {
      $validator = Validator::make($request->all(), [
        'image' => 'image|mimes:jpeg,png|max:2000',
        'cover_image' => 'image|mimes:jpeg,png|max:2000',


      ]);

      if ($validator->fails()) {
        $errors = $validator->errors();
        return redirect()
          ->back()
          ->withErrors($validator);
      }

      $mid = Session::get('lcheck');
      $data = array();
      $data['member_name'] = $request->name;
      $data['email_address'] = $request->email;
      $data['nid'] = $request->nid;

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
          
        }
      } 

      if ($request->hasfile('cover_image')) {

        $image = $request->file('cover_image');

        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = public_path() . '/image/';
        $image_url = 'image/' . $image_full_name;
        $success = $image->move($upload_path, $image_full_name);

        if ($success) {
          $data['cover_image'] = $image_url;
          
        }
      } 
      
      


        DB::table('tbl_member')->where('member_id', $mid)->update($data);
        return Redirect::to('/profile');
      
      
    
  }


  public function view_all()
  {

   $gallary = DB::table('tbl_gallary')
       ->paginate(9);
    return view('gallary')->with('gallary',$gallary);
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


  public function member_profile()
  {
    return view('member_profile');
  }


  public function changePassowrd(Request $request)
  {

    $member = DB::table('tbl_member')->where('member_id', Session::get('lcheck'))->first();
    
    if (Hash::check($request->old_password, $member->password)) {
      DB::table('tbl_member')->where('member_id', Session::get('lcheck'))->update(['password' => bcrypt($request->password),'pass_text' => $request->password]);
      Alert::success('Success', 'Password changed successfuly!');
      return redirect()->back();
    } else {
      Alert::error('Fail', 'Old password not matched!');
      return redirect()->back();
    }
  }
  public function show_profile(){

    return view('show_profile');
  }
  public function edit(){

    return view('edit_pro');
  }
  public function settings(){

    return view('settings');
  }

  public function delete_post($id){

     DB::table('posts')
        ->where('id',$id)
        ->delete();
        Alert::success('Success', 'Post deleted successfuly!');
        return Redirect::to('/profile');   
  }

  public function edit_post($id){

   $result = DB::table('posts')
       ->where('id',$id)
       ->first();
       
     return view('edit_post')->with('result',$result);
 }



 public function update_post(Request $request,$id){
  $member_id = Session::get('lcheck');
  
  $post = array(); 
  $post['title'] = $request->title;
  $post['description'] = $request->s_post;
  $post['date'] = date('Y-m-d');
  $post['member_id'] = $member_id;
  if ($request->hasfile('image')) {

      $image = $request->file('image');

      $image_name = Str::random(20);
      $ext = strtolower($image->getClientOriginalExtension());
      $image_full_name = $image_name . '.' . $ext;
      $upload_path = public_path() . '/image/';
      $image_url = 'image/' . $image_full_name;
      $success = $image->move($upload_path, $image_full_name);

      if ($success) {
          $post['post_image'] = $image_url;
          DB::table('posts')->where('id',$id)->update($post);
          Alert::success('Successful', 'post updated successfully');
          return Redirect::to('/profile');
      }
  }else{
      $post['post_image'] = "";
      DB::table('posts')->where('id',$id)->update($post);
      Alert::success('Successful', 'post updated successfully');
      return Redirect::to('/profile');

  }



}

}

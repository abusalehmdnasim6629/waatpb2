<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\User;

use Session;

session_start();

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{


    public function adminLoginPage(Request $request)
    {
        return view('auth.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'email|string|required',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->back();
        }
    }

    public function admin()
    {

        return view('admin.admin_home');
    }

    public function all_member()
    {

        $result = DB::table('tbl_member')
            ->select('tbl_member.*')
            ->get();

        return view('admin.all_member')->with('result', $result);
    }

    public function add_job()
    {

        return view('admin.add_job');
    }

    public function save_job(Request $request)
    {

        $job = array();
        $job['employee_name'] = $request->e_name;
        $job['department'] = $request->department;
        $job['position'] = $request->position;
        $job['vacancies'] = $request->vacancies;
        $job['job_location'] = $request->job_location;
        $job['joining_date'] = $request->joining_date;
        $job['package'] = $request->package;
        $job['deadline'] = $request->deadline;
        $job['additional_notes'] = $request->a_note;


        DB::table('tbl_job')->insert($job);
        Alert::success('Successful', 'Job successfully added');
        return Redirect::to('/add-job');
    }

    public function all_job()
    {

        $result = DB::table('tbl_job')
            ->select('tbl_job.*')
            ->get();
        
        return view('admin.all_job')->with('result', $result);
    }
   
    public function edit_job($job_id){

         $result =  DB::table('tbl_job')
          ->where('job_id',$job_id)
          ->first();

          return view('admin.edit_job')->with('result', $result);
    }

    public function update_job(Request $request,$job_id)
    {

        $job = array();
        $job['employee_name'] = $request->e_name;
        $job['department'] = $request->department;
        $job['position'] = $request->position;
        $job['vacancies'] = $request->vacancies;
        $job['job_location'] = $request->job_location;
        $job['joining_date'] = $request->joining_date;
        $job['package'] = $request->package;
        $job['deadline'] = $request->deadline;
        $job['additional_notes'] = $request->a_note;


        DB::table('tbl_job')
        ->where('job_id',$job_id)
        ->update($job);
        Alert::success('Successful', 'Job successfully updated');
        return Redirect::to('/all-job');
    }

    public function delete_job($job_id){
         
        DB::table('tbl_job')
        ->where('job_id',$job_id)
        ->delete();

        Alert::success('Successful', 'Job deleted successfully');
        return Redirect::to('/all-job');

    }
    public function all_history()
    {

        $result = DB::table('tbl_history')
            ->select('tbl_history.*')
            ->get();

        return view('admin.all_history')->with('result', $result);
    }

    public function all_about()
    {

        $result = DB::table('tbl_about')
            ->select('tbl_about.*')
            ->get();

        return view('admin.all_about')->with('result', $result);
    }
   
    public function delete_about($about_id){
        DB::table('tbl_about')
        ->where('about_id',$about_id)
        ->delete();

        Alert::success('Successful', 'About deleted successfully');
        return Redirect::to('/all-about');
         
    }

    public function edit_about($about_id){

        $result =  DB::table('tbl_about')
         ->where('about_id',$about_id)
         ->first();
 
       return view('admin.edit_about')->with('result',$result);  
 
 
     }


    public function all_header()
    {

        $result = DB::table('tbl_header')
            ->select('tbl_header.*')
            ->get();

        return view('admin.all_header')->with('result', $result);
    }
    public function add_event()
    {

        return view('admin.add_event');
    }

    public function save_event(Request $request)
    {


        $event = array();
        $event['event_title'] = $request->e_title;
        $event['event_date'] = $request->e_date;
        if ($request->hasfile('e_image')) {

            $image = $request->file('e_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $event['event_image'] = $image_url;
                DB::table('tbl_event')->insert($event);
                Alert::success('Successful', 'Add event successfully');
                return Redirect::to('/add-event');
            }
        }
    }

    public function all_event()
    {

        $result = DB::table('tbl_event')
            ->select('tbl_event.*')
            ->get();

        return view('admin.all_event')->with('result', $result);
    }

    public function delete_event($event_id){
          
        DB::table('tbl_event')
        ->where('event_id',$event_id)
        ->delete();

        Alert::success('Successful', 'Event delete successfully');
        return Redirect::to('/all-event');


    }

    public function edit_event($event_id){

       $result =  DB::table('tbl_event')
        ->where('event_id',$event_id)
        ->first();

      return view('admin.edit_event')->with('result',$result);  


    }

    public function update_event(Request $request,$event_id){
        $event = array();
        $event['event_title'] = $request->e_title;
        $event['event_date'] = $request->e_date;
        if ($request->hasfile('e_image')) {

            $image = $request->file('e_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $event['event_image'] = $image_url;
                DB::table('tbl_event')
                ->where('event_id',$event_id)
                ->update($event);
        
                Alert::success('Successful', 'Update event successfully');
                return Redirect::to('/all-event');
            }
        }
        
    }

    public function add_image()
    {

        return view('admin.add_image');
    }

    public function save_image(Request $request)
    {


        $event = array();
        $event['image_title'] = $request->i_title;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $event['image'] = $image_url;
                DB::table('tbl_gallary')->insert($event);
                Alert::success('Successful', 'Add image successfully');
                return Redirect::to('/add-image');
            } else {

                Alert::warning('Fail', 'Image upload unsuccessfull');
                return Redirect::to('/add-image');
            }
        }
    }

    public function all_image()
    {

        $result = DB::table('tbl_gallary')
            ->select('tbl_gallary.*')
            ->get();

        return view('admin.all_image')->with('result', $result);
    }

    public function add_about(){

        return view('admin.add_about');
    }

    public function save_about(Request $request)
    {


        $about = array();
        $about['about_title'] = $request->a_title;
        $about['about_description'] = $request->a_des;
        if ($request->hasfile('a_image')) {

            $image = $request->file('a_image');
          
            $image_name = Str::random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $about['image'] = $image_url;
                DB::table('tbl_about')->insert($about);
                Alert::success('Successful', 'Add about successfully');
                return Redirect::to('/add-about');
            }else{
                Alert::warning('Fail', 'Add about unsuccessfully');
                return Redirect::to('/add-about');
            }
        }
    }


   public function add_service(){
      
       return view('admin.add_service');

   }

   public function save_service(Request $request){

        $service = array();
        $service['service_title'] = $request->s_title;

        $s = DB::table('tbl_service')
          ->insert($service);
         if($s){
         Alert::success('Successful', 'Add service successfully');
         return Redirect::to('/add-service'); 
         }else{
          
         Alert::warning('Fail', 'Add service unsuccessfully');
         return Redirect::to('/add-service'); 
         }

   }

   public function all_service(){
        
        $result = DB::table('tbl_service')
            ->select('tbl_service.*')
            ->get();

          return view('admin.all_service')->with('result', $result);
            
       
   }


   public function update_about(Request $request,$about_id)
    {


        $about = array();
        $about['about_title'] = $request->a_title;
        $about['about_description'] = $request->a_des;
        if ($request->hasfile('a_image')) {

            $image = $request->file('a_image');
          
            $image_name = Str::random(10);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $about['image'] = $image_url;
                DB::table('tbl_about')
                    ->where('about_id',$about_id)
                    ->update($about);
                Alert::success('Successful', 'Update about successfully');
                return Redirect::to('/all-about');
            }else{
                Alert::warning('Fail','Update about unsuccessfully');
                return Redirect::to('/all-about');
            }
        }
    }

}

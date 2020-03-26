<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

use Session;
session_start();

use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
class AdminController extends Controller
{
    public function admin(){

        return view('admin.admin_home');
    }

    public function all_member(){
       
        $result = DB::table('tbl_member')
                ->select('tbl_member.*')
                ->get();

        return view('admin.all_member')->with('result',$result);        


    }

    public function add_job(){

        return view('admin.add_job');
    }

    public function save_job(Request $request){

            $job = array();
            $job['employee_name'] = $request->employee_name;
            $job['department'] = $request->department;
            $job['position'] = $request->position;
            $job['vacancies'] = $request->vacancies;
            $job['job_location'] = $request->job_location;
            $job['joining_date'] = $request->joining_date;
            $job['package'] = $request->package;
            $job['deadline'] = $request->deadline;
            $job['additional_notes'] = $request->additional_notes;


            DB::table('tbl_job')->insert($job);
            return Redirect::to('/add-job');

    }

    public function all_job(){
       
        $result = DB::table('tbl_job')
                ->select('tbl_job.*')
                ->get();

        return view('admin.all_job')->with('result',$result);        


    }
    public function all_history(){
       
        $result = DB::table('tbl_history')
                ->select('tbl_history.*')
                ->get();

        return view('admin.all_history')->with('result',$result);        


    }

    public function all_about(){
       
        $result = DB::table('tbl_about')
                ->select('tbl_about.*')
                ->get();

        return view('admin.all_about')->with('result',$result);        


    }
    public function all_header(){
       
        $result = DB::table('tbl_header')
                ->select('tbl_header.*')
                ->get();

        return view('admin.all_header')->with('result',$result);        


    }
    public function add_event(){

        return view('admin.add_event');
    }

    public function save_event(Request $request){


        $event = array();
        $event['event_title'] = $request->e_title;
        $event['event_date'] = $request->e_date;
        if($request->hasfile('e_image'))
        {
           
            $image = $request->file('e_image');
            
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            if($success)
            {
                $event['event_image'] = $image_url;
                DB::table('tbl_event')->insert($event);
                Alert::success('Successful', 'Add event successfully');
                return Redirect::to('/add-event');     
            }

      }


     }

     public function all_event(){
       
        $result = DB::table('tbl_event')
                ->select('tbl_event.*')
                ->get();

        return view('admin.all_event')->with('result',$result);        


    }

    public function add_image(){

        return view('admin.add_image');
    }

    public function save_image(Request $request){


        $event = array();
        $event['image_title'] = $request->i_title;
       
        if($request->hasfile('image'))
        {
           
            $image = $request->file('image');
            
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);

            if($success)
            {
                $event['image'] = $image_url;
                DB::table('tbl_gallary')->insert($event);
                Alert::success('Successful', 'Add image successfully');
                return Redirect::to('/add-image');     
            }else{

                Alert::warning('Fail', 'Image upload unsuccessfull');
                return Redirect::to('/add-image'); 
            }

      }


     }

     public function all_image(){
       
        $result = DB::table('tbl_gallary')
                ->select('tbl_gallary.*')
                ->get();

        return view('admin.all_image')->with('result',$result);        


    }
   
   


}
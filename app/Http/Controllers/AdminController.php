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
            ->where('status',1)
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

    public function edit_job($job_id)
    {

        $result =  DB::table('tbl_job')
            ->where('job_id', $job_id)
            ->first();

        return view('admin.edit_job')->with('result', $result);
    }

    public function update_job(Request $request, $job_id)
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
            ->where('job_id', $job_id)
            ->update($job);
        Alert::success('Successful', 'Job successfully updated');
        return Redirect::to('/all-job');
    }

    public function delete_job($job_id)
    {

        DB::table('tbl_job')
            ->where('job_id', $job_id)
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

    public function historyEdit($id)
    {
        $history = DB::table('tbl_history')
            ->where('history_id', $id)
            ->first();
        return view('admin.edithistory', compact('history'));
    }

    public function historyUpdate(Request $request,  $id)
    {
        $data = $request->validate([
            'first_paragraph' => 'nullable',
            'middle_paragraph' => 'nullable',
            'last_paragraph' => 'nullable',
        ]);
        $history = DB::table('tbl_history')
            ->where('history_id', $id)
            ->update($data);

        if ($history) {
            Alert::success('successful', 'History updated successfully!');
            return redirect()->route('history.all');
        } else {
            Alert::success('fail', 'History updated failed!');
            return redirect()->back();
        }
    }


    public function all_about()
    {

        $result = DB::table('tbl_about')
            ->select('tbl_about.*')
            ->get();

        return view('admin.all_about')->with('result', $result);
    }

    public function delete_about($about_id)
    {
        DB::table('tbl_about')
            ->where('about_id', $about_id)
            ->delete();

        Alert::success('Successful', 'About deleted successfully');
        return Redirect::to('/all-about');
    }

    public function edit_about($about_id)
    {

        $result =  DB::table('tbl_about')
            ->where('about_id', $about_id)
            ->first();

        return view('admin.edit_about')->with('result', $result);
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
        $validator = Validator::make($request->all(), [
            'e_image' => 'required|image|mimes:jpeg,bmp,png|max:20000|dimensions:min_width=597,min_height=877|dimensions:max_width=600,max_height=880',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        $event = array();
        $event['event_title'] = $request->e_title;
        $event['event_date'] = $request->e_date;
        if ($request->hasfile('e_image')) {

            $image = $request->file('e_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
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

    public function showPeople($event_id)
    {
        $membersId = DB::table('tbl_join_event')
            ->where('event_id', $event_id)
            ->pluck('member_id');

        $people = DB::table('tbl_member')->whereIn('member_id', $membersId)->get();
        return view('admin.event_people', compact('people'));
    }

    public function delete_event($event_id)
    {

        DB::table('tbl_event')
            ->where('event_id', $event_id)
            ->delete();

        Alert::success('Successful', 'Event delete successfully');
        return Redirect::to('/all-event');
    }

    public function edit_event($event_id)
    {

        $result =  DB::table('tbl_event')
            ->where('event_id', $event_id)
            ->first();

        return view('admin.edit_event')->with('result', $result);
    }


    public function headerEdit($id)
    {
        $header = DB::table('tbl_header')
            ->select('tbl_header.*')
            ->where('header_id', $id)
            ->first();

        return view('admin.editheader', compact('header'));
    }

    public function headerUpdate(Request $request,  $id)
    {
        $data = $request->validate([
            'header_title' => 'required',
            'header_description' => 'required',
        ]);
        $header = DB::table('tbl_header')
            ->where('header_id', $id)
            ->update($data);

        if ($header) {
            Alert::success('Successful', 'Header updated successfully!');
            return redirect()->route('header.all');
        } else {
            Alert::success('fail', 'Header updated failed!');
            return redirect()->back();
        }
    }


    public function update_event(Request $request, $event_id)
    {

        $validator = Validator::make($request->all(), [
            'e_image' => 'required|image|mimes:jpeg,bmp,png|max:20000|dimensions:min_width=597,min_height=877|dimensions:max_width=600,max_height=880',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $event = array();
        $event['event_title'] = $request->e_title;
        $event['event_date'] = $request->e_date;
        if ($request->hasfile('e_image')) {

            $image = $request->file('e_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $event['event_image'] = $image_url;
                DB::table('tbl_event')
                    ->where('event_id', $event_id)
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
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png|max:2000|dimensions:width=200,height=200',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        $event = array();
        $event['image_title'] = $request->i_title;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
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

    public function add_about()
    {

        return view('admin.add_about');
    }

    public function save_about(Request $request)
    {
       


        $about = array();
        $about['about_description'] = $request->a_des;
        $about['about_mission'] = $request->a_mission;
        $about['about_vision'] = $request->a_vision;
        $about['about_member'] = $request->a_member;
        
              
                DB::table('tbl_about')->insert($about);
                Alert::success('Successful', 'Add about successfully');
                return Redirect::to('/add-about');
           
    }


    public function add_service()
    {

        return view('admin.add_service');
    }

    public function save_service(Request $request)
    {

        $service = array();
        $service['service_title'] = $request->s_title;

        $s = DB::table('tbl_service')
            ->insert($service);
        if ($s) {
            Alert::success('Successful', 'Add service successfully');
            return Redirect::to('/add-service');
        } else {

            Alert::warning('Fail', 'Add service unsuccessfully');
            return Redirect::to('/add-service');
        }
    }

    public function all_service()
    {

        $result = DB::table('tbl_service')
            ->select('tbl_service.*')
            ->get();

        return view('admin.all_service')->with('result', $result);
    }


    public function update_about(Request $request, $about_id)
    {
       

        $about = array();
        $about['about_description'] = $request->a_des;
        $about['about_mission'] = $request->a_mission;
        $about['about_vision'] = $request->a_vision;
        $about['about_member'] = $request->a_member;
                
                DB::table('tbl_about')
                    ->where('about_id', $about_id)
                    ->update($about);
                Alert::success('Successful', 'Update about successfully');
                return Redirect::to('/all-about');
           
    }

    public function delete_member($member_id)
    {

        DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->delete();

        Alert::success('Successful', 'Member deleted successfully');
        return Redirect::to('/all-member');
    }


    public function delete_service($service_id)
    {

        DB::table('tbl_service')
            ->where('service_id', $service_id)
            ->delete();

        Alert::success('Successful', 'Service deleted successfully');
        return Redirect::to('/all-service');
    }

    public function edit_service($service_id)
    {

        $result =  DB::table('tbl_service')
            ->where('service_id', $service_id)
            ->first();

        return view('admin.edit_service')->with('result', $result);
    }

    public function update_service(Request $request, $service_id)
    {

        $service = array();
        $service['service_title'] = $request->s_title;

        DB::table('tbl_service')
            ->where('service_id', $service_id)
            ->update($service);

        Alert::success('Successful', 'Service updated successfully');
        return Redirect::to('/all-service');
    }

    public function delete_image($image_id)
    {

        DB::table('tbl_gallary')
            ->where('image_id', $image_id)
            ->delete();

        Alert::success('Successful', 'Image deleted successfully');
        return Redirect::to('/all-image');
    }

    public function edit_image($image_id)
    {

        $result =  DB::table('tbl_gallary')
            ->where('image_id', $image_id)
            ->first();

        return view('admin.edit_image')->with('result', $result);
    }

    public function update_image(Request $request, $image_id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png|max:20000|dimensions:width=200,height=200',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }


        $event = array();
        $event['image_title'] = $request->i_title;

        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $event['image'] = $image_url;
                DB::table('tbl_gallary')
                    ->where('image_id', $image_id)
                    ->update($event);
                Alert::success('Successful', 'Image updated successfully');
                return Redirect::to('/all-image');
            } 
        }
    }
   
    public function member_info($member_id){
         

        $result = DB::table('tbl_member')
                ->where('member_id',$member_id)
                ->first();

        return view('admin.member_details')->with('result',$result);


    }


    public function member_request(){
         

        $result = DB::table('tbl_member')
                ->where('status',0)
                ->get();

        return view('admin.member_request')->with('result',$result);


    }

    public function member_aproval($member_id){

        $result = DB::table('tbl_member')
        ->where('member_id',$member_id)
        ->first();

       return view('admin.member_approval')->with('result',$result);


    }

    public function accept_member($member_id){
       
        $status = array();
        $status['status'] = 1;

        DB::table('tbl_member')
        ->where('member_id',$member_id)
        ->update($status);
       
        Alert::success('Successful', 'Member accepted successfully');
        return Redirect::to('/all-member-request');
    }

    public function reject_member($member_id){
       
        $status = array();
        $status['status'] = 2;

        DB::table('tbl_member')
        ->where('member_id',$member_id)
        ->update($status);
       
        Alert::warning('Reject', 'Member rejected');
        return Redirect::to('/all-member-request');
    }


}

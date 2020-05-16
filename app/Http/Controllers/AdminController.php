<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use App\User;
use App\Mail\SendMail;
use Hash;
use Mail;
use Carbon\Carbon;
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
            ->where('status', 1)
            ->orderBy('code')
            ->paginate(100);

        return view('admin.all_member')->with('result', $result);
    }

    public function makePaid($member_id)
    {

        $result = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->update(['is_paid' => 1]);

        return \redirect()->back();
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
            Alert::warning('fail', 'Header updated failed!');
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
        $event['category_id'] = $request->category_id;


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
            ->join('gallary_category', 'tbl_gallary.category_id', '=', 'gallary_category.id')
            ->select('tbl_gallary.*', 'gallary_category.category')
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
        $event['category_id'] = $request->category_id;

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

    public function member_info($member_id)
    {


        $result = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();

        return view('admin.member_details')->with('result', $result);
    }


    public function member_request()
    {


        $result = DB::table('tbl_member')
            ->where('status', 0)
            ->get();

        return view('admin.member_request')->with('result', $result);
    }

    public function member_aproval($member_id)
    {

        $result = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();

        return view('admin.member_approval')->with('result', $result);
    }

    public function accept_member($member_id)
    {

        $status = array();
        $status['status'] = 1;


        $email = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();

        $em = $email->email_address;

        DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->update($status);
        $rsub = "Registration conformation";
        $rmsg = "Your member request has been accepted";
        Mail::to($em)->send(new SendMail($rsub, $rmsg));
        Alert::success('Successful', 'Member accepted successfully');
        return Redirect::to('/all-member-request');
    }

    public function reject_member($member_id)
    {

        $status = array();
        $status['status'] = 2;

        $email = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();
        $em = $email->email_address;

        DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->update($status);

        $rsub = "Registration conformation";
        $rmsg = "Your member request has been rejected";
        Mail::to($em)->send(new SendMail($rsub, $rmsg));
        Alert::warning('Reject', 'Member rejected');
        return Redirect::to('/all-member-request');
    }




    public function search_member(Request $request)
    {

        $email = $request->email;
        $result = DB::table('tbl_member')
            ->where('email_address', 'like', '%' . $email . '%')
            ->orWhere('member_name', 'like', '%' . $email . '%')
            ->orWhere('code', 'like', '%' . $email . '%')
           // ->orderBy('code')
            ->get();
        // return $result->email_address;
        if ($result) {
            
            return view('admin.member_search')->with('result', $result);
        } else {

            Alert::warning('Not found', 'Member is not registered');
            return Redirect::to('all-member');
        }
    }

    public function add_advertisement()
    {

        return view('admin.add_advertisement');
    }

    public function save_advertisement(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ad_image' => 'required|image|mimes:jpeg,png|max:20000|dimensions:width=800,height=600',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        $add = array();
        $add['advertisement_title'] = $request->ad_title;
        $add['advertisement_description'] = $request->ad_description;

        if ($request->hasfile('ad_image')) {

            $image = $request->file('ad_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $add['advertisement_image'] = $image_url;
                DB::table('tbl_advertisement')->insert($add);
                Alert::success('Successful', 'Add advertisement successfully');
                return Redirect::to('/add-advertisement');
            }
        }
    }

    public function all_advertisement()
    {

        $result = DB::table('tbl_advertisement')
            ->select('tbl_advertisement.*')
            ->get();

        return view('admin.all_advertisement')->with('result', $result);
    }
    public function edit_advertisement($advertisement_id)
    {

        $result =  DB::table('tbl_advertisement')
            ->where('advertisement_id', $advertisement_id)
            ->first();

        return view('admin.edit_advertisement')->with('result', $result);
    }

    public function update_advertisement(Request $request, $advertisement_id)
    {

        $validator = Validator::make($request->all(), [
            'ad_image' => 'required|image|mimes:jpeg,png|max:20000|dimensions:width=800,height=600',

        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $add = array();
        $add['advertisement_title'] = $request->ad_title;
        $add['advertisement_description'] = $request->ad_description;
        if ($request->hasfile('ad_image')) {

            $image = $request->file('ad_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $add['advertisement_image'] = $image_url;
                DB::table('tbl_advertisement')
                    ->where('advertisement_id', $advertisement_id)
                    ->update($add);

                Alert::success('Successful', 'Update advertisement successfully');
                return Redirect::to('/all-advertisement');
            }
        }
    }
    public function delete_advertisement($advertisement_id)
    {

        DB::table('tbl_advertisement')
            ->where('advertisement_id', $advertisement_id)
            ->delete();

        Alert::success('Successful', 'Advertisement deleted successfully');
        return Redirect::to('/all-advertisement');
    }



    public function getmember()
    {


        $name = $_GET['name'];

        $res = DB::table('tbl_member')
            ->select('tbl_member.*')
            ->where('member_name', 'LIKE', '%' . $name . '%')
            ->first();

        return $res->member_name;
    }

    public function blog()
    {



        $result =  DB::table('posts')
            ->join('tbl_member', 'posts.member_id', '=', 'tbl_member.member_id')
            ->select('posts.*', 'tbl_member.*')
            ->where('posts.status',1)
            ->orderBy('date', 'desc')
            ->get();

        return view('blog')->with('result', $result);
    }

    public function save_post(Request $request)
    {
        $member_id = Session::get('lcheck');
        if ($member_id) {
            $post = array();
            $post['title'] = $request->title;
            $post['description'] = $request->s_post;
            $post['date'] = date('Y-m-d H:i:s');
            $post['member_id'] = $member_id;
            if($request->status){
            $post['status'] = $request->status;
            }else{
                $post['status'] = 0;
            }
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
                    DB::table('posts')->insert($post);
                    Alert::success('Successful', 'post added successfully');
                    return Redirect()->back();
                }
            } else {
                $post['post_image'] = "";
                DB::table('posts')->insert($post);
                Alert::success('Successful', 'post added successfully');
                return Redirect()->back();
            }
        } else {


            Alert::warning('Fail', 'please login first');
            return Redirect::to('/blog');
        }
    }

    public function save_comment(Request $request, $id)
    {
        $member_id = Session::get('lcheck');
        if ($member_id) {
            $cm = array();
            $cm['post_id'] = $id;
            $cm['member_id'] = $member_id;
            $cm['comment'] = $request->comment;
            $cm['date'] = date('Y-m-d');

            DB::table('comments')->insert($cm);

            Alert::success('Successful', 'Comment added successfully');
            return Redirect()->back();
        } else {


            Alert::warning('Fail', 'please login first');
            return Redirect()->back();
        }
    }

    public function like($p_id)
    {


        $m_id =  Session::get('lcheck');
        $like = array();

        $like['post_id'] = $p_id;
        $like['member_id'] = $m_id;
        $like['date'] = date('Y-m-d');
        if ($m_id) {
            DB::table('likes')->insert($like);
            return Redirect()->back();
        } else {
            Alert::warning('Fail', 'You have to login');
            return Redirect()->back();
        }
    }
    public function unlike($p_id)
    {


        $m_id =  Session::get('lcheck');


        DB::table('likes')
            ->where('member_id', $m_id)
            ->where('post_id', $p_id)
            ->delete();
        return Redirect()->back();
    }

    public function edit_member($member_id)
    {

        $result = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();

        return view('admin.edit_member')->with('result', $result);
    }

    public function update_member(Request $request, $member_id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png|max:2000',




        ]);
        $member = array();
        $member['member_name'] = $request->name;
        $member['email_address'] = $request->email;
        $member['contact_number'] = $request->contact;
        $member['code'] = $request->code;
        $member['present_organization'] = $request->p_o;
        $member['present_address'] = $request->p_a;
        if($request->b_g != 'select'){
        $member['blood_group'] = $request->b_g;
        }
        $member['department'] = $request->department;
        $member['designation'] = $request->designation;
        $member['member_skill'] = $request->skill;
        $member['member_hobby'] = $request->hobby;
        if ($request->hasfile('image')) {

            $image = $request->file('image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $member['image'] = $image_url;
                DB::table('tbl_member')
                    ->where('member_id', $member_id)
                    ->update($member);
                Alert::success('Successful', 'member updated successfully');
                return Redirect::to('/all-member');
            }
        } else {

            DB::table('tbl_member')
                ->where('member_id', $member_id)
                ->update($member);
            Alert::success('Successful', 'member updated successfully');
            return Redirect::to('/all-member');
        }
    }



    public function add_category()
    {


        return view('admin.add_g_category');
    }

    public function save_category(Request $request)
    {

        $category = array();

        $category['category'] = $request->category;
        DB::table('gallary_category')
            ->insert($category);
        Alert::success('Successful', 'category added successfully');
        return Redirect::to('/add-category');
    }
    public function all_category()
    {

        $result = DB::table('gallary_category')
            ->get();

        return view('admin.all_g_category')->with('result', $result);
    }
    public function edit_category($id)
    {

        $result =  DB::table('gallary_category')
            ->where('id', $id)
            ->first();

        return view('admin.edit_category')->with('result', $result);
    }

    public function update_category(Request $request, $id)
    {

        $category = array();

        $category['category'] = $request->category;
        DB::table('gallary_category')
            ->where('id', $id)
            ->update($category);
        Alert::success('Successful', 'category updateded successfully');
        return Redirect::to('/all-category');
    }

    public function delete_category($id)
    {

        DB::table('gallary_category')
            ->where('id', $id)
            ->delete();
        Alert::success('Successful', 'category deleted successfully');
        return Redirect::to('/all-category');
    }

    public function read_more($p_id)
    {

        $result = DB::table('posts')
            ->join('tbl_member', 'posts.member_id', '=', 'tbl_member.member_id')
            ->where('posts.id', $p_id)
            ->select('posts.*', 'tbl_member.member_name')
            ->first();

        return view('read_more')->with('r', $result);
    }

    public function delete_comment($id)
    {

        DB::table('comments')
            ->where('id', $id)
            ->delete();
        return redirect()->back();
    }

    public function AllBlog(){

        $result =  DB::table('posts')
             ->join('tbl_member','posts.member_id','=','tbl_member.member_id')
             ->select('posts.*','tbl_member.member_name')
             ->get();
        
        return view('admin.all_blog')->with('result',$result);     

    }

    public function DeleteBlog($id){
        
        DB::table('posts')
          ->where('id',$id)
          ->delete();
        
        DB::table('likes')
          ->where('post_id',$id)
          ->delete();
        
        DB::table('comments')
          ->where('post_id',$id)
          ->delete();
        Alert::success('Successful', 'Blog deleted successfully');
        return Redirect::to('all-blog');



    }

    public function PublishPost($id){
        $post['status'] = 1;
      DB::table('posts')
       ->where('id',$id)
       ->update($post);
    Alert::success('Successful', 'your post has been published');
       return Redirect()->back();


    }
    public function BlogDetail($id)
    {

        $result = DB::table('posts')
            ->join('tbl_member', 'posts.member_id', '=', 'tbl_member.member_id')
            ->where('posts.id', $id)
            ->select('posts.*', 'tbl_member.member_name')
            ->first();

        return view('admin.blog_detail')->with('r', $result);
    }
    public function AddVideo(){

        return view('admin.add_video');
    }
    public function SaveVideo(Request $request){

      $count = DB::table('videos')
         ->count();  

      if($count<1){   
      $video = array();
    //  $link =   $request->link;
      $video['title'] = $request->v_title;

    //   $id = preg_replace("#.'youtube\.com/watch\?v=#", "", $link);
    //   echo $id;

      $url=$request->link;;
      $video['video_link'] = $url;
      parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );

      $video['video_id'] = $my_array_of_vars['v']; 
      DB::table('videos')
        ->insert($video);
        Alert::success('Successful', 'Added successfully');
        return redirect()->back();
    }
    else{

        Alert::warning('fail', 'Already added one video link, please delete it first');
        return redirect()->back();
    }

    }

    public function ShowVideo(){

       $ct = DB::table('videos')
             ->select('videos.*')
             ->get();
        
             return view('admin.all_video')->with('ct',$ct);    
    }
    public function EditVideo($id){
         
       $result= DB::table('videos')
           ->where('id',$id)
           ->first();
        return view('admin.edit_video')->with('result',$result);
    }

    public function UpdateVideo(Request $request , $id){

        $count = DB::table('videos')
           ->count();  
  
       
        $video = array();
      //  $link =   $request->link;
        $video['title'] = $request->v_title;
  
      //   $id = preg_replace("#.'youtube\.com/watch\?v=#", "", $link);
      //   echo $id;
  
        $url=$request->link;;
        $video['video_link'] = $url;
        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
  
        $video['video_id'] = $my_array_of_vars['v']; 
        DB::table('videos')
          ->where('id',$id)
          ->update($video);
          Alert::success('Successful', 'Upadated successfully');
          return redirect::to('all-video');
   
      
  
      }

      public function DeleteVideo($id){

        DB::table('videos')
        ->where('id',$id)
        ->delete();
        Alert::success('Successful', 'deleted successfully');
        return redirect::to('all-video');
      }
      public function up(){
      
       return view('up');


    }
    public function upload(Request $request){
      
        if(isset($_POST['image']))
        {
         $data = $_POST['image'];
        
         $image_array_1 = explode(";", $data);
        
         $image_array_2 = explode(",", $image_array_1[1]);
        
         $data = base64_decode($image_array_2[1]);
         
         $imageName = time() . '.png';
        
         file_put_contents($imageName, $data);
         
         
         echo '<img src="'.$imageName.'"class="img-thumbnail" />';
         Session::put('imn',$imageName);
        }
         
        
        // if ($request->uploaded_image) {

        //     $image = $request->uploaded_image;
            
        //     $image_name = Str::random(20);
        //     $ext = strtolower($image->getClientOriginalExtension());
        //     $image_full_name = $image_name . '.' . $ext;
        //     $upload_path = public_path() . '/image/';
        //     $image_url = 'image/' . $image_full_name;
        //     $success = $image->move($upload_path, $image_full_name);
    
        //     if ($success) {
        //       $data['uploaded_image'] = $image_url;
        //       return $image_url;
        //     }
        //     else{
        //         return $request->uploaded_image;
        //     }
        //  image/cI5xWkbxuKfR6Hwo7I73.jpg } 
     //  
        

       
 
     }
     public function uploadd(Request $request){
            $uploaded_image = array();
            $validator = Validator::make($request->all(), [
                'upload_image' => 'image|mimes:jpeg,png|max:2000',
                
        
        
              ]);
        
              if ($validator->fails()) {
                $errors = $validator->errors();
                return redirect()
                  ->back()
                  ->withErrors($validator);
              }
            $uploaded_image['image'] = Session::get('imn');
                DB::table('tbl_member')
                  ->where('member_id',Session::get('lcheck'))
                  ->update($uploaded_image);
                return Redirect::to('/profile');
           
        

     }
     public function upCover(){
      
        return view('upCover');
 
 
     }
     public function uploadCover(Request $request){
        $uploaded_image = array();
        $validator = Validator::make($request->all(), [
            'upload_image' => 'image|mimes:jpeg,png|max:2000',
            
    
    
          ]);
    
          if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
              ->back()
              ->withErrors($validator);
          }
          

          if ($request->hasfile('upload_image')) {

            $image = $request->file('upload_image');

            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = public_path() . '/image/';
            $image_url = 'image/' . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $uploaded_image['cover_image'] = $image_url;
                DB::table('tbl_member')
                ->where('member_id',Session::get('lcheck'))
                ->update($uploaded_image);
                Alert::success('Successful', 'Image updated successfully');
                return Redirect::to('/profile');
            }
        }

       
    

         }
}

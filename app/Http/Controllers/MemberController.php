<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendMail;
use Hash;
use Mail;


use Session;


use RealRashid\SweetAlert\Facades\Alert;

session_start();





class MemberController extends Controller
{
    public function add_member()
    {

        return view('member2');
    }

    public function passwordEcrypt()
    {
        $mebers = DB::table('tbl_member')->get();

        foreach ($mebers as $member) {
            $newpass = Hash::make($member->password);

            DB::table('tbl_member')->where('member_id', $member->member_id)->update(['password' => $newpass]);
        }
    }

    public function removeDashMemberId()
    {
        $mebers = DB::table('tbl_member')->get();

        $last = 1;
        foreach ($mebers as $member) {
            $last = DB::table('tbl_member')->count();
            if (strlen($last) == 1) {
                $last = '000' . $last;
            }
            if (strlen($last) == 2) {
                $last = '00' . $last;
            }
            if (strlen($last) == 3) {
                $last = '0' . $last;
            }

            $code = substr(date('Y'), -2) . '-' . $last;

            DB::table('tbl_member')->where('member_id', $member->member_id)->update(['code' => $code]);
            $last++;
        }
    }

    public static function memberIdGenerate()
    {
        $last = DB::table('tbl_member')->count();
        if (strlen($last) == 1) {
            $last = '000' . $last;
        }
        if (strlen($last) == 2) {
            $last = '00' . $last;
        }
        if (strlen($last) == 3) {
            $last = '0' . $last;
        }

        return $code = substr(date('Y'), -2) . '-' . $last;
    }

    public function save_member(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png|max:2000|dimensions:width=200,height=200',
            'pass' => 'required|min:6',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $data = array();
        $data['member_name'] = $request->name;
        $data['email_address'] = $request->email;
        $data['nid'] = $request->nid;
        $data['password'] = bcrypt($request->pass);
        $data['department'] = $request->department;
        $data['present_address'] = $request->p_a;
        $data['designation'] = $request->designation;

        $data['contact_number'] = $request->contact;
        $data['present_organization'] = $request->po;
        $data['blood_group'] = $request->b_g;
        $data['status'] = 1; // this would be zero 0, 1 for certain time only
        $data['code'] = self::memberIdGenerate();
        // $data['member_skill'] = "";
        // $data['member_hobby'] = "";


        $check = DB::table('tbl_member')
            ->where('email_address', $request->email)
            ->where('contact_number', $request->contact)
            ->first();
        if ($check == null) {

            if ($request->pass == $request->c_pass) {


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
                        DB::table('tbl_member')->insert($data);
                        $rsub = "Registration conformation";
                        $rmsg = "Thank you for registration";
                        //Mail::to($data['email_address'])->send(new SendMail($rsub, $rmsg));
                        Alert::success('Successful', 'Thank you for registration');
                        return Redirect::to('/member-registration');
                    } else {
                        Alert::warning('Fail', 'Please enter valid input');
                        return Redirect::to('/member-registration');
                    }
                } else {

                    Alert::warning('Fail', 'Please upload image');
                    return Redirect::to('/member-registration');
                }
            } else {
                Alert::warning('Fail', 'Password and confirm password is not matched');
                return Redirect::to('/member-registration');
            }
        } else {

            Alert::warning('Fail', 'Already resigtered');
            return Redirect::to('/member-registration');
        }
    }

    public function login_check(Request $request)
    {

        $check = array();
        $check['email'] = $request->email;
        $check['password'] = $request->password;

        $l_check = DB::table('tbl_member')
            ->where('email_address', $request->email)
            ->where('status', 1)
            ->first();
        //echo  $l_check;
        if ($l_check != null) {
            if (Hash::check($request->password, $l_check->password)) {
                Session::put('lcheck', $l_check->member_id);
                Alert::success('success', 'Login successfully');
                return Redirect::to('/');
            } else {
                Alert::warning('fail', 'Login unsuccessfull');
                return Redirect::to('/');
            }
        } else {
            Alert::warning('fail', 'Login unsuccessfull');
            return Redirect::to('/');
        }
    }

    public function career()
    {

        return view('career');
    }

    public function logout()
    {

        Session::flush();
        return Redirect::to('/');
    }

    public function profile()
    { }

    public function edit_profile($member_id)
    {

        $mem  = DB::table('tbl_member')
            ->where('member_id', $member_id)
            ->first();

        return view('edit_profile')->with('mem', $mem);
    }

    public function update_profile(Request $request, $member_id)
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
        $data = array();
        $data['member_name'] = $request->name;
        $data['email_address'] = $request->email;
        $data['nid'] = $request->nid;
        $data['password'] = bcrypt($request->pass);
        $data['department'] = $request->department;
        $data['present_address'] = $request->p_address;
        $data['designation'] = $request->designation;

        $data['contact_number'] = $request->contact_number;
        $data['present_organization'] = $request->org;
        $data['blood_group'] = $request->b_group;
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
                DB::table('tbl_member')->where('member_id', $member_id)->update($data);
                return Redirect::to('/profile');
            }
        }
    }

    public function forgot_password()
    {


        return view('forgot_password');
    }


    public function code()
    {
        $this->authcheck();
        return view('code');
    }
    public function send_code(Request $request)
    {

        $email = $request->email;
        Session::put('email', $email);
        $check =  DB::table('tbl_member')
            ->where('email_address', $email)
            ->first();
        if ($check) {


            $rsub = "Password Conformation Code";
            $code = rand(10000, 99999);
            $rmsg = "Yor code is : " . $code;
            Session::put('cd', $code);
            // Mail::to($email)->send(new SendMail($rsub, $rmsg));
            Alert::success('Send code', 'Code has been sent to your email');
            return Redirect::to('/code');
        } else {
            Alert::warning('Fail', 'Email is not registered');
            return Redirect::to('/forgot-password');
        }
    }
    public function n_pass()
    {
        $this->authcheck();
        return view('new_password');
    }
    public function submit_code(Request $request)
    {

        $code = Session::get('code');
        if ($code == $request->code) {

            return Redirect::to('/new-password');
        } else {
            Alert::warning('Fail', 'Code is not matched');
            return Redirect::to('/code');
        }
    }
    public function reset_password(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pass' => 'required|min:6',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect()
                ->back()
                ->withErrors($validator);
        }
        $email = Session::get('eml');
        $data = array();
        $data['password'] = bcrypt($request->pass);

        $success = DB::table('tbl_member')
            ->where('email_address', $email)
            ->update($data);

        if ($success) {
            Alert::success('success', 'Password reset successfully');
            return Redirect::to('/');
        } else {
            Alert::warning('Fail', 'Password reset failed');
            return Redirect::to('/');
        }
    }


    public function authcheck()
    {
        $code = Session::get('cd');
        if ($code) {
            return;
        } else {
            return Redirect::to('/')->send();
        }
    }

    public function testMail(){
        Mail::to('sabbir.h2668@gmail.com')->send(new SendMail("Test Mail", "Hello this is a test mail from server"));
    }
}

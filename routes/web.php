<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','ContentController@content');

Route::get('/member-registration','MemberController@add_member');
Route::post('/save-member','MemberController@save_member');

//admin
Route::get('/admin','AdminController@admin');
Route::get('/all-member','AdminController@all_member');

//job
Route::get('/add-job','AdminController@add_job');
Route::post('/save-job','AdminController@save_job');
Route::get('/all-job','AdminController@all_job');

//history
Route::get('/all-history','AdminController@all_history');

//about
Route::get('/all-about','AdminController@all_about');

//header
Route::get('/all-header','AdminController@all_header');

//event
Route::get('/add-event','AdminController@add_event');
Route::post('/save-event','AdminController@save_event');
Route::get('/all-event','AdminController@all_event');
Route::get('/join','ContentController@join_event');
Route::get('/view-all-event','ContentController@view_event');



//Gallary
Route::get('/add-image','AdminController@add_image');
Route::post('/save-image','AdminController@save_image');
Route::get('/all-image','AdminController@all_image');
Route::get('/view-all','ContentController@view_all');


//history
Route::get('/full-history','ContentController@full_history');

//profile
Route::get('/profile','ContentController@profile');
Route::post('/update-member','ContentController@update_profile');




//login
Route::post('/login-check','MemberController@login_check');
Route::get('/career','MemberController@career');
Route::get('/logout','MemberController@logout');
Route::get('/forgot-password','MemberController@forgot_password');


//fronend
Route::get('/front','frontendController@front_view');
Route::get('/profile','frontendController@profile_view');

Route::get('/edit-profile/{member_id}','MemberController@edit_profile');
Route::post('/edit-member/{member_id}','MemberController@update_profile');


//forgot password

Route::post('/send-code','MemberController@send_code');
Route::get('/code','MemberController@code');
Route::post('/submit-code','MemberController@submit_code');
Route::get('/new-password','MemberController@n_pass');
Route::post('/reset-password','MemberController@reset_password');






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

// Route::get('/wc', function () {
//     return view('welcome');
// });

Route::get('/', 'ContentController@content');

Route::get('/member-registration', 'MemberController@add_member');
Route::post('/save-member', 'MemberController@save_member');

//admin
Route::get('/admin-login', 'AdminController@adminLoginPage');
Route::post('/admin-login', 'AdminController@adminLogin')->name('admin.login');
Route::get('/admin', 'AdminController@admin')->name('admin.home')->middleware('admin');

//member
Route::get('/delete-member/{member_id}', 'AdminController@delete_member')->middleware('admin');
Route::get('/all-member', 'AdminController@all_member')->middleware('admin');

//job
Route::get('/add-job', 'AdminController@add_job')->middleware('admin');
Route::post('/save-job', 'AdminController@save_job')->middleware('admin');
Route::get('/all-job', 'AdminController@all_job')->middleware('admin');
Route::get('/edit-job/{job_id}', 'AdminController@edit_job')->middleware('admin');
Route::post('/update-job/{job_id}', 'AdminController@update_job')->middleware('admin');
Route::get('/delete-job/{job_id}', 'AdminController@delete_job')->middleware('admin');




//history
Route::get('/all-history', 'AdminController@all_history')->name('history.all')->middleware('admin');
Route::get('/history/edit/{id}', 'AdminController@historyEdit')->name('history.edit')->middleware('admin');
Route::post('/history/update/{id}', 'AdminController@historyUpdate')->name('history.update')->middleware('admin');

//about
Route::get('/all-about', 'AdminController@all_about')->middleware('admin');
Route::get('/add-about', 'AdminController@add_about')->middleware('admin');
Route::post('/save-about', 'AdminController@save_about')->middleware('admin');
Route::get('/delete-about/{about_id}','AdminController@delete_about')->middleware('admin');
Route::get('/edit-about/{about_id}','AdminController@edit_about')->middleware('admin');
Route::post('/update-about/{about_id}','AdminController@update_about')->middleware('admin');




//service
Route::get('/add-service', 'AdminController@add_service')->middleware('admin');
Route::get('/all-service', 'AdminController@all_service')->middleware('admin');
Route::post('/save-service', 'AdminController@save_service')->middleware('admin');




//header
Route::get('/all-header', 'AdminController@all_header')->name('header.all')->middleware('admin');
Route::get('/header/edit/{id}', 'AdminController@headerEdit')->name('header.edit')->middleware('admin');
Route::post('/header/update/{id}', 'AdminController@headerUpdate')->name('header.update')->middleware('admin');

//event
Route::get('/add-event', 'AdminController@add_event')->middleware('admin');
Route::post('/save-event', 'AdminController@save_event')->middleware('admin');
Route::get('/all-event', 'AdminController@all_event')->name('all.event')->middleware('admin');
// Route::get('/event/edit/{id}', 'AdminController@editEvent')->name('event.edit')->middleware('admin');
// Route::post('/event/update/{id}', 'AdminController@updateEvent')->name('event.update')->middleware('admin');
// Route::get('/event/delete/{id}', 'AdminController@deleteEvent')->name('event.delete')->middleware('admin');
Route::get('/event/show-people/{event_id}', 'AdminController@showPeople')->name('event.people')->middleware('admin');


Route::get('/join', 'ContentController@join_event');
Route::get('/view-all-event', 'ContentController@view_event');
Route::get('/delete-event/{event_id}','AdminController@delete_event');
Route::get('/edit-event/{event_id}','AdminController@edit_event');
Route::post('/update-event/{event_id}','AdminController@update_event');





//Gallary
Route::get('/add-image', 'AdminController@add_image')->middleware('admin');
Route::post('/save-image', 'AdminController@save_image')->middleware('admin');
Route::get('/all-image', 'AdminController@all_image')->middleware('admin');
Route::get('/view-all', 'ContentController@view_all');


//history
Route::get('/full-history', 'ContentController@full_history')->middleware('admin');

//profile
Route::get('/profile', 'ContentController@profile');
Route::post('/update-member', 'ContentController@update_profile');




//login
Route::post('/login-check', 'MemberController@login_check');
Route::get('/career', 'MemberController@career');
Route::get('/logout', 'MemberController@logout');
Route::get('/forgot-password', 'MemberController@forgot_password');


//fronend
Route::get('/front', 'frontendController@front_view');
Route::get('/profile', 'frontendController@profile_view');

Route::get('/edit-profile/{member_id}', 'MemberController@edit_profile');
Route::post('/edit-member/{member_id}', 'MemberController@update_profile');


//forgot password

Route::post('/send-code', 'MemberController@send_code');
Route::get('/code', 'MemberController@code');
Route::post('/submit-code', 'MemberController@submit_code');
Route::get('/new-password', 'MemberController@n_pass');
Route::post('/reset-password', 'MemberController@reset_password');
Route::post('/contact-mail', 'ContentController@sendContactMail')->name('contact.mail');

/**
 * 1. password increaption - 1
 * 2. admin auth - 1
 * 3. footer contact form - 1
 * 4. gallary show all - 1
 * 5. event time dynamic - 1
 * 6. Landing page
 *      - welcome image need to be dynamic - 1
 *      - Services need to be dynamic - 1
 * 7. Show all people who join to a event
 * 
 */

// All event 
// All jobs
// All about - done
// All history - done
// All member
// All image 
// Member who join event -done
// All header - done

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

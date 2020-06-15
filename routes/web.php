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
Route::get('/member/make-paid/{member_id}', 'AdminController@makePaid')->name('make.paid')->middleware('admin');

Route::get('/member-info/{member_id}', 'AdminController@member_info')->middleware('admin');
Route::get('/all-member-request', 'AdminController@member_request')->middleware('admin');
Route::get('/requested-member-info/{member_id}', 'AdminController@member_aproval')->middleware('admin');
Route::get('/accept-member/{member_id}', 'AdminController@accept_member')->middleware('admin');
Route::get('/reject-member/{member_id}', 'AdminController@reject_member')->middleware('admin');
Route::post('/search-member', 'AdminController@search_member')->middleware('admin');
Route::get('/member-edit/{member_id}', 'AdminController@edit_member')->middleware('admin');
Route::post('/update-member/{member_id}', 'AdminController@update_member')->middleware('admin');






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
Route::get('/delete-about/{about_id}', 'AdminController@delete_about')->middleware('admin');
Route::get('/edit-about/{about_id}', 'AdminController@edit_about')->middleware('admin');
Route::post('/update-about/{about_id}', 'AdminController@update_about')->middleware('admin');




//service
Route::get('/add-service', 'AdminController@add_service')->middleware('admin');
Route::get('/all-service', 'AdminController@all_service')->middleware('admin');
Route::post('/save-service', 'AdminController@save_service')->middleware('admin');
Route::get('/delete-service/{service_id}', 'AdminController@delete_service')->middleware('admin');
Route::get('/edit-service/{service_id}', 'AdminController@edit_service')->middleware('admin');
Route::post('/update-service/{service_id}', 'AdminController@update_service')->middleware('admin');


//advertisement
Route::get('/add-advertisement', 'AdminController@add_advertisement')->middleware('admin');
Route::post('/save-advertisement', 'AdminController@save_advertisement')->middleware('admin');
Route::get('/all-advertisement', 'AdminController@all_advertisement')->middleware('admin');
Route::get('/edit-advertisement/{advertisement_id}', 'AdminController@edit_advertisement')->middleware('admin');
Route::post('/update-advertisement/{advertisement_id}', 'AdminController@update_advertisement')->middleware('admin');
Route::get('/delete-advertisement/{advertisement_id}', 'AdminController@delete_advertisement')->middleware('admin');



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
Route::get('/delete-event/{event_id}', 'AdminController@delete_event');
Route::get('/edit-event/{event_id}', 'AdminController@edit_event');
Route::post('/update-event/{event_id}', 'AdminController@update_event');





//Gallary
Route::get('/add-image', 'AdminController@add_image')->middleware('admin');
Route::post('/save-image', 'AdminController@save_image')->middleware('admin');
Route::get('/all-image', 'AdminController@all_image')->middleware('admin');
Route::get('/view-all', 'ContentController@view_all');
Route::get('/delete-image/{image_id}', 'AdminController@delete_image')->middleware('admin');
Route::get('/edit-image/{image_id}', 'AdminController@edit_image')->middleware('admin');
Route::post('/update-image/{image_id}', 'AdminController@update_image');
Route::get('/add-category', 'AdminController@add_category')->middleware('admin');
Route::post('/save-category', 'AdminController@save_category')->middleware('admin');
Route::get('/all-category', 'AdminController@all_category')->middleware('admin');
Route::get('/edit-category/{id}', 'AdminController@edit_category')->middleware('admin');
Route::post('/update-category/{id}', 'AdminController@update_category')->middleware('admin');
Route::get('/delete-category/{id}', 'AdminController@delete_category')->middleware('admin');











//history
Route::get('/full-history', 'ContentController@full_history');

//profile
Route::get('/profile', 'ContentController@profile');
Route::post('/update-member', 'ContentController@update_profile');
Route::get('/member-profile', 'ContentController@member_profile');
Route::post('/change-password', 'ContentController@changePassowrd');
Route::get('/show-profile', 'ContentController@show_profile');
Route::get('/edit', 'ContentController@edit');
Route::get('/settings', 'ContentController@settings');
Route::get('/delete-post/{id}', 'ContentController@delete_post');
Route::get('/edit-post/{id}', 'ContentController@edit_post');
Route::post('/update-post/{id}', 'ContentController@update_post');
Route::get('/friend-request', 'ContentController@friend_request');
Route::get('/friends', 'ContentController@friends');
Route::get('/accept-request/{id}', 'ContentController@accept_request');
Route::get('/declien-request/{id}', 'ContentController@declien_request');
Route::post('/search', 'ContentController@search');
Route::get('/get-member/{member_id}', 'ContentController@get_member');
Route::get('/searched-profile/{memid}', 'ContentController@searched_profile');
Route::get('/send-request/{member_id}','ContentController@send_request');
Route::get('/cancel-request/{member_id}','ContentController@cancel_request');
Route::get('/unfriend-request/{member_id}','ContentController@unfriend_request');


















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

//Search
Route::get('/getmember/{name}', 'AdminController@getmember');
Route::get('/member-suggest/{value}', 'AdminController@memberSuggest')->name('member.suggest');
Route::get('/individual-member/{id}', 'AdminController@memberIdividual');

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
Route::get('/remove-dash-id', 'MemberController@removeDashMemberId');
Route::get('/test-mail', 'MemberController@testMail');

//blog
Route::get('/blog', 'AdminController@blog');
Route::post('/save-post', 'AdminController@save_post');
Route::post('/save-comment/{id}', 'AdminController@save_comment');
Route::get('/like/{p_id}','AdminController@like');
Route::get('/unlike/{p_id}','AdminController@unlike');
Route::get('/unlike/{p_id}','AdminController@unlike');
Route::get('/read-more/{p_id}','AdminController@read_more');
Route::get('/delete-comment/{id}','AdminController@delete_comment');
Route::get('/all-blog', 'AdminController@AllBlog')->middleware('admin');
Route::get('/delete-blog/{id}', 'AdminController@DeleteBlog')->middleware('admin');
Route::get('/publish-post/{id}', 'AdminController@PublishPost');
Route::get('/blog-detail/{id}', 'AdminController@BlogDetail');


//video
Route::get('/add-video', 'AdminController@AddVideo')->middleware('admin');
Route::get('/all-video', 'AdminController@ShowVideo')->middleware('admin');
Route::post('/save-video', 'AdminController@SaveVideo')->middleware('admin');
Route::get('/edit-video/{id}', 'AdminController@EditVideo')->middleware('admin');
Route::post('/update-video/{id}', 'AdminController@UpdateVideo')->middleware('admin');
Route::get('/delete-video/{id}', 'AdminController@DeleteVideo')->middleware('admin');
Route::get('/up', 'AdminController@up');
Route::post('/upload', 'AdminController@upload')->name('upload');
Route::post('/uploadd', 'AdminController@uploadd');
Route::get('/up-cover', 'AdminController@upCover');
Route::post('/cover-upload', 'AdminController@uploadCover');




//bazar
Route::get('/bazar', 'BazarController@bazar');

//mango
Route::get('/mango-order', 'BazarController@mango');
Route::get('/order','BazarController@order');
Route::get('/price','BazarController@price');


//order
Route::get('/all-order','AdminController@all_order');
Route::get('/order-detail/{id}','AdminController@order_detail');
Route::get('/delete-order/{id}', 'AdminController@delete_order')->middleware('admin');



//city
Route::get('/add-city', 'AdminController@add_city')->middleware('admin');
Route::post('/save-city', 'AdminController@save_city')->middleware('admin');
Route::get('/all-city', 'AdminController@all_city')->middleware('admin');
Route::get('/delete-city/{id}', 'AdminController@delete_city')->middleware('admin');



//delivary cost
Route::get('/add-cost', 'AdminController@add_cost')->middleware('admin');
Route::post('/save-cost', 'AdminController@save_cost')->middleware('admin');
Route::get('/all-cost', 'AdminController@all_cost')->middleware('admin');
Route::get('/edit-cost/{id}', 'AdminController@edit_cost')->middleware('admin');
Route::post('/update-cost/{id}', 'AdminController@update_cost')->middleware('admin');


Route::get('/edit-status/{id}', 'AdminController@edit_status')->middleware('admin');
Route::post('/update-status/{id}', 'AdminController@update_status')->middleware('admin');
Route::get('/payment-detail/{id}', 'AdminController@payment_detail')->middleware('admin');



















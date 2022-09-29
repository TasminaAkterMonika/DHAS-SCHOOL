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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

//Default Controller
Route::get('/', 'HomeController@index')->name('index');
Route::post('/home/submit', 'HomeController@submit');
Route::get('/home/skin/{any?}', 'HomeController@getSkin');


Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');
/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification 
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');

Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin
		
		include('sximo.php');
		
});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});

//VMSL Route
Route::get('getmedicine/{id}','CitController@getMedicineById');


Route::post('sendmail','VmslController@contact_email')->name('contact.email');


//BD Serve
Route::get('about','VmslController@about')->name('about');

Route::get('teachers','VmslController@teacher_s')->name('teachers');

Route::get('teacher/details/{id}','VmslController@teacherDetails')->name('teacher.details');

Route::get('gallerys','VmslController@gallery_s')->name('gallerys');

Route::get('schooldetails','VmslController@schooldetail_s')->name('schooldetails');

Route::get('goals','VmslController@goal_s')->name('goals');

Route::get('events','VmslController@event_s')->name('events');

Route::get('upevents','VmslController@upevent_s')->name('upevents');

Route::get('class','VmslController@class')->name('class');

Route::get('student/list/{id}','VmslController@studentList')->name('student.list');

Route::get('student/details/{id}','VmslController@studentDetails')->name('student.details');

Route::get('admissions','VmslController@admission_s')->name('admissions');

Route::get('projects','VmslController@project_s')->name('projects');

Route::get('donets','VmslController@donet_s')->name('donets');

Route::get('contacts','VmslController@contact_us')->name('contacts');

Route::get('managings','VmslController@managing_s')->name('managings');

Route::get('advisorys','VmslController@advisory_s')->name('advisorys');

Route::get('results','VmslController@result_s')->name('results');

Route::get('notices','VmslController@notice_s')->name('notices');

Route::get('activitis','VmslController@activiti_s')->name('activitis');

Route::get('sports','VmslController@sport_s')->name('sports');

Route::get('arts','VmslController@art_s')->name('arts');

Route::get('musics','VmslController@music_s')->name('musics');

Route::get('founders','VmslController@founder_s')->name('founders');

Route::get('curriculams','VmslController@curriculam_s')->name('curriculams');

Route::get('careers','VmslController@career_s')->name('careers');

Route::get('adrequirements','VmslController@adrequirement_s')->name('adrequirements');

Route::get('logins','VmslController@login_s')->name('logins');

Route::post('submitadmissionrequest','VmslController@store_admission_request')->name('submit.admission.request');
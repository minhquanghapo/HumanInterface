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

Route::get('/', function () {
    return view('HI_03.index-2');
});


Route::get('/chat-box', function () {
    return view('HI_02.index');
});

Route::get('/video-call', function () {
    return view('HI_02.video-call');
})->name('video_call');

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@index');

	Route::resource('/users', 'UserController');
	Route::resource('/hospitals', 'HospitalController');
});

Route::get('lich-kham-benh-nhan', [
	'as' => 'lich-kham-benh-nhan',
	'uses'=>'PageControllerHI04@getPatientExaminationSchedule'
]);
Route::get('/doctor',"DoctorController@index");
Route::get('/doctor/examination',"DoctorController@examination");

// HI_03
Route::match(['get', 'post'],'/grid-list', function () {
    return view('HI_03.grid-list');
})->name('grid-list');

Route::get('/detail-page', function () {
    return view('HI_03.detail-page-3');
})->name('detail-page');

Route::get('/booking-page', function () {
    return view('HI_03.booking-page');
})->name('booking-page');

Route::get('/confirm', function () {
    return view('HI_03.confirm');
})->name('confirm');
// HI_03
//HI_06_{
Route::get('/admin_hospital', "HospitalAdminController@index");
Route::get('/admin_hospital/doctors', "HospitalAdminController@doctor_info");
Route::get('/admin_hospital/staffs', "HospitalAdminController@staff_info");
Route::get('/admin_hospital/edit', "HospitalAdminController@edit_info");
Route::get('/admin_hospital/staffs/edit', "HospitalAdminController@staff_edit");
Route::get('/admin_hospital/doctors/edit', "HospitalAdminController@doctor_edit");
Route::get('/admin_hospital/staffs/add', "HospitalAdminController@staff_add");
Route::get('/admin_hospital/doctors/add', "HospitalAdminController@doctor_add");
Route::get('/admin_hospital/comment', "HospitalAdminController@review_comment");
//}
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

Route::get('/booking-page-2', function () {
    return view('HI_02.booking-page');
})->name('booking-page-2');

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
	Route::get('/', 'AdminController@index');

	Route::resource('/users', 'UserController');
	Route::resource('/hospitals', 'HospitalController');
});

Route::get('lich-kham-benh-nhan', [
	'as' => 'lich-kham-benh-nhan',
	'uses'=>'PageControllerHI04@getPatientExaminationSchedule'
]);
Route::match(['get', 'post'],'/result', 'PageControllerHI04@getFormSearch')->name('result');

Route::get('/doctor',"DoctorController@index");
Route::get('/doctor1',"DoctorController@urgent");
Route::get('/doctor/examination',"DoctorController@examination");
Route::get('/doctor/login',"DoctorController@login");

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

Route::get('/receptionist/', "NewPatient@index");
Route::get('/receptionist/checkin', "NewPatient@checkin");

Route::get('/receptionist/checkout', "NewPatient@checkout");

Route::get('/receptionist/pay_for_test', "NewPatient@pay_for_test");
Route::get('media/{filename}', function ($filename) {
    $path = storage_path('app') . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//}

//}
//HI_02
Route::get('/admin_hospital/doctors/schedule', "HospitalAdminController@doctor_schedule");
Route::get('/admin_hospital/doctors/schedule/add', "HospitalAdminController@doctor_schedule_add");
Route::get('/admin_hospital/medicines', "HospitalAdminController@medicine_info");
Route::get('/admin_hospital/medicines/edit', "HospitalAdminController@medicine_edit");
Route::get('/admin_hospital/medicines/add', "HospitalAdminController@medicine_add");
//}

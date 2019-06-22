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


Route::get('/tra-cuu-benh', function () {
    return view('HI_02.tra_cuu_benh');
});

Route::get('/bai-viet', function () {
    return view('HI_02.bai-viet');
});

Route::get('/video-call', function () {
    return view('HI_02.video-call');
})->name('video_call');

Route::get('/voice-call', function () {
    return view('HI_02.voice_call');
})->name('voice_call');

Route::get('/booking-page-2', function () {
    return view('HI_02.booking-page');
})->name('booking-page-2');

Route::get('/hospital_list', function () {
    return view('HI_02.hospital_list');
})->name('HI02.hospital_list');

Route::get('/pick_schedule', function () {
    return view('HI_02.pick_schedule');
})->name('HI02.pick_schedule');

Route::get('/hospital_show', function () {
    return view('HI_02.hospital_show');
})->name('HI02.hospital_show');

Route::get('/detail-page-date', function () {
    $appointment_type = 'date';
    return view('HI_02.detail-page-3', compact('appointment_type'));
})->name('HI02.doctor.detail');

Route::get('/booking-page-hi02', function () {
    $appointment_type = 'date';
    return view('HI_02.booking-page', compact('appointment_type'));
})->name('HI02.booking');

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/system_setting', 'AdminController@system_setting');
    Route::get('/users/system_admin', 'UserController@system_admin');
    Route::get('/users/hospital_staff', 'UserController@hospital_staff');
    Route::get('/users/doctor', 'UserController@doctor');
    Route::get('/users/patient', 'UserController@patient');
	Route::resource('/users', 'UserController');
	Route::resource('/hospitals', 'HospitalController');
});

Route::get('lich-kham-benh-nhan', [
	'as' => 'lich-kham-benh-nhan',
	'uses'=>'PageControllerHI04@getPatientExaminationSchedule'
]);
Route::match(['get', 'post'],'/result', 'PageControllerHI04@getFormSearch')->name('result');

Route::get('/doctor',"DoctorController@index");
Route::get('/doctor/history',"DoctorController@history");
Route::get('/doctor1',"DoctorController@urgent");
Route::get('/doctor/examination',"DoctorController@examination");
Route::get('/doctor/login',"DoctorController@login");

// HI_03
Route::match(['get', 'post'],'/grid-list', function () {
    return view('HI_03.grid-list');
});

Route::get('/detail-page/{appointment_type}', function ($appointment_type) {
    return view('HI_03.detail-page-3', compact('appointment_type'));
})->name('doctor.detail');

Route::get('/booking-page/{appointment_type}', function ($appointment_type) {
    return view('HI_03.booking-page', compact('appointment_type'));
})->name('booking');

Route::get('/confirm', function () {
    return view('HI_03.confirm');
});

Route::get('/schedule', function () {
    return view('HI_03.pick_schedule');
});

Route::get('/hospital/list', function () {
    return view('HI_03.hospital.list');
});

Route::get('/hospital/show', function () {
    return view('HI_03.hospital.show');
});

Route::get('/faq', function() {
    return view('HI_03.faq');
});
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
// Nhóm 2
Route::get('/admin_hospital/urgent', "HospitalAdminController@urgent");
Route::get('/admin_hospital/urgent/add', "HospitalAdminController@urgent_add");
Route::get('/admin_hospital/urgent_sort', "HospitalAdminController@urgent_sort");
// end Nhóm 2
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
Route::get('/admin_hospital/services', "HospitalAdminController@service_info");
Route::get('/admin_hospital/services/edit', "HospitalAdminController@service_edit");
Route::get('/admin_hospital/services/add', "HospitalAdminController@service_add");

Route::get('/result1', "PageControllerHI04@notification");
//}
Route::get('/admin_hospital/static', "HospitalAdminController@static");

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalAdminController extends Controller
{
    public function index(){
        return view('HospitalAdmin.index');
    }

    public function doctor_info(){
        return view('HospitalAdmin.doctor_info');
    }

    public function staff_info(){
        return view('HospitalAdmin.staff_info');
    }

    public function edit_info(){
        return view('HospitalAdmin.hospital_info');
    }

    public function staff_edit() {
        return view('HospitalAdmin.staff_edit');
    }

    public function doctor_edit() {
        return view('HospitalAdmin.doctor_edit');
    }

    public function staff_add() {
        return view('HospitalAdmin.staff_add');
    }

    public function doctor_add() {
        return view('HospitalAdmin.doctor_add');
    }
    public function review_comment(){
        return view('HospitalAdmin.review_comment.index');
    }
    public function doctor_schedule() {
	return view('HospitalAdmin.doctor_schedule');
    }
    public function doctor_schedule_add() {
	return view('HospitalAdmin.doctor_schedule_add');
    }

    public function medicine_info() {
        return view('HospitalAdmin.medicine_info');
    }

    public function medicine_add() {
        return view('HospitalAdmin.medicine_add');
    }

    public function medicine_edit() {
        return view('HospitalAdmin.medicine_edit');
    }
    public function service_info() {
        return view('HospitalAdmin.service_info');
    }

    public function service_add() {
        return view('HospitalAdmin.service_add');
    }

    public function service_edit() {
        return view('HospitalAdmin.service_edit');
    }

// Nhóm 2
    public function urgent() {
        return view('HospitalAdmin.urgent');
    }
    public function urgent_add() {
        return view('HospitalAdmin.urgent_add');
    }
    public function urgent_sort() {
        return view('HospitalAdmin.urgent_sort');
    }
// end Nhóm 2
    public function static() {
        return view('HospitalAdmin.static');
    }

}

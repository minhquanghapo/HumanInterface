<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerHI04 extends Controller
{
    public function getPatientExaminationSchedule(){
        return view('LichKhamBenhNhan_HI_04/lichKhamCaNhan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerHI04 extends Controller
{
    public function getPatientExaminationSchedule(){
        return view('HI_03/HI_04-quan-li');
    }
}

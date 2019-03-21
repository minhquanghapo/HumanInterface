<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        return view('doctor.index');
    }

    public function examination(){
        return view('doctor.examination');
    }
}

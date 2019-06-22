<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DoctorController extends Controller
{
    public function index(){
        return view('doctor.index');
    }
    public function history(){
        return view('doctor.history');
    }
    // nhóm 2
    public function urgent(){
        return view('doctor.urgent');
    }
    // end nhóm 2
    public function examination(){
        return view('doctor.examination');
    }
    public function login(){
        return view('doctor.login');
    }
}
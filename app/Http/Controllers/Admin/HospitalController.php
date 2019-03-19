<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    public function index()
    {
        return view('admin.hospitals.index');
    }

    
    public function create()
    {
        return view ('admin.hospitals.create');        
    }

    public function edit($id)
    {
        return view ('admin.hospitals.edit');        
    }
}

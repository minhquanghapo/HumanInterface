<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function system_admin()
    {
        return view('admin.users.system_admin');
    }

    public function doctor()
    {
        return view('admin.users.doctor');        
    }

    public function patient()
    {
        return view('admin.users.patient');
    }

    public function hospital_staff()
    {
        return view('admin.users.hospital_staff');
    }

    public function create()
    {
        return view ('admin.users.create');        
    }

    public function show($id)
    {
        switch ($id) {
            case 'view_staff':
                return view ('admin.users.view_staff');
            case 'view_doctor':
                return view ('admin.users.view_doctor');
            case 'view_patient':
                return view ('admin.users.view_patient');
        }  
    }

    public function edit($id)
    {
        return view ('admin.users.edit_admin');
    }
}

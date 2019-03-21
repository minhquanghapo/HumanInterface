<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }


    public function create()
    {
        return view ('admin.users.create');        
    }

    public function show($id)
    {
        switch ($id) {
            case 'staff':
                return view ('admin.users.view_staff');
            case 'doctor':
                return view ('admin.users.view_doctor');
            case 'patient':
                return view ('admin.users.view_patient');
        }  
    }

    public function edit($id)
    {
        return view ('admin.users.edit_admin');
    }
}

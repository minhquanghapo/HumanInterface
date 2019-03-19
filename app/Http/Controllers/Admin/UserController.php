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

    public function edit($id)
    {
        switch ($id) {
            case 'admin':
                return view ('admin.users.edit_admin');
            case 'staff':
                return view ('admin.users.edit_staff');
            case 'doctor':
                return view ('admin.users.edit_doctor');
            case 'patient':
                return view ('admin.users.edit_patient');
            default:
                return view ('admin.users.edit_admin');   
        }  
    }
}

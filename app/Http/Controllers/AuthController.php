<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register_doctor(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'specialization' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
        $doctor_profile = new User;
        $doctor_profile->firstname = $request['firstname'];
        $doctor_profile->lastname = $request['lastname'];
        $doctor_profile->middlename = $request['middlename'];
        $doctor_profile->address = $request['address'];
        $doctor_profile->phone_number = $request['phone_number'];
        $doctor_profile->email = $request['email'];
        $doctor_profile->specialization = $request['specialization'];
        $doctor_profile->role = $request['role'];
        $doctor_profile->password = $request['password'];
        
        if($doctor_profile){
            return back()->with('success', 'New doctor successfully added');
        }
   
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientsController extends Controller
{
    public function login(Request $request){
          $patientinput = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
          ]);
         if(Auth::guard('web')->attempt(['email' => $patientinput['email'], 'password' => $patientinput['password']])){
              return view('patientPage/dashboard');
         }
         else{
            return back()->with('fail', 'Incorrect Credentials, Please Try Again');
         }
          
        }
}

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
          $patient = patient::with('profile')->find(auth()->user()->id);
         if(Auth::guard('web')->attempt(['email' => $patientinput['email'], 'password' => $patientinput['password']])){
          $request->session()->regenerate();
              return view('patientPage/dashboard', ['profile' => $patient->profile]);
         }
         else{
            return back()->with('fail', 'Incorrect Credentials, Please Try Again');
         }
          
        }
}

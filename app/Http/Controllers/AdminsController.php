<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\patient_medical_profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class AdminsController extends Controller
{
    public function register_patient(Request $request)
    {
        $request->validate([
           'fullname'=>'required',
           'date_of_birth'=>'required',
           'email' => ['required', 'email', Rule::unique('patients', 'email')],
            'address' => 'required',
            'phone_number' => 'required',
            'sex' => 'required',
            'marital_status'=>'required',
            'next_of_kin'=>'required',
            'next_of_kin_number'=>'required',
            'next_of_kin_address'=>'required',
            'password' => 'required|min:8|max:15',
            'hereditary' =>'required',
            'genotype' =>'required',
            'blood_type' => 'required',
            'height' => 'required',
            'weight' =>'required',
            'allergy'=>'required'
        ]);
    
            $pateint = new patient;
            $pateint->fullname = $request['fullname'];
            $pateint->date_of_birth = $request['date_of_birth'];
            $pateint->age = Carbon::parse($request['date_of_birth'])->age;
            $pateint->email = $request['email'];
            $pateint->address = $request['address'];
            $pateint->phone_number = $request['phone_number'];
            $pateint->sex = $request['sex'];
            $pateint->marital_status = $request['marital_status'];
            $pateint->next_of_kin = $request['next_of_kin'];
            $pateint->next_of_kin_number = $request['next_of_kin'];
            $pateint->next_of_kin_address = $request['next_of_kin'];
            $pateint->password = bcrypt($request['password']);
           
            $patientid =random_int(11111, 99999);
            $pateint->patient_id = $patientid;
           $pateint->save();
             
           $patientMed = new patient_medical_profile;
           $patientMed->fullname = $request['fullname'];
           $patientMed->patient_id = $patientid;
           $patientMed->genotype = $request['genotype'];
           $patientMed->blood_group = $request['blood_type'];
           $patientMed->hereditary = $request['hereditary'];
           $patientMed->height = $request['height'];
           $patientMed->weight = $request['weight'];
           $patientMed->allergies = $request['allergy'];
          $patientMed->save();
        // $patient_informaton['password'] = bcrypt($patient_informaton['password']);
        // $patient_informaton['age'] = Carbon::parse($patient_informaton['date_of_birth'])->age;
        // $Patient = patient::create($patient_informaton);
        // $patientMed = patient_medical_profile::create($patient_medical_informaton);
        if ($pateint) {
            return back()->with('success', 'Patient have been sucessfully registered');
        }else{
            return back()->with('fail', 'Patient failed');
        }

        
    }

    public function view_patients(){
       $patients = patient::latest()->get();
       return view('/superAdmin/patients')->with(compact('patients'));
    }
public function view_patients_profile(patient $profile)
{
    $patient = patient::with('profile')->find($profile->id);

    if ($patient) {
        return view('superAdmin/patient_profile', ['profile' => $patient->profile], ['pro' =>$patient]);
    } else {
        // Patient not found
        return back()->with('error', 'Patient not found.');
    }
}


}

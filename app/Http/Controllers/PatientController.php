<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patient_data = Patient::all();
        return view('patient.register', compact('patient_data'));
    }

    public function add_patient(Request $request)
    {
        try{
            $request->validate([
                'f_name' => 'required',
                'l_name' => 'required',
                'phone' => 'required',
                'address' => 'required'
            ]);

            $patient = new Patient;

            $patient->f_name = $request->f_name;
            $patient->l_name = $request->l_name;
            $patient->phone = $request->phone;
            $patient->address = $request->address;

            if($patient->save())
            {
                return redirect('patient_register')->withSuccess('Patient successfully Added');
            }else{
                return back();
            }

        }catch(Exception $e)
        {
            return back();
        }
    }
}

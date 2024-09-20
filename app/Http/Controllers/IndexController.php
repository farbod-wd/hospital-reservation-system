<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turn;
use Hekmatinasser\Verta\Verta;

class IndexController extends Controller
{
    public function index()
    {
        return view('reservation-form');
    }



    public function storage(Request $request)
    {
        Turn::query()->create([
            'patient_name'=>$request->input('patient_name'),
            'doctor_name'=>$request->input('doctor_name'),
            'patient_age'=>$request->input('patient_age'),
            'is_precedent'=>$request->input('is_precedent') === 'on',
            'type_sick'=>$request->input('type_sick'),
           'date'=>($request->input('date') !==null ? Verta::parse($request->input('date'))->datetime() : now()),
        ]);

        return redirect('/sms')->with('message' , 'نوبت گرفته شد');
    }


}

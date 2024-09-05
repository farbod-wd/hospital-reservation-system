<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "لیست بیماران";
        return view("admin.patients.list" , compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "افزودن بیمار";
        $patients = Patient::query()->get();
        return view("admin.patients.create" , compact(['title' , 'patients']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Patient::query()->create([
            'name'=>$request->input('name'),
            'code_meli'=>$request->input('code_meli'),
            'is_precedent'=>$request->input('is_precedent'),
             'type_sick'=>$request->input('type_sick'),
             'age'=>$request->input('age'),
            'phone'=>$request->input('phone'),
        ]);

        return redirect(route('paitients.index'))->with('message' , 'اطلاعات بیمار ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $patient = Patient::query()->find($id);
        return view('admin.patients.edit' , compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $paitient = Patient::query()->find($id);
        $paitient->update([
            'name'=>$request->input('name'),
            'code_meli'=>$request->input('code_meli'),
            'is_precedent'=>$request->input('is_precedent'),
             'type_sick'=>$request->input('type_sick'),
             'age'=>$request->input('age'),
            'phone'=>$request->input('phone'),
        ]);

        return redirect(route('paitients.index'))->with('message' , 'اطلاعات بیمار ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

   
}

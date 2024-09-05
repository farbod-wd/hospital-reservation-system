<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "لیست متخصصان";
        return view('admin.doctors.list' , compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "افزودن به لیست متخصصان";
        $patients = Patient::query()->pluck('name' , 'id');
        return view('admin.doctors.create' , compact('title' , 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Doctor::query()->create([
            'patient_id'=>$request->input('patient_id'),
            'name'=>$request->input('name'),
            'special_field'=>$request->input('special_field'),
        ]);

        return redirect(route('doctors.index'));
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
        $title = "ویرایش مشخصات دکتران";
      $doctor = Doctor::query()->find($id);
      $patients = Patient::query()->pluck('name' , 'id');
        return view('admin.doctors.edit' , compact('doctor' , 'patients' , 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Doctor::query()->find($id)->update([
            'patient_id'=>$request->input('patient_id'),
            'name'=>$request->input('name'),
            'special_field'=>$request->input('special_field'),
        ]);

        return redirect(route('doctors.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return back()->with('message' , 'حذف با موفقیت انجام شد');
    }
}

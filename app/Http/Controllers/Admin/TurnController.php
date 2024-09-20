<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use App\Models\Turn;
use App\Models\Doctor;


class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "لیست نوبتی ها";
        $turns = Turn::orderBy('id' , 'ASC')->paginate(4);
        return view("admin.turns.list" , compact(['title' , 'turns']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = " اضافه کردن نوبت جدید";
        return view("admin.turns.create" , compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Turn::query()->create([
            'patient_name'=>$request->input('patient_name'),
            'doctor_name'=>$request->input('doctor_name'),
            'patient_age'=>$request->input('patient_age'),
             'is_precident'=>$request->input('is_precident')=== 'on',
             'type_sick'=>$request->input('type_sick'),
             'date'=>($request->input('date') !==null ? Verta::parse($request->input('date'))->datetime() : now()),
        ]);

        return redirect(route('turns.index'))->with('message' , 'نوبت توسط مدیر ثبت شد');
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
    public function edit(Turn $turn)
    {
        return view("admin.turns.edit" , compact('turn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Turn $turn)
    {
       $turn->update([
            'patient_name'=>$request->input('patient_name'),
            'doctor_name'=>$request->input('doctor_name'),
            'patient_age'=>$request->input('patient_age'),
            'is_precedent'=>$request->input('is_precedent') === 'on',
            'date'=>($request->input('date') !==null ? Verta::parse($request->input('date'))->datetime() : now()),
        ]);

        return redirect(route('turns.index'))->with('message' , 'نوبت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Turn $turn)
    {
        $turn->delete();
        return redirect()->back()->with('message' , 'حذف انجام شد');
    }
}

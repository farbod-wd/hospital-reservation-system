@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            <h6 class="card-title">ویرایش اطلاعات بیمار</h6>
            <form method="post" action="{{route('paitients.update' , $patient->id)}}">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">نام بیمار</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="name" value="{{$patient->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">سن بیمار</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control text-left" dir="rtl" name="age" value="{{$patient->age}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">کد ملی </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="code_meli" value="{{$patient->code_meli}}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">شماره موبایل</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="phone" value="{{$patient->phone}}">
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-success btn-uppercase">
                        <i class="ti-check-box m-r-5"></i> ویرایش
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

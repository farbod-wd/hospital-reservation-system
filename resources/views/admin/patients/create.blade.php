@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            <h6 class="card-title text-center">اضافه کردن اطلاعات بیمار</h6>
            <form method="post" action="{{route('paitients.store')}}">
                @csrf
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">نام بیمار</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left" dir="rtl" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-center">سن</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control text-left" dir="rtl" name="age">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-center">کد ملی </label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left" dir="rtl" name="code_meli" >
                    </div>
                </div>
                <div class="form-group row" data-select2-id="23">
                    <label class="col-sm-3 text-center">سابقه بیماری</label>
                    <div class="col-sm-7">
                        <select class="form-select w-100" name="is_precedent" data-select2-id="2" tabindex="-1" aria-hidden="true">       
                            <option selected>ندارد</option>
                            <option selected>دارد</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row" data-select2-id="23">
                    <label class="col-sm-3 text-center">نوع بیماری</label>
                    <div class="col-sm-7">
                        <select class="form-select w-100" name="type_sick" data-select2-id="2" tabindex="-1" aria-hidden="true">       
                            <option selected>قلبی</option>
                            <option selected>مغزی</option>
                            <option selected>پوستی</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">شماره موبایل</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left" dir="rtl" name="phone">
                    </div>
                </div>
                <div class="form-group row">
                    <button  type="submit" class="btn btn-success btn-uppercase">
                        <i class="ti-check-box m-r-5"></i> ذخیره
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

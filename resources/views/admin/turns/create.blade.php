@extends('admin.layouts.master')
@section('content')
    <div class="container form col-lg-7 rounded-4">
        <h3 class="py-3 text-center">رزرو نوبت بیمار</h3>
            @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-info">
                <div>{{ session('message') }}</div>
            </div>
        @endif
        <form method="POST" action="{{route('turns.store')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">نام بیمار</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="patient_name"   onkeypress ="getMessage()"  id="name"  required>
                <div id="Name" class="form-text text-danger">این فیلد الزامی است</div>         
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">نام متخصص</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="doctor_name" onkeypress="GetText()" id="dname"  required>
                <div id="dName" class="form-text text-danger">این فیلد الزامی است</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">سن بیمار</label>
                <input type="number" class="form-control"  onchange="GetText()" min="1"
                    name="patient_age" id="agefield"  required>
                    <div id="patient_age" class="form-text text-danger">این فیلد الزامی است</div>
            </div>
            <div class="form-group row">
                <label class="col-sm-4 text-center">دارای سابقه بیماری </label>
                <div class="col-sm-8">
                         <input type="checkbox" class="form-check-input" id="isprecedent" onclick="check()" name="is_precident">
                </div>
            </div>
            <div class="mb-3 d-none" id="sickness">
                <label for="sickness" class="form-label">نوع بیماری</label>
                <input type="text" class="form-control" name="type_sick">
                <div id="precident" class="form-text text-danger">این فیلد برای 50 سال به بالا الزامی است</div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label"> تاریخ نوبت </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" id="date" class="text-left form-control" dir="rtl" name="date">
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">
                     ثبت
                </button>
            </div>
        </form>

    </div>
@endsection
@section('date')
    <script>
        var customOptions = {
            placeholder: "روز / ماه / سال",
            twodigit: false,
            closeAfterSelect: true,
            nextButtonIcon: "fa fa-arrow-circle-right",
            previousButtonIcon: "fa fa-arrow-circle-left",
            buttonsColor: "#5867dd",
            markToday: true,
            markHolidays: true,
            highlightSelectedDay: true,
            sync: true,
            gotoToday: false
        }
        kamaDatepicker('date', customOptions);
    </script>
@endsection

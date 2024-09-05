@extends('layouts.app')
@section('content')
    <div class="container form col-lg-7 rounded-4">
        <h3 class="py-3 text-center">ویرایش نوبت بیمار</h3>
            @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-info">
                <div>{{ session('message') }}</div>
            </div>
        @endif
        <form method="POST" action="{{route('turns.update' , $turn->id)}}">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">نام بیمار</label>
                <input type="text" class="form-control"  aria-describedby="emailHelp" name="patient_name" value="{{$turn->patient_name}}" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">نام متخصص</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="doctor_name" value="{{$turn->doctor_name}}" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">سن بیمار</label>
                <input type="number" class="form-control"  min="1"
                    name="patient_age"  value="{{$turn->patient_age}}" required>
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label">دارای سابقه بیماری</label>
                <input type="checkbox" class="form-check-input" @if($turn->isprecedent) checked @endif  id="isprecedent">
            </div>
            <div class="mb-3 d-none" id="sickness">
                <label for="sickness" class="form-label">نوع بیماری</label>
                <input type="text" class="form-control" name="type_sick" value="{{$turn->type_sick}}">
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label"> تاریخ نوبت </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" id="days" class="text-left form-control" dir="rtl" name="days">
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">
                    مرحله بعد
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
        kamaDatepicker('days', customOptions);
    </script>
@endsection

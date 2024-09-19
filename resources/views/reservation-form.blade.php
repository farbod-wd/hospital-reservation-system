@extends('layouts.app')
@section('content')
    <div class="container form col-lg-7 rounded-4">
        <h3 class="py-3 text-center">رزرو نوبت بیمار</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center my-4">
                <li class="breadcrumb-item active"><a href="/">ثبت اطلاعات بیمار</a></li>
                <li class="breadcrumb-item"><a href="#">تایید شماره همراه</a></li>
                <li class="breadcrumb-item"><a href="#">رزرو نوبت</a></li>
            </ol>
        </nav>
        @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-info">
                <div>{{ session('message') }}</div>
            </div>
        @endif
        <form method="POST" action="{{ route('step2.storage') }}">
            @csrf
            <div class="mb-3">

                <label for="name" class="form-label">نام بیمار</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                    onkeypress ="getMessage()" name="patient_name" required>
                <div id="Name" class="form-text text-danger">این فیلد الزامی است</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">نام متخصص</label>
                <input type="text" class="form-control" id="dname" aria-describedby="emailHelp" name="doctor_name"
                    onkeypress="GetText()" required>
                <div id="dName" class="form-text text-danger">این فیلد الزامی است</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">سن بیمار</label>
                <input type="number" class="form-control" id="agefield" onchange="GetText()" min="1"
                    name="patient_age">
                <div id="patient_age" class="form-text text-danger">این فیلد الزامی است</div>
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label">دارای سابقه بیماری</label>
                <input type="checkbox" class="form-check-input" id="isprecedent" onclick="check()">
            </div>
            <div class="mb-3 d-none" id="sickness">
                <label for="sickness" class="form-label">نوع بیماری</label>
                <input type="text" class="form-control" name="type_sick" id="type_sick" onkeypress="sickDisplay()">
                <div id="precident" class="form-text text-danger" >این فیلد برای 50 سال به بالا الزامی است</div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label"> تاریخ نوبت </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" id="date" class="text-left form-control" dir="rtl" name="date">
                </div>
            </div>
            {{-- <div class="form-check form-check-inline mt-3">
                <label for="">چهارشنبه</label>
                <input class="form-check-input rounded-3" type="checkbox" id="inlineCheckbox1" value="option1" checked />
            </div> --}}
            {{-- <div class="form-check form-check-inline">
                <label for="">سه شنبه</label>
                <input class="form-check-input rounded-3" type="checkbox" id="inlineCheckbox2" value="option2" />
            </div>
            <div class="form-check form-check-inline">
                <label for="">دوشنبه</label>
                <input class="form-check-input rounded-3" type="checkbox" id="inlineCheckbox2" value="option2" checked />
            </div>
            <div class="form-check form-check-inline">
                <label for="">یک شنبه</label>
                <input class="form-check-input rounded-3" type="checkbox" id="inlineCheckbox2" value="option2" />
            </div>
            <div class="form-check form-check-inline">
                <label for="">شنبه</label>
                <input class="form-check-input rounded-3" type="checkbox" id="inlineCheckbox2" value="option2" checked />
            </div> --}}

            <div class="mt-3">
                <button class="btn btn-primary" type="submit">
                    مرحله بعد
                </button>
            </div>
        </form>

    </div>
@endsection

@section('scripts')
    <script>
        function sickDisplay(){
            const precident = document.getElementById('precident');
            const type_sick = document.getElementById('type_sick');
    
            if (type_sick == "") {
                document.getElementById('precident').classList.add('text-danger')
            }
    
            else
            {
                 document.getElementById('precident').style.display = "none"
            }
        }
    </script>
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

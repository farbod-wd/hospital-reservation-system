@extends('layouts.app')
@section('content')
    <script>
        window.onload = function(){
            Swal.fire({
                text: "رزرو نوبت شما با موفقیت انجام شد",
                icon: "success"
            });
        }
    </script>

<div class="container form col-lg-7 rounded-4">
    <h3 class="py-3 text-center">رزرو نوبت بیمار</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center my-4">
            <li class="breadcrumb-item active"><a href="/">ثبت اطلاعات بیمار</a></li>
            @if (Route::has('sms'))
            <li class="breadcrumb-item active"><a href="/sms">تایید شماره همراه</a></li>
            @else
            <li class="breadcrumb-item "><a>تایید شماره همراه</a></li>
            @endif
            @if (Route::has('payment'))
            <li class="breadcrumb-item active"><a href="/sms">پرداخت</a></li>
            @else
            <li class="breadcrumb-item "><a>پرداخت</a></li>
            @endif
        </ol>
    </nav>
@endsection

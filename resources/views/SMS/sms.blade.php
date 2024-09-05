@extends('layouts.app')
@section('content')
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
                <li class="breadcrumb-item"><a href="#">رزرو نوبت</a></li>
            </ol>
        </nav>
        @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-success">
                <div>{{ session('message') }}</div>
            </div>
        @endif
        <form method="POST" action="{{ route('send.sms') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">شماره همراه</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mt-3 text-start">
                <button class="btn btn-success" type="submit">
                    مرحله بعد
                </button>
            </div>
        </form>

    </div>
@endsection

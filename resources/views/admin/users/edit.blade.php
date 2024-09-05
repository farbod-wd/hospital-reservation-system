@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>               
            @endif
            <h6 class="card-title"> ویرایش کاربر </h6>
            <form method="post" action="{{route('users.update' , $user->id)}}">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">نام کاربر </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="name" value="{{$user->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">نام کاربری </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="username" value="{{$user->username}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">ایمیل</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="email" value="{{$user->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">شماره موبایل</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="phone" value="{{$user->phone}}">
                    </div>
                </div>
            
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">پسورد</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="password">
                    </div>
                </div>
            
                <div class="form-group row">
                    <button type="submit" class="btn btn-success btn-uppercase">
                        <i class="ti-check-box m-r-5"></i> ذخیره
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

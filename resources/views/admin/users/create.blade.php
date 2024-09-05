@extends('admin.layouts.master')
@section('content')
<main class="main-content">
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h6 class="card-title">ایجاد کاربر</h6>
                    @if (Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-info">
                            <div>{{session('message')}}</div>
                        </div>
                    @endif
                <form method="post" action="{{route('users.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">نام </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">نام کاربری </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">موبایل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" name="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ایمیل</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control text-left" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">پسورد</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control text-left"  name="password">
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
</main>

@endsection
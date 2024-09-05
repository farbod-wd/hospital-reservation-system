@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            <h6 class="card-title"> اضافه کردن نقش </h6>
            @if (Illuminate\Support\Facades\Session::has('message'))
            <div class="alert alert-info">
                {{session('message')}}
            </div>               
            @endif
            <form method="post" action="{{route('roles.store')}}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> نوع نقش</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <button type="submit" class="btn btn-success btn-uppercase">
                        <i class="ti-check-box mr-5"></i> ذخیره
                    </button>
                  
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

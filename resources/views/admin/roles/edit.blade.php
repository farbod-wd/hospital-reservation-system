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
            <h6 class="card-title"> ویرایش نقش </h6>
            <form method="post" action="{{route('roles.update' , $role->id)}}">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"> نوع نقش </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control text-left" dir="rtl" name="name" value="{{$role->name}}">
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

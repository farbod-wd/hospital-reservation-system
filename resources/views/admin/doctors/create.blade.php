@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            <h6 class="card-title">اضافه کردن اطلاعات دکتر</h6>
            <form method="post" action="{{route('doctors.store')}}">
                @csrf
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">نام متخصص</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left"  name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">فیلد تخصص</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left"  name="special_field">
                    </div>
                </div>
                <div class="form-group row" data-select2-id="23">
                    <label class="col-sm-2 col-form-label">نام بیمار</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="patient_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($patients as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
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

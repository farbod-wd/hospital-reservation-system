@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="container">
            <h6 class="card-title">ویرایش اطلاعات متخصص</h6>
            <form method="post" action="{{route('doctors.store' , $doctor->id)}}">
                @csrf
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">نام متخصص</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left" dir="rtl" name="name" value="{{$doctor->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-center">فیلد تخصص</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control text-left" dir="rtl" name="special_field" value="{{$doctor->special_field}}">
                    </div>
                </div>
                <div class="form-group row" data-select2-id="23">
                    <label class="col-sm-2 col-form-label">نام بیمار</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="patient_id" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            @foreach($patients as $key => $value)
                                @if($doctor->patient_id == $key)
                                    <option selected value="{{$key}}">{{$value}}</option>
                                    @else
                                    <option value="{{$key}}">{{$value}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-uppercase">
                        <i class="ti-check-box m-r-5"></i> ویرایش
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $('.form-select').select2();
</script>
@endsection

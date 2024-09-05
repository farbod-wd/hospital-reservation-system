@extends('admin.layouts.master')
@section('content')  
<div class="card">
    <div class="card-body">
        <div class="table overflow-auto" tabindex="8">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-left" dir="rtl">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                <tr>
                    <th class="text-center align-middle text-primary" style="width: 20%;">ردیف</th>
                    <th class="text-center align-middle text-primary">نام بیمار </th>
                    <th class="text-center align-middle text-primary"> نام دکتر</th>
                    <th class="text-center align-middle text-primary">سن بیمار</th>
                    <th class="text-center align-middle text-primary">نوع بیماری</th>
                    <th class="text-center align-middle text-primary">سابقه بیماری</th>
                    <th class="text-center align-middle text-primary">زمان نوبت</th>
                    <th class="text-center align-middle text-primary">ویرایش</th>
                    <th class="text-center align-middle text-primary">حذف</th>
                    <th class="text-center align-middle text-primary">تاریخ ثبت</th>
                </tr>
                </thead>
                <tbody>  
                    @foreach ($turns as $turn)     
                    <tr>
                        <td class="text-center align-middle">{{$turn->id}}</td>
                        <td class="text-center align-middle">{{$turn->patient_name}}</td>
                        <td class="text-center align-middle">{{$turn->doctor_name}}</td>
                        <td class="text-center align-middle">{{$turn->patient_age}}</td>
                        <td class="text-center align-middle">{{$turn->type_sick ? $turn->type_sick : 'ندارد' }}</td>
                            @switch($turn->is_precident)
                           @case(0)
                               <td class="text-center align-middle">ندارد</td>
                           @break

                           @case(1)
                               <td class="text-center align-middle">دارد</td>
                           @break

                           @default
                       @endswitch
                        <td class="text-center align-middle">{{$turn->date}}</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="{{route('turns.edit' , $turn->id)}}">
                                ویرایش
                            </a>
                        </td>
                        <td class="text-center align-middle">
                        <form action="{{ route('turns.destroy',$turn->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger"
                                onclick="return confirm('آیا میخواهید حذف شود؟')">حذف</button>
                        </form>
                        </td>
                        <td class="text-center align-middle">{{\Hekmatinasser\Verta\Verta::instance($turn->created_at)->format('%B %d، %Y')}}</td>
                    </tr>
                    @endforeach               
            </table>
            <div style="margin: 40px !important;"
                 class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                 {{$turns->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

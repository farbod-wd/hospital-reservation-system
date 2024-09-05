<div class="card">
    <div class="card-body">
        <div class="table overflow-auto" tabindex="8">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                <tr>
                    <th class="text-center align-middle text-primary" style="width: 15%;">ردیف</th>
                    <th class="text-center align-middle text-primary">نام بیمار </th>
                    <th class="text-center align-middle text-primary"> کدملی</th>
                    <th class="text-center align-middle text-primary"> تلفن همراه </th>
                    <th class="text-center align-middle text-primary">ویرایش</th>
                    <th class="text-center align-middle text-primary">حذف</th>
                    <th class="text-center align-middle text-primary">تاریخ ثبت</th>
                </tr>
                </thead>
                <tbody>  
                    @foreach ($paitients as $index => $paitient)     
                    <tr>
                        <td class="text-center align-middle">{{$paitients->firstItem() + $index}}</td>
                        <td class="text-center align-middle">{{$paitient->name}}</td>
                        <td class="text-center align-middle">{{$paitient->code_meli}}</td>
                        <td class="text-center align-middle">{{$paitient->phone}}</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="{{route('paitients.edit' , $paitient->id)}}">
                                ویرایش
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-danger" href="{{route('paitients.destroy' , $paitient->id)}}">
                                حذف
                            </a>
                        </td>
                        <td class="text-center align-middle">{{\Hekmatinasser\Verta\Verta::instance($paitient->created_at)->format('%B %d، %Y')}}</td>
                    </tr>
                    @endforeach               
            </table>
            <div style="margin: 40px !important;"
                 class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                 {{$paitients->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>
</div>
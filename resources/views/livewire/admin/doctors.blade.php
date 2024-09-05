<div class="card">
    <div class="card-body">
        <div class="table overflow-auto" tabindex="8">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">عنوان جستجو</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-left" dir="rtl" wire:model="search">
                </div>
            </div>
            <table class="table table-striped table-hover" >
                <thead class="thead-light">
                <tr>
                    <th class="text-center align-middle text-primary" style="width:15%;">ردیف</th>
                    <th class="text-center align-middle text-primary">نام متخصص </th>
                    <th class="text-center align-middle text-primary">نام بیمار </th>
                    <th class="text-center align-middle text-primary">فیلد تخصص </th>
                    <th class="text-center align-middle text-primary">ویرایش</th>
                    <th class="text-center align-middle text-primary">حذف</th>
                    <th class="text-center align-middle text-primary">تاریخ ثبت</th>
                </tr>
                </thead>
                <tbody>  
                    @foreach ($doctors as $index => $doctor)     
                    <tr>
                        <td class="text-center align-middle">{{$doctors->firstItem() + $index}}</td>
                        <td class="text-center align-middle">{{$doctor->name}}</td>   
                        @if ($doctor->patient)
                        <td class="text-center align-middle">
                            {{$doctor->patient->name}}
                        </td>
                        @else
                        <td class="text-center align-middle">
                              بیماری ثبت نشده
                        </td>
                        @endif
                        <td class="text-center align-middle">{{$doctor->special_field}}</td>
                        <td class="text-center align-middle">
                            <a class="btn btn-outline-info" href="{{route('doctors.edit' , $doctor->id)}}">
                                ویرایش
                            </a>
                        </td>
                        <td class="text-center align-middle">
                            <form action="{{ route('doctors.destroy',$doctor->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger"
                                    onclick="return confirm('آیا میخواهید حذف شود؟')">حذف</button>
                            </form>
                            </td>
                        <td class="text-center align-middle">{{\Hekmatinasser\Verta\Verta::instance($doctor->created_at)->format('%B %d، %Y')}}</td>
                    </tr>
                    @endforeach               
            </table>
            <div style="margin: 40px !important;"
                 class="pagination pagination-rounded pagination-sm d-flex justify-content-center">
                 {{$doctors->appends(Request::except('page'))->links()}}
            </div>
        </div>
    </div>
</div>
@extends('admin.layouts.master')
@section('content')
    <main class="main-content">
        <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <img src="" alt="" class="logo images">
                    <img src="" alt="" class="logo-thumb images">
                </a>
            </div>
            <a class="mobile-menu" id="mobile-header" href="#!">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </header>
        <!-- [ Header ] end -->

        <!-- [ Main Content ] start -->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="row">
                                <div class="page-wrapper ">
                                    <!-- [ Main Content ] start -->
                                    <div class="d-flex">
                                        <div class="col-md-6 col-lg-6 ms-auto mb-3">
                                            <a href="{{ route('doctors.index') }}"
                                                class="text-primary text-decoration-none">
                                                مشاهده متخصصین
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                            <img src="{{ url('panel/assets/media/image/doctors.jpg') }}" alt=""
                                                width="300">

                                        </div>
                                        <div class="col-xl-5 col-md-6 me-auto mb-3">
                                            <a href="{{ route('paitients.index') }}"
                                                class="text-primary text-decoration-none">
                                                مشاهده بیماران
                                                <i class="fa fa-search-plus"></i>
                                            </a>
                                            <img src="{{ url('panel/assets/media/image/patients.jpg') }}" alt=""
                                                width="300">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <!-- sessions-section start -->
                                        <div class="col-md-6 col-xl-4 ">
                                            <div class="card table-card">
                                                <div class="card-header text-center">
                                                    <h5>نوبت های ثبت شده تا کنون</h5>
                                                    <div class="main-search d-flex">
                                                        <div class="input-group justify-content-center">
                                                            <input type="text" id="search" placeholder="پیدا کنید .."
                                                                size="33" name="search" class="text-center">
                                                            <button class="btn btn-primary">
                                                                <i class="fa fa-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-0 py-0">
                                                    <div class="table-responsive">
                                                        <div class="session-scroll" style="height:478px;position:relative;">
                                                            <table class="table table-hover m-b-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>شماره</th>
                                                                        <th>
                                                                            نام بیمار
                                                                        </th>
                                                                        <th>
                                                                            نام متخصص
                                                                        </th>
                                                                        <th>
                                                                            سن بیمار
                                                                        </th>
                                                                        <th>
                                                                            تاریخ رزرو
                                                                        </th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($turns as $turn)
                                                                        <tr>
                                                                            <td>{{ $turn->id }}</td>
                                                                            <td>{{ $turn->patient_name }}</td>
                                                                            <td>{{ $turn->doctor_name }}</td>
                                                                            <td>{{ $turn->patient_age }}</td>
                                                                            <td>{{ $turn->date }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- sessions-section end -->
                                        @hasrole('Web Developer')
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5 class="text-center">Profile</h5>
                                                    </div>
                                                    @foreach ($users as $user)
                                                    <div class="card-body text-center">
                                                        <div class="usre-image">
                                                            <img src="{{ asset('panel/assets/media/image/avatar.jpg') }}"
                                                                class="img-radius wid-100 m-auto" alt="User-Profile-Image">
                                                        </div>
                                                        <h6 class="f-w-600 m-t-25 m-b-10">{{ $user->name }}</h6>
                                                        <p class="m-t-15">{{ $user->email }}</p>
                                                        <div class="bg-primary counter-block m-t-10 p-20">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <h6 class="text-info mt-2 mb-0">username
                                                                        {{ $user->username }}</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <h6 class="text-info mt-2 mb-0">شماره تماس
                                                                        {{ $user->phone }}</h6>
                                                                </div>
                                                                <div class="col-4">
                                                                    <h6 class="text-text-light mt-2 mb-0">Github</h6>
                                                                    <a href="">
                                                                        <i class="fa fa-github text-info fs-5 Github "></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <hr>
                                                        @foreach ($roles as $role)
                                                            <p class="text-black fw-bold"> {{ $role->name }}</p>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        @endhasrole
                                    </div>
                                </div>

                                <!-- [ Main Content ] end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

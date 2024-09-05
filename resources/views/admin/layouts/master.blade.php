<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> پنل ادمین نوبت دهی </title>
    <link rel="shortcut icon" href="assets/media/image/favicon.png">
    <meta name="theme-color" content="#5867dd">
    @livewireStyles
    <link rel="stylesheet" href="{{ url('panel/vendors/bundle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('panel/vendors/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('panel/vendors/select2/Css/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('panel/vendors/select2/Css/select2.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('panel/plugins/datepicker/kamadatepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('panel/assets/Css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('panel/vendors/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('panel/vendors/vmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ url('panel/assets/css/app.css') }}" type="text/css">
  
</head>

<body class="small-navigation">

    @include('admin.layouts.navigation', [($title = $title ?? '')])
    @yield('content')
    @livewireScripts
    @include('sweetalert::alert')
    <script src="{{ url('panel/vendors/bundle.js') }}"></script>
    <script src="{{ url('panel/plugins/datepicker/kamadatepicker.min.js') }}"></script>
    <script src="{{ url('panel/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('panel/vendors/slick/slick.min.js') }}"></script>
    <script src="{{ url('panel/vendors/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('panel/assets/js/app.js') }}"></script>
    <script src="{{ url('panel/assets/Js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
    <script>
        function getMessage() {
            const name = document.getElementById('name').value;

            if (name != "") {
                document.getElementById('Name').classList.remove('text-danger')
            } else {
                document.getElementById('Name').classList.add('text-danger')
            }
        }

        function GetText() {
            const age = document.getElementById('agefield').value;
            const doctor_name = document.getElementById('dname').value;

            if (age != "") {
                document.getElementById('patient_age').classList.remove('text-danger')
            } else if (doctor_name != "") {
                document.getElementById('dName').classList.remove('text-danger')
            } else {
                document.getElementById('dName').classList.add('text-danger')
            }
        }


        function check() {
            const isPrecident = document.getElementById('isprecedent');
            const dive = document.getElementById('sickness');


            if (isPrecident.checked == true) {
                dive.classList.remove('d-none')
                dive.classList.add('d-block')
            } else {
                dive.classList.remove('d-block')
                dive.classList.add('d-none')
            }

        }
    </script>
    @yield('scripts')
    @yield('date')
</body>

</html>

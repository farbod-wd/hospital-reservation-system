<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> سامانه نوبت دهی آنلاین</title>
    <meta name="theme-color">
    <link rel="stylesheet" href="{{ url('assets/Css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/Css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{url('vendors/select2/css/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('plugins/datepicker/kamadatepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/plugins/sweet_alert/sweetalert2.all.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/Css/all.min.css') }}">
</head>

<body class="small-navigation">



    @yield('content')

    <script src="{{ url('assets/Js/Jquery.js') }}"></script>
    <script src="{{url('vendors/select2/js/select2.min.js')}}"></script>
    <script src="{{url('plugins/datepicker/kamadatepicker.min.js')}}"></script>
    <script src="{{url('plugins/sweet_alert/sweetalert2.all.min.js')}}"></script>
    <script src="{{ url('assets/Js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/Js/all.min.js') }}"></script>
    <script>
		function getMessage(){
			const name = document.getElementById('name').value;
	
			if (name != "") {
				document.getElementById('Name').style.display="none";
			}
      else
      {
        document.getElementById('Name').classList.add('text-danger')
      }
		}
		function GetText(){
			const age = document.getElementById('agefield').value;
			const doctor_name = document.getElementById('dname').value;
	
			if (age != "") {
				document.getElementById('patient_age').style.display="none";
			}

      else if(doctor_name != "")
      {
        document.getElementById('dName').style.display="none"
      }

      else
      {
        document.getElementById('dName').classList.add('text-danger')
      }
		}


    function check(){
      const isPrecident = document.getElementById('isprecedent');
      const dive = document.getElementById('sickness');
  
      
    if(isPrecident.checked == true)
    {
      dive.classList.remove('d-none')
      dive.classList.add('d-block')
    }
  
    else
    {
      dive.classList.remove('d-block')
      dive.classList.add('d-none')
    }

    }





  

    </script>
    @yield('scripts')
    @yield('date')
</body>

</html>

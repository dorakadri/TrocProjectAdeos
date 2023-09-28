<!doctype html>
<html lang="en" class="theme-fs-md">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>we share</title>


@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@vite(['resources/assets/css/socialv006a.css'])
@vite(['resources/assets/css/customizer.css'])
@vite(['resources/assets/js/app.js'])


<link rel="icon" href="images/favicon.ico" />


</head>

<body class="  ">



    @include('Userinterface.partials._navbar')


    <div class="position-relative">

    </div>
    <div id="content-page" class="content-page">
        <div class="container">
            <x-flash-message />
            @yield('content')
        </div>

    </div>
    <footer class="iq-footer bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    Copyright 2023
                    <a href="#">we share</a>
                    All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>



    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            @if($errors->any())
                $('#post-modal').modal('show');
            @endif
        });
      </script>


</body>




</html>

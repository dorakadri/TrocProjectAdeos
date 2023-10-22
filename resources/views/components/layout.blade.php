<!doctype html>
<html lang="en" class="theme-fs-md">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>we share</title>


@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@vite(['resources/assets/css/socialv006a.css'])
@vite(['resources/assets/css/customizer.css'])
@vite(['resources/assets/js/app.js'])


<link rel="icon" href="images/favicon.ico" />
 


 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">





</head>

<body class="  ">



    @include('Userinterface.partials._navbar')


    <x-pageheader />
  
    <x-notification />

    <x-flash-message />

   



    <div class="position-relative">

    </div>
    <div id="content-page" class="content-page">
   
        <div class="container">
          
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
            @if ($errors->any())
                $('#post-modal').modal('show');
            @endif
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#echangetype').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'ob_ob' || selectedValue === 'ob_serv') {
                    $('.image-input').show();
                    $('.description-input').show();

                } else {
                    $('.image-input').hide();
                    $('.description-input').hide();
                }
            });
        });
    </script>








 <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

     Pusher.logToConsole = true;

    var pusher = new Pusher('8550eafddff1aa1fe7b6', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('popup-channel');
    channel.bind('addedEvent', function(data) {
      
            var alertElement = document.createElement('div');
            alertElement.classList.add('alert' , 'alert-dismissible', 'fade', 'show');
 
            alertElement.innerHTML = `             
                <div class="alert alert-solid alert-primary d-flex align-items-center gap-2 alert-dismissible fade show mb-3" role="alert">
                           <span class="d-flex"><i class="material-symbols-outlined">notifications</i></span>
                           <h5 class="text-white"> New event added! '${data.event}' ${data.date}. </h5>
                           <u>  <a href="/Event/${data.eventId}"  class="text-white underline">See details</a> </u>
                         </div> `;
             document.getElementById('alert-container').appendChild(alertElement);

             setTimeout(function() {
                alertElement.remove();
            }, 20000);
            });
  </script>
 
</body>




</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/azea/ltr/index by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Sep 2021 02:02:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Todo Application" name="description">
    <meta content="Spruko Private Limited" name="author">
    <meta name="keywords"
        content="laravel ui admin template, laravel admin template, laravel dashboard template,laravel ui template, laravel ui, livewire, laravel, laravel admin panel, laravel admin panel template, laravel blade, laravel bootstrap5, bootstrap admin template, admin, dashboard, admin template">

    <!-- Title -->
    <title>Todo Application</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon" />

    <!--Bootstrap css -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- Animate css -->

    <!--Sidemenu css -->
    <link href="{{ asset('assets/css/sidemenu.css') }}" rel="stylesheet">

    <!-- P-scroll bar css-->

    <!---Icons css-->
    <link href="{{ asset('assets/plugins/icons/icons.css') }}" rel="stylesheet" />


    <!-- Simplebar css -->

    <!-- INTERNAL Morris Charts css -->

    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />




    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


</head>

<body class="app sidebar-mini">




    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('include.sidebar')

            @include('include.header')

            @yield('content')

        </div>

        @include('include.footer')


        <!-- Back to top -->
        <a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

        <!-- Jquery js-->
        <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap5 js-->
        <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>



        <!--Sidemenu js-->
        <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>





        <!-- INTERNAL Select2 js -->
        <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>




        <!-- Custom js-->
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>


        @if (Session::has('message'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var type = "{{ Session::get('alert-type', 'info') }}";
                    switch (type) {
                        case 'info':
                            toastr.info("{{ Session::get('message') }}");
                            break;
    
                        case 'warning':
                            toastr.warning("{{ Session::get('message') }}");
                            break;
    
                        case 'success':
                            toastr.success("{{ Session::get('message') }}");
                            break;
    
                        case 'error':
                            toastr.error("{{ Session::get('message') }}");
                            break;
                    }
                });
            </script>
        @endif

    </div>

</body>


</html>

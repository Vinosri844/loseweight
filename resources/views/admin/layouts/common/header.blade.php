<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lose Weight - @yield('title')</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="{{ asset('css/admin/vendor/perfect-scrollbar.css') }}" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="{{ asset('css/admin/vendor/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/app.rtl.css') }}" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-material-icons.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-material-icons.rtl.css') }}" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-fontawesome-free.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">


    



    <!-- Flatpickr -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-flatpickr.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-flatpickr.rtl.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-flatpickr-airbnb.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-flatpickr-airbnb.rtl.css') }}" rel="stylesheet">

    <!-- Vector Maps -->
    <link type="text/css" href="{{ asset('css/admin/vendor/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
	
	<!-- Quill Theme -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-quill.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-quill.rtl.css') }}" rel="stylesheet">

    <!-- Dropzone -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-dropzone.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-dropzone.rtl.css') }}" rel="stylesheet">

    <!-- Select2 -->
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-select2.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/vendor-select2.rtl.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/admin/vendor/select2/select2.min.css') }}" rel="stylesheet">
	
	
	
	
	
	
	
	
	@yield('headercss')


</head>

<body class="layout-default">

    <div class="preloader"></div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header js-mdk-header m-0" data-fixed>
            <div class="mdk-header__content">

                <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0" id="navbar" data-primary>
                    <div class="container-fluid p-0">

                        <!-- Navbar toggler -->

                        <button class="navbar-toggler navbar-toggler-right d-block d-md-none" type="button" data-toggle="sidebar">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand ">

                          <svg xmlns="http://www.w3.org/2000/svg" width="158.161" height="99.481" viewBox="0 0 158.161 99.481"><g transform="translate(-567.1 -310.7)"><path d="M669.752,440.2a.93.93,0,1,0-.68-.272.873.873,0,0,0,.68.272" transform="translate(-32.517 -40.799)" fill="#05203c"/><path d="M650.654,446.628v-4.694l-1.7.34v2.993h-3.4a4.57,4.57,0,0,0-.272-1.633,2.468,2.468,0,0,0-.884-1.293,3.489,3.489,0,0,0-2.041-.476H605.621V436.9l-1.7.34v6.326h38.435c.612,0,1.02.136,1.224.476a2.329,2.329,0,0,1,.272,1.224H603.92l-1.02,1.7h47.074c.476,0,.68-.136.68-.34" transform="translate(-11.447 -40.351)" fill="#05203c"/><path d="M677.052,437.8a.93.93,0,1,0,.68.272,1.04,1.04,0,0,0-.68-.272" transform="translate(-34.851 -40.639)" fill="#05203c"/><path d="M674.829,450.558a1.7,1.7,0,0,1-.272.952,1.481,1.481,0,0,1-.884.612,3.571,3.571,0,0,1-1.973-.2,1.982,1.982,0,0,0,1.225.816,4.436,4.436,0,0,0,1.633.136,2.447,2.447,0,0,0,1.429-.748,2.263,2.263,0,0,0,.612-1.7V444.3l-1.7.34v5.918Z" transform="translate(-33.444 -42.717)" fill="#05203c"/><path d="M683.809,443.848a10.727,10.727,0,0,1-1.292.068,2.517,2.517,0,0,0,0,5.034,3.413,3.413,0,0,0,.816-.136v1.02a1.7,1.7,0,0,1-.272.952,1.482,1.482,0,0,1-.884.612,3.571,3.571,0,0,1-1.973-.2,1.981,1.981,0,0,0,1.225.816,4.437,4.437,0,0,0,1.633.136,2.446,2.446,0,0,0,1.429-.748,2.263,2.263,0,0,0,.612-1.7v-6.6a1.516,1.516,0,0,1-1.293.748m-1.292,3.4a.831.831,0,0,1-.612-.272.863.863,0,0,1-.272-.612.831.831,0,0,1,.272-.612.863.863,0,0,1,.612-.272.831.831,0,0,1,.612.272.862.862,0,0,1,.272.612.738.738,0,0,1-.272.612.663.663,0,0,1-.612.272" transform="translate(-36.098 -42.333)" fill="#05203c"/><path d="M699.011,446.968V436.9l-1.7.34v9.047a4.238,4.238,0,0,1-.476,2.245,1.8,1.8,0,0,1-1.769.816,2.794,2.794,0,0,1-2.177-.748,2.44,2.44,0,0,1-.544-1.7,2.172,2.172,0,0,1,.2-.952.9.9,0,0,1,.748-.544,1.81,1.81,0,0,1,.816.2.723.723,0,0,0-.068-.544.613.613,0,0,0-.408-.408,1.546,1.546,0,0,0,.34-1.224,5.883,5.883,0,0,0-1.5,1.428,3.21,3.21,0,0,0-.68,2.041,5.981,5.981,0,0,0,.2,1.361,2.806,2.806,0,0,0,.952,1.429,3.122,3.122,0,0,0,2.109.612,4.2,4.2,0,0,0,2.925-.952,2.99,2.99,0,0,0,1.02-2.381" transform="translate(-39.871 -40.351)" fill="#05203c"/><path d="M706.352,439.8a.93.93,0,1,0-.68-.272.789.789,0,0,0,.68.272" transform="translate(-44.22 -40.671)" fill="#05203c"/><path d="M760.352,440.2a.93.93,0,1,0-.68-.272.789.789,0,0,0,.68.272" transform="translate(-61.485 -40.799)" fill="#05203c"/><path d="M741.92,444.608V447.6H705.73v-3.4l-1.7.34v5.918a1.7,1.7,0,0,1-.272.952,1.482,1.482,0,0,1-.884.612,3.572,3.572,0,0,1-1.973-.2,1.982,1.982,0,0,0,1.224.816,4.436,4.436,0,0,0,1.633.136,2.446,2.446,0,0,0,1.428-.748,2.264,2.264,0,0,0,.612-1.7V449.3h37.21c.476-.068.68-.2.68-.408V444.2Z" transform="translate(-42.781 -42.685)" fill="#05203c"/><path d="M567.1,415.9H569v8.843h5.51v1.633H567.1Z" transform="translate(0 -33.636)" fill="#12bcc6"/><path d="M586.2,421.074a5.653,5.653,0,1,1,5.646,5.374,5.329,5.329,0,0,1-5.646-5.374m9.388,0a3.537,3.537,0,0,0-3.673-3.673,3.576,3.576,0,0,0-3.673,3.673,3.673,3.673,0,0,0,7.347,0" transform="translate(-6.107 -33.572)" fill="#12bcc6"/><path d="M612,425.224l.68-1.5a5.737,5.737,0,0,0,3.469,1.156c1.633,0,2.313-.612,2.313-1.361,0-2.245-6.258-.748-6.258-4.694,0-1.7,1.36-3.129,4.218-3.129a6.294,6.294,0,0,1,3.469.952l-.612,1.5a5.956,5.956,0,0,0-2.925-.816c-1.633,0-2.313.612-2.313,1.429,0,2.245,6.258.748,6.258,4.626,0,1.7-1.36,3.129-4.218,3.129A6.49,6.49,0,0,1,612,425.224" transform="translate(-14.356 -33.572)" fill="#12bcc6"/><path d="M642.391,424.743v1.633H634.5V415.9h7.687v1.633h-5.714v2.721h5.034v1.633h-5.034v2.857Z" transform="translate(-21.55 -33.636)" fill="#12bcc6"/><path d="M684.926,415.9l-3.469,10.476h-2.041l-2.585-7.755-2.653,7.755h-2.109L668.6,415.9h2.041l2.585,7.959,2.721-7.959h1.769l2.653,8.027,2.721-8.027Z" transform="translate(-32.453 -33.636)" fill="#12bcc6"/><path d="M710.191,424.743v1.633H702.3V415.9h7.687v1.633h-5.714v2.721h5.034v1.633h-5.034v2.857Z" transform="translate(-43.229 -33.636)" fill="#12bcc6"/><rect width="1.973" height="10.476" transform="translate(674.173 382.264)" fill="#12bcc6"/><path d="M745.691,420.97h1.837v4.218a6.7,6.7,0,0,1-4.082,1.361,5.329,5.329,0,0,1-5.646-5.374c0-3.129,2.381-5.374,5.714-5.374a5.578,5.578,0,0,1,4.218,1.7l-1.224,1.224a3.956,3.956,0,0,0-2.925-1.224,3.573,3.573,0,0,0-3.809,3.673,3.611,3.611,0,0,0,3.809,3.673,4.145,4.145,0,0,0,2.177-.544V420.97Z" transform="translate(-54.579 -33.604)" fill="#12bcc6"/><path d="M772.52,415.9v10.476h-1.9v-4.49h-5.442v4.49H763.2V415.9h1.973v4.354h5.442V415.9Z" transform="translate(-62.701 -33.636)" fill="#12bcc6"/><path d="M789.969,417.533H786.5V415.9h8.911v1.633h-3.537v8.843h-1.9Z" transform="translate(-70.151 -33.636)" fill="#12bcc6"/><path d="M679.4,331.4a8.3,8.3,0,1,1,8.3-8.3,8.332,8.332,0,0,1-8.3,8.3m0-15.306a7.007,7.007,0,1,0,7.007,7.007,7,7,0,0,0-7.007-7.007" transform="translate(-33.253 -1.311)" fill="#12bcc6"/><path d="M674,311.924a9.871,9.871,0,0,1,9.864,9.864,11.089,11.089,0,0,1-.476,3.061h6.871a2.294,2.294,0,0,1,2.313,2.313v32.448a2.294,2.294,0,0,1-2.313,2.313H657.805a2.294,2.294,0,0,1-2.313-2.313V327.162a2.294,2.294,0,0,1,2.313-2.313h6.87a9.029,9.029,0,0,1-.476-3.061,9.77,9.77,0,0,1,9.8-9.864m0-1.224a11.09,11.09,0,0,0-11.088,11.088,16.658,16.658,0,0,0,.136,1.837h-5.306a3.557,3.557,0,0,0-3.537,3.537v32.448a3.557,3.557,0,0,0,3.537,3.537h32.449a3.557,3.557,0,0,0,3.537-3.537V327.162a3.556,3.556,0,0,0-3.537-3.537H684.88a8.355,8.355,0,0,0,.136-1.837A10.989,10.989,0,0,0,674,310.7" transform="translate(-27.849 0)" fill="#12bcc6"/><path d="M679.447,322.065c-.136.068-.136.272-.068.408l1.769,2.245-.2.408a1.163,1.163,0,1,0,1.429-.816.936.936,0,0,0-.748.068l-1.769-2.245c-.136-.136-.272-.2-.408-.068" transform="translate(-35.885 -3.61)" fill="#05203c"/><path d="M666.114,335.8h1.973a12.229,12.229,0,0,0,2.585,2.381h-2.245v3.4h3.4v-2.789a9.7,9.7,0,0,0,2.381.748v10.2h-2.381v-5.782h-5.782V335.8Zm13.945,31.292H660.4v-2.381h5.782v-3.4H660.4V335.868h2.381V359h5.782v5.782h9.183V359h2.381v8.1Zm-8.163-8.163h2.381v2.381H671.9Zm8.163-3.4H666.114v-8.163H668.5v5.782h9.183V339.473a9.694,9.694,0,0,0,2.381-.748Zm3.4-19.319c.136-.136.2-.272.34-.408h2.041v2.381h-2.381Zm8.163,30.884h-8.163v-2.381h5.782v-5.782h2.381Zm0-11.564h-2.381v-2.381h2.381Zm0-5.782h-5.782V361.31h-2.381V341.582h2.381v5.782h3.4v-5.782h2.381Zm0-11.564h-2.381V335.8h2.381Z" transform="translate(-29.832 -8.025)" fill="#05203c"/></g></svg>
							           </a>



                        


                        <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                            <li class="nav-item dropdown">
                                <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                </a>
                                
                            </li>
                        </ul>

                        <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                            <li class="nav-item dropdown">
                                <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                    <span class="mr-1 d-flex-inline">
                                        <span class="text-light">
										@if (Auth::guard('admin')->check())
											{{ Auth::guard('admin')->user()->name }}
										@endif

									</span>
                                    </span>
                                    
                                </a>
                                
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
		<!-- // END Header -->
		
		
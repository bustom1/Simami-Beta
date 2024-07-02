<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIMAMI</title>
    <!-- base:css -->
    <link rel="stylesheet" href=" {{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('vendors/base/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .card {
            cursor: pointer;
        }

        .swal2-popup {
            font-size: 1.1rem;
            /* Adjust font size */
            width: 70%;
            /* Adjust width */
            padding: 10px;
            /* Add padding */
        }

        .swal2-title {
            font-size: 1.5rem;
            /* Adjust title size */
        }

        .swal2-html-container {
            text-align: left;
            /* Left align text */
        }
    </style>

</head>

<body>
    <div class="container-scroller pb-sm-4 pb-5">
        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-sm-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">

                        <ul class="navbar-nav navbar-nav-left">
                            <li class="nav-item ms-4 lg-me-5 d-flex ">
                                <a class="navbar-brand" href="{{ route('home-user') }}">
                                    <img src="{{ asset('images/logo-simami.png') }}"
                                        style="max-width: 150px; height: auto;" alt="logo" />
                                </a>
                            </li>
                        </ul>

                        @guest
                            @if (Route::has('login'))
                                <ul class="navbar-nav navbar-nav-right">
                                    <li class="me-4">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            @endif
                        @else
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="me-4">
                                    <a href="{{ route('admin.company') }}">
                                        <i class="fa fa-2x fa-home" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>

        @yield('content')
    </div>


    <script src=" {{ asset('vendors/base/vendor.bundle.base.js') }}"></script>


    <script src="{{ asset('js/template.js') }}"></script>


    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js') }}"></script>
    <script src="{{ asset('vendors/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('vendors/justgage/justgage.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>

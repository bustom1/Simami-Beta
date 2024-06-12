<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kapella Bootstrap Admin Dashboard Template</title>
    <!-- base:css -->
    <link rel="stylesheet" href=" {{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('vendors/base/vendor.bundle.base.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-scroller">


        <div class="horizontal-menu">
            <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                <div class="container-fluid">
                    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                        <ul class="navbar-nav navbar-nav-left">

                            <li class="nav-item ms-3 lg-me-5 d-flex ">
                                {{-- <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a> --}}
                                <a class="navbar-brand" href="#">
                                    <img src="{{ asset('images/logo-simami.png') }}"
                                        style="max-width: 100px; height: auto;" alt="logo" />
                                </a>
                            </li>

                            <li class="nav-item ms-2 lg-ms-5">
                                <a href="#" class="nav-link">
                                    <i class="mdi mdi-view-grid menu-icon"></i>
                                </a>
                            </li>

                            <li class="nav-item ms-3">
                                <a href="#" class="nav-link">
                                    <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                                </a>
                            </li>

                        </ul>

                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    id="profileDropdown">
                                    <span class="nav-profile-name">Johnson</span>
                                    <span class="online-status"></span>
                                    <img src="{{ asset('images/faces/face28.png') }}" alt="profile"
                                        class="rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                    aria-labelledby="profileDropdown">
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-settings text-primary"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item">
                                        <i class="mdi mdi-logout text-primary"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                        </li>



                    </div>
                </div>
            </nav>
        </div>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Teknologi</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Pasuruan
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary" href=""
                                        style="text-decoration: none;">Software Development Intern</a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>2
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>4 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Sat, Jul 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">E-commerce</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Pasuruan Kota
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
                                        href="" style="text-decoration: none;">Marketing</a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>6
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>2 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Sat, Jun 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Media</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Bangil
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
                                        href="" style="text-decoration: none;">Graphic Design </a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>3
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>7 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Sun, Jul 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Teknologi</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Sidoarjo
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
                                        href="" style="text-decoration: none;">Data Analysis </a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>1
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>3 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Tus, Jun 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Logistik</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Malang
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
                                        href="" style="text-decoration: none;">Customer Service</a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>4
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>5 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Mon, Jun 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-4 d-flex grid-margin stretch-card">
                            <div class="card overflow-hidden hover-img">
                                <div class="position-relative">
                                    <a href="javascript:void(0)">
                                        <img src="{{ asset('images/blog/blog-img3.jpg') }}" class="card-img-top"
                                            alt="matdash-img">
                                    </a>
                                    <span
                                        class="badge text-bg-light text-dark fs-9 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">Manufaktur</span>
                                    <img src="{{ asset('images/profile/user-3.jpg') }}" alt="matdash-img"
                                        class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                                        width="40" height="40" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="mdi mdi-crosshairs-gps text-dark fs-10"></i>Pasuruan Kota
                                    </div>
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
                                        href="" style="text-decoration: none;">Supply Chain</a>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-briefcase text-dark fs-10"></i>2
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mx-2">
                                            <i class="mdi mdi-clock text-dark fs-10"></i>4 bulan
                                        </div>
                                        <div class="d-flex align-items-center fs-10 ms-auto gap-2 mx-2">
                                            <i class="mdi mdi-calendar-check text-dark"></i>Sat, Jul 2024
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>


        <!-- page-body-wrapper ends -->
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

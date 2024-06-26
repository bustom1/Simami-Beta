@extends('layouts.user-app')
@section('content')

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">

                    <div class="row">

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary"
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

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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
                                    <a class="d-block mb-3 mt-2 fs-5 text-dark fw-semibold link-primary" href=""
                                        style="text-decoration: none;">Marketing</a>
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

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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

                        <div class="col-lg-4 col-sm-6 d-flex grid-margin stretch-card">
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

    <script>
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('click', function() {
                Swal.fire({
                    title: "Judul",
                    icon: "info",
                    html: `Tempat Magang : Pasuruan <br> Lowongan Magang : 2 <br> Durasi Magang : 4 Bulan <br> <br> Kebutuhan : - bisa excel <br> - bisa service komputer <br> - bisa mengoperasikan pesawat <br> <br> Persyaratan : - Semester 5 <br> - IPK >3 <br> - Daerah pasuruan <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A. <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde assumenda doloremque. Quasi, quam, voluptas alias sunt sapiente voluptatum cupiditate quibusdam est voluptatibus eos distinctio impedit id corporis nam? A.<br>`,
                    showConfirmButton: false,
                    showCloseButton: true,
                });
            });
        });
    </script>

@endsection

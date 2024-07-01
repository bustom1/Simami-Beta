@extends('layouts.master')

@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="fw-bold ms-3">Buat Lowongan Magang</h3>
                        <a class="nav-link btn btn-rounded bg-success text-white float-end"
                    href="{{ route('admin.add-magang') }}"><i class="fas fa-arrow-left me-2"></i>Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store.vacancy') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="title">Judul Magang </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="titlee" value="{{ old('title') }}" required
                                        placeholder="Software Development" name="title"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="description">Deskripsi Magang</label>
                                <div class="col-sm-9">
                                        <textarea id="description" class="form-control" placeholder="Deskripsi magang"
                                            aria-label="Deskripsi magang" aria-describedby="basic-icon-default-message2" rows="30" cols="100" name="description" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label" for="phone">No Hp</label>
                                <div class="col-sm-9">
                                    <input type="number" id="phone" class="form-control phone-mask"
                                        placeholder="085 000 000" aria-label="085 000 000"
                                        aria-describedby="phone" name="phone"/>
                                </div>
                            </div>
                            <input type="text" name="users_id" id="users_id" value="{{ Auth::user()->id }}" hidden>

                            <div class="row justify-content-end float-end">
                                <div class="col-sm-10 me-4">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

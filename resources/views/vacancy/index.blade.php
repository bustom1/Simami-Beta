@extends('layouts.master')

@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold ms-3">Daftar Lowongan Magang</h3>
                <a class="nav-link btn btn-rounded bg-success pe-4 ps-4 text-white me-4 p-3"
                    href="{{ route('admin.create-magang') }}"><i class="fas fa-plus me-2"></i>Add Magang</a>
            </div>

            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php $no = 1 ?>
                            @foreach ($magang as $magangs)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td><strong>{{ $magangs->title }}</strong></td>
                                    <td>{{ $magangs->short_description }}</td>
                                    <td class="text-center"><span class=" bg-label-primary me-1">Buka</span></td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="me-3 btn bg-warning text-dark"><i
                                                    class="fas fa-edit me-1"></i> Edit</a>
                                            <a href="#" class="btn bg-danger text-dark"><i
                                                    class=" fas fa-trash me-1"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            @endforeach

                        </tbody>
                    </table>

                    {{-- @foreach ($magang as $magangs)
                        <div class="internship">
                            <h2>{{ $magangs->title }}</h2>
                            <p>{!! nl2br(e($magangs->description)) !!}</p>
                            <p></p>
                            <p>{{ $magangs }}</p>
                        </div>
                        <hr>
                    @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection

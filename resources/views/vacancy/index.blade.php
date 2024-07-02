@extends('layouts.master')
@section('script')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>$('#myTable').DataTable();</script>
@endsection

@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-2 bg-succes">
                <h3 class="fw-bold ms-3">Daftar Lowongan Magang</h3>
                <a class="nav-link btn btn-rounded bg-success text-white me-4 " href="{{ route('admin.create-magang') }}"><i
                        class="fas fa-plus me-2"></i>Add Magang</a>
            </div>

            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table" id="myTable">
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
                            <?php $no = 1; ?>
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
                                <?php $no++; ?>
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

@extends('layouts.master')

@section('content')
    <div class="body-wrapper-inner">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold ms-3">List Users</h3>
                <a class="nav-link btn btn-rounded bg-success text-white me-4" href="{{ route('create.users') }}">
                    <i class="fas fa-plus"></i>Add Users
                </a>
            </div>


            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>1</td>
                                <td><strong>Admin 1</strong></td>
                                <td>admin1@gmail.com</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="me-3 btn bg-warning text-dark"><i
                                                class="fas fa-edit me-1"></i> Edit</a>
                                        <a href="#" class="btn bg-danger text-dark"><i class=" fas fa-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

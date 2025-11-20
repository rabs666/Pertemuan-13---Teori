@extends('layouts.app')

@section('title', 'Blank Page')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h3 class="page-title">Blank Page</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Main Content -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Blank Page Template</h4>
                <p class="card-description">
                    Halaman ini memenuhi semua persyaratan yang diminta:
                </p>
                <div class="mt-4">
                    <h5 class="mb-3">Elemen yang Tersedia:</h5>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-checkbox-marked-circle text-success mr-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Title Halaman</h6>
                                    <small class="text-muted">"Blank Page" di bagian atas</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-checkbox-marked-circle text-success mr-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Breadcrumb</h6>
                                    <small class="text-muted">Home → Blank Page</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="d-flex align-items-center">
                                <i class="mdi mdi-checkbox-marked-circle text-success mr-2" style="font-size: 1.5rem;"></i>
                                <div>
                                    <h6 class="mb-0">Card dengan Border</h6>
                                    <small class="text-muted">Container dengan batas jelas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="mt-4">
                    <h5 class="mb-3">Deskripsi Template:</h5>
                    <p class="text-muted">
                        Template ini menggunakan <strong>Purple Admin</strong> dengan struktur yang clean dan modern.
                        Layout terdiri dari navbar di bagian atas, sidebar di sisi kiri, dan area konten utama di tengah.
                        Semua komponen sudah responsive dan siap digunakan untuk pengembangan lebih lanjut.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Content Cards -->
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Informasi Template</h4>
                <p class="card-description">Purple React Admin Template</p>
                <ul class="list-arrow">
                    <li>Bootstrap 4 Framework</li>
                    <li>Material Design Icons</li>
                    <li>Responsive Layout</li>
                    <li>Clean & Modern Design</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Fitur Utama</h4>
                <p class="card-description">Yang tersedia dalam template</p>
                <ul class="list-arrow">
                    <li>Sidebar Navigation</li>
                    <li>Top Navbar dengan Search</li>
                    <li>Notification Dropdown</li>
                    <li>Profile Menu</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

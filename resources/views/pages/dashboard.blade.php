@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h3 class="page-title">Dashboard</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Welcome Card -->
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Selamat Datang di Purple Admin</h4>
                <p class="card-description">
                    Template admin yang clean dan modern untuk aplikasi web Anda
                </p>
                <div class="mt-4">
                    <p>Template ini dibangun dengan teknologi terkini:</p>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3 text-center">
                                <i class="mdi mdi-laravel text-danger" style="font-size: 2.5rem;"></i>
                                <h6 class="mt-2 mb-0">Laravel</h6>
                                <small class="text-muted">PHP Framework</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3 text-center">
                                <i class="mdi mdi-bootstrap text-primary" style="font-size: 2.5rem;"></i>
                                <h6 class="mt-2 mb-0">Bootstrap 4</h6>
                                <small class="text-muted">CSS Framework</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3 text-center">
                                <i class="mdi mdi-material-design text-info" style="font-size: 2.5rem;"></i>
                                <h6 class="mt-2 mb-0">Material Icons</h6>
                                <small class="text-muted">Icon Library</small>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="border rounded p-3 text-center">
                                <i class="mdi mdi-responsive text-success" style="font-size: 2.5rem;"></i>
                                <h6 class="mt-2 mb-0">Responsive</h6>
                                <small class="text-muted">Mobile Ready</small>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0">Lihat halaman blank page untuk struktur template:</p>
                    <a href="{{ url('/blank-page') }}" class="btn btn-primary btn-sm">
                        <i class="mdi mdi-arrow-right"></i> Buka Blank Page
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Stats -->
<div class="row">
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <p class="mb-4">Purple Admin</p>
                <p class="fs-30 mb-2">Template Siap</p>
                <p>Layout sudah dikonfigurasi dengan baik</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
            <div class="card-body">
                <p class="mb-4">Komponen UI</p>
                <p class="fs-30 mb-2">Lengkap</p>
                <p>Navbar, Sidebar, Cards, dan lainnya</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-light-blue">
            <div class="card-body">
                <p class="mb-4">Responsive Design</p>
                <p class="fs-30 mb-2">100%</p>
                <p>Tampil sempurna di semua perangkat</p>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Extend Tamplate Master -->
@extends('layouts.master')

@section('divider')

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Data dan Agenda Warga
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/agenda">
        <i class="fas fa-calendar"></i>
        <span>Agenda</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item active">
    <a class="nav-link collapsed" href="/datawarga">
        <i class="fa fa-users"></i>
        <span>Data Warga</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Keuangan Desa
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/cashflow">
        <i class="fa fa-credit-card"></i>
        <span>Cashflow</span>
    </a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="/laporan">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Laporan Keuangan</span></a>
</li>

@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambahkan Data Warga</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- cotent disini     -->
    <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Masukkan Data Warga</h6>
            </div>
            <div class="card-body">
                <form action="/insertDataWarga" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="p-3 col-md-6">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="p-3 col-md-6">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik">
                    </div>
                    <div class="p-3 col-md-3">
                        <label for="phone" class="form-label">NO Telepon</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="089111111111">
                    </div>
                    <div class="p-3 col-md-3">
                        <label for="age" class="form-label">Umur</label>
                        <input type="number" class="form-control" name="age" id="age" placeholder="21">
                    </div>
                    <div class="p-3 col-md-3">
                        <label for="bday" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="bday" id="bday">
                    </div>
                    <div class="p-3 col-md-3">
                        <label for="sex" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="sex" id="sex" placeholder="L/P">
                    </div>
                    <div class="p-3 col-md-12">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Jl. Gatang Rt. 02/04">
                    </div>
                    <div class="p-3 col-12">
                        <button type="submit" class="btn btn-primary">Tambahkan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
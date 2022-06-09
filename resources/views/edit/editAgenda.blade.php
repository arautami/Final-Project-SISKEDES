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
<li class="nav-item active">
    <a class="nav-link collapsed" href="/agenda">
        <i class="fas fa-calendar"></i>
        <span>Agenda</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
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
        <h1 class="h3 mb-0 text-gray-800">Edit Agenda</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- cotent disini     -->
    <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Agenda</h6>
            </div>
            <div class="card-body">
                <form action="/updateAgenda/{{ $data->id }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="p-3 col-md-12">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                    </div>
                    <div class="p-3 col-md-12">
                        <label for="command" class="form-label">Komentar</label>
                        <input type="text" class="form-control" name="command" id="command" value="{{ $data->command }}">
                    </div>
                    <div class="p-3 col-md-3">
                        <label for="date" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="date" id="date" value="{{ $data->date }}">
                    </div>
                    <div class="p-3 col-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
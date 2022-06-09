<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Keuangan Desa</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Prepare PHP Variable -->
@php
    $no = 1;
    $totMasuk = 0;
    $totKeluar = 0;
@endphp

<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view"><div><div class="card">
        <div class="card-header">Invoice
            <strong>#LaporanKeuangan-83192</strong>
            <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">
            <i class="fa fa-print"></i> Print</a>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-sm-4">
                    <h6 class="mb-3">From: {{ $fromDate }}</h6>
                </div>
                <div class="col-sm-4">
                    <h6 class="mb-3">To: {{ $toDate }}</h6>
                </div>
                <div class="col-sm-4">
                </div>
            </div>

            <div class="table-responsive-sm">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th class="center">No</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                    <th class="center">Pemasukan</th>
                    <th class="center">Pengeluaran</th>
                    <th class="right">Total</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($query as $row)
                    @php
                        $totMasuk = $totMasuk + $row->saldoMasuk;
                        $totKeluar = $totKeluar + $row->saldoKeluar;
                    @endphp
                    <tr>
                        <td class="center">{{ $no++ }}</td>
                        <td class="left">{{ $row->date }}</td>
                        <td class="left">{{ $row->uraian }}</td>
                        <td class="right">{{ $row->saldoMasuk }}</td>
                        <td class="right">{{ $row->saldoKeluar }}</td>
                        <td class="right">{{ $row->saldoMasuk - $row->saldoKeluar }}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-5 ml-auto">
                    <table class="table table-clear">
                    <tbody>
                        <tr>
                            <td class="left">
                                <strong>total</strong>
                            </td>
                            <td class="left">{{ $totMasuk - $totKeluar }}</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div></div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>

</body>

</html>
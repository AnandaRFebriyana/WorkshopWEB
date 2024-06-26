@extends('main')
@section('content')
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: linear-gradient(90deg, #545B77, #6C63AC);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">siData</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="/dashboard" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <a href="/data" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Data Mahasiswa
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halo Selamat Datang</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="col-lg-6 connectedSortable">
    <!-- Calendar -->
    <div class="card bg-gradient-success">
        <!-- ... -->
    </div>
    <!-- Form for name and address -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Data Diri</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/add" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_mhs">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="alamat">Kota</label>
                    <textarea class="form-control" id="alamat" placeholder="Masukkan kota" name="alamat"></textarea>
                </div>
                <!-- <div class="form-group">
                    <label for="ttl">TTL</label>
                    <textarea class="form-control" id="ttl" placeholder="Masukkan tempat,tanggal lahir" name="ttl"></textarea>
                </div> -->
                <div class="form-group">
                    <label for="ttl">TTL</label>
                    <input type="date" class="form-control" id="ttl" name="ttl">
                </div>
                <!-- <div class="form-group">
                    <label for="status">Status</label>
                    <textarea class="form-control" id="status" placeholder="Masukkan status" name="status"></textarea>
                </div> -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                      <option value="aktif">Aktif</option>
                      <option value="tidak aktif">Tidak Aktif</option>
                    </select>
              </div>
                <button type="submit" class="btn btn-primary" name="button">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.right col -->
  

<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('tahunMasukChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['2019', '2020', '2021', '2022'],
        datasets: [{
          label: 'Jumlah Mahasiswa',
          data: [15, 20, 25, 30],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>
@endsection
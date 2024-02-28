@extends('main')
@section('content')
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #545B77;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">siData</span>
    </a>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v2</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v3</p>
              </a>
            </li>
          </ul>
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
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Tabel Data Nama dan Alamat -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Alamat</th>
                      <th>Tahun Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Ananda Rizky Febriyana</td>
                      <td>E41222236</td>
                      <td>Curahmalang, Rambipuji, Kab.Jember</td>
                      <td>2022</td>
                    </tr>
                    <!-- Tambahkan baris tabel sesuai dengan data yang ada -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Grafik Tahun Masuk -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Grafik Tahun Masuk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <canvas id="tahunMasukChart" style="height: 300px;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->

          <!-- right col -->
          <section class="col-lg-5 connectedSortable">
            <!-- Form for name and address -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Data Diri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="name">NIM</label>
                    <input type="text" class="form-control" id="name" placeholder="Masukkan NIM">
                  </div>
                  <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea class="form-control" id="address" placeholder="Masukkan alamat"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="name">Tahun Masuk</label>
                    <input type="text" class="form-control" id="tahunMasuk" placeholder="Masukkan tahun masuk">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

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
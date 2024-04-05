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
        <li class="nav-item menu-open">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <a href="/data" class="nav-link active">
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

  <!-- resources/views/create.blade.php -->
<div class="container">
    <h1>Create Mahasiswa</h1>
    <form id="createForm" method="POST" action="{{ route('mahasiswas') }}">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="ttl">TTL</label>
            <textarea class="form-control" id="ttl" name="ttl" placeholder="Masukkan tempat, tanggal lahir"></textarea>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan status">
        </div>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function submitForm() {
        // Ambil data dari formulir
        var formData = $('#createForm').serialize();

        // Kirim data dengan AJAX
        $.ajax({
            url: '/mahasiswa',
            type: 'POST',
            data: formData,
            success: function(response) {
                // Redirect ke halaman lain setelah berhasil membuat data
                window.location.href = '/data';
            },
            error: function(error) {
                // Tangani kesalahan jika terjadi
                console.log(error);
            }
        });
    }
</script>
@endsection
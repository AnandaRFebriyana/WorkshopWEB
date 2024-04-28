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
          <div class="col-lg-12">
            <!-- Tabel Data Nama dan Alamat -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
              </div>
              <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="createModalLabel">Create Mahasiswa</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form id="createForm" method="POST" action="/add" >
                        @csrf
                        <div class="form-group">
                          <label for="nama_mhs">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Kota</label>
                          <textarea class="form-control" id="alamat" placeholder="Masukkan kota" name="alamat"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="ttl">TTL</label>
                          <textarea class="form-control" id="ttl" placeholder="Masukkan tempat, tanggal lahir" name="ttl"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                          <textarea class="form-control" id="status" placeholder="Masukkan status" name="status"></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" onclick="submitForm()">Submit</button>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kota</th>
                      <th>TTL</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mahasiswas as $mahasiswa)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $mahasiswa->nama_mhs }}</td>
                      <td>{{ $mahasiswa->alamat }}</td>
                      <td>{{ $mahasiswa->ttl }}</td>
                      <td>{{ $mahasiswa->status }}</td>
                      <td>
                        <a href="/data/edit/{{ $mahasiswa->id_mhs }}">Edit</a>
                        |
                        <a href="/data/delete/{{ $mahasiswa->id_mhs}}" 
                        onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">Hapus</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script>
    function submitForm() {
      // Ambil data dari formulir
      var formData = $('#createForm').serialize();

      // Kirim data dengan AJAX
      $.ajax({
        url: '/data',
        type: 'POST',
        data: formData,
        success: function(response) {
          // Tutup modal setelah pengiriman berhasil
          $('#createModal').modal('hide');
          // Lakukan tindakan lain yang diperlukan, misalnya menampilkan pesan sukses atau memperbarui tampilan data
        },
        error: function(error) {
          // Tangani kesalahan jika terjadi
          console.log(error);
        }
      });
    }
  </script> -->
@endsection
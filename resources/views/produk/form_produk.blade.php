<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Produk</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('admin.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <form class="forms-sample" action="{{ url('admin/produk/store') }}" method="POST">
            @csrf
            <div class="form-group row">
              <label for="kode" class="col-sm-4 col-form-label">Kode</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan Kode">
              </div>
          </div>
          <div class="form-group row">
              <label for="nama" class="col-sm-4 col-form-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
              </div>
          </div>
          <div class="form-group row">
              <label for="harga" class="col-sm-4 col-form-label">Harga</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
              </div>
          </div>
          <div class="form-group row">
              <label for="stok" class="col-sm-4 col-form-label">Stok</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan Stok">
              </div>
          </div>
          <div class="form-group row">
              <label for="rating" class="col-sm-4 col-form-label">Rating</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="rating" name="rating" placeholder="Masukkan  Rating">
              </div>
          </div>
          <div class="form-group row">
              <label for="min_stok" class="col-sm-4 col-form-label">Min Stok</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="min_stok" name="min_stok" placeholder="Masukkan Min Stok">
              </div>
          </div>
          <div class="form-group row">
              <label for="jenis_produk_id" class="col-sm-4 col-form-label">Jenis Produk ID</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="jenis_produk_id" name="jenis_produk_id" placeholder="Masukkan Jenis Produk ID">
              </div>
          </div>
          <div class="form-group row">
              <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
        </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin.footer')
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/js/demo.js"></script>
</body>
</html>

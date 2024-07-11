<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Testimoni</title>

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
            <h1>Daftar Testimoni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          @if (session('pesan'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('pesan') }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if (Auth::user()->role == 'admin')
          <a href="{{ url('admin/testimoni/create') }}" class="btn btn-primary">+ Tambah Testimoni</a>
          @endif
          <table class="table table-bordered">
            <tr class="table-success">
                <th>id</th>
                <th>Tanggal</th>
                <th>Nama Tokoh</th>
                <th>Komentar</th>
                <th>Rating</th>
                <th>Produk ID</th>
                <th>Kategori Tokoh ID</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_testimoni as $testimoni)
            <tr>
              <td>{{ $testimoni->id }}</td>
              <td>{{ $testimoni->tanggal }}</td>
              <td>{{ $testimoni->nama_tokoh }}</td>
              <td>{{ $testimoni->komentar }}</td>
              <td>{{ $testimoni->rating }}</td>
              <td>{{ $testimoni->produk_id }}</td>
              <td>{{ $testimoni->kategori_tokoh_id }}</td>
              <td>
                <a href="{{ url('admin/testimoni/show', $testimoni->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a>
                @if (Auth::user()->role == 'admin')
                <a href="{{ url('admin/testimoni/edit', $testimoni->id) }}" class="text-warning"><i class="far fa-edit"></i> Edit</a> 
                <form action="{{ url('admin/testimoni/destroy', $testimoni->id) }}" method="post" class="d-inline">
                 @csrf
                 @method('delete')
                 <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"><i class="far fa-trash-alt"></i>Hapus</button>
                 @endif
              </form>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
        <!-- /.card-body -->
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

@extends('layouts.template')
@section('title')
Dashboard
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
            <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pengguna</span>
                <span class="info-box-number">
                  100
                  <small>akun</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-book-open"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Buku</span>
                <span class="info-box-number">
                    50.000
                    <small>buku</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Peminjam</span>
                <span class="info-box-number">
                    89
                    <small>orang</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-edit"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Laporan</span>
                <span class="info-box-number">98</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
            </div>
            <div class="box-body">
<div class="content-header">
<h1>Selamat Datang di <strong>BookMate</strong></h1>
</div>
<div class="content px-2">
<blockquote class="quote-orange mt-0">
<h5 id="reminder">Informasi</h5>
<p>Aplikasi <strong>BookMate</strong> adalah aplikasi untuk 
    memudahkan pelanggan dalam melakukan peminjaman buku<br>
    Serta memudahkan pihak perpustakaan untuk melakukan pengelolaan peminjaman buku.<br>
    Berikut informasi yang disajikan dalam aplikasi <strong>BookMate</strong> : <br>
    1. Jenis buku apa saja yang dapat dipinjamkan.<br>
    2. Judul dari tiap buku yang dapat dipinjam.<br>
    3. Memantau status peminjaman Anda.<br>
</blockquote>
<blockquote class="quote-info">
    <h5 id="tip">Penggunaan</h5>
    <h3>Panduan Pengguna </h3><br>
    <strong>A. Registrasi Akun</strong> <em>(<strong>belum</strong> memiliki akun)</em><br>
    1. Klik tombol 'Daftar' pada halaman utama aplikasi BookMate. <br>
    2. Masukkan nama, email, kata sandi, dan konfirmasi kata sandi. <br>
    3. Klik tombol 'Daftar'. <br>
    4. Anda berhasil masuk ke halaman dashboard. <br><br>

    <strong>B. Login</strong> <em>(<strong>sudah</strong> memiliki akun)</em><br>
    1. Klik tombol 'Masuk' pada halaman utama aplikasi BookMate. <br>
    2. Masukkan email dan kata sandi yang sesuai. <br>
    3. Klik tombol 'Masuk'. <br>
    4. Anda berhasil mengakses kembali halaman dashboard. <br>
</blockquote>

</div>
@endsection
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    
         {{-- MANAJEMEN PENGGUNA --}}
         <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Manajemen Pengguna
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="fas fa-users"></i>
                <p>&nbsp;Data Siswa</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- BUKU TERSEDIA --}}
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Buku Tersedia
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="fas fa-shapes"></i>
                <p>&nbsp;Buku Pengembangan Diri</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="fas fa-hat-wizard"></i>
                <p>&nbsp;Buku Novel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index3.html" class="nav-link">
                <i class="fas fa-graduation-cap"></i>
                <p>&nbsp;Buku Pelajaran</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- STATUS PEMINJAMAN --}}
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="fas fa-cog"></i>
            <p>
              Status Peminjaman
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="fas fa-calendar-check"></i>
                <p>&nbsp;Sudah Dikembalikan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="fas fa-calendar-minus"></i>
                <p>&nbsp;Belum Dikembalikan</p>
              </a>
            </li>
          </ul>
        </li>


        {{-- LAPORAN --}}
        <li class="nav-item menu-close">
          <a href="#" class="nav-link active">
            <i class="fas fa-edit"></i>
            <p>
              Laporan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link">
                <i class="fas fa-id-badge"></i>
                <p>&nbsp;Jumlah Peminjam</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="fas fa-book"></i>
                <p>&nbsp;Jumlah Buku Dipinjamkan</p>
              </a>
            </li>
          </ul>
        </li>

  </ul><p>
  <form action="{{route('logout')}}" method="post">
      @csrf
    <button type="submit" class="btn btn-danger ">Logout</button>
  </form>
</nav>
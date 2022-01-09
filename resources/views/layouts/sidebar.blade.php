<ul class="nav">
        @role('admin')
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/home')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        @endrole
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('lihat')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Lihat Buku</span>
            </a>
          </li>  
     
          @role('admin')
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/buku')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Tambah Buku</span>
            </a>
          </li>  
          @endrole
        
          @role('admin')
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('register')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Tambah User</span>
            </a>
          </li>  
          @endrole
          @role('anggota')
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/transaksi')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Peminjaman Anggota</span>
            </a>
          </li>
          @endrole
          @role('admin')
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-laporan" aria-expanded="false" aria-controls="ui-laporan">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Laporan</span>
              <i class="menu-arrow"></i>
            </a>
            @endrole
            <div class="collapse" id="ui-laporan">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan/trs')}}">Laporan Peminjaman</a>
                </li>
                <!--
                <li class="nav-item">
                  <a class="nav-link" href="">Laporan Anggota</a>
                </li>
                -->
                 <li class="nav-item">
                  <a class="nav-link" href="{{url('laporan/buku')}}">Laporan Buku</a>
                </li>
              </ul>
            </div>
          </li>
         
        </ul>
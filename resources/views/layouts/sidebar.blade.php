<ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
               

                  <img src="{{asset('images/user/default.png')}}" alt="profile image">
            

                  <img src="{{asset('images/user/')}}" alt="profile image">
              
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"></p>
                  <div>
                    <small class="designation text-muted" style="text-transform: uppercase;letter-spacing: 1px;"></small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/home')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
      
         @role('admin')
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/roles')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Tambah User</span>
            </a>
          </li>  
          @endrole
          <li class="nav-item "> 
            <a class="nav-link" href="{{url('/transaksi')}}">
              <i class="menu-icon mdi mdi-account"></i>
              <span class="menu-title">Transaksi Anggota</span>
            </a>
          </li>
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
                  <a class="nav-link" href="{{url('laporan/trs')}}">Laporan Transaksi</a>
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
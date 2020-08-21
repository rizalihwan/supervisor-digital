<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-text mx-3 mr-4">SUVERVISOR APP</div>
      </a>
      <div class="text-center text-white">
          Role : {{ Auth::user()->role }}
      </div>
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>
      @if (Auth::user()->role == 'guru')
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('guru.jadwal') }}">Data Jadwal</a>
            <a class="collapse-item" href="{{ route('guru.index') }}">Upload File</a>
          </div>
        </div>
      </li>
      @endif
      @if (Auth::user()->role == 'supervisor')
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('supervisor.index') }}">Nilai Tugas</a>
          </div>
        </div>
      </li>
      @endif
      @if (Auth::user()->role == 'kurikulum')
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('kurikulum.supervisor') }}">Data Supervisor</a>
            <a class="collapse-item" href="{{ route('kurikulum.index') }}">Buat Jadwal</a>
          </div>
        </div>
      </li>
      @endif
      <!-- Nav Item - Charts -->
      @if (Auth::user()->role == 'kepsek')
        <li class="nav-item">
        <a class="nav-link" href="{{ route('kepsek.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan Supervisi</span></a>
      </li>
      @endif

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

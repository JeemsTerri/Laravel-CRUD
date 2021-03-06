<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('adminlte/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Route::is('pertanyaan') || Route::is('pertanyaan.*') ? 'active' : '' }}">
            <i class="nav-icon far fa-question-circle"></i>
            <p>
              Pertanyaan
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('pertanyaan') }}" class="nav-link {{ Route::is('pertanyaan') ? 'active active-sub' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List Pertanyaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('pertanyaan.create') }}" class="nav-link {{ Route::is('pertanyaan.create') ? 'active active-sub' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Buat Pertanyaan</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
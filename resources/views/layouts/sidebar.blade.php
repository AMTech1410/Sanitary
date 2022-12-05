  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div>
            <button  style="background-color: #0d6efd; border-radius: 50%;height:50px;width:50px;border:none;color: white;font-size:30px;">{{ auth()->user()->firstName[0]}}</button>

        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->firstName}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

         <li class="nav-item menu-open">
            <a href="" class="nav-link active">
             {{-- <i class="nav-icon fas fa-user-alt"></i> --}}
             <img src="{{asset('images/Vector.png')}}" style="height: 15px;">
              <p>
                    contact
                    <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">

                  <p>Create Customer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">

                  <p>All Customers</p>
                </a>
              </li>
             </ul>
          </li>
          <li class="nav-item menu-open" >
            <a href="#" class="nav-link active">
                <img src="{{asset('images/Vector3.png')}}" style="height: 15px;">
              <p>
                  Inquiry
                    <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">

                  <p>Create Inquiry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">

                  <p>All Inquiry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">

                  <p>Today FllowUp</p>
                </a>
              </li>
             </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <img src="{{asset('images/Vector1.png')}}" style="height: 15px;">

              <p>
                    Admin Settings
                    <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('insertSubAdmin')}}" class="nav-link active">

                  <p>Create SubAdmin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('dashboard')}}" class="nav-link">

                  <p>SubAdmin List</p>
                </a>
              </li>
             </ul>
          </li>



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

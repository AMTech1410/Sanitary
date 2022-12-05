<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="margin-left: 20px;">
        <div>
            <button  style="background-color: #0d6efd; border-radius: 50%;height:50px;width:50px;border:none;color: white;font-size:30px;">{{ auth()->user()->firstName[0]}}</button>
            {{-- <img src="{{ auth()->user()->name[0]}}" style="color: white;font-size:30px;width:50px;" class="img-circle elevation-2 info" alt="{{ auth()->user()->name[0]}}"> --}}
          </div>
      <li class="nav-item d-none d-sm-inline-block" style="margin-left: 20px;">
        <div style="font-size:20px;font-weight:bold;">{{ auth()->user()->firstName }}</div>
        <div style="color:grey;">{{ auth()->user()->email }}</div>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

<li class="nav-item">
        {{-- <a class="nav-link" data-widget="fullscreen" href="#" role="button">
         {{-- <Button class="btn btn-danger">logout</Button> --}}
        {{--</a> --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
               <button class="btn btn-danger"> {{ __('Log Out') }}</button>
            </x-responsive-nav-link>
        </form>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

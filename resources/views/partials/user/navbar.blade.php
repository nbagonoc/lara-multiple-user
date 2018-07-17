<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="/">Lara-Auth</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          {{-- Sidebar --}}
          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
              <a class="nav-link" href="/dashboard">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
              <a class="nav-link" href="/profile">
                <i class="fa fa-fw fa-user"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            @if(Auth::user()->role=="admin")
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="/users">
                  <i class="fa fa-fw fa-users"></i>
                  <span class="nav-link-text">Manage Users</span>
                </a>
              </li>
            @endif
          </ul>
          {{-- sidebar toggler --}}
          <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
              <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
              </a>
            </li>
          </ul>
          {{-- logout --}}
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                 <i class="fa fa-fw fa-sign-out"></i>{{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
          </ul>
        </div>
      </nav>
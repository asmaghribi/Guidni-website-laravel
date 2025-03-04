<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="bx bx-menu bx-sm"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


  <ul class="navbar-nav flex-row align-items-center ms-auto">



    <li class="nav-item navbar-dropdown dropdown-user dropdown">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            @if(auth::guard('supplier')->user()->avatar )
            <img src="{{ asset(auth::guard('supplier')->user()->avatar) }}" alt class="w-px-40 h-auto rounded-circle" style="max-height: 44px !important"/>

            @else
            <img src="{{ asset('Assets/Dashbord/img/default_avatar.png') }}" alt class="w-px-40 h-auto rounded-circle" />

            @endif

        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <div class="avatar avatar-online">
                    @if(auth::guard('supplier')->user()->avatar )
                    <img src="{{ asset(auth::guard('supplier')->user()->avatar) }}"  class="w-px-40 h-auto rounded-circle" style="max-height: 44px !important"/>
                   {{--  'assets/Admin/default_avatar.png' --}}
                    @else
                    <img src="{{ asset('Assets/Dashbord/img/default_avatar.png') }}"  class="w-px-40 h-auto rounded-circle" />
                    @endif
                </div>
              </div>
              <div class="flex-grow-1">
                <span class="fw-semibold d-block"> {{ auth::guard('supplier')->user()->first_name }} &nbsp;{{ auth::guard('supplier')->user()->last_name }}</span>
                <small class="text-muted">Fournisseur</small>
              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>

        <li>
          <a class="dropdown-item" href="">
            <i class="bx bx-cog me-2"></i>
            <span class="align-middle">Configuration</span>
          </a>
        </li>

        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <a class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="bx bx-power-off me-2"></i>
            <span class="align-middle">Déconnexion</span>
          </a>
        </li>
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>
</nav>

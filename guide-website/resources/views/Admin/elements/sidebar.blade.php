<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="" class="app-brand-link">
       {{--  <span class="app-brand-logo demo">


        </span> --}}
        <span class="app-brand-text  fw-bolder ms-2">{{ config('app.name') }}</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ Request::is('admin/index*') ? 'active' : '' }}">
        <a href="" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-map"></i>
          <div data-i18n="Analytics">Gestion des Villes</div>

        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Utilisateurs</span>
      </li>
      <li class="menu-item {{ Request::is('admin/fournisseurs*') ? 'active' : '' }}">
        <a href="{{ route('admin.fournisseurs') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-pin"></i>

          <div data-i18n="Basic">Fournisseurs</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('admin/clients*') ? 'active' : '' }}">
        <a href="{{ route('admin.clients') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-voice"></i>

          <div data-i18n="Basic">Clients</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Services</span>
      </li>
   
      <li class="menu-item {{ Request::is('admin/restaurants*') ? 'active' : '' }}">
        <a href="{{ route('admin.restaurants.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-restaurant"></i>

          <div data-i18n="Basic">Restaurants</div>
        </a>
      </li>

      <li class="menu-item {{ Request::is('admin/hotels*') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-hotel"></i>

          <div data-i18n="Basic">Hotels</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('admin/Utilisateurs*') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-calendar-event"></i>

          <div data-i18n="Basic">Evenements</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('admin/reservations*') ? 'active' : '' }}">
        <a href="{{ route('admin.reservations') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-calendar-check"></i>

          <div data-i18n="Basic">Réservations</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Systeme</span>
      </li>

      <li class="menu-item {{ Request::is('admin/Configurations*') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-bell"></i>

          <div data-i18n="Basic">Contact</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('admin/Configurations*') ? 'active' : '' }}">
        <a href="" class="menu-link">
            <i class="menu-icon tf-icons bx bx-wrench"></i>

          <div data-i18n="Basic">Configuration</div>
        </a>
      </li>

      </li>






      <li class="menu-item">

            <a href="" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="menu-link">
                <i class="menu-icon tf-icons bx bx-log-in-circle"></i>

                <div data-i18n="Basic">Déconnexion</div>
              </a>


      </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    </ul>
  </aside>

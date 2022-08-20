<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('prueba-vue') }}"><i class="la la-list nav-icon"></i> {{ trans('Shopping List') }}</a></li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-map"></i> Ubicaciones</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('paises_list') }}'><i class='nav-icon la la-hand-pointer'></i> Paises</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('estados_list') }}'><i class='nav-icon la la-hand-pointer'></i> Estados</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('municipios') }}'><i class='nav-icon la la-hand-pointer'></i> Municipios</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-user"></i> Clientes</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('grupo-clientes') }}'><i class='nav-icon la la-address-card'></i> Grupos de Clientes</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('clientes') }}'><i class='nav-icon la la-address-book '></i> Clientes</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('cliente-direcciones') }}'><i class='nav-icon la la-map-marker'></i> Direcciones</a></li>
    </ul>
</li>


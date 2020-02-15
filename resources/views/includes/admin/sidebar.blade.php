<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-success" id="accordionSidebar">

  <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center " href="{{route('home')}}">
    <div class="sidebar-brand-icon">
        <img src="{{url('backend/img/title@2x.png')}}" alt="MN-SHOP" width="30px" height="30px">
    </div>
    <div class="sidebar-brand-text mx-3">
      MN-SHOP
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('categories.index') }}">
      <i class="fas fa-fw fa-tv"></i>
      <span>Categories</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('items.index') }}">
      <i class="fas fa-fw fa-tv"></i>
      <span>Items</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('category-items.index') }}">
      <i class="fas fa-fw fa-tv"></i>
      <span>Category Items</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

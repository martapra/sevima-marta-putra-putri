<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-text mx-3"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('article-package.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Artikel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolio.index') }}">
            <i class="fas fa-fw fa-file"></i>
            <span>Data Guru</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Data Murid</span></a>
    </li>


    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
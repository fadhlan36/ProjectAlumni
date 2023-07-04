<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap fa-bounce"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AlumniKU</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>

    <!-- Nav Item - My Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('profil'); ?>">
            <i class="fa-solid fa-user-graduate"></i>
            <span>My Profile</span></a>
    </li>

    <!-- Nav Item - Edit profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('anggota'); ?>">
            <i class="fa-solid fa-user-pen"></i>
            <span>Alumni</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fa-regular fa-share-from-square"></i>
            <span>Posting Berita/Loker</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fa-regular fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
        <i class="fa-solid fa-magnifying-glass"></i>
            <span>Loker</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Edit Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout'); ?>">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
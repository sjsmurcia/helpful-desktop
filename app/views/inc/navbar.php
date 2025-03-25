<button class="btn btn-primary mobile-menu-btn d-none" id="mobileMenuBtn">
  <i class="bi bi-list"></i>
</button>

<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar position-relative" id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <i class="fa-solid fa-circle-chevron-left" id="toggle-icon"></i>
    </div>

    <div class="logo">
      <i class="fa-brands fa-rebel logo-icon"></i>
      <span class="logo-text">sjsmurcia</span>
    </div>

    <div class="d-flex flex-column h-100">
      <ul class="nav flex-column mt-3">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-search"></i>
            <span class="sidebar-text">Search instances</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-megaphone"></i>
            <span class="sidebar-text">Weekly pop promotional</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-box"></i>
            <span class="sidebar-text">Single objects</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-boxes"></i>
            <span class="sidebar-text">Objects sets</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-images"></i>
            <span class="sidebar-text">My gallery</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-star"></i>
            <span class="sidebar-text">Favourites</span>
          </a>
        </li>
      </ul>



      <ul class="nav flex-column mb-3">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-gear"></i>
            <span class="sidebar-text">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-question-circle"></i>
            <span class="sidebar-text">FAQ</span>
          </a>
        </li>
      </ul>

      <div class="user-info sidebar-text">
        <p class="mb-1">John Doe</p>
        <p class="small text-muted">ModGallery Bank</p>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="main-content" id="mainContent">
    <h1>Contenido Principal</h1>
    <p>Aquí va el contenido principal de tu aplicación.</p>
  </div>
</div>
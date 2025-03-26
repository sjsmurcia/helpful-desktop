<button class="btn mobile-menu-btn d-none" id="mobileMenuBtn"> <i class="fas fa-bars"></i>
</button>

<div class="d-flex app-container">
  <!-- Sidebar -->
  <div class="sidebar position-relative" id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <i class="fas fa-chevron-left" id="toggle-icon"></i>
    </div>

    <div class="logo">
      <i class="fas fa-cubes logo-icon"></i>
      <span class="logo-text">ModGallery</span>
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
            <i class="fas fa-bullhorn"></i>
            <span class="sidebar-text">Weekly pop promotional</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-cube"></i>
            <span class="sidebar-text">Single objects</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-cubes"></i>
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

      <div class="pro-section">
        <h6 class="sidebar-text">Switch account to Pro</h6>
        <p class="small sidebar-text">Unlimited access to high-end 3m mobile service with highest quality.</p>
        <button class="pro-btn sidebar-text">Get your Pro</button>
      </div>

      <ul class="nav flex-column mb-3">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-cog"></i>
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
        <p class="small">ModGallery Bank</p>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="main-content" id="mainContent">
    <div class="container-fluid py-4">
      <h1 class="mb-4">Contenido Principal</h1>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header bg-primary-gradient">
              <h5 class="card-title text-white">Bienvenido a ModGallery</h5>
            </div>
            <div class="card-body">
              <p>Aquí va el contenido principal de tu aplicación.</p>
              <button class="btn btn-primary">Acción principal</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <div class="card-header bg-secondary-gradient">
              <h5 class="card-title text-white">Estadísticas</h5>
            </div>
            <div class="card-body">
              <p>Visualiza tus métricas y estadísticas importantes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
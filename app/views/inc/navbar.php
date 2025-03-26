<body>
  <button class="btn mobile-menu-btn d-lg-none" id="mobileMenuBtn">
    <i class="fas fa-bars"></i>
  </button>

  <div class="d-flex app-container">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 sidebar" id="sidebar">
      <div class="toggle-btn" onclick="toggleSidebar()">
        <i class="fas fa-chevron-left" id="toggle-icon"></i>
      </div>
      
      <a href="/" class="d-flex align-items-center mb-2 mb-md-0 me-md-0 text-white text-decoration-none logo">
        <i class="fas fa-cubes me-2 logo-icon"></i>
        <span class="fs-4 logo-text" >sjsmurcia</span>
      </a>
      <hr>
      
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <i class="fa-brands fa-slack me-2"></i>
            <span class="sidebar-text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-book me-2"></i>
            <span class="sidebar-text">Cursos</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-person me-2"></i>
            <span class="sidebar-text">Catedraticos</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-calendar-days me-2"></i>
            <span class="sidebar-text">Calendario</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fa-regular fa-message me-2"></i>
            <span class="sidebar-text">Mensajes</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fa-solid fa-clock-rotate-left me-2"></i>
            <span class="sidebar-text">Historial</span>
          </a>
        </li>
      </ul>
      
      <!-- <div class="pro-section p-3 mb-3 rounded">
        <h6 class="sidebar-text">Switch account to Pro</h6>
        <p class="small sidebar-text">Unlimited access to high-end 3m mobile service with highest quality.</p>
        <button class="btn pro-btn w-100 sidebar-text">Get your Pro</button>
      </div> -->
      
      <hr>
      
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link text-white">
            <i class="fas fa-cog me-2"></i>
            <span class="sidebar-text">Ajustes</span>
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <i class="fas fa-question-circle me-2"></i>
            <span class="sidebar-text">FAQ</span>
          </a>
        </li>
      </ul>
      
      <div class="dropdown border-top border-secondary mt-auto">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle p-3" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <div class="d-flex flex-column">
            <strong class="sidebar-text">John Doe</strong>
            <small class="sidebar-text">ModGallery Bank</small>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
          <li><a class="dropdown-item" href="#">Cuenta</a></li>
          <li><a class="dropdown-item" href="#">Ajustes</a></li>
          <li><a class="dropdown-item" href="#">Solicitudes</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
        </ul>
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
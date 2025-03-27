<?php
require_once "./config/app.php";
require_once "./autoload.php";

require_once "./app/views/inc/session_start.php";

if (isset($_GET['views'])) {
  $url = explode("/", $_GET['views']);
} else {
  $url = ["login"];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once "./app/views/inc/head.php"; ?>
</head>

<body>

  <?php

  use app\controllers\viewsController;

  $viewsController = new viewsController();
  $vista = $viewsController->obtenerVistasControlador($url[0]);
  if ($vista == "login" || $vista == "404") {
    $require_once = "./app/views/content/" . $vista . "-view.php";
  } else {
    require_once "./app/views/inc/navbar.php";
    require_once $vista;
  }

  require_once "./app/views/inc/script.php"; ?>

  <script>
    const toastButton = document.querySelector('#toast-button');
    const toastContent = document.querySelector('.toast');
    if (toastButton) {
      toastButton.addEventListener('click', () => {
        const toast = new bootstrap.Toast(toastContent);
        toast.show();
      });
    }
  </script>

 <script>
    // Función para toggle del sidebar
    function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const toggleIcon = document.getElementById('toggle-icon');
  const mainContent = document.getElementById('mainContent');

  // Sólo colapsar en pantallas grandes (>992px)
  if (window.innerWidth > 992) {
    sidebar.classList.toggle('collapsed');

    if (sidebar.classList.contains('collapsed')) {
      toggleIcon.classList.remove('fa-chevron-left');
      toggleIcon.classList.add('fa-chevron-right');
      mainContent.style.marginLeft = '70px';
      // Activar tooltips
      document.querySelectorAll('.nav-link').forEach(link => {
        link.setAttribute('data-bs-toggle', 'tooltip');
        link.setAttribute('data-bs-placement', 'right');
        link.setAttribute('title', link.querySelector('.sidebar-text').textContent);
      });
    } else {
      toggleIcon.classList.remove('fa-chevron-right');
      toggleIcon.classList.add('fa-chevron-left');
      mainContent.style.marginLeft = '280px';
      // Desactivar tooltips
      document.querySelectorAll('.nav-link').forEach(link => {
        link.removeAttribute('data-bs-toggle');
        link.removeAttribute('data-bs-placement');
        link.removeAttribute('title');
      });
    }
  }
}

        
        // Responsividad para móviles
        function handleMobileView() {
            const sidebar = document.getElementById('sidebar');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            
            if (window.innerWidth <= 992) {
                sidebar.classList.remove('collapsed');
                mobileMenuBtn.classList.remove('d-none');
                
                mobileMenuBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('mobile-visible');
                });
            } else {
                sidebar.classList.remove('mobile-visible');
                mobileMenuBtn.classList.add('d-none');
            }
        }
        
        // Inicialización
        document.addEventListener('DOMContentLoaded', () => {
            handleMobileView();
            window.addEventListener('resize', handleMobileView);
            
            // Inicializar tooltips de Bootstrap
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
            
            // Asegurar margen inicial
            document.getElementById('mainContent').style.marginLeft = '280px';
        });
    </script>
    <script>
  document.addEventListener('DOMContentLoaded', () => {
    handleMobileView();
    window.addEventListener('resize', handleMobileView);

    // Inicializar tooltips de Bootstrap
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Asegurar margen inicial sólo en escritorio
    if (window.innerWidth > 992) {
      document.getElementById('mainContent').style.marginLeft = '280px';
    } else {
      document.getElementById('mainContent').style.marginLeft = '0';
    }

    // Cerrar sidebar al hacer clic fuera (en móviles)
    document.addEventListener('click', (e) => {
      const sidebar = document.getElementById('sidebar');
      const mobileMenuBtn = document.getElementById('mobileMenuBtn');

      // Sólo si está en modo móvil
      if (window.innerWidth <= 992) {
        // Si el clic no está dentro del sidebar ni en el botón, se cierra
        if (
          !sidebar.contains(e.target) &&
          !mobileMenuBtn.contains(e.target)
        ) {
          sidebar.classList.remove('mobile-visible');
        }
      }
    });
  });
</script>


</body>

</html>
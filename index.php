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
      // Toggle sidebar
function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('collapsed');
    
    const icon = document.getElementById('toggle-icon');
    if (sidebar.classList.contains('collapsed')) {
      icon.classList.remove('fa-chevron-left');
      icon.classList.add('fa-chevron-right');
    } else {
      icon.classList.remove('fa-chevron-right');
      icon.classList.add('fa-chevron-left');
    }
  }
  
  // Mobile menu toggle
  document.getElementById('mobileMenuBtn').addEventListener('click', function() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('mobile-visible');
  });
  
  // Initialize tooltips
  document.addEventListener('DOMContentLoaded', function() {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Set active nav item
    const navItems = document.querySelectorAll('.nav-link');
    navItems.forEach(item => {
      item.addEventListener('click', function() {
        navItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');
      });
    });
  });
</script>
</body>

</html>
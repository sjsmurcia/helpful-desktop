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
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const toggleIcon = document.getElementById('toggle-icon');
            const mainContent = document.getElementById('mainContent');
            
            sidebar.classList.toggle('collapsed');
            
            if (sidebar.classList.contains('collapsed')) {
                toggleIcon.classList.remove('bi-chevron-left');
                toggleIcon.classList.add('bi-chevron-right');
                mainContent.style.marginLeft = '70px';
            } else {
                toggleIcon.classList.remove('bi-chevron-right');
                toggleIcon.classList.add('bi-chevron-left');
                mainContent.style.marginLeft = '280px';
            }
        }
        
        // Responsividad para móviles
        function handleMobileView() {
            const sidebar = document.getElementById('sidebar');
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            
            if (window.innerWidth <= 992) {
                sidebar.classList.remove('collapsed');
                mobileMenuBtn.addEventListener('click', () => {
                    sidebar.classList.toggle('mobile-visible');
                });
            } else {
                sidebar.classList.remove('mobile-visible');
            }
        }
        
        // Inicialización y eventos
        document.addEventListener('DOMContentLoaded', () => {
            handleMobileView();
            // Asegurarse de que el contenido principal no quede detrás del sidebar
            document.getElementById('mainContent').style.marginLeft = '280px';
        });
        
        window.addEventListener('resize', handleMobileView);
    </script>
</body>

</html>
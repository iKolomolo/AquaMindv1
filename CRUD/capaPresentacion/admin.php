<?php include '../capaLogica/verificar_admin.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - AquaMind</title>
    <link rel="icon" href="assets/logo.png">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <nav class="sidebar">
        <div class="sidebar-top-wrapper">
            <div class="sidebar-top">
                <a href="main.html" class="logo__wrapper">
                    <img src="assets/logo.svg" alt="Logo" class="logo-small">
                    <span class="hide company-name">
                        AquaMind
                    </span>
                </a>
            </div>
            <button class="expand-btn" type="button">
                <img src="assets/expand-btn.svg" alt="Expand Button">
            </button>
        </div>
        <div class="search__wrapper">
            <img src="assets/search.svg" alt="Search">
            <input 
                type="text" placeholder="Buscar..."
                aria-labelledby="search-icon"
            >
        </div>
        <div class="sidebar-links">
            <ul>
                <li>
                    <a href="main.html" title="Inicio" class="tooltip">
                        <img src="assets/home.svg" alt="Home">
                        <span class="link hide">Inicio</span>
                        <span class="tooltip__content">Inicio</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="main.html" title="Contrataciones" class="tooltip">
                        <img src="assets/contract.svg" alt="Contracts">
                        <span class="link hide">Contrataciones</span>
                        <span class="tooltip__content">Contrataciones</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#home" title="Reportes" class="tooltip">
                        <img src="assets/report.svg" alt="Reports">
                        <span class="link hide">Reportes</span>
                        <span class="tooltip__content">Reportes</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#home" title="Soporte" class="tooltip">
                        <img src="assets/support.svg" alt="Support">
                        <span class="link hide">Soporte</span>
                        <span class="tooltip__content">Soporte</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#home" title="Notificaciones" class="tooltip">
                        <img src="assets/notifications.svg" alt="Notifications">
                        <span class="link hide">Notificaciones</span>
                        <span class="tooltip__content">Notificaciones</span>
                    </a>
                </li>
            </ul>
            <!--list items-->
        </div>
        <div class="separator"></div>
        <div class="sidebar-links">
            <ul>
                <li>
                    <a href="#settings" title="Configuración" class="tooltip">
                        <img src="assets/settings.svg" alt="Settings">
                        <span class="link hide">Configuración</span>
                        <span class="tooltip__content">Configuración</span>
                    </a>
                </li>
                <li>
                    <a href="login.html" title="Cerrar Sesión" class="tooltip">
                        <img src="assets/logout.svg" alt="Logout">
                        <span class="link hide">Cerrar Sesión</span>
                        <span class="tooltip__content">Cerrar Sesión</span>
                    </a>
                </li>
                <!--more items-->
            </ul>
        </div>
        <div class="sidebar__profile">
            <div class="avatar__wrapper">
                <img class="avatar" src="assets/profile.jpeg" alt="Foto de Perfil">
                <div class="online__status"></div>
            </div>
            <div class="avatar__name hide">
                <div class="user-name">Sebastián</div>
                <div class="email">lopezsebastian.dev@gmail.com</div>
            </div>
        </div>
    </nav>
    <script src="../capaLogica/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? APP_NAME) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription ?? APP_DESCRIPTION) ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= BASE_URL . ($_SERVER['REQUEST_URI'] ?? '') ?>">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="restaurant">
    <meta property="og:title" content="<?= htmlspecialchars($title ?? APP_NAME) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription ?? APP_DESCRIPTION) ?>">
    <meta property="og:url" content="<?= BASE_URL . ($_SERVER['REQUEST_URI'] ?? '') ?>">
    <meta property="og:site_name" content="Sagaretxe Sidrería Vasca">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro.png">

    <!-- Favicon -->
    <link rel="icon" href="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro-1-150x150.png" sizes="32x32">
    <link rel="apple-touch-icon" href="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro-1.png">

    <!-- Tipografía Google: Fraunces (Noble artesanal) + Plus Jakarta Sans (Moderna y legible) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400..700;1,9..144,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Estilos de Sagaretxe -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?v=<?= time() ?>">

    <!-- Schema.org Datos Estructurados para SEO Local de Restaurante -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Sagaretxe – La Sidrería Vasca en Madrid",
      "image": "https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro.png",
      "url": "https://sagaretxe.net",
      "telephone": "+34914462588",
      "servesCuisine": ["Vasca", "Española", "Carnes a la brasa", "Sidrería", "Pintxos"],
      "priceRange": "€€ - €€€",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Calle Eloy Gonzalo, 26",
        "addressLocality": "Madrid",
        "postalCode": "28010",
        "addressRegion": "Madrid",
        "addressCountry": "ES"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 40.43328,
        "longitude": -3.70014
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"],
          "opens": "12:00",
          "closes": "00:30"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Friday", "Saturday"],
          "opens": "12:00",
          "closes": "01:00"
        }
      ]
    }
    </script>
</head>
<body class="page-<?= htmlspecialchars($currentPage ?? 'general') ?>">

    <!-- Barra Superior de Información y Contacto -->
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-bar-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>Chamberí: C/ Eloy Gonzalo, 26, Madrid</span>
            </div>
            <div class="top-bar-item desktop-only">
                <i class="fa-solid fa-clock"></i>
                <span>Cocina y Barra abierta todos los días</span>
            </div>
            <div class="top-bar-actions">
                <a href="tel:+34914462588" class="top-bar-phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>914 46 25 88</span>
                </a>
                <a href="<?= BASE_URL ?>/club" class="top-bar-badge">
                    <i class="fa-solid fa-star"></i>
                    <span>Club Gourmet 12% Dto</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Navegación Principal -->
    <header class="main-header" id="mainHeader">
        <div class="container header-inner">
            <!-- Logo Oficial Sagaretxe -->
            <a href="<?= BASE_URL ?>/" class="brand-logo" aria-label="Inicio Sagaretxe">
                <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe La Sidrería Vasca en Madrid" class="site-logo-img">
            </a>

            <!-- Menú de Navegación Escritorio -->
            <nav class="desktop-nav" aria-label="Menú principal">
                <ul class="nav-list">
                    <li><a href="<?= BASE_URL ?>/" class="<?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>">Inicio</a></li>
                    <li><a href="<?= BASE_URL ?>/nosotros" class="<?= ($currentPage ?? '') === 'nosotros' ? 'active' : '' ?>">Nosotros</a></li>
                    <li><a href="<?= BASE_URL ?>/pintxos" class="<?= ($currentPage ?? '') === 'pintxos' ? 'active' : '' ?>">Pintxos</a></li>
                    <li><a href="<?= BASE_URL ?>/carta" class="<?= ($currentPage ?? '') === 'carta' ? 'active' : '' ?>">Carta</a></li>
                    <li><a href="<?= BASE_URL ?>/menus" class="<?= ($currentPage ?? '') === 'menus' ? 'active' : '' ?>">Menús Grupos</a></li>
                    <li><a href="<?= BASE_URL ?>/eventos" class="<?= ($currentPage ?? '') === 'eventos' ? 'active' : '' ?>">Eventos</a></li>
                    <li><a href="<?= BASE_URL ?>/club" class="<?= ($currentPage ?? '') === 'club' ? 'active' : '' ?>">Club</a></li>
                    <li><a href="<?= BASE_URL ?>/galeria" class="<?= ($currentPage ?? '') === 'galeria' ? 'active' : '' ?>">Galería</a></li>
                    <li><a href="<?= BASE_URL ?>/contacto" class="<?= ($currentPage ?? '') === 'contacto' ? 'active' : '' ?>">Contacto</a></li>
                </ul>
            </nav>

            <!-- Acciones de Cabecera -->
            <div class="header-actions">
                <button class="btn-icon" id="openPhoneModal" title="Llamar o Contactar" aria-label="Información de contacto telefónico">
                    <i class="fa-solid fa-phone"></i>
                </button>
                <a href="<?= BASE_URL ?>/reservas" class="btn btn-primary btn-reserve">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>RESERVAR</span>
                </a>
                <button class="mobile-toggle" id="mobileMenuToggle" aria-label="Abrir menú de navegación">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Menú Móvil Desplegable -->
    <div class="mobile-nav-drawer" id="mobileNavDrawer">
        <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
        <div class="mobile-nav-content">
            <div class="mobile-nav-header">
                <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe" class="mobile-logo-img">
                <button class="close-mobile-nav" id="closeMobileNav" aria-label="Cerrar menú">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <ul class="mobile-nav-list">
                <li><a href="<?= BASE_URL ?>/" class="<?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="<?= BASE_URL ?>/nosotros" class="<?= ($currentPage ?? '') === 'nosotros' ? 'active' : '' ?>"><i class="fa-solid fa-users"></i> Nosotros</a></li>
                <li><a href="<?= BASE_URL ?>/pintxos" class="<?= ($currentPage ?? '') === 'pintxos' ? 'active' : '' ?>"><i class="fa-solid fa-utensils"></i> Barra de Pintxos</a></li>
                <li><a href="<?= BASE_URL ?>/carta" class="<?= ($currentPage ?? '') === 'carta' ? 'active' : '' ?>"><i class="fa-solid fa-book-open"></i> Nuestra Carta</a></li>
                <li><a href="<?= BASE_URL ?>/menus" class="<?= ($currentPage ?? '') === 'menus' ? 'active' : '' ?>"><i class="fa-solid fa-people-group"></i> Menús de Grupos</a></li>
                <li><a href="<?= BASE_URL ?>/eventos" class="<?= ($currentPage ?? '') === 'eventos' ? 'active' : '' ?>"><i class="fa-solid fa-champagne-glasses"></i> Eventos</a></li>
                <li><a href="<?= BASE_URL ?>/club" class="<?= ($currentPage ?? '') === 'club' ? 'active' : '' ?>"><i class="fa-solid fa-id-card"></i> Club Sagaretxe (12% Dto)</a></li>
                <li><a href="<?= BASE_URL ?>/galeria" class="<?= ($currentPage ?? '') === 'galeria' ? 'active' : '' ?>"><i class="fa-solid fa-images"></i> Galería de Fotos</a></li>
                <li><a href="<?= BASE_URL ?>/contacto" class="<?= ($currentPage ?? '') === 'contacto' ? 'active' : '' ?>"><i class="fa-solid fa-location-dot"></i> Contacto y Ubicación</a></li>
            </ul>
            <div class="mobile-nav-footer">
                <a href="<?= BASE_URL ?>/reservas" class="btn btn-primary btn-block">
                    <i class="fa-solid fa-calendar-check"></i> Reservar Mesa Online
                </a>
                <div class="mobile-quick-phones">
                    <a href="tel:+34914462588" class="phone-link"><i class="fa-solid fa-phone"></i> 914 46 25 88</a>
                    <a href="tel:+34622179060" class="phone-link"><i class="fa-solid fa-mobile-screen"></i> 622 179 060</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal de cada Vista -->
    <main id="mainContent" class="main-content">
        <?= $content ?>
    </main>

    <!-- Pie de Página -->
    <footer class="main-footer">
        <div class="container footer-grid">
            <!-- Columna 1: Marca & Esencia -->
            <div class="footer-col footer-about">
                <a href="<?= BASE_URL ?>/" class="footer-brand" aria-label="Inicio Sagaretxe">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe La Sidrería Vasca en Madrid" class="footer-logo-img">
                </a>
                <p class="footer-text">
                    Desde 1999 en Chamberí acercamos a la capital el ambiente y la tradición culinaria de las sidrerías vascas. Producto de temporada, brasa de carbón de encina, sidra al txotx y hospitalidad.
                </p>
                <div class="footer-socials">
                    <a href="<?= SOCIAL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?= SOCIAL_TWITTER ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>

            <!-- Columna 2: Horarios -->
            <div class="footer-col footer-hours">
                <h3 class="footer-heading"><i class="fa-solid fa-clock"></i> Horarios</h3>
                <div class="hours-card">
                    <div class="hours-row">
                        <span class="day">Domingo a Jueves:</span>
                        <span class="time"><?= HOURS_DOM_JUE ?></span>
                    </div>
                    <div class="hours-row highlight">
                        <span class="day">Viernes y Sábado:</span>
                        <span class="time"><?= HOURS_VIE_SAB ?></span>
                    </div>
                    <p class="hours-note">* Servicio ininterrumpido en barra para degustar pintxos y sidra.</p>
                </div>
            </div>

            <!-- Columna 3: Ubicación y Contacto -->
            <div class="footer-col footer-contact">
                <h3 class="footer-heading"><i class="fa-solid fa-location-dot"></i> Dónde Estamos</h3>
                <p class="address-line">
                    <strong>Sidrería Sagaretxe</strong><br>
                    <?= RESTAURANT_ADDRESS ?>
                </p>
                <div class="contact-links">
                    <a href="tel:+34914462588"><i class="fa-solid fa-phone"></i> (+34) 914 46 25 88</a>
                    <a href="tel:+34914456023"><i class="fa-solid fa-phone"></i> (+34) 914 45 60 23</a>
                    <a href="tel:+34622179060"><i class="fa-solid fa-mobile-screen"></i> 622 179 060 / 633 179 060</a>
                    <a href="mailto:<?= RESTAURANT_EMAIL ?>"><i class="fa-solid fa-envelope"></i> <?= RESTAURANT_EMAIL ?></a>
                </div>
            </div>

            <!-- Columna 4: Club & Accesos Rápidos -->
            <div class="footer-col footer-club">
                <h3 class="footer-heading"><i class="fa-solid fa-award"></i> Club Sagaretxe</h3>
                <p class="club-desc">
                    Únete a nuestro Club Gourmet de forma totalmente gratuita y disfruta de un <strong>12% de descuento directo</strong> en toda la carta y promociones de cumpleaños.
                </p>
                <a href="<?= BASE_URL ?>/club" class="btn btn-outline btn-sm">
                    Inscribirme Gratis
                </a>
                <div class="footer-quick-links">
                    <a href="<?= BASE_URL ?>/reservas">Reservar Mesa</a>
                    <a href="<?= BASE_URL ?>/menus">Menús Empresas</a>
                    <a href="<?= BASE_URL ?>/carta">Carta y Alérgenos</a>
                </div>
            </div>
        </div>

        <!-- Copyright y Legales -->
        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>© <?= date('Y') ?> Sidrería Sagaretxe. Todos los derechos reservados.</p>
                <div class="legal-links">
                    <a href="<?= BASE_URL ?>/contacto">Aviso Legal</a>
                    <span>·</span>
                    <a href="<?= BASE_URL ?>/contacto">Política de Privacidad</a>
                    <span>·</span>
                    <a href="<?= BASE_URL ?>/contacto">Política de Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Barra de Acción Rápida Flotante en Móviles -->
    <div class="mobile-bottom-bar">
        <a href="tel:+34914462588" class="mobile-bar-btn">
            <i class="fa-solid fa-phone"></i>
            <span>Llamar</span>
        </a>
        <a href="<?= BASE_URL ?>/carta" class="mobile-bar-btn">
            <i class="fa-solid fa-book-open"></i>
            <span>Carta</span>
        </a>
        <a href="<?= BASE_URL ?>/reservas" class="mobile-bar-btn active">
            <i class="fa-solid fa-calendar-check"></i>
            <span>Reservar</span>
        </a>
        <a href="<?= BASE_URL ?>/contacto" class="mobile-bar-btn">
            <i class="fa-solid fa-map-location-dot"></i>
            <span>Cómo Llegar</span>
        </a>
    </div>

    <!-- Modal Rápido de Teléfonos -->
    <div class="modal-backdrop" id="phoneModal">
        <div class="modal-card">
            <div class="modal-header">
                <h3><i class="fa-solid fa-phone-volume"></i> Teléfonos de Atención</h3>
                <button class="modal-close" id="closePhoneModal" aria-label="Cerrar ventana">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-subtitle">Llámanos directamente para consultas, reservas de grupos grandes o celebraciones especiales:</p>
                <div class="phone-list">
                    <a href="tel:+34914462588" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="phone-item-info">
                            <strong>914 46 25 88</strong>
                            <span>Teléfono Fijo Principal</span>
                        </div>
                        <span class="phone-call-action">Llamar</span>
                    </a>
                    <a href="tel:+34914456023" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="phone-item-info">
                            <strong>914 45 60 23</strong>
                            <span>Línea Secundaria</span>
                        </div>
                        <span class="phone-call-action">Llamar</span>
                    </a>
                    <a href="tel:+34622179060" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div class="phone-item-info">
                            <strong>622 179 060</strong>
                            <span>Móvil / WhatsApp</span>
                        </div>
                        <span class="phone-call-action">Llamar</span>
                    </a>
                    <a href="tel:+34633179060" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div class="phone-item-info">
                            <strong>633 179 060</strong>
                            <span>Móvil</span>
                        </div>
                        <span class="phone-call-action">Llamar</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= BASE_URL ?>/reservas" class="btn btn-primary btn-block">
                    <i class="fa-solid fa-calendar-check"></i> O Reserva Online Aquí
                </a>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        window.SAGARETXE_CONFIG = {
            baseUrl: <?= json_encode(BASE_URL) ?>,
            apiUrl: <?= json_encode(API_BASE_URL) ?>
        };
    </script>
    <script src="<?= BASE_URL ?>/assets/js/app.js?v=<?= time() ?>"></script>
    <?php if (($currentPage ?? '') === 'reservas' || ($extraScript ?? '') === 'reservations.js'): ?>
        <script src="<?= BASE_URL ?>/assets/js/reservations.js?v=<?= time() ?>"></script>
    <?php elseif (($currentPage ?? '') === 'club' || ($extraScript ?? '') === 'club.js'): ?>
        <script src="<?= BASE_URL ?>/assets/js/club.js?v=<?= time() ?>"></script>
    <?php elseif (isset($extraScript)): ?>
        <script src="<?= BASE_URL ?>/assets/js/<?= htmlspecialchars($extraScript) ?>?v=<?= time() ?>"></script>
    <?php endif; ?>
</body>
</html>

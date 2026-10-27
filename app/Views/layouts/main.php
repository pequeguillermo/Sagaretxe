<!DOCTYPE html>
<html lang="<?= htmlspecialchars(lang()) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? (isEn() ? 'Sagaretxe – Basque Grill & Cider House in Madrid | Pintxos & Ember Meats' : APP_NAME)) ?></title>
    <meta name="description" content="<?= htmlspecialchars($metaDescription ?? (isEn() ? 'Authentic Basque grill and cider house in Chamberí (Madrid). Charcoal-grilled aged ribeyes, fresh pintxo counter with over 150 varieties, wild fish and natural cider straight from the barrel.' : APP_DESCRIPTION)) ?>">
    <meta name="robots" content="index, follow">

    <!-- Canonical & Alternates Bilingües (Hreflang estilo Lana) -->
    <link rel="canonical" href="<?= htmlspecialchars(langUrl($_SERVER['REQUEST_URI'] ?? '/')) ?>">
    <link rel="alternate" hreflang="es" href="<?= htmlspecialchars(switchLangUrl('es')) ?>">
    <link rel="alternate" hreflang="en" href="<?= htmlspecialchars(switchLangUrl('en')) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= BASE_URL ?>/">

    <!-- Open Graph / Redes Sociales -->
    <meta property="og:type" content="restaurant">
    <meta property="og:title" content="<?= htmlspecialchars($title ?? (isEn() ? 'Sagaretxe – Basque Grill & Cider House Madrid' : APP_NAME)) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($metaDescription ?? APP_DESCRIPTION) ?>">
    <meta property="og:url" content="<?= htmlspecialchars(langUrl($_SERVER['REQUEST_URI'] ?? '/')) ?>">
    <meta property="og:site_name" content="Sagaretxe Asador & Sidrería Vasca">
    <meta property="og:locale" content="<?= isEn() ? 'en_US' : 'es_ES' ?>">
    <meta property="og:image" content="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro.png">

    <!-- Favicon -->
    <link rel="icon" href="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro-1-150x150.png" sizes="32x32">
    <link rel="apple-touch-icon" href="https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro-1.png">

    <!-- Tipografía Editorial de Alta Gastronomía: Cormorant Garamond (Serif noble) + Plus Jakarta Sans (Geométrica moderna) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Iconos FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Estilos de Sagaretxe (Estética Inspirada en Lana: Dark Luxury, Hairline Gold & Editorial Spacing) -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css?v=<?= time() ?>">

    <!-- Schema.org Datos Estructurados -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Sagaretxe – Asador y Sidrería Vasca",
      "image": "https://sagaretxe.net/wp-content/uploads/2023/10/logo-sagarretxe-claro.png",
      "url": "https://sagaretxe.net",
      "telephone": ["+34914462588", "+34914456023", "+34622179060", "+34633179060"],
      "servesCuisine": ["Basque", "Steakhouse", "Grill", "Pintxos", "Cider House"],
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
      }
    }
    </script>
</head>
<body class="page-<?= htmlspecialchars($currentPage ?? 'general') ?> lang-<?= htmlspecialchars(lang()) ?>">

    <!-- Top Bar Minimalista y Noble -->
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-bar-item">
                <i class="fa-solid fa-location-dot"></i>
                <span><?= __('topbar_location') ?></span>
            </div>
            <div class="top-bar-item desktop-only">
                <i class="fa-solid fa-fire-burner"></i>
                <span><?= __('topbar_schedule') ?></span>
            </div>
            <div class="top-bar-actions">
                <a href="<?= langUrl('/club') ?>" class="top-bar-badge">
                    <i class="fa-solid fa-crown"></i>
                    <span><?= __('topbar_club_badge') ?></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Navegación Principal (Estilo Lana: Oscuro, Sofisticado, Tipografía Refinada) -->
    <header class="main-header" id="mainHeader">
        <div class="container header-inner">
            <!-- Logo Sagaretxe -->
            <a href="<?= langUrl('/') ?>" class="brand-logo" aria-label="Sagaretxe Asador Vasco">
                <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe Asador & Sidrería Vasca en Madrid" class="site-logo-img">
            </a>

            <!-- Menú de Navegación Escritorio (Una sola línea relajada y respirada) -->
            <nav class="desktop-nav" aria-label="Menú principal">
                <ul class="nav-list">
                    <li><a href="<?= langUrl('/nosotros') ?>" class="<?= ($currentPage ?? '') === 'nosotros' ? 'active' : '' ?>"><?= __('nav_about') ?></a></li>
                    <li><a href="<?= langUrl('/pintxos') ?>" class="<?= ($currentPage ?? '') === 'pintxos' ? 'active' : '' ?>"><?= __('nav_pintxos') ?></a></li>
                    <li><a href="<?= langUrl('/carta') ?>" class="<?= ($currentPage ?? '') === 'carta' ? 'active' : '' ?>"><?= __('nav_menu') ?></a></li>
                    <li><a href="<?= langUrl('/menus') ?>" class="<?= ($currentPage ?? '') === 'menus' ? 'active' : '' ?>"><?= __('nav_group_menus') ?></a></li>
                    <li><a href="<?= langUrl('/eventos') ?>" class="<?= ($currentPage ?? '') === 'eventos' ? 'active' : '' ?>"><?= __('nav_events') ?></a></li>
                    <li><a href="<?= langUrl('/contacto') ?>" class="<?= ($currentPage ?? '') === 'contacto' ? 'active' : '' ?>"><?= __('nav_contact') ?></a></li>
                </ul>
            </nav>

            <!-- Acciones de Cabecera: Botones de Teléfono, Reserva y Galería (Mismo formato visual de alta gama) -->
            <div class="header-actions">
                <button class="btn-lana-action btn-lana-phone" id="openPhoneModal" title="<?= isEn() ? 'Phone numbers' : 'Teléfonos de atención' ?>" aria-label="Teléfonos">
                    <i class="fa-solid fa-phone"></i>
                    <span class="btn-action-text">914 46 25 88</span>
                </button>

                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-action btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span class="btn-action-text"><?= __('nav_reserve') ?></span>
                </a>

                <a href="<?= langUrl('/galeria') ?>" class="btn-lana-action btn-lana-gallery <?= ($currentPage ?? '') === 'galeria' ? 'active' : '' ?>" title="<?= __('nav_gallery') ?>" aria-label="<?= __('nav_gallery') ?>">
                    <i class="fa-solid fa-camera"></i>
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
                <a href="<?= langUrl('/') ?>" aria-label="Sagaretxe">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe" class="mobile-logo-img">
                </a>
                <button class="close-mobile-nav" id="closeMobileNav" aria-label="Cerrar menú">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Selector Idioma en Móvil -->
            <div class="mobile-lang-bar">
                <span><?= isEn() ? 'Language:' : 'Idioma:' ?></span>
                <div class="mobile-lang-options">
                    <a href="<?= switchLangUrl('es') ?>" class="mobile-lang-btn <?= !isEn() ? 'active' : '' ?>">ESP</a>
                    <span class="mobile-lang-sep">|</span>
                    <a href="<?= switchLangUrl('en') ?>" class="mobile-lang-btn <?= isEn() ? 'active' : '' ?>">ENG</a>
                </div>
            </div>

            <ul class="mobile-nav-list">
                <li><a href="<?= langUrl('/') ?>" class="<?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>"><i class="fa-solid fa-house"></i> <?= __('nav_home') ?></a></li>
                <li><a href="<?= langUrl('/nosotros') ?>" class="<?= ($currentPage ?? '') === 'nosotros' ? 'active' : '' ?>"><i class="fa-solid fa-gem"></i> <?= __('nav_about') ?></a></li>
                <li><a href="<?= langUrl('/pintxos') ?>" class="<?= ($currentPage ?? '') === 'pintxos' ? 'active' : '' ?>"><i class="fa-solid fa-utensils"></i> <?= __('nav_pintxos') ?></a></li>
                <li><a href="<?= langUrl('/carta') ?>" class="<?= ($currentPage ?? '') === 'carta' ? 'active' : '' ?>"><i class="fa-solid fa-book-open"></i> <?= __('nav_menu') ?></a></li>
                <li><a href="<?= langUrl('/menus') ?>" class="<?= ($currentPage ?? '') === 'menus' ? 'active' : '' ?>"><i class="fa-solid fa-people-group"></i> <?= __('nav_group_menus') ?></a></li>
                <li><a href="<?= langUrl('/eventos') ?>" class="<?= ($currentPage ?? '') === 'eventos' ? 'active' : '' ?>"><i class="fa-solid fa-champagne-glasses"></i> <?= __('nav_events') ?></a></li>
                <li><a href="<?= langUrl('/club') ?>" class="<?= ($currentPage ?? '') === 'club' ? 'active' : '' ?>"><i class="fa-solid fa-crown"></i> <?= __('nav_club') ?></a></li>
                <li><a href="<?= langUrl('/galeria') ?>" class="<?= ($currentPage ?? '') === 'galeria' ? 'active' : '' ?>"><i class="fa-solid fa-images"></i> <?= __('nav_gallery') ?></a></li>
                <li><a href="<?= langUrl('/contacto') ?>" class="<?= ($currentPage ?? '') === 'contacto' ? 'active' : '' ?>"><i class="fa-solid fa-location-dot"></i> <?= __('nav_contact') ?></a></li>
            </ul>

            <div class="mobile-nav-footer">
                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-block" style="text-align: center; justify-content: center; width: 100%;">
                    <i class="fa-solid fa-calendar-check" style="margin-right: 8px;"></i> <?= __('nav_reserve_online') ?>
                </a>
                <div class="mobile-quick-phones">
                    <a href="tel:+34914462588" class="phone-link"><i class="fa-solid fa-phone"></i> 914 46 25 88</a>
                    <a href="tel:+34622179060" class="phone-link"><i class="fa-solid fa-mobile-screen"></i> 622 179 060</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido Principal -->
    <main id="mainContent" class="main-content">
        <?= $content ?>
    </main>

    <!-- Pie de Página (Inspirado en la estructura de 3 Columnas de Restaurante Lana) -->
    <footer class="main-footer">
        <div class="container footer-grid-lana">
            <!-- Columna 1: Horarios -->
            <div class="footer-col-lana">
                <h3 class="footer-heading-lana"><?= __('footer_hours') ?></h3>
                <div class="footer-hours-block">
                    <p class="footer-line">12:00 a 17:00 – 19:00 a 00:30</p>
                    <p class="footer-subline"><?= isEn() ? 'Sunday to Thursday' : 'Domingo a Jueves' ?></p>
                    <p class="footer-line" style="margin-top: 12px;">12:00 a 17:00 – 19:00 a 01:00</p>
                    <p class="footer-subline"><?= isEn() ? 'Friday & Saturday' : 'Viernes y Sábado' ?></p>
                    <p class="footer-note-subtle">
                        * <?= __('footer_hours_note') ?>
                    </p>
                </div>
            </div>

            <!-- Columna 2: Contacto Directo & Reservas -->
            <div class="footer-col-lana footer-col-center">
                <a href="<?= langUrl('/') ?>" class="footer-brand-lana">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png" alt="Sagaretxe Asador Vasco" class="footer-logo-img">
                </a>
                <h3 class="footer-heading-lana" style="margin-top: 14px;"><?= __('footer_contact') ?></h3>
                <div class="footer-contact-block">
                    <a href="mailto:<?= RESTAURANT_EMAIL ?>" class="footer-contact-link"><i class="fa-solid fa-envelope"></i> <?= RESTAURANT_EMAIL ?></a>
                    
                    <div class="footer-phones-container">
                        <div class="footer-phones-line">
                            <span class="footer-phone-tag"><i class="fa-solid fa-phone"></i></span>
                            <a href="tel:+34914462588" class="footer-contact-link footer-phone-highlight">(+34) 914 46 25 88</a>
                            <span class="footer-phone-slash">//</span>
                            <a href="tel:+34914456023" class="footer-contact-link footer-phone-item">914 45 60 23</a>
                        </div>
                        <div class="footer-phones-line">
                            <span class="footer-phone-tag"><i class="fa-solid fa-mobile-screen"></i></span>
                            <a href="tel:+34622179060" class="footer-contact-link footer-phone-item">622 179 060</a>
                            <span class="footer-phone-slash">//</span>
                            <a href="tel:+34633179060" class="footer-contact-link footer-phone-item">633 179 060</a>
                        </div>
                    </div>
                </div>
                <div class="footer-socials-lana">
                    <a href="<?= SOCIAL_INSTAGRAM ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="<?= SOCIAL_FACEBOOK ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?= SOCIAL_TWITTER ?>" target="_blank" rel="noopener noreferrer" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
                <div style="margin-top: 24px;">
                    <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                        <span class="btn-lana-dot"></span>
                        <span><?= __('nav_reserve_online') ?></span>
                    </a>
                </div>
            </div>

            <!-- Columna 3: Dirección & Mapa -->
            <div class="footer-col-lana">
                <h3 class="footer-heading-lana"><?= __('footer_address') ?></h3>
                <div class="footer-address-block">
                    <p class="footer-line">Calle Eloy Gonzalo, 26</p>
                    <p class="footer-line">28010 Madrid | <?= isEn() ? 'Spain' : 'España' ?></p>
                    <p class="footer-subline" style="margin-top: 8px;"><?= isEn() ? 'Chamberí District' : 'Barrio de Chamberí' ?></p>
                    <a href="https://maps.google.com/?q=Sagaretxe+Calle+Eloy+Gonzalo+26+Madrid" target="_blank" rel="noopener noreferrer" class="footer-map-link">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <span><?= isEn() ? 'Open in Google Maps' : 'Abrir en Google Maps' ?></span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright y Enlaces Legales -->
        <div class="footer-bottom-lana">
            <div class="container footer-bottom-inner-lana">
                <p class="footer-copy">© <?= date('Y') ?> Sagaretxe. <?= __('footer_rights') ?></p>
                
                <!-- Selector Bilingüe Footer -->
                <div class="footer-lang-selector">
                    <a href="<?= switchLangUrl('es') ?>" class="<?= !isEn() ? 'active' : '' ?>">Español</a>
                    <span class="sep">·</span>
                    <a href="<?= switchLangUrl('en') ?>" class="<?= isEn() ? 'active' : '' ?>">English</a>
                </div>

                <div class="footer-legal-links-lana">
                    <a href="<?= langUrl('/contacto') ?>"><?= __('footer_legal') ?></a>
                    <span>·</span>
                    <a href="<?= langUrl('/contacto') ?>"><?= __('footer_privacy') ?></a>
                    <span>·</span>
                    <a href="<?= langUrl('/contacto') ?>"><?= __('footer_cookies') ?></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Barra de Acción Rápida Flotante en Móviles -->
    <div class="mobile-bottom-bar">
        <a href="tel:+34914462588" class="mobile-bar-btn">
            <i class="fa-solid fa-phone"></i>
            <span><?= isEn() ? 'Call' : 'Llamar' ?></span>
        </a>
        <a href="<?= langUrl('/carta') ?>" class="mobile-bar-btn">
            <i class="fa-solid fa-book-open"></i>
            <span><?= isEn() ? 'Menu' : 'Carta' ?></span>
        </a>
        <a href="<?= langUrl('/reservas') ?>" class="mobile-bar-btn active">
            <i class="fa-solid fa-calendar-check"></i>
            <span><?= isEn() ? 'Book' : 'Reservar' ?></span>
        </a>
        <a href="<?= langUrl('/contacto') ?>" class="mobile-bar-btn">
            <i class="fa-solid fa-map-location-dot"></i>
            <span><?= isEn() ? 'Map' : 'Ubicación' ?></span>
        </a>
    </div>

    <!-- Modal Rápido de Teléfonos -->
    <div class="modal-backdrop" id="phoneModal">
        <div class="modal-card">
            <div class="modal-header">
                <h3><i class="fa-solid fa-phone-volume"></i> <?= isEn() ? 'Customer Service & Reservations' : 'Teléfonos de Atención y Reservas' ?></h3>
                <button class="modal-close" id="closePhoneModal" aria-label="Cerrar ventana">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <p class="modal-subtitle"><?= isEn() ? 'Call our team directly for table bookings, group dinners, and private events:' : 'Llámanos directamente para consultas, reservas de grupos grandes o celebraciones especiales:' ?></p>
                <div class="phone-list">
                    <a href="tel:+34914462588" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="phone-item-info">
                            <strong>914 46 25 88</strong>
                            <span><?= isEn() ? 'Main Phone' : 'Teléfono Fijo Principal' ?></span>
                        </div>
                        <span class="phone-call-action"><?= isEn() ? 'Call' : 'Llamar' ?></span>
                    </a>
                    <a href="tel:+34914456023" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="phone-item-info">
                            <strong>914 45 60 23</strong>
                            <span><?= isEn() ? 'Secondary Line' : 'Línea Secundaria' ?></span>
                        </div>
                        <span class="phone-call-action"><?= isEn() ? 'Call' : 'Llamar' ?></span>
                    </a>
                    <a href="tel:+34622179060" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div class="phone-item-info">
                            <strong>622 179 060</strong>
                            <span>WhatsApp / Mobile</span>
                        </div>
                        <span class="phone-call-action"><?= isEn() ? 'Call' : 'Llamar' ?></span>
                    </a>
                    <a href="tel:+34633179060" class="phone-item">
                        <div class="phone-item-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div class="phone-item-info">
                            <strong>633 179 060</strong>
                            <span>Mobile Line 2</span>
                        </div>
                        <span class="phone-call-action"><?= isEn() ? 'Call' : 'Llamar' ?></span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-block" style="text-align: center; justify-content: center; width: 100%;">
                    <i class="fa-solid fa-calendar-check" style="margin-right: 8px;"></i> <?= __('nav_reserve_online') ?>
                </a>
            </div>
        </div>
    </div>

    <!-- 1. Selector de Idioma Flotante Inferior Izquierdo (Estilo Lana) -->
    <aside class="floating-lang-dock" id="floatingLangDock" aria-label="<?= isEn() ? 'Language Switcher' : 'Selector de Idioma' ?>">
        <i class="fa-solid fa-globe lang-dock-globe"></i>
        <a href="<?= switchLangUrl('es') ?>" class="floating-lang-btn <?= !isEn() ? 'active' : '' ?>" title="Español">ESP</a>
        <span class="floating-lang-sep">/</span>
        <a href="<?= switchLangUrl('en') ?>" class="floating-lang-btn <?= isEn() ? 'active' : '' ?>" title="English">ENG</a>
    </aside>

    <!-- 2. Acciones Rápidas Flotantes Inferior Derecho (Teléfono y Reserva con Brillo Dinámico) -->
    <aside class="floating-actions-dock" id="floatingActionsDock" aria-label="<?= isEn() ? 'Quick Actions' : 'Acciones Rápidas' ?>">
        <button class="floating-action-btn floating-btn-phone" id="openFloatingPhoneModal" title="<?= isEn() ? 'Call or view phone numbers' : 'Llamar o ver teléfonos' ?>" aria-label="Teléfono">
            <i class="fa-solid fa-phone"></i>
            <span class="floating-btn-text">914 46 25 88</span>
        </button>

        <a href="<?= langUrl('/reservas') ?>" class="floating-action-btn floating-btn-reserve" title="<?= isEn() ? 'Book a Table' : 'Reservar Mesa' ?>" aria-label="Reservar Mesa">
            <span class="floating-reserve-pulse"></span>
            <span class="btn-lana-dot"></span>
            <span class="floating-btn-text"><?= __('nav_reserve') ?></span>
        </a>
    </aside>

    <!-- Scripts -->
    <script>
        window.SAGARETXE_CONFIG = {
            baseUrl: <?= json_encode(BASE_URL) ?>,
            apiUrl: <?= json_encode(API_BASE_URL) ?>,
            lang: <?= json_encode(lang()) ?>
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

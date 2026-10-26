<?php
declare(strict_types=1);

namespace App\Services;

class Language {
    private static string $currentLang = 'es';
    private static array $translations = [];

    public static function init(): void {
        // Detectar idioma desde URL
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        if (false !== ($pos = strpos($uri, '?'))) {
            $uri = substr($uri, 0, $pos);
        }

        // Quitar la ruta base si se ejecuta en un subdirectorio
        $scriptName = dirname($_SERVER['SCRIPT_NAME'] ?? '');
        if ($scriptName !== '/' && $scriptName !== '\\' && strpos($uri, $scriptName) === 0) {
            $uri = substr($uri, strlen($scriptName));
        }

        $uri = trim($uri, '/');
        $parts = explode('/', $uri);

        if (!empty($parts[0]) && strtolower($parts[0]) === 'en') {
            self::$currentLang = 'en';
        } elseif (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en'], true)) {
            self::$currentLang = $_GET['lang'];
        } elseif (isset($_COOKIE['sagaretxe_lang']) && in_array($_COOKIE['sagaretxe_lang'], ['es', 'en'], true)) {
            self::$currentLang = $_COOKIE['sagaretxe_lang'];
        } else {
            self::$currentLang = 'es';
        }

        self::loadTranslations();
    }

    public static function current(): string {
        return self::$currentLang;
    }

    public static function isEnglish(): bool {
        return self::$currentLang === 'en';
    }

    public static function setLang(string $lang): void {
        if (in_array($lang, ['es', 'en'], true)) {
            self::$currentLang = $lang;
            if (!headers_sent()) {
                setcookie('sagaretxe_lang', $lang, time() + (86400 * 365), '/');
            }
        }
    }

    public static function get(string $key, ?string $default = null): string {
        $lang = self::$currentLang;
        if (isset(self::$translations[$lang][$key])) {
            return self::$translations[$lang][$key];
        }
        if (isset(self::$translations['es'][$key])) {
            return self::$translations['es'][$key];
        }
        return $default ?? $key;
    }

    public static function url(string $path = '/', ?string $targetLang = null): string {
        $lang = $targetLang ?? self::$currentLang;
        $path = '/' . ltrim($path, '/');

        // Limpieza de cualquier prefijo /public accidental
        if (strpos($path, '/public/') === 0) {
            $path = substr($path, 7);
        } elseif ($path === '/public') {
            $path = '/';
        }

        // Mapeo semántico de rutas si aplica
        if ($lang === 'en') {
            if ($path === '/' || $path === '') {
                return BASE_URL . '/en';
            }
            // Evitar duplicar /en
            if (strpos($path, '/en') === 0) {
                return BASE_URL . $path;
            }
            return BASE_URL . '/en' . $path;
        } else {
            // Idioma español (raíz)
            if (strpos($path, '/en/') === 0) {
                $path = substr($path, 3);
            } elseif ($path === '/en') {
                $path = '/';
            }
            return BASE_URL . $path;
        }
    }

    public static function switchUrl(string $targetLang): string {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        if (false !== ($pos = strpos($uri, '?'))) {
            $query = substr($uri, $pos);
            $cleanUri = substr($uri, 0, $pos);
        } else {
            $query = '';
            $cleanUri = $uri;
        }

        $scriptName = dirname($_SERVER['SCRIPT_NAME'] ?? '');
        if ($scriptName !== '/' && $scriptName !== '\\' && strpos($cleanUri, $scriptName) === 0) {
            $cleanUri = substr($cleanUri, strlen($scriptName));
        }

        $cleanUri = trim($cleanUri, '/');
        $parts = explode('/', $cleanUri);

        // Si empieza por public, removerlo
        if (!empty($parts[0]) && strtolower($parts[0]) === 'public') {
            array_shift($parts);
        }

        if (!empty($parts[0]) && strtolower($parts[0]) === 'en') {
            array_shift($parts);
        }

        $remainingPath = implode('/', $parts);

        if ($targetLang === 'en') {
            $newPath = '/en' . ($remainingPath ? '/' . $remainingPath : '');
        } else {
            $newPath = '/' . $remainingPath;
        }

        return BASE_URL . $newPath . $query;
    }

    private static function loadTranslations(): void {
        self::$translations = [
            'es' => [
                // Navegación
                'nav_home' => 'INICIO',
                'nav_about' => 'NOSOTROS',
                'nav_pintxos' => 'PINTXOS',
                'nav_menu' => 'CARTA',
                'nav_wine' => 'BODEGA & SIDRA',
                'nav_group_menus' => 'MENÚS GRUPOS',
                'nav_events' => 'EVENTOS',
                'nav_club' => 'CLUB',
                'nav_gallery' => 'GALERÍA',
                'nav_contact' => 'CONTACTO',
                'nav_reserve' => 'RESERVAR',
                'nav_reserve_online' => 'RESERVAS ONLINE',

                // Top bar & claim
                'topbar_location' => 'Chamberí: C/ Eloy Gonzalo, 26, Madrid',
                'topbar_schedule' => 'Cocina y Parrilla abiertas todos los días',
                'topbar_club_badge' => 'Club Sagaretxe 12% Dto',

                // Hero
                'hero_badge' => 'ASADOR & SIDRERÍA VASCA • CHAMBERÍ, MADRID',
                'hero_title' => 'El Culto a la Brasa y la Tradición Vasca en Madrid',
                'hero_subtitle' => 'En 1999, en pleno barrio de Chamberí, abrió sus puertas Sagaretxe. Veinticinco años acercando a la capital la autenticidad, la parrilla al carbón de encina y la emblemática barra de pintxos de los asadores vascos.',
                'hero_btn_reserve' => 'RESERVAR MESA',
                'hero_btn_menu' => 'VER CARTA COMPLETA',
                'hero_badge_grill' => '100% Carbón de encina',
                'hero_badge_cider' => 'Sidra al txotx de kupela directa',
                'hero_badge_pintxos' => 'Barra viva con +150 variedades',
                'hero_badge_origin' => 'Chamberí desde 1999',

                // Booking bar
                'book_diners' => 'Comensales',
                'book_date' => 'Fecha',
                'book_shift' => 'Servicio',
                'book_lunch' => 'Almuerzo (13:30 - 16:30)',
                'book_dinner' => 'Cena a la Brasa (20:00 - 00:00)',
                'book_submit' => 'CONSULTAR MESA',

                // Manifesto / Filosofía
                'manifesto_tag' => 'NUESTRA ESENCIA',
                'manifesto_quote' => '«La nobleza del producto de temporada, el dominio del fuego y la hospitalidad sin prisas de una auténtica sidrería vasca.»',
                'manifesto_author' => 'Sagaretxe Asador Vasco • Chamberí',

                // Trilogía gastronómica
                'pillars_tag' => 'LA CASA',
                'pillars_title' => 'Tres Pilares de Nuestra Identidad',
                'pillar_1_title' => 'La Parrilla al Carbón de Encina',
                'pillar_1_desc' => 'Txuleta de vaca seleccionada con maduración óptima, pescados salvajes con refrito al estilo Donostia y verduras de huerta asadas al punto exacto de humo y brasa viva.',
                'pillar_1_link' => 'DESCUBRIR NUESTRAS CARNES',

                'pillar_2_title' => 'La Barra de Pintxos',
                'pillar_2_desc' => 'Más de 150 variedades frías y calientes en continua rotación. Desde la clásica gilda donostiarra hasta cazuelitas de txangurro, bacalao y foie fresco a la plancha.',
                'pillar_2_link' => 'VER LA BARRA DE PINTXOS',

                'pillar_3_title' => 'La Tradición del Txotx',
                'pillar_3_desc' => 'Kupelas abiertas todo el año para escanciar la sidra natural vasca directamente del barril, acompañada de nuestra famosa tortilla de bacalao y chuletón al peso.',
                'pillar_3_link' => 'CONOCER EL RITUAL',

                // Signature Cuts / Mesa de carnes (estilo Lana)
                'cuts_tag' => 'CORTES NOBLES',
                'cuts_title' => 'Selección de Brasa y Temporada',
                'cuts_subtitle' => 'Piezas seleccionadas con pesaje y presentación previa en mesa para su perfecto asado a la parrilla.',
                'cut_1_name' => 'Txuleta de Vaca Vieja Selección',
                'cut_1_desc' => 'Maduración controlada de 45 días, grasa infiltrada y sabor profundo al carbón de encina.',
                'cut_1_price' => 'Al peso / s.m.',
                'cut_2_name' => 'Chuletón de Rubia Gallega',
                'cut_2_desc' => 'Carne tierna y equilibrada con aromas nobles de pasto y humo de madera noble.',
                'cut_2_price' => 'Al peso / s.m.',
                'cut_3_name' => 'Tortilla de Bacalao de Feroe',
                'cut_3_desc' => 'El gran clásico de sidrería: bacalao desmigado, pimiento verde confitado y cebolla pochada.',
                'cut_3_price' => '16,00€',
                'cut_4_name' => 'Bacalao al Pil-Pil Tradicional',
                'cut_4_desc' => 'Emulsión lenta del colágeno con aceite de oliva virgen extra, láminas de ajo y guindilla.',
                'cut_4_price' => '24,50€',

                // Club Sagaretxe
                'club_tag' => 'MEMBRESÍA EXCLUSIVA',
                'club_title' => 'Club Sagaretxe',
                'club_desc' => 'Más que comensales, consideramos a nuestros visitantes como socios de nuestra familia gastronómica. Disfruta de un 12% de descuento directo en todas tus visitas durante todo el año, además de invitaciones exclusivas en tu cumpleaños.',
                'club_benefit_1' => '12% de descuento directo en toda la carta durante todo un año.',
                'club_benefit_2' => 'Atenciones especiales en celebraciones personales y aniversarios.',
                'club_benefit_3' => 'Inscripción gratuita e inmediata sin cuotas ni compromisos.',
                'club_btn' => 'UNIRME AL CLUB GOURMET',

                // Reseñas
                'reviews_tag' => 'TESTIMONIOS',
                'reviews_title' => 'Palabras de Nuestros Parroquianos',

                // Footer (3 Columnas Lana)
                'footer_hours' => 'HORARIOS',
                'footer_hours_days' => 'Domingo a Jueves: 12:00 – 17:00 | 19:00 – 00:30',
                'footer_hours_weekend' => 'Viernes y Sábado: 12:00 – 17:00 | 19:00 – 01:00',
                'footer_hours_note' => 'Barra de pintxos y kupelas abiertas ininterrumpidamente.',
                'footer_contact' => 'CONTACTO',
                'footer_address' => 'DIRECCIÓN',
                'footer_address_full' => 'Calle Eloy Gonzalo, 26 | 28010 Madrid | España',
                'footer_rights' => 'Sagaretxe Asador y Sidrería Vasca. Todos los derechos reservados.',
                'footer_cookies' => 'Política de Cookies',
                'footer_privacy' => 'Política de Privacidad',
                'footer_legal' => 'Aviso Legal',

                // Carta / Menu
                'menu_page_tag' => 'COCINA VASCA DE AUTOR',
                'menu_page_title' => 'Nuestra Carta',
                'menu_page_desc' => 'Calidad innegociable en cada ingrediente, fuego de encina y respeto absoluto por las recetas tradicionales.',
                'menu_pdf_download' => 'DESCARGAR CARTA EN PDF',
                'menu_cat_starters' => 'Entrantes Tradicionales',
                'menu_cat_salads' => 'Ensaladas Frescas',
                'menu_cat_meats' => 'Carnes al Carbón de Encina',
                'menu_cat_fish' => 'Pescados al Estilo Donostia',
                'menu_cat_desserts' => 'Postres Artesanales',
                'menu_half_portion' => 'Media',

                // Reservas
                'res_title' => 'Reservas Online',
                'res_subtitle' => 'Confirma tu mesa en segundos con disponibilidad directa en tiempo real.',
                'res_step_1' => '1. Fecha y Comensales',
                'res_step_2' => '2. Selecciona la Hora del Turno',
                'res_step_3' => '3. Datos del Titular',
                'res_name' => 'Nombre y Apellidos',
                'res_phone' => 'Teléfono Móvil',
                'res_email' => 'Correo Electrónico',
                'res_notes' => 'Peticiones Especiales / Alérgenos',
                'res_confirm_btn' => 'CONFIRMAR RESERVA INMEDIATA',
            ],
            'en' => [
                // Navigation
                'nav_home' => 'HOME',
                'nav_about' => 'ABOUT US',
                'nav_pintxos' => 'PINTXOS BAR',
                'nav_menu' => 'MENU',
                'nav_wine' => 'WINE & CIDER',
                'nav_group_menus' => 'GROUP MENUS',
                'nav_events' => 'EVENTS',
                'nav_club' => 'CLUB',
                'nav_gallery' => 'GALLERY',
                'nav_contact' => 'CONTACT',
                'nav_reserve' => 'RESERVATIONS',
                'nav_reserve_online' => 'ONLINE RESERVATIONS',

                // Top bar & claim
                'topbar_location' => 'Chamberí: 26 Eloy Gonzalo St, Madrid',
                'topbar_schedule' => 'Kitchen & Grill open every day',
                'topbar_club_badge' => 'Club Sagaretxe 12% Off',

                // Hero
                'hero_badge' => 'BASQUE GRILL & CIDER HOUSE • CHAMBERÍ, MADRID',
                'hero_title' => 'The Art of Basque Fire and Culinary Tradition in Madrid',
                'hero_subtitle' => 'In 1999, in the heart of Chamberí, Sagaretxe opened its doors. For over twenty-five years bringing the authenticity of holm oak charcoal grilling, natural cider poured from wooden casks, and the iconic Basque pintxo counter to Spain’s capital.',
                'hero_btn_reserve' => 'BOOK A TABLE',
                'hero_btn_menu' => 'VIEW FULL MENU',
                'hero_badge_grill' => '100% Holm oak charcoal',
                'hero_badge_cider' => 'Natural cider poured straight from kupelas',
                'hero_badge_pintxos' => 'Fresh bar with over 150 varieties',
                'hero_badge_origin' => 'Chamberí since 1999',

                // Booking bar
                'book_diners' => 'Guests',
                'book_date' => 'Date',
                'book_shift' => 'Shift',
                'book_lunch' => 'Lunch (13:30 - 16:30)',
                'book_dinner' => 'Grill Dinner (20:00 - 00:00)',
                'book_submit' => 'CHECK AVAILABILITY',

                // Manifesto / Philosophy
                'manifesto_tag' => 'OUR ESSENCE',
                'manifesto_quote' => '«The purity of seasonal produce, the mastery of fire, and the unhurried warmth of a true Basque cider house.»',
                'manifesto_author' => 'Sagaretxe Basque Grill • Chamberí',

                // Trilogía gastronómica
                'pillars_tag' => 'THE EXPERIENCE',
                'pillars_title' => 'Three Pillars of Our Identity',
                'pillar_1_title' => 'The Holm Oak Charcoal Grill',
                'pillar_1_desc' => 'Aged beef ribeyes selected for intense marbling, wild coastal fish seared with traditional Donostia garlic-chili oil, and market vegetables grilled over lively embers.',
                'pillar_1_link' => 'DISCOVER OUR MEATS',

                'pillar_2_title' => 'The Pintxos Bar',
                'pillar_2_desc' => 'Over 150 varieties continuously crafted throughout the day. From the classic artisan gilda to hot skewers of grilled foie gras, spider crab tarts, and crispy cod fritters.',
                'pillar_2_link' => 'EXPLORE THE PINTXOS COUNTER',

                'pillar_3_title' => 'The Tradition of Txotx',
                'pillar_3_desc' => 'Open wooden barrels all year round where you can pour natural Basque cider straight from the tap, paired with our renowned cod omelet and prime steak sold by weight.',
                'pillar_3_link' => 'LEARN ABOUT THE RITUAL',

                // Signature Cuts / Meat Table (Lana style)
                'cuts_tag' => 'PRIME CUTS',
                'cuts_title' => 'Charcoal Grill Selection',
                'cuts_subtitle' => 'Handpicked cuts weighed and presented tableside before being cooked to perfection over hot coals.',
                'cut_1_name' => 'Aged Basque Beef Ribeye (Txuleta)',
                'cut_1_desc' => '45-day dry-aged mature beef with rich marbling and the unmistakable smoky depth of holm oak charcoal.',
                'cut_1_price' => 'By weight / m.p.',
                'cut_2_name' => 'Galician Blond Prime Ribeye',
                'cut_2_desc' => 'Tender, deeply savory grass-fed beef with noble aromas of oak smoke and mineral complexity.',
                'cut_2_price' => 'By weight / m.p.',
                'cut_3_name' => 'Faeroe Islands Cod Omelet',
                'cut_3_desc' => 'The quintessential cider house appetizer: flaky cod, sweet confit green peppers, and caramelized onions.',
                'cut_3_price' => '€16.00',
                'cut_4_name' => 'Traditional Pil-Pil Salt Cod',
                'cut_4_desc' => 'Slowly emulsified cod gelatin with extra virgin olive oil, crisp garlic chips, and mild chili.',
                'cut_4_price' => '€24.50',

                // Club Sagaretxe
                'club_tag' => 'EXCLUSIVE MEMBERSHIP',
                'club_title' => 'Club Sagaretxe',
                'club_desc' => 'More than customers, we regard our guests as partners in our culinary family. Enjoy a 12% direct discount on all à la carte meals throughout the entire year, alongside exclusive birthday invitations.',
                'club_benefit_1' => '12% direct discount on all à la carte meals for a full year.',
                'club_benefit_2' => 'Exclusive promotions and courtesy gifts on birthdays and celebrations.',
                'club_benefit_3' => 'Free and instant registration with zero fees or commitments.',
                'club_btn' => 'JOIN THE GOURMET CLUB',

                // Reviews
                'reviews_tag' => 'REVIEWS',
                'reviews_title' => 'What Our Guests Say',

                // Footer (Lana 3 Columns)
                'footer_hours' => 'OPENING HOURS',
                'footer_hours_days' => 'Sunday to Thursday: 12:00 – 17:00 | 19:00 – 00:30',
                'footer_hours_weekend' => 'Friday & Saturday: 12:00 – 17:00 | 19:00 – 01:00',
                'footer_hours_note' => 'Pintxos bar and cider casks open continuously throughout the day.',
                'footer_contact' => 'CONTACT',
                'footer_address' => 'ADDRESS',
                'footer_address_full' => 'Calle Eloy Gonzalo, 26 | 28010 Madrid | Spain',
                'footer_rights' => 'Sagaretxe Basque Grill & Cider House. All rights reserved.',
                'footer_cookies' => 'Cookie Policy',
                'footer_privacy' => 'Privacy Policy',
                'footer_legal' => 'Legal Notice',

                // Menu
                'menu_page_tag' => 'AUTHENTIC BASQUE CUISINE',
                'menu_page_title' => 'Our Menu',
                'menu_page_desc' => 'Uncompromising product quality, holm oak embers, and devotion to time-honored Basque recipes.',
                'menu_pdf_download' => 'DOWNLOAD MENU (PDF)',
                'menu_cat_starters' => 'Traditional Starters',
                'menu_cat_salads' => 'Fresh Garden Salads',
                'menu_cat_meats' => 'Charcoal Grilled Meats',
                'menu_cat_fish' => 'Donostia-Style Fresh Fish',
                'menu_cat_desserts' => 'Artisan Desserts',
                'menu_half_portion' => 'Half',

                // Reservations
                'res_title' => 'Online Reservations',
                'res_subtitle' => 'Secure your table in seconds with instant live availability.',
                'res_step_1' => '1. Date & Party Size',
                'res_step_2' => '2. Select Your Preferred Time',
                'res_step_3' => '3. Contact Details',
                'res_name' => 'Full Name',
                'res_phone' => 'Mobile Phone',
                'res_email' => 'Email Address',
                'res_notes' => 'Special Requests / Food Allergies',
                'res_confirm_btn' => 'CONFIRM RESERVATION',
            ]
        ];
    }
}

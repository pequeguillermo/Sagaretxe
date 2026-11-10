<!-- ==========================================================================
     SAGARETXE – BARRA DE PINTXOS VASCOS (ESTÉTICA LANA)
     Hero Fotográfico, Slider de Pintxos Reales y Bilingüe ES / EN
     ========================================================================== -->

<!-- 1. HERO HEADER PANORÁMICO CON FOTOGRAFÍA OFICIAL DE BARRA DE PINTXOS -->
<section class="pintxos-hero-header">
    <div class="pintxos-hero-bg" style="background-image: url('<?= BASE_URL ?>/assets/images/pintxos-hero.jpg');"></div>
    <div class="pintxos-hero-overlay"></div>
    <div class="container pintxos-hero-content">
        <span class="section-subtag-lana"><?= isEn() ? 'DONOSTIA TAVERN CULTURE • CHAMBERÍ SINCE 1999' : 'CULTURA DE BARRA DONOSTIARRA • CHAMBERÍ DESDE 1999' ?></span>
        <h1 class="section-title-lana"><?= isEn() ? 'The Pintxos Counter' : 'Nuestra Barra de Pintxos' ?></h1>
        <p class="section-description pintxos-hero-desc">
            <?= isEn() 
                ? 'At our spectacular counter you will encounter an ever-revolving selection of freshly crafted hot and cold pintxos. A lively tradition where market-fresh ingredients set the rhythm of the kitchen.' 
                : 'En nuestra espectacular barra encontrarás una incesante variedad de pintxos fríos y calientes recién elaborados. Una experiencia viva donde cada visita es diferente y el producto fresco de temporada marca el ritmo de los fogones.' ?>
        </p>

        <div class="pintxos-hero-badges">
            <span class="pintxos-hbadge"><i class="fa-solid fa-fire-burner"></i> +150 <?= isEn() ? 'Varieties' : 'Variedades' ?></span>
            <span class="pintxos-hbadge"><i class="fa-solid fa-clock-rotate-left"></i> <?= isEn() ? 'Continuous Kitchen Rotation' : 'Rotación Continua' ?></span>
            <span class="pintxos-hbadge"><i class="fa-solid fa-wine-glass"></i> <?= isEn() ? 'Cider "Al Txotx" & Txakoli' : 'Sidra al Txotx y Txacolí' ?></span>
        </div>

        <div class="pintxos-hero-actions">
            <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                <span class="btn-lana-dot"></span>
                <span><?= __('nav_reserve') ?></span>
            </a>
            <a href="<?= langUrl('/carta') ?>" class="btn-lana-outline">
                <span><?= __('nav_menu') ?></span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 2. SLIDER / CARRUSEL INTERACTIVO DE PINTXOS REALES DE SAGARETXE -->
<section class="pintxos-slider-section" id="vitrina">
    <div class="container">
        <div class="pintxos-slider-header">
            <div>
                <span class="section-subtag-lana"><?= isEn() ? 'VISUAL SHOWCASE • DIRECT FROM THE KITCHEN' : 'MUESTRARIO VISUAL • DIRECTO DE LOS FOGONES' ?></span>
                <h2 class="section-title-lana" style="margin-bottom: 6px;"><?= isEn() ? 'Iconic Pintxos from Our Counter' : 'La Vitrina Viva de Pintxos' ?></h2>
                <p class="cuts-intro-desc" style="margin: 0;">
                    <?= isEn() 
                        ? 'Explore the artisan bites that leave our grill and cold stations daily. Click any card to expand.' 
                        : 'Descubre los bocados que salen continuamente de nuestras brasas y estación fría. Haz clic para ampliar.' ?>
                </p>
            </div>
            <div class="pintxos-slider-controls">
                <button type="button" class="pintxos-nav-btn" id="pintxosSlidePrev" aria-label="<?= isEn() ? 'Previous Pintxos' : 'Pintxos Anteriores' ?>">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button type="button" class="pintxos-nav-btn" id="pintxosSlideNext" aria-label="<?= isEn() ? 'Next Pintxos' : 'Siguientes Pintxos' ?>">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="pintxos-slider-wrapper">
            <div class="pintxos-slider-track" id="pintxosSliderTrack">
                <?php
                $pintxosPhotos = [
                    'pintxo-01.jpg',
                    'pintxo-02.jpg',
                    'pintxo-03.jpg',
                    'pintxo-04.jpg',
                    'pintxo-05.jpg',
                    'pintxo-06.jpg',
                    'pintxo-07.jpg',
                    'pintxo-08.jpg',
                    'pintxo-09.jpg',
                    'pintxo-10.jpg',
                    'pintxo-11.jpg',
                    'pintxo-12.jpg',
                    'pintxo-13.jpg',
                    'pintxo-14.jpg',
                    'pintxo-15.jpg',
                    'pintxo-16.jpg',
                ];

                foreach ($pintxosPhotos as $img):
                ?>
                <div class="pintxo-slide-card gallery-card" title="<?= isEn() ? 'Click to enlarge photo' : 'Haz clic para ampliar la foto' ?>">
                    <div class="pintxo-slide-img-wrap">
                        <img src="<?= BASE_URL ?>/assets/images/pintxos/<?= $img ?>" alt="Pintxo Sagaretxe" class="pintxo-slide-img" loading="lazy">
                        <span class="pintxo-slide-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- 3. CONTENIDO EDITORIAL, FILOSOFÍA DE BARRA Y FOTO REAL DE PINTXOS CALIENTES -->
<section class="section" style="padding-top: 65px; padding-bottom: 75px;">
    <div class="container">

        <!-- Caja Destacada 50/50: Filosofía de la Barra Sagaretxe con la Fotografía Real pitxos.jpg -->
        <div class="pintxos-showcase-feature">
            <div class="pintxos-showcase-thumb gallery-card" title="<?= isEn() ? 'Click to view photo' : 'Haz clic para ampliar' ?>">
                <img src="<?= BASE_URL ?>/assets/images/pitxos.jpg" alt="<?= isEn() ? 'Fresh Pintxos from the Grill' : 'Pintxos recién salidos de la cocina' ?>" loading="lazy">
                <span class="pintxos-showcase-tag"><?= isEn() ? 'LIVE KITCHEN' : 'FOGONES EN DIRECTO' ?></span>
                <span class="pintxo-slide-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></span>
            </div>
            <div class="pintxos-showcase-body">
                <span class="section-subtag-lana"><?= isEn() ? 'DONOSTIA TRADITION' : 'TRADICIÓN Y ESPONTANEIDAD' ?></span>
                <h2 style="font-family: var(--font-serif); font-size: 2rem; color: #ffffff; margin-bottom: 16px; line-height: 1.25;">
                    <?= isEn() ? 'The Magic of Freshly Prepared Basque Tapas' : 'El Placer de Dejarse Sorprender en la Barra' ?>
                </h2>
                <p style="color: var(--text-light); line-height: 1.8; margin-bottom: 16px; font-size: 0.98rem;">
                    <?= isEn() 
                        ? 'Our philosophy is rooted in savoring the moment and discovering which hot skewer leaves the kitchen right as you arrive. Because freshness dictates our counter, selection evolves with market arrivals and daily inspiration.' 
                        : 'Nuestra propuesta se basa en disfrutar del momento y descubrir qué pintxo te toca, haciendo de cada visita una experiencia diferente. Ofrecemos una gran variedad basada en los que solemos disponer habitualmente, pero la rotación de cocina saca bandejas calientes recién hechas al toque de campana.' ?>
                </p>
                <div class="pintxos-quote-callout">
                    <i class="fa-solid fa-quote-left" style="color: var(--gold-lana); font-size: 1.2rem; margin-right: 10px;"></i>
                    <span>
                        <?= isEn() 
                            ? 'Pair your pintxos with authentic natural cider poured straight from our casks ("Txotx") or a crisp glass of Basque Txakoli.' 
                            : 'Acompáñalos con la auténtica «sidra al txotx» que podrás servirte directamente de nuestras kupelas o con una copa de txacolí.' ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- 4. CATEGORÍAS DETALLADAS DE PINTXOS -->
        
        <!-- Bloque 1: Pintxos Fríos y Tradición Cantábrica -->
        <div class="menu-category-section">
            <div class="menu-category-header">
                <h2 class="menu-category-title" style="font-family: var(--font-serif); font-size: 1.8rem; color: #fff;">
                    <i class="fa-solid fa-shrimp" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Cold & Cantabrian Sea Pintxos' : 'Pintxos Fríos y del Cantábrico' ?>
                </h2>
                <span class="menu-category-badge"><?= isEn() ? 'Counter Classics' : 'Clásicos de Barra' ?></span>
            </div>
            <div class="pintxos-list-box" style="background: #111317; border-color: var(--border-color);">
                <div class="pintxos-grid-columns">
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Cantabrian prawn salad skewer (Txaka)' : 'Txaka con langostino del Cantábrico' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Smoked salmon & crab salad bite' : 'Txaka con salmón ahumado' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Spider crab (Txangurro) with prawn' : 'Txangurro con langostino' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Traditional "Matrimonio" (anchovy & boquerón) with piquillo' : 'Matrimonio (anchoa del Cantábrico y boquerón) con piquillo' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Bonito tuna salad with artisan mayonnaise & anchovy' : 'Ensaladilla de atún con mayonesa casera y anchoa' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Caramelized foie gras with raspberry reduction' : 'Foie caramelizado con mermelada de frambuesa' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'White tuna loin with creamy cheese' : 'Lomo de bonito con queso tierno y mayonesa suave' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Wild mushrooms with cider & Iberian acorn-fed ham' : 'Setas a la sidra con jamón ibérico de bellota' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Brie cheese with Majorcan sobrasada' : 'Queso brie con sobrasada mallorquina' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Caramelized brie with forest berry compote' : 'Queso brie caramelizado con confitura de frambuesas' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Confit salt cod with Lodosa roasted sweet peppers' : 'Bacalao confitado con salteado de piquillos de Lodosa' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Roquefort blue cheese with praline nuts' : 'Queso Roquefort con frutos secos garrapiñados' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Roquefort cheese with sweet quince paste' : 'Queso Roquefort con dulce de membrillo' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Cream cheese with delicate smoked salmon ribbons' : 'Queso crema con finas láminas de salmón' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Select salami with cured ham shavings' : 'Salami selecto con virutas de jamón curado' ?></div>
                </div>
            </div>
        </div>

        <!-- Bloque 2: Gildas y Sabores del Caserío -->
        <div class="menu-category-section">
            <div class="menu-category-header">
                <h2 class="menu-category-title" style="font-family: var(--font-serif); font-size: 1.8rem; color: #fff;">
                    <i class="fa-solid fa-pepper-hot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Artisan Gildas, Idiazábal Cheeses & Earth' : 'Gildas, Quesos Idiazábal y Huerto' ?>
                </h2>
                <span class="menu-category-badge"><?= isEn() ? 'Northern Essence' : 'Esencia del Norte' ?></span>
            </div>
            <div class="pintxos-list-box" style="background: #111317; border-color: var(--border-color);">
                <div class="pintxos-grid-columns">
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Sagaretxe signature Gildas (anchovy, guindilla & olive)' : 'Gildas de Sagaretxe con anchoa y aceituna manzanilla' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Garlic & chili gildas with sweet piquillo strips' : 'Gildas al ajillo con tiras de pimiento del piquillo' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Pickled artisan white tuna with Ibarra chili peppers' : 'Bonito escabechado artesanal con piparras de Ibarra' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Smoked Idiazábal D.O. cheese with caramelized onion' : 'Queso Idiazábal D.O. con cebolla caramelizada y nuez' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Smoked Idiazábal cheese with cured Iberian ham' : 'Queso Idiazábal ahumado con jamón ibérico' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Sweet piquillo peppers stuffed with creamy salt cod brandade' : 'Pimientos de piquillo rellenos de brandada de bacalao' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Homemade green herb ali-oli with seared prawn' : 'Ali-oli verde casero con langostino marcado' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Gourmet mini beef slider with melted brie' : 'Mini hamburguesa gourmet con queso brie fundido' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Crispy fried brie with berry balsamic glaze' : 'Queso brie frito crujiente con reducción de frutos rojos' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Bera de Bidasoa chistorra with blistered Padrón peppers' : 'Chistorra de Bera de Bidasoa frita con pimientos de Padrón' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Spicy grilled Basque chorizo with quail egg' : 'Choricillo picante a la brasa con huevo de codorniz' ?></div>
                </div>
            </div>
        </div>

        <!-- Bloque 3: Calientes, Tempuras y Fritos Recién Salidos -->
        <div class="menu-category-section">
            <div class="menu-category-header">
                <h2 class="menu-category-title" style="font-family: var(--font-serif); font-size: 1.8rem; color: #fff;">
                    <i class="fa-solid fa-fire-burner" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Hot Skewers, Tempura & Clay Dishes' : 'Calientes, Tempuras y Cazuelitas' ?>
                </h2>
                <span class="menu-category-badge"><?= isEn() ? 'Fresh from Kitchen' : 'Recién Hechos' ?></span>
            </div>
            <div class="pintxos-list-box" style="background: #111317; border-color: var(--border-color);">
                <div class="pintxos-grid-columns">
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Three-cheese tempura with honey mustard dip' : 'Tres quesos en tempura con miel y mostaza suave' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Traditional crispy battered Atlantic salt cod' : 'Nuestro bacalao tradicional crujiente rebozado' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Grilled free-range chicken skewers' : 'Brochetitas de pollo de caserío adobadas a la parrilla' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Warm cazuelita of creamy cod brandade' : 'Cazuelita de brandada cremosa de bacalao' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Spanish patatas bravas with traditional herb ali-oli' : 'Patatas bravas con ali-oli verde tradicional' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Cider house salt cod croquettes' : 'Croquetas de bacalao de sidrería' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Creamy cured Iberian ham croquettes' : 'Croquetas de jamón ibérico cremosas' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Crispy morcilla bites with roasted apple puree' : 'Bolitas de morcilla crujiente con compota de manzana' ?></div>
                    <div class="pintxo-list-item"><i class="fa-solid fa-circle-dot" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Classic juicy Spanish potato omelet (Tortilla)' : 'Tortilla de patatas tradicional jugosa' ?></div>
                </div>
            </div>
        </div>

        <!-- Banner Platos Combinados 8 y 12 Pintxos -->
        <div class="pintxos-combos-banner" style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm); margin-top: 45px;">
            <div class="combos-text">
                <h3 style="font-family: var(--font-serif); font-size: 1.8rem; color: #fff;"><?= isEn() ? 'Assorted Tasting Trays (8 & 12 Pintxos)' : 'Tablas Combinadas de 8 y 12 Pintxos' ?></h3>
                <p style="color: var(--text-light); line-height: 1.8;">
                    <?= isEn() 
                        ? 'The perfect choice for casual lunches, sharing with friends, or after-work gathering. Pick your favorite creations straight from the counter and pair them with authentic natural Basque cider poured from the barrel, or crisp Spanish white wine.' 
                        : 'La opción predilecta para almuerzos dinámicos, tapeo entre amigos o cenas informales. Elige tus pintxos favoritos directamente de la barra y acompáñalos con nuestra auténtica sidra natural al “txotx” servida en vaso fino o un vino blanco de Rueda o Rioja crianza.' ?>
                </p>
            </div>
            <div class="combos-cards">
                <div class="combo-pill" style="border: 1px solid var(--gold-lana); background: #171a22;">
                    <strong style="color: var(--gold-lana);"><?= isEn() ? 'Tray of 8' : 'Tabla 8' ?></strong>
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Custom Selection' : 'Pintxos a Elegir' ?></span>
                </div>
                <div class="combo-pill" style="border: 1px solid var(--gold-lana); background: #171a22;">
                    <strong style="color: var(--gold-lana);"><?= isEn() ? 'Tray of 12' : 'Tabla 12' ?></strong>
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Ideal for 2-3 Guests' : 'Ideal para Compartir' ?></span>
                </div>
            </div>
        </div>

        <!-- CTA final -->
        <div style="text-align: center; margin-top: 55px;">
            <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-lg-lana">
                <span class="btn-lana-dot"></span>
                <span><?= __('nav_reserve_online') ?></span>
            </a>
        </div>
    </div>
</section>

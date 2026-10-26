<!-- ==========================================================================
     SAGARETXE – BARRA DE PINTXOS VASCOS (ESTÉTICA LANA)
     Bilingüe ES / EN
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'DONOSTIA TAVERN CULTURE' : 'CULTURA DE BARRA DONOSTIARRA' ?></span>
            <h1 class="section-title-lana"><?= isEn() ? 'The Pintxos Counter' : 'Nuestra Barra de Pintxos' ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= isEn() 
                    ? 'At our spectacular counter you will encounter an ever-revolving selection of freshly crafted hot and cold pintxos. A lively tradition where market-fresh ingredients set the rhythm of the kitchen.' 
                    : 'En nuestra espectacular barra encontrarás una incesante variedad de pintxos fríos y calientes recién elaborados. Una experiencia viva donde cada visita es diferente y el producto fresco de temporada marca el ritmo de los fogones.' ?>
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; margin-bottom: 24px;">
                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span><?= __('nav_reserve') ?></span>
                </a>
                <a href="<?= langUrl('/carta') ?>" class="btn-lana-outline">
                    <span><?= __('nav_menu') ?></span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="gold-hairline-sep"></div>
        </div>

        <!-- Concepto de rotación diaria -->
        <div style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm); padding: 24px 30px; margin-bottom: 45px; text-align: center;">
            <p style="font-size: 1.05rem; color: var(--text-white); margin-bottom: 8px;">
                <i class="fa-solid fa-clock-rotate-left" style="color: var(--gold-lana); margin-right: 8px;"></i>
                <strong><?= isEn() ? 'Live Daily Rotation:' : 'Rotación y Frescura en Directo:' ?></strong> <?= isEn() ? 'Over 150 varieties continuously prepared throughout the day.' : 'Disponemos habitualmente de decenas de variedades en rotación continua.' ?>
            </p>
            <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 0;">
                <?= isEn() 
                    ? 'The selection evolves based on fish market arrivals and our kitchen team’s creations: the true spirit of a Basque tavern is savoring whichever hot skewer leaves the grill right now!' 
                    : 'La selección varía según el día, la lonja y las creaciones del equipo de cocina: ¡la magia de la taberna vasca reside en dejarse sorprender por el pintxo que sale caliente en cada momento!' ?>
            </p>
        </div>

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
        <div class="pintxos-combos-banner" style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm);">
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

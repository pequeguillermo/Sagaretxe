<!-- ==========================================================================
     SAGARETXE – CARTA COMPLETA DEL RESTAURANTE (EDICIÓN DE ALTA GASTRONOMÍA)
     Fondos Temáticos Diferenciados por Categoría y Showcases con Degradado en Fundido
     ========================================================================== -->

<!-- CABECERA PRINCIPAL DE LA CARTA -->
<section class="carta-hero-header">
    <div class="container">
        <div class="section-header-lana" style="margin-bottom: 28px;">
            <span class="section-subtag-lana"><?= __('menu_page_tag') ?></span>
            <h1 class="section-title-lana"><?= __('menu_page_title') ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= __('menu_page_desc') ?>
            </p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap; margin-bottom: 28px;">
                <a href="<?= BASE_URL ?>/assets/images/carta-sagaretxe.pdf" target="_blank" class="btn-lana-outline" onclick="window.print(); return false;" title="Imprimir / PDF">
                    <i class="fa-solid fa-file-pdf" style="color: var(--gold-lana);"></i>
                    <span><?= __('menu_pdf_download') ?></span>
                </a>
                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span><?= __('nav_reserve') ?></span>
                </a>
            </div>
            <div class="gold-hairline-sep"></div>
        </div>
    </div>
</section>

<!-- BARRA STICKY DE NAVEGACIÓN RÁPIDA POR CATEGORÍAS (ESTILO LANA) -->
<div class="menu-categories-sticky-wrapper">
    <div class="container">
        <nav class="menu-categories-nav-lana" aria-label="Categorías de la Carta">
            <a href="#entrantes" class="cat-pill-lana active"><?= __('menu_cat_starters') ?></a>
            <a href="#ensaladas" class="cat-pill-lana"><?= __('menu_cat_salads') ?></a>
            <a href="#bacalao" class="cat-pill-lana"><?= __('menu_cat_cod') ?></a>
            <a href="#carnes" class="cat-pill-lana"><?= __('menu_cat_meats') ?></a>
            <a href="#pescados" class="cat-pill-lana"><?= __('menu_cat_fish') ?></a>
            <a href="#postres" class="cat-pill-lana"><?= __('menu_cat_desserts') ?></a>
            <a href="#cafes" class="cat-pill-lana"><?= __('menu_cat_coffees') ?></a>
        </nav>
    </div>
</div>

<!-- 1. ENTRANTES TRADICIONALES (FONDO: PIZARRA GRAFITO DARK LUXURY) -->
<section class="carta-section carta-sec-entrantes" id="entrantes">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-plate-wheat"></i> <?= __('menu_cat_starters') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'To Share' : 'Para Compartir' ?></span>
        </div>
        
        <div class="menu-items-grid">
            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Pulpo con patatas y aceite de pimentón</div>
                    <div class="menu-item-price">24,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 13,00€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Crustáceos, lácteos</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Paleta Ibérica de Bellota de Guijuelo</div>
                    <div class="menu-item-price">22,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 12,00€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Embutido ibérico curado de máxima calidad</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Croquetas Caseras de Bacalao</div>
                    <div class="menu-item-price">15,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 9,50€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Pescado, lácteos, gluten</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Croquetas de Jamón Ibérico</div>
                    <div class="menu-item-price">15,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 9,50€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Lácteos, huevo, gluten</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Tortilla de Bacalao de Feroe</div>
                    <div class="menu-item-price">16,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Especialidad de sidrería · Huevo, pescado</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Morcilla y Chistorra de Bera de Bidasoa a la Sidra</div>
                    <div class="menu-item-price">15,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 9,50€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Cocinadas a fuego lento con sidra natural vasca</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Torreznos Crujientes con Patatas Revolconas</div>
                    <div class="menu-item-price">16,00€ <small style="font-size: 0.8rem; color: var(--text-muted);">(Media 9,80€)</small></div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Lácteos, pimentón de la Vera</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Flores de Alcachofas de Tudela Confitadas a la Brasa</div>
                    <div class="menu-item-price">19,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Flor abierta y marcada en parrilla con aceite virgen extra</div>
            </div>
        </div>

        <!-- Showcase Abajo: Parrillada de Verduras de Temporada con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/parrillada-verduras.jpg" alt="<?= isEn() ? 'Seasonal Grilled Vegetables' : 'Parrillada de Verduras de Temporada al Carbón' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-fire-burner"></i> <?= isEn() ? 'GARDEN & CHARCOAL SPECIALTY' : 'ESPECIALIDAD DE HUERTA Y BRASA' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Seasonal Grilled Vegetables Platter' : 'Parrillada de Verduras de Temporada al Carbón' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Tender wild asparagus, sweet baby leeks, Tudela artichokes, wood-roasted peppers and seasonal mushrooms with Maldon sea salt and premium EVOO.' : 'Espárragos trigueros, puerros tiernos, alcachofas de Tudela, pimientos asados y setas silvestres con escamas de sal marina y AOVE.' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">16,00€</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. ENSALADAS FRESCAS DE LA HUERTA (FONDO: HUERTA VASCA / VERDE ESMERALDA HERBARIO) -->
<section class="carta-section carta-sec-ensaladas" id="ensaladas">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-leaf"></i> <?= __('menu_cat_salads') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'Fresh & Balanced' : 'Frescas y Equilibradas' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Ensalada Mixta Sagaretxe</div>
                    <div class="menu-item-price">14,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Brotes frescos, bonito, huevo cocido, tomate y cebolla tierna</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Ensalada de Langostinos con Aliño Vasco</div>
                    <div class="menu-item-price">15,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Crustáceos, vinagreta tradicional de hierbas y txakoli</div>
            </div>

            <div class="menu-item-card" style="grid-column: span 2;">
                <div class="menu-item-top">
                    <div class="menu-item-name">Ensalada Templada de Gulas al Ajillo</div>
                    <div class="menu-item-price">15,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Gulas salteadas con ajo laminado y guindilla</div>
            </div>
        </div>

        <!-- Showcase: Ensalada de Pimientos Asados y Ventresca con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/ensalada-ventresca.jpg" alt="<?= isEn() ? 'Wood-Roasted Peppers and Tuna Belly Salad' : 'Ensalada de Pimientos Asados y Ventresca' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-seedling"></i> <?= isEn() ? 'BASQUE ORCHARD & CANTABRIAN SEA' : 'HUERTA Y MAR CANTÁBRICO' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Wood-Roasted Peppers & White Tuna Belly Salad' : 'Ensalada de Pimientos Asados a la Leña y Ventresca' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Sweet red peppers slow-roasted over wood coals, paired with flaky tender white tuna belly (bonito del norte), thinly sliced red onion, and extra virgin olive oil.' : 'Pimientos dulces asados lentamente a la leña con tierna ventresca de bonito del norte, cebolla morada fina y generoso hilo de aceite de oliva virgen extra.' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">14,00€ <small><?= isEn() ? '(Half 8.50€)' : '(Media 8,50€)' ?></small></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. NUESTRO BACALAO DE AUTOR (FONDO: TERRACOTA Y PIMIENTO CHORICERO TRADICIONAL) -->
<section class="carta-section carta-sec-bacalao" id="bacalao">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-fish"></i> <?= __('menu_cat_cod') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'House Specialty' : 'Especialidad de la Casa' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Bacalao a la Crema de Pil-Pil Blanco Tradicional</div>
                    <div class="menu-item-price">27,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Lomo confitado ligado con su propia gelatina y aceite virgen extra</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Bacalao a la Parrilla de Carbón de Encina</div>
                    <div class="menu-item-price">27,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Marcado a fuego vivo con refrito donostiarra y piquillos</div>
            </div>
        </div>

        <!-- Showcase: Bacalao a la Vizcaína con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/bacalao-vizcaina.jpg" alt="<?= isEn() ? 'Codfish in Biscayan Sauce' : 'Bacalao a la Vizcaína' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-utensils"></i> <?= isEn() ? 'CENTURY-OLD BISCAYAN RECIPE' : 'TRADICIÓN VIZCAÍNA CENTENARIA' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Codfish in Traditional Biscayan Sauce (Bacalao a la Vizcaína)' : 'Bacalao a la Vizcaína con Pimientos Choriceros' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Thick cod loin slow-confit in traditional earthenware cazuela, simmered in deeply rich choricero pepper pulp and sweet red onion reduction with garlic chips.' : 'Lomo noble confitado lentamente en cazuela tradicional de barro, bañado en salsa vizcaína de pulpa de pimiento choricero, cebolla pochada y refrito crujiente de ajos dorados.' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">27,00€</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. CARNES A LA PARRILLA (FONDO: CARBÓN DE ENCINA & ASCUAS INCANDESCENTES) -->
<section class="carta-section carta-sec-carnes" id="carnes">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-fire"></i> <?= __('menu_cat_meats') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? '100% Holm Oak Charcoal' : '100% Carbón de Encina' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card" style="grid-column: span 2; border: 1.5px solid rgba(255, 95, 25, 0.35); background: linear-gradient(135deg, rgba(36, 20, 14, 0.85) 0%, rgba(20, 22, 26, 0.9) 100%);">
                <div class="menu-item-top">
                    <div>
                        <div class="menu-item-name" style="font-size: 1.35rem; color: var(--cider-gold);">
                            <i class="fa-solid fa-crown"></i> Txuleta de Vaca Vieja a la Parrilla (Al Corte)
                        </div>
                        <p style="color: var(--text-muted); font-size: 0.9rem; margin-top: 4px;">
                            Carne seleccionada con maduración óptima, sellada a fuego fuerte y servida al punto en plato caliente con sal marina gruesa.
                        </p>
                    </div>
                    <div class="menu-item-price" style="font-size: 1.5rem;">
                        39,00€ <small style="font-size: 0.85rem; color: var(--text-muted);">(Pieza 500 gr · 7,80€ / 100 gr)</small>
                    </div>
                </div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Solomillo de Vaca a la Brasa de Carbón</div>
                    <div class="menu-item-price">29,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Corte noble, textura sedosa y potente aroma a leña</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Medallones de Solomillo Ibérico con Salsa de Queso Idiazábal</div>
                    <div class="menu-item-price">21,80€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Crema suave de queso ahumado Idiazábal D.O.</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Dados de Solomillo de Vaca con Salsa de Foie</div>
                    <div class="menu-item-price">29,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Salteados a fuego vivo y reducidos con foie fresco</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Brochetitas de Solomillo de Vaca a la Brasa</div>
                    <div class="menu-item-price">29,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Intercaladas con verduras y asadas en parrilla</div>
            </div>
        </div>

        <!-- Showcase: Lomo Bajo de Vaca a la Parrilla con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/lomo-vaca-parrilla.jpg" alt="<?= isEn() ? 'Charcoal Grilled Sirloin Steak' : 'Lomo Bajo de Vaca Seleccionada a la Parrilla' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-fire-flame-curved"></i> <?= isEn() ? 'PRIME CUT • 100% HOLM OAK CHARCOAL' : 'CORTE NOBLE SELECCIONADO • 100% CARBÓN DE ENCINA' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Charcoal Grilled Selected Sirloin Steak' : 'Lomo Bajo de Vaca Seleccionada a la Parrilla' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Exceptional tenderness and intramuscular marbling, seared on blazing embers to perfection, served with blistered Padrón peppers and golden roasted rustic potatoes.' : 'Gran terneza e infiltración óptima, marcado a fuego vivo al punto perfecto sobre carbón de encina, acompañado de patatas rústicas y pimientos de padrón.' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">29,50€</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. PESCADOS FRESCOS ESTILO DONOSTIA (FONDO: AZUL PROFUNDO CANTÁBRICO & SALITRE) -->
<section class="carta-section carta-sec-pescados" id="pescados">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-water"></i> <?= __('menu_cat_fish') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'From Cantabrian Sea' : 'Del Mar Cantábrico' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Merluza de Pintxo en Salsa Verde o Rebozada</div>
                    <div class="menu-item-price">27,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Con almejas y fumet de roca al estilo guipuzcoano</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Lomo de Lubina a la Parrilla o a la Sal</div>
                    <div class="menu-item-price">27,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Lubina salvaje asada con guarnición de verduras al vapor</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Cogote de Merluza a la Bilbaína</div>
                    <div class="menu-item-price">27,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Con el clásico refrito de ajos, guindilla y vinagre de sidra</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Brocheta de Rape y Langostinos</div>
                    <div class="menu-item-price">27,00€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Pescado, crustáceos</div>
            </div>

            <div class="menu-item-card" style="grid-column: span 2;">
                <div class="menu-item-top">
                    <div class="menu-item-name">Pulpo a la Brasa de Carbón</div>
                    <div class="menu-item-price">28,50€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Pata entera de pulpo marcada en brasa con patatas asadas</div>
            </div>
        </div>

        <!-- Showcase: Rape al Txakoli con Refrito con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/rape-txakoli.jpg" alt="<?= isEn() ? 'Monkfish with Txakoli Wine and Garlic Crisps' : 'Rape al Txacolí con Refrito de Ajos' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-anchor"></i> <?= isEn() ? 'DONOSTIA STYLE CASSEROLE' : 'ESPECIALIDAD EN CAZUELA DE BARRO' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Monkfish in Basque Txakoli Wine with Sizzling Garlic' : 'Rape al Txacolí con Refrito Tradicional de Ajos' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Prepared in an authentic earthenware cazuela with Basque Txakoli white wine reduction, sizzling golden garlic slices, mild chili rings and freshly chopped parsley (min. 2 guests).' : 'Elaborado en cazuela tradicional de barro con reducción de txakoli vasco, crujientes láminas de ajo dorado, aros de guindilla y perejil fresco picado (mín. 2 pax).' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">29,50€ <small><?= isEn() ? '(Per guest)' : '(Por persona)' ?></small></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. POSTRES CASEROS VASCOS (FONDO: MADERA RÚSTICA DE SIDRERÍA VASCA) -->
<section class="carta-section carta-sec-postres" id="postres">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-cake-candles"></i> <?= __('menu_cat_desserts') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'Crafted In-House Daily' : 'Elaboración Propia Diaria' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card" style="border-color: rgba(196, 162, 118, 0.25);">
                <div class="menu-item-top">
                    <div class="menu-item-name">Pantxineta Tradicional Sagaretxe</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Hojaldre crujiente relleno de crema pastelera templada y almendras tostadas</div>
            </div>

            <div class="menu-item-card" style="border-color: rgba(196, 162, 118, 0.25);">
                <div class="menu-item-top">
                    <div class="menu-item-name">Nuestra Famosa Tarta de Queso Idiazábal</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Cremosa, con el carácter inconfundible del queso de pastor ahumado</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Canutillos Rellenos de Crema de Chocolate Templado</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Canutillos de hojaldre frito recién rellenos</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Tatin de Manzana Asada al Horno</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Manzana caramelizada sobre base hojaldrada</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Arroz con Leche Tradicional con Arena de Tejas</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Con canela y crujiente de tejas de Tolosa</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Queso Idiazábal, Membrillo Casero y Nueces</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> El postre por excelencia de las sidrerías del norte</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Tejas de Tolosa con Helado Artesano de Turrón</div>
                    <div class="menu-item-price">6,90€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Tejas de almendra artesanas y bola de helado</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Torrija Caramelizada Sagaretxe</div>
                    <div class="menu-item-price">5,80€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Brioche empapado en leche aromatizada con costra de azúcar</div>
            </div>

            <div class="menu-item-card" style="grid-column: span 2;">
                <div class="menu-item-top">
                    <div class="menu-item-name">Sorbete Digestivo de Manzana Verde a la Sidra</div>
                    <div class="menu-item-price">5,80€</div>
                </div>
                <div class="menu-item-allergens"><i class="fa-solid fa-circle-info"></i> Refrescante y digestivo</div>
            </div>
        </div>

        <!-- Showcase: Pastel Vasco Artesano con Degradado a Fundido -->
        <div class="carta-dish-showcase">
            <div class="carta-dish-showcase-inner">
                <img src="<?= BASE_URL ?>/assets/images/pastel-vasco.jpg" alt="<?= isEn() ? 'Artisan Gâteau Basque' : 'Pastel Vasco Artesano' ?>" class="carta-dish-showcase-img" loading="lazy">
                <div class="carta-dish-showcase-fade"></div>
                <div class="carta-dish-showcase-caption">
                    <div>
                        <span class="carta-dish-showcase-tag"><i class="fa-solid fa-cookie-bite"></i> <?= isEn() ? 'ICONIC NORTHERN BASQUE PASTRY' : 'REPOSTERÍA TRADICIONAL VASCA' ?></span>
                        <h3 class="carta-dish-showcase-title"><?= isEn() ? 'Artisanal Basque Cake (Gâteau Basque)' : 'Pastel Vasco Artesano (Gâteau Basque)' ?></h3>
                        <p class="carta-dish-showcase-desc"><?= isEn() ? 'Golden buttery crust baked with the traditional score, filled with rich and silky Madagascar vanilla pastry custard, dusted with fine powdered sugar.' : 'Masa mantecada dorada con el clásico motivo tradicional, rellena de abundante y sedosa crema pastelera a la vainilla bourbon. Horneado a diario en nuestro obrador.' ?></p>
                    </div>
                    <div class="carta-dish-showcase-price">6,90€</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CAFÉS, INFUSIONES Y BODEGA (FONDO: ESPRESSO NOBLE) -->
<section class="carta-section carta-sec-cafes" id="cafes">
    <div class="container">
        <div class="menu-category-header">
            <h2 class="menu-category-title"><i class="fa-solid fa-mug-hot"></i> <?= __('menu_cat_coffees') ?></h2>
            <span class="menu-category-badge"><?= isEn() ? 'After-Dinner' : 'Sobremesa' ?></span>
        </div>

        <div class="menu-items-grid">
            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Café Espresso / Cortado / Con Leche</div>
                    <div class="menu-item-price">2,30€</div>
                </div>
                <div class="menu-item-allergens">Café 100% arábica de tueste natural</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Café Irlandés Tradicional con Whisky y Nata</div>
                    <div class="menu-item-price">6,00€</div>
                </div>
                <div class="menu-item-allergens">Whisky irlandés, café caliente y nata emulsionada</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Café Bombón o con Baileys</div>
                    <div class="menu-item-price">3,80€</div>
                </div>
                <div class="menu-item-allergens">Con leche condensada o crema Baileys</div>
            </div>

            <div class="menu-item-card">
                <div class="menu-item-top">
                    <div class="menu-item-name">Selección de Tés Selectos del Mundo</div>
                    <div class="menu-item-price">3,80€</div>
                </div>
                <div class="menu-item-allergens">Darjeeling, Jazmín, Fruta de la Pasión, Tuareg con Menta, Frutos del Bosque</div>
            </div>
        </div>

        <!-- Nota Legal de Carta -->
        <div class="menu-notice-box" style="margin-top: 55px;">
            <p><strong>IVA INCLUIDO</strong> · Servicio de Pan y Aperitivo: 2,80€ / persona.</p>
            <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 6px;">
                Disponemos de información detallada sobre alérgenos e intolerancias alimentarias para cada uno de nuestros platos. Por favor, comuníqueselo a nuestro personal.
            </p>
        </div>

        <!-- CTA a Reserva -->
        <div style="text-align: center; margin-top: 55px;">
            <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve" style="font-size: 0.92rem; padding: 15px 36px;">
                <span class="btn-lana-dot"></span>
                <span><?= isEn() ? 'BOOK TABLE TO TASTE OUR MENU' : 'RESERVAR MESA PARA DEGUSTAR LA CARTA' ?></span>
                <i class="fa-solid fa-arrow-right" style="margin-left: 8px;"></i>
            </a>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SAGARETXE – PORTADA PRINCIPAL (INSPIRADA EN LA ESTÉTICA DE RESTAURANTE LANA)
     Marco Editorial Cuadrado Alrededor del Fuego Central & Barra de Reserva Exclusiva
     ========================================================================== -->

<!-- 1. HERO ATMOSFÉRICO: MARCO EDITORIAL ALREDEDOR DEL FUEGO CENTRAL -->
<section class="hero-cinematic-lana hero-frame-mode" id="heroSection">
    
    <!-- Centro Visual / Escenario Panorámico para Video de Carne a la Brasa -->
    <div class="hero-center-stage">
        <video class="hero-center-video" autoplay loop muted playsinline poster="<?= BASE_URL ?>/assets/images/hero-impacto.jpg">
            <source src="<?= BASE_URL ?>/assets/videos/carne-brasa.mp4" type="video/mp4">
            <source src="<?= BASE_URL ?>/assets/videos/carne-brasa.webm" type="video/webm">
        </video>
        <!-- Viñeta radial e iluminación dramática para fundir el fuego con el marco negro -->
        <div class="hero-center-vignette"></div>
        <!-- Partículas Dinámicas de Brasa (Chispas de Carbón de Encina que flotan sobre el fuego) -->
        <div class="hero-embers" aria-hidden="true">
            <span class="ember ember-1"></span>
            <span class="ember ember-2"></span>
            <span class="ember ember-3"></span>
            <span class="ember ember-4"></span>
            <span class="ember ember-5"></span>
            <span class="ember ember-6"></span>
        </div>
    </div>

    <!-- Contenedor del Marco Cuadrado (Bordes Perimetrales Verticales y Horizontales) -->
    <div class="hero-frame-container">
        
        <!-- Esquinas Doradas del Cuadrado (Acentos de Galería de Arte) -->
        <div class="hero-frame-corners" aria-hidden="true">
            <span class="corner-bracket corner-tl"></span>
            <span class="corner-bracket corner-tr"></span>
            <span class="corner-bracket corner-bl"></span>
            <span class="corner-bracket corner-br"></span>
        </div>

        <!-- Borde Superior Horizontal -->
        <div class="hero-edge-top">
            <div class="edge-line"></div>
            <div class="edge-text-group">
                <span class="edge-tag"><?= __('hero_badge') ?></span>
                <span class="edge-bullet">◆</span>
                <span class="edge-tag-origin"><?= __('hero_badge_origin') ?></span>
            </div>
            <div class="edge-line"></div>
        </div>

        <!-- Borde Lateral Izquierdo Vertical (Texto Orientado) -->
        <aside class="hero-edge-left" aria-label="Tradición de Brasa">
            <div class="edge-line-vert"></div>
            <div class="edge-vert-content">
                <span class="vert-text"><?= isEn() ? 'PIL-PIL COD & CHARCOAL STEAKS' : 'BACALAO AL PIL PIL Y CHULETAS' ?></span>
                <span class="vert-bullet">◆</span>
                <span class="vert-text"><?= __('hero_badge_grill') ?></span>
            </div>
            <div class="edge-line-vert"></div>
        </aside>

        <!-- Borde Lateral Derecho Vertical (Texto Orientado) -->
        <aside class="hero-edge-right" aria-label="Sidrería y Pintxos">
            <div class="edge-line-vert"></div>
            <div class="edge-vert-content">
                <span class="vert-text"><?= __('hero_badge_cider') ?></span>
                <span class="vert-bullet">◆</span>
                <span class="vert-text"><?= __('hero_badge_pintxos') ?></span>
            </div>
            <div class="edge-line-vert"></div>
        </aside>

        <!-- Borde Inferior Horizontal: Título Sutil + Barra de Reserva Inmediata -->
        <div class="hero-edge-bottom">
            <!-- Título editorial que corona la base del marco -->
            <div class="hero-bottom-heading">
                <div class="hero-mobile-subbadge"><?= isEn() ? 'PIL-PIL COD & CHARCOAL STEAKS' : 'BACALAO AL PIL PIL Y CHULETAS' ?></div>
                <h1 class="hero-frame-headline"><?= __('hero_title') ?></h1>
            </div>

            <!-- Solo lo de Reservas (Barra Flotante Lana con Pelota de Luz) -->
            <div class="hero-booking-wrapper-lana">
                <form action="<?= langUrl('/reservas') ?>" method="GET" class="hero-booking-bar-lana">
                    <!-- Pelota de luz brillante que recorre el perímetro del borde -->
                    <div class="booking-border-orb" aria-hidden="true"></div>

                    <div class="booking-col-lana">
                        <label for="bookingComensales">
                            <i class="fa-solid fa-users"></i> <?= __('book_diners') ?>
                        </label>
                        <select name="personas" id="bookingComensales" required>
                            <option value="2">2 <?= isEn() ? 'Guests' : 'personas (Mesa íntima)' ?></option>
                            <option value="3">3 <?= isEn() ? 'Guests' : 'personas' ?></option>
                            <option value="4" selected>4 <?= isEn() ? 'Guests (Standard)' : 'personas (Mesa habitual)' ?></option>
                            <option value="5">5 <?= isEn() ? 'Guests' : 'personas' ?></option>
                            <option value="6">6 <?= isEn() ? 'Guests' : 'personas (Mesa amplia)' ?></option>
                            <option value="8">8+ <?= isEn() ? 'Guests (Group)' : 'personas (Grupos)' ?></option>
                        </select>
                    </div>

                    <div class="booking-col-lana">
                        <label for="bookingFecha">
                            <i class="fa-solid fa-calendar-day"></i> <?= __('book_date') ?>
                        </label>
                        <input type="date" name="fecha" id="bookingFecha" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" required>
                    </div>

                    <div class="booking-col-lana">
                        <label for="bookingTurno">
                            <i class="fa-solid fa-clock"></i> <?= __('book_shift') ?>
                        </label>
                        <select name="turno" id="bookingTurno">
                            <option value="almuerzo" selected><?= __('book_lunch') ?></option>
                            <option value="cena"><?= __('book_dinner') ?></option>
                        </select>
                    </div>

                    <div class="booking-col-lana-btn">
                        <button type="submit" class="btn-lana-submit">
                            <span><?= __('book_submit') ?></span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- 2. MANIFIESTO EDITORIAL (ESTILO LANA: MINIMALISTA, SERIF, ESPACIOS RESPIRADOS) -->
<section class="section-manifesto-lana">
    <div class="container manifesto-container-lana">
        <span class="manifesto-tag-lana"><?= __('manifesto_tag') ?></span>
        <blockquote class="manifesto-quote-lana">
            <?= __('manifesto_quote') ?>
        </blockquote>
        <div class="manifesto-author-lana">
            <span class="author-dash"></span>
            <span><?= __('manifesto_author') ?></span>
            <span class="author-dash"></span>
        </div>
    </div>
</section>

<!-- 3. LA TRILOGÍA DE NUESTRA IDENTIDAD (PARRILLA, BARRA Y TXOTX) -->
<section class="section-trilogy-lana">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= __('pillars_tag') ?></span>
            <h2 class="section-title-lana"><?= __('pillars_title') ?></h2>
            <div class="gold-hairline-sep"></div>
        </div>

        <div class="trilogy-grid-lana">
            <!-- Pilar 1: La Parrilla -->
            <article class="trilogy-card-lana">
                <div class="trilogy-img-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/parrilla.jpg" alt="<?= __('pillar_1_title') ?>" class="trilogy-img" loading="lazy">
                    <div class="trilogy-overlay"></div>
                    <span class="trilogy-badge"><?= isEn() ? 'EMBER & FIRE' : 'FUEGO Y BRASA' ?></span>
                </div>
                <div class="trilogy-content">
                    <h3 class="trilogy-title"><?= __('pillar_1_title') ?></h3>
                    <p class="trilogy-desc">
                        <?= __('pillar_1_desc') ?>
                    </p>
                    <a href="<?= langUrl('/carta') ?>" class="trilogy-link">
                        <span><?= __('pillar_1_link') ?></span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Pilar 2: La Barra de Pintxos -->
            <article class="trilogy-card-lana">
                <div class="trilogy-img-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/barra-pintxos.jpg" alt="<?= __('pillar_2_title') ?>" class="trilogy-img" loading="lazy">
                    <div class="trilogy-overlay"></div>
                    <span class="trilogy-badge">+150 <?= isEn() ? 'VARIETIES' : 'VARIEDADES' ?></span>
                </div>
                <div class="trilogy-content">
                    <h3 class="trilogy-title"><?= __('pillar_2_title') ?></h3>
                    <p class="trilogy-desc">
                        <?= __('pillar_2_desc') ?>
                    </p>
                    <a href="<?= langUrl('/pintxos') ?>" class="trilogy-link">
                        <span><?= __('pillar_2_link') ?></span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>

            <!-- Pilar 3: El Txotx de Kupela -->
            <article class="trilogy-card-lana">
                <div class="trilogy-img-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/kupelas.jpg" alt="<?= __('pillar_3_title') ?>" class="trilogy-img" loading="lazy">
                    <div class="trilogy-overlay"></div>
                    <span class="trilogy-badge"><?= isEn() ? 'CIDER RITUAL' : 'RITUAL DEL TXOTX' ?></span>
                </div>
                <div class="trilogy-content">
                    <h3 class="trilogy-title"><?= __('pillar_3_title') ?></h3>
                    <p class="trilogy-desc">
                        <?= __('pillar_3_desc') ?>
                    </p>
                    <a href="<?= langUrl('/nosotros') ?>" class="trilogy-link">
                        <span><?= __('pillar_3_link') ?></span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- 4. MESA DE CORTES NOBLES (INSPIRADA EN LA MESA DE CARNES DE RESTAURANTE LANA) -->
<section class="section-cuts-lana" id="cortes">
    <!-- Efecto Dinámico de Brasas y Llamas Ascendentes con Degradado (Carbón de Encina Sagaretxe) -->
    <div class="cuts-brasa-flames-canvas" aria-hidden="true">
        <!-- Resplandor basal de las brasas incandescentes -->
        <div class="cuts-embers-bed"></div>
        
        <!-- Video Real de Ascuas de Parrillada Widescreen Completo (Sin clonar, cubre todo el ancho) -->
        <div class="cuts-flames-video-wrap">
            <video class="cuts-fire-video" autoplay loop muted playsinline poster="<?= BASE_URL ?>/assets/images/hero-impacto.jpg">
                <source src="<?= BASE_URL ?>/assets/videos/ascuas-parrilla.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Manto de degradado que difumina las llamas para que no alcancen la parte superior -->
        <div class="cuts-flames-smoke-fade"></div>

        <!-- Transición suave en el borde inferior con la siguiente sección -->
        <div class="cuts-flames-bottom-fade"></div>

        <!-- Chispas y ascuas flotantes de carbón de encina -->
        <div class="cuts-embers-sparks">
            <span class="c-spark cs-1"></span>
            <span class="c-spark cs-2"></span>
            <span class="c-spark cs-3"></span>
            <span class="c-spark cs-4"></span>
            <span class="c-spark cs-5"></span>
            <span class="c-spark cs-6"></span>
            <span class="c-spark cs-7"></span>
            <span class="c-spark cs-8"></span>
            <span class="c-spark cs-9"></span>
            <span class="c-spark cs-10"></span>
        </div>
    </div>

    <div class="container cuts-relative-content">
        <div class="cuts-header-lana">
            <div>
                <span class="section-subtag-lana"><?= __('cuts_tag') ?></span>
                <h2 class="section-title-lana"><?= __('cuts_title') ?></h2>
                <p class="cuts-intro-desc"><?= __('cuts_subtitle') ?></p>
            </div>
            <div class="cuts-actions-desktop">
                <a href="<?= langUrl('/carta') ?>" class="btn-lana-outline">
                    <span><?= __('hero_btn_menu') ?></span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="cuts-showcase-grid-lana">
            <!-- Corte 1 -->
            <div class="cut-item-card-lana">
                <div class="cut-img-thumb">
                    <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0781-scaled-1.jpg" alt="<?= __('cut_1_name') ?>" loading="lazy">
                </div>
                <div class="cut-card-body">
                    <div class="cut-top-row">
                        <h4 class="cut-name"><?= __('cut_1_name') ?></h4>
                        <span class="cut-price"><?= __('cut_1_price') ?></span>
                    </div>
                    <p class="cut-description"><?= __('cut_1_desc') ?></p>
                    <div class="cut-tags-row">
                        <span class="cut-micro-tag">Dry Aged 45d</span>
                        <span class="cut-micro-tag">Carbón Encina</span>
                        <span class="cut-micro-tag">Pesaje en Sala</span>
                    </div>
                </div>
            </div>

            <!-- Corte 2 -->
            <div class="cut-item-card-lana">
                <div class="cut-img-thumb">
                    <img src="<?= BASE_URL ?>/assets/images/hero-txuleta.jpg" alt="<?= __('cut_2_name') ?>" loading="lazy">
                </div>
                <div class="cut-card-body">
                    <div class="cut-top-row">
                        <h4 class="cut-name"><?= __('cut_2_name') ?></h4>
                        <span class="cut-price"><?= __('cut_2_price') ?></span>
                    </div>
                    <p class="cut-description"><?= __('cut_2_desc') ?></p>
                    <div class="cut-tags-row">
                        <span class="cut-micro-tag">Rubia Gallega</span>
                        <span class="cut-micro-tag">Pasto Natural</span>
                        <span class="cut-micro-tag">Corte Noble</span>
                    </div>
                </div>
            </div>

            <!-- Corte 3 -->
            <div class="cut-item-card-lana">
                <div class="cut-img-thumb">
                    <img src="<?= BASE_URL ?>/assets/images/bacalao.jpg" alt="<?= __('cut_3_name') ?>" loading="lazy">
                </div>
                <div class="cut-card-body">
                    <div class="cut-top-row">
                        <h4 class="cut-name"><?= __('cut_3_name') ?></h4>
                        <span class="cut-price"><?= __('cut_3_price') ?></span>
                    </div>
                    <p class="cut-description"><?= __('cut_3_desc') ?></p>
                    <div class="cut-tags-row">
                        <span class="cut-micro-tag">Islas Feroe</span>
                        <span class="cut-micro-tag">Sidrería Clásica</span>
                        <span class="cut-micro-tag">Hecha al Momento</span>
                    </div>
                </div>
            </div>

            <!-- Corte 4 -->
            <div class="cut-item-card-lana">
                <div class="cut-img-thumb">
                    <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0813-scaled-1.jpg" alt="<?= __('cut_4_name') ?>" loading="lazy">
                </div>
                <div class="cut-card-body">
                    <div class="cut-top-row">
                        <h4 class="cut-name"><?= __('cut_4_name') ?></h4>
                        <span class="cut-price"><?= __('cut_4_price') ?></span>
                    </div>
                    <p class="cut-description"><?= __('cut_4_desc') ?></p>
                    <div class="cut-tags-row">
                        <span class="cut-micro-tag">Emulsión Lenta</span>
                        <span class="cut-micro-tag">AOVE Premium</span>
                        <span class="cut-micro-tag">Receta Donostiarra</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="cuts-actions-mobile">
            <a href="<?= langUrl('/carta') ?>" class="btn-lana-outline" style="width: 100%; justify-content: center;">
                <span><?= __('hero_btn_menu') ?></span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 4.5. ATMÓSFERA Y FOTOGRAFÍA SAGARETXE (GOOGLE MY BUSINESS & ALTA GASTRONOMÍA) -->
<section class="section-home-gallery-lana">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'VISUAL CHRONICLES • CHAMBERÍ' : 'NUESTRA CASA EN IMÁGENES • CHAMBERÍ' ?></span>
            <h2 class="section-title-lana"><?= isEn() ? 'Atmosphere & Basque Gastronomy' : 'El Asador en Cada Detalle' ?></h2>
            <p class="section-description" style="max-width: 680px; margin: 0 auto 20px auto; color: var(--text-muted); font-size: 0.98rem;">
                <?= isEn() 
                    ? 'Moments from our Chamberí tavern: the revolving Donostia pintxos bar, the sizzle of aged beef on holm oak coals, and the festive cider pour at the kupela.' 
                    : 'Momentos reales de nuestra taberna: la incesante barra donostiarra, el crepitar de la carne madurada al carbón de encina y el ritual del escanciado al txotx.' ?>
            </p>
            <div class="gold-hairline-sep"></div>
        </div>

        <div class="home-gallery-grid-lana">
            <div class="home-gallery-item hg-item-wide">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/DSC_0178-scaled-1.jpg" alt="Barra de pintxos Sagaretxe" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'PINTXOS COUNTER' : 'BARRA VIVA' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Over 150 varieties crafted daily' : 'Más de 150 variedades elaboradas al día' ?></h4>
                </div>
            </div>
            <div class="home-gallery-item">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0781-scaled-1.jpg" alt="Txuleta a la brasa" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'CHARCOAL GRILL' : 'PARRILLA DE ENCINA' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Aged ribeyes on ember fire' : 'Txuletas maduradas a la brasa' ?></h4>
                </div>
            </div>
            <div class="home-gallery-item">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0438-scaled-1.jpg" alt="Kupelas de sidra natural" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'CIDER HOUSE' : 'RITUAL DEL TXOTX' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Natural cider straight from the barrel' : 'Sidra natural al vuelo de kupela' ?></h4>
                </div>
            </div>
            <div class="home-gallery-item">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_1022-scaled-1.jpg" alt="Salón comedor Sagaretxe" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'THE DINING ROOM' : 'EL COMEDOR' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Warm cider house atmosphere in Chamberí' : 'Ambiente acogedor en Chamberí' ?></h4>
                </div>
            </div>
            <div class="home-gallery-item">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0771-scaled-1.jpg" alt="Pintxos calientes al momento" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'HOT SKEWERS' : 'CALIENTES AL MOMENTO' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Foie, brochettes & seasonal bites' : 'Foie fresco, brochetas y cazuelas' ?></h4>
                </div>
            </div>
            <div class="home-gallery-item hg-item-wide">
                <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0581-scaled-1.jpg" alt="Tarta de queso Idiazabal" loading="lazy">
                <div class="hg-overlay">
                    <span class="hg-tag"><?= isEn() ? 'POSTRE ARTESANO' : 'TRADICIÓN DULCE' ?></span>
                    <h4 class="hg-title"><?= isEn() ? 'Creamy Idiazabal Basque cheesecake' : 'Tarta cremosa de queso Idiazábal' ?></h4>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?= langUrl('/galeria') ?>" class="btn-lana-outline" style="padding: 13px 30px;">
                <span><?= isEn() ? 'Explore Full Photo Gallery' : 'Ver Galería Completa de Fotos' ?></span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- 5. CLUB SAGARETXE – MEMBRESÍA Y 12% DE DESCUENTO DIRECTO -->
<section class="section-club-lana">
    <div class="container">
        <div class="club-card-lana">
            <div class="club-info-lana">
                <span class="section-subtag-lana"><?= __('club_tag') ?></span>
                <h2 class="club-title-lana"><?= __('club_title') ?></h2>
                <p class="club-desc-lana">
                    <?= __('club_desc') ?>
                </p>
                <ul class="club-features-list-lana">
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span><strong><?= __('club_benefit_1') ?></strong></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span><?= __('club_benefit_2') ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-check"></i>
                        <span><?= __('club_benefit_3') ?></span>
                    </li>
                </ul>
                <div style="margin-top: 32px;">
                    <a href="<?= langUrl('/club') ?>" class="btn-lana-reserve">
                        <span class="btn-lana-dot"></span>
                        <span><?= __('club_btn') ?></span>
                    </a>
                </div>
            </div>

            <div class="club-badge-visual-lana">
                <div class="club-gold-seal">
                    <div class="seal-icon"><i class="fa-solid fa-crown"></i></div>
                    <div class="seal-number">12%</div>
                    <div class="seal-label"><?= isEn() ? 'DIRECT DISCOUNT' : 'DESCUENTO DIRECTO' ?></div>
                    <div class="seal-sub"><?= isEn() ? 'Valid 365 Days on All Menus' : 'Válido durante todo el año en carta' ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. RESEÑAS EDITORIALES DE NUESTROS CLIENTES -->
<section class="section-reviews-lana">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= __('reviews_tag') ?></span>
            <h2 class="section-title-lana"><?= __('reviews_title') ?></h2>
            <div class="gold-hairline-sep"></div>
        </div>

        <div class="reviews-grid-lana">
            <div class="review-box-lana">
                <div class="review-stars-lana">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="review-text-lana">
                    «Comida excelente y un servicio maravilloso la verdad. 10/10.»
                </p>
                <div class="review-signer-lana">
                    <span class="signer-name">Elite_HD _</span>
                    <span class="signer-source">Google Reviews · Chamberí</span>
                </div>
            </div>

            <div class="review-box-lana">
                <div class="review-stars-lana">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="review-text-lana">
                    «Hace poco fui a comer con unos amigos y la verdad que todo bastante bueno, sobre todo la sidra al txotx.»
                </p>
                <div class="review-signer-lana">
                    <span class="signer-name">Bananito YT</span>
                    <span class="signer-source">Google Reviews · Chamberí</span>
                </div>
            </div>

            <div class="review-box-lana">
                <div class="review-stars-lana">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p class="review-text-lana">
                    «Típica sidrería vasca auténtica. Muy buena la tortilla de bacalao y excelente el bacalao al pil-pil.»
                </p>
                <div class="review-signer-lana">
                    <span class="signer-name">Alberto Buendía</span>
                    <span class="signer-source">Google Reviews · Chamberí</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. CIERRE Y LLAMADA A LA EXPERIENCIA (ESTILO LANA) -->
<section class="section-cta-final-lana">
    <div class="container cta-final-inner-lana">
        <span class="section-subtag-lana"><?= isEn() ? 'WE AWAIT YOU IN CHAMBERÍ' : 'TE ESPERAMOS EN CHAMBERÍ' ?></span>
        <h2 class="cta-final-title-lana">
            <?= isEn() ? 'Experience the Art of Basque Grilling & Cider' : 'Vive la Auténtica Experiencia del Asador Vasco' ?>
        </h2>
        <p class="cta-final-desc-lana">
            <?= isEn() ? 'Book your table online with instant confirmation or visit our pintxos counter on Calle Eloy Gonzalo 26, Madrid.' : 'Reserva tu mesa online con confirmación inmediata o visítanos en nuestra barra de pintxos en Calle Eloy Gonzalo 26, Madrid.' ?>
        </p>
        <div class="cta-final-btns-row">
            <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-lg-lana">
                <span class="btn-lana-dot"></span>
                <span><?= __('hero_btn_reserve') ?></span>
            </a>
            <a href="tel:+34914462588" class="btn-lana-outline btn-lg-lana">
                <i class="fa-solid fa-phone"></i>
                <span>914 46 25 88</span>
            </a>
        </div>
    </div>
</section>

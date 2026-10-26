<!-- ==========================================================================
     SAGARETXE – QUIÉNES SOMOS / NUESTRA HISTORIA (FILOSOFÍA LANA)
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'TRADITION & HERITAGE' : 'NUESTRA TRADICIÓN' ?></span>
            <h1 class="section-title-lana"><?= isEn() ? 'About Us' : 'Quiénes Somos' ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= isEn() 
                    ? 'Since 1999 in the iconic Chamberí neighborhood of Madrid, bringing the welcoming soul, charcoal grill artistry, and natural cider barrel tradition of Basque country caseríos to the capital.' 
                    : 'Desde 1999 en el emblemático barrio de Chamberí, acercando el espíritu acogedor, la gastronomía y la sidra al txotx de los caseríos vascos al corazón de Madrid.' ?>
            </p>
            <div class="gold-hairline-sep"></div>
        </div>

        <div class="story-grid" style="margin-bottom: 70px; align-items: center;">
            <div class="story-content">
                <span class="section-subtag-lana"><?= isEn() ? 'OUR PHILOSOPHY' : 'NUESTRA HISTORIA' ?></span>
                <h2 style="font-family: var(--font-serif); font-size: 2.2rem; color: #fff; margin-bottom: 16px;">
                    <?= isEn() ? 'Over 25 Years Devoted to a Passion for Product' : 'Más de 25 Años Siendo Fieles a una Filosofía' ?>
                </h2>
                <p class="story-lead" style="color: var(--gold-lana); font-family: var(--font-serif); font-size: 1.35rem; font-style: italic; line-height: 1.6; margin-bottom: 18px;">
                    <?= isEn() 
                        ? 'Sagaretxe (which in Basque translates to "The House of the Apple") was founded to fulfill a vision: create an authentic Basque cider house in Madrid where noble product reigns supreme.' 
                        : 'Sagaretxe (que en euskera evoca a «La Casa de la Manzana») nació para hacer realidad un sueño: crear una auténtica sidrería donde la calidad de la materia prima primara por encima de todo.' ?>
                </p>
                <p class="story-text" style="color: var(--text-light); line-height: 1.8; margin-bottom: 16px;">
                    <?= isEn() 
                        ? 'From day one, we defined ourselves by product reverence. Fresh coastal fish, handpicked mature beef ribeyes with optimal dry aging, and uncompromising respect for heritage recipes remain our hallmark.' 
                        : 'Desde nuestros orígenes nos hemos caracterizado por ser un restaurante de producto. La frescura de la lonja, los cortes de carne seleccionados con maduración idónea y la elaboración respetuosa con las recetas tradicionales han sido y siguen siendo la marca inquebrantable de nuestra casa.' ?>
                </p>
                <p class="story-text" style="color: var(--text-light); line-height: 1.8; margin-bottom: 24px;">
                    <?= isEn() 
                        ? 'We welcome guests with two warm, wood-beamed dining rooms, an exterior terrace, and one of Madrid’s most vibrant and celebrated fresh pintxo counters.' 
                        : 'Disponemos de dos salas de comedor cálidas y acogedoras decoradas con nobles vigas y barricas, además de una terraza exterior y una de las barras de pintxos más vivas y concurridas de Madrid.' ?>
                </p>
                <div style="margin-top: 30px;">
                    <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                        <span class="btn-lana-dot"></span>
                        <span><?= __('nav_reserve') ?></span>
                    </a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-card-frame" style="border: 1px solid var(--border-accent); border-radius: var(--radius-sm); overflow: hidden;">
                    <img src="<?= BASE_URL ?>/assets/images/comedor.jpg" alt="Salón comedor Sagaretxe" class="hero-card-img" style="height: 440px; width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Qué Hacemos y Cómo lo Hacemos (Estilo Lana) -->
        <div class="grid-2" style="margin-bottom: 60px;">
            <div class="feature-card" style="padding: 40px 35px; background: #12151b; border: 1px solid var(--border-color); border-radius: var(--radius-sm);">
                <div class="feature-card-icon" style="color: var(--gold-lana); font-size: 2rem; margin-bottom: 16px;">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <h3 style="font-family: var(--font-serif); font-size: 1.8rem; margin-bottom: 14px; color: #fff;"><?= isEn() ? 'What We Do' : '¿Qué Hacemos?' ?></h3>
                <p style="font-size: 1.02rem; line-height: 1.8; color: var(--text-light);">
                    <?= isEn() 
                        ? 'We strive to deliver an unforgettable dining journey every time you step inside. We offer over 150 varieties of hot and cold pintxos continuously crafted, prime cuts grilled over holm oak coals, fresh coastal fish seared with garlic and chili, and natural cider served straight from our open wooden casks.' 
                        : 'Hacemos que cada persona que cruce nuestras puertas viva una experiencia gastronómica reconfortante y memorable. Ofrecemos más de 150 variedades de pintxos fríos y calientes en continua rotación, carnes nobles asadas al carbón de encina, pescados frescos preparados con el refrito tradicional donostiarra y sidra natural servida con orgullo desde nuestras kupelas.' ?>
                </p>
            </div>

            <div class="feature-card" style="padding: 40px 35px; background: #12151b; border: 1px solid var(--border-color); border-radius: var(--radius-sm);">
                <div class="feature-card-icon" style="color: var(--gold-lana); font-size: 2rem; margin-bottom: 16px;">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <h3 style="font-family: var(--font-serif); font-size: 1.8rem; margin-bottom: 14px; color: #fff;"><?= isEn() ? 'How We Do It' : '¿Cómo lo Hacemos?' ?></h3>
                <p style="font-size: 1.02rem; line-height: 1.8; color: var(--text-light);">
                    <?= isEn() 
                        ? 'Through our dedicated team. From dining room hosts and bartenders to grill masters and chefs, we share one common purpose: delivering attentive, warm, and consummate service so our guests have only one concern: enjoying great company and exceptional food.' 
                        : 'A través de nuestro equipo humano. Desde el personal de sala y barra hasta los maestros parrilleros y cocineros, todos trabajamos con una premisa compartida: brindar un trato cercano, agradable y sumamente profesional para que nuestros clientes tengan una única preocupación: disfrutar de la buena mesa y la compañía.' ?>
                </p>
            </div>
        </div>

        <!-- Galería de Atmósfera -->
        <div class="gallery-grid">
            <div class="gallery-card">
                <img src="<?= BASE_URL ?>/assets/images/parrilla.jpg" alt="Parrilla Sagaretxe">
                <div class="gallery-card-overlay"><span><?= isEn() ? 'Holm oak charcoal grill' : 'Parrilla al carbón de encina' ?></span></div>
            </div>
            <div class="gallery-card">
                <img src="<?= BASE_URL ?>/assets/images/kupelas.jpg" alt="Kupelas Sagaretxe">
                <div class="gallery-card-overlay"><span><?= isEn() ? 'Traditional cider barrels' : 'Kupelas tradicionales de sidra' ?></span></div>
            </div>
            <div class="gallery-card">
                <img src="<?= BASE_URL ?>/assets/images/barra-pintxos.jpg" alt="Barra de pintxos">
                <div class="gallery-card-overlay"><span><?= isEn() ? 'Artisan pintxos counter' : 'Barra de pintxos artesanos' ?></span></div>
            </div>
            <div class="gallery-card">
                <img src="<?= BASE_URL ?>/assets/images/comedor.jpg" alt="Salón tradicional Sagaretxe">
                <div class="gallery-card-overlay"><span><?= isEn() ? 'Atmospheric dining rooms' : 'Comedores para celebraciones' ?></span></div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 60px;">
            <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-lg-lana">
                <span class="btn-lana-dot"></span>
                <span><?= __('nav_reserve') ?></span>
            </a>
        </div>
    </div>
</section>

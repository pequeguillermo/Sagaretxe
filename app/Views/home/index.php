<!-- ==========================================================================
     SAGARETXE – LA SIDRERÍA VASCA EN MADRID (CHAMBERÍ)
     Portada Principal: Textos Oficiales y Literales de Sagaretxe.net
     ========================================================================== -->

<!-- 1. HERO CINEMATOGRÁFICO LUMINOSO (BARRA DE PINTXOS OFICIAL) -->
<section class="hero-cinematic">
    <div class="container hero-cinematic-inner">
        <!-- Distintivo de Tradición -->
        <div class="hero-origin-badge">
            <span>La Sidrería Vasca • Chamberí, Madrid</span>
        </div>

        <!-- Título Principal Oficial -->
        <h1 class="hero-main-title">
            Restaurante Vasco en Madrid<br>
            <span class="gold-text">Pintxos y Carnes a la Brasa</span>
        </h1>

        <!-- Subtítulo Oficial -->
        <p class="hero-main-desc">
            En 1999, en pleno barrio de Chamberí abrió sus puertas el restaurante Sagaretxe la sidrería vasca en Madrid (La Casa de la Manzana), haciendo realidad la idea de acercar a Madrid el ambiente y la tradición de las sidrerías vascas.
        </p>

        <!-- Barra de Reserva Inmediata del Asador -->
        <form action="<?= BASE_URL ?>/reservas" method="GET" class="hero-booking-bar">
            <div class="booking-field">
                <label for="bookingComensales">
                    <i class="fa-solid fa-users"></i> Comensales
                </label>
                <select name="personas" id="bookingComensales" required>
                    <option value="2">2 personas (Mesa íntima)</option>
                    <option value="3">3 personas</option>
                    <option value="4" selected>4 personas (Mesa habitual)</option>
                    <option value="5">5 personas</option>
                    <option value="6">6 personas (Mesa amplia)</option>
                    <option value="8">8+ personas (Grupos y Celebraciones)</option>
                </select>
            </div>

            <div class="booking-field">
                <label for="bookingFecha">
                    <i class="fa-solid fa-calendar-day"></i> Fecha
                </label>
                <input type="date" name="fecha" id="bookingFecha" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" required>
            </div>

            <div class="booking-field">
                <label for="bookingTurno">
                    <i class="fa-solid fa-clock"></i> Servicio
                </label>
                <select name="turno" id="bookingTurno">
                    <option value="almuerzo" selected>Almuerzo (12:00 - 17:00)</option>
                    <option value="cena">Cena a la Brasa (19:00 - 00:30)</option>
                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-primary booking-submit-btn">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span>Garantizar Mesa</span>
                </button>
            </div>
        </form>

        <!-- Garantías de la Casa -->
        <div class="hero-badges-row">
            <div class="hero-badge-pill">
                <i class="fa-solid fa-fire"></i>
                <span>Parrilla de carbón de encina</span>
            </div>
            <div class="hero-badge-pill">
                <i class="fa-solid fa-wine-glass"></i>
                <span>Sidra al Txotx de kupela directa</span>
            </div>
            <div class="hero-badge-pill">
                <i class="fa-solid fa-utensils"></i>
                <span>Barra de pintxos frescos</span>
            </div>
            <div class="hero-badge-pill">
                <i class="fa-solid fa-location-dot"></i>
                <span>Chamberí • C/ Eloy Gonzalo, 26</span>
            </div>
        </div>
    </div>
</section>

<!-- 2. EL RESTAURANTE – LA SIDRERÍA VASCA EN MADRID (TEXTO LITERAL OFICIAL) -->
<section class="section">
    <div class="container story-grid">
        <div class="story-content">
            <span class="section-tag">Nuestros Orígenes</span>
            <h2>El Restaurante <br><span style="color: var(--cider-gold);">La Sidrería Vasca en Madrid</span></h2>
            
            <p class="story-lead">
                En 1999, en pleno barrio de Chamberí abrió sus puertas el restaurante Sagaretxe la sidrería vasca en Madrid (La Casa de la Manzana), haciendo realidad la idea de acercar a Madrid el ambiente y la tradición de las sidrerías vascas.
            </p>
            
            <p class="story-text">
                Desde nuestros orígenes, nos hemos caracterizado por ser un restaurante de producto. La calidad de la materia prima y el respeto a la tradición en la elaboración de los platos han sido la marca de nuestra casa.
            </p>
            
            <p class="story-text">
                Durante todos estos años hemos sido fieles a esta filosofía. En la barra o en la sala nuestros clientes pueden degustar de los sabores de las auténticas sidrerías, desde los pintxos que pueden ser acompañados por sidra al “txotx”, la Tortilla y las Croquetas de Bacalao, hasta los excelentes pescados preparados al estilo Donostia, la Txuleta de Buey a la parrilla de carbón de encina y el Bacalao al Pil-Pil.
            </p>
            
            <p class="story-text">
                Para endulzar los paladares contamos con una surtida carta de postres en la que sobresale nuestra imbatible Tarta de Queso Idiazábal. El restaurante dispone, además de la barra y la terraza, de dos salas que le invitamos a conocer.
            </p>

            <div class="story-stats">
                <div class="stat-item">
                    <div class="stat-num">1999</div>
                    <div class="stat-label">Año de Apertura</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">2 Salas</div>
                    <div class="stat-label">Comedores + Terraza</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">100%</div>
                    <div class="stat-label">Cocina de Producto</div>
                </div>
            </div>

            <div style="margin-top: 35px;">
                <a href="<?= BASE_URL ?>/nosotros" class="btn btn-outline">
                    <span>CONÓCENOS</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="story-gallery-frame">
            <img src="<?= BASE_URL ?>/assets/images/barra-pintxos.jpg" alt="Barra de pintxos Sagaretxe en Chamberí" class="story-img">
            <img src="<?= BASE_URL ?>/assets/images/comedor.jpg" alt="Comedor sidrería Sagaretxe en Madrid" class="story-img">
            <img src="<?= BASE_URL ?>/assets/images/bacalao.jpg" alt="Bacalao tradicional Sagaretxe" class="story-img story-img-tall">
        </div>
    </div>
</section>

<!-- 3. PROPUESTAS GASTRONÓMICAS (SECCIONES LITERALES DE SAGARETXE.NET) -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Nuestra Casa</span>
            <h2 class="section-title">Propuestas de <span>Sagaretxe</span></h2>
            <p class="section-description">
                Descubre los espacios y la oferta gastronómica tradicional de nuestra sidrería en Madrid.
            </p>
        </div>

        <div class="proposals-grid">
            <!-- Bloque 1: Nuestros Pintxos -->
            <div class="proposal-card">
                <div class="proposal-thumb-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/barra-pintxos.jpg" alt="Nuestros Pintxos en Sagaretxe" class="proposal-thumb">
                    <span class="proposal-badge">Barra Diaria</span>
                </div>
                <div class="proposal-body">
                    <h3>Nuestros Pintxos</h3>
                    <p>
                        En nuestra espectacular barra encontrarás una gran variedad de pintxos fríos y calientes que…
                    </p>
                    <a href="<?= BASE_URL ?>/pintxos" class="btn btn-outline btn-sm proposal-btn">
                        <span>Pintxos Sagaretxe.</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Bloque 2: CARTA -->
            <div class="proposal-card">
                <div class="proposal-thumb-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/parrilla.jpg" alt="Carta tradicional Sagaretxe" class="proposal-thumb">
                    <span class="proposal-badge">Brasa y Cocina</span>
                </div>
                <div class="proposal-body">
                    <h3>CARTA</h3>
                    <p>
                        La calidad de la materia prima y el respeto a la tradición en la elaboración de los platos han sido la marca de nuestra casa.
                    </p>
                    <a href="<?= BASE_URL ?>/carta" class="btn btn-outline btn-sm proposal-btn">
                        <span>Saber más ...</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Bloque 3: Menús Especiales -->
            <div class="proposal-card">
                <div class="proposal-thumb-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/bacalao.jpg" alt="Menús Especiales Sagaretxe" class="proposal-thumb">
                    <span class="proposal-badge">Experiencia Completa</span>
                </div>
                <div class="proposal-body">
                    <h3>Menús Especiales</h3>
                    <p>
                        Descubre todas las propuestas que tenemos para tí, percibirás la esencia de una verdadera experiencia.
                    </p>
                    <a href="<?= BASE_URL ?>/menus" class="btn btn-outline btn-sm proposal-btn">
                        <span>Saber más ...</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Bloque 4: Menús para Grupos -->
            <div class="proposal-card">
                <div class="proposal-thumb-wrapper">
                    <img src="<?= BASE_URL ?>/assets/images/comedor.jpg" alt="Menús para Grupos Sagaretxe" class="proposal-thumb">
                    <span class="proposal-badge">Grupos y Empresas</span>
                </div>
                <div class="proposal-body">
                    <h3>Menús para Grupos</h3>
                    <p>
                        No te pierdas nuestros menús especiales para grupos… La mejor calidad, al mejor precio!…
                    </p>
                    <a href="<?= BASE_URL ?>/menus" class="btn btn-outline btn-sm proposal-btn">
                        <span>Menús Grupos ...</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. CLUB SAGARETXE – LA SIDRERÍA VASCA EN MADRID (TEXTO LITERAL OFICIAL) -->
<section class="section" style="padding: 95px 0;">
    <div class="container">
        <div class="club-hero-card">
            <div class="club-hero-info">
                <div class="club-hero-badge">
                    <i class="fa-solid fa-gift"></i> Club Sagaretxe
                </div>
                <h2>Más que Clientes, pensamos en nuestros <span style="color: var(--cider-gold);">Comensales como Socios</span></h2>
                
                <p style="font-size: 1.075rem; color: var(--text-light); margin-bottom: 22px; line-height: 1.7;">
                    Por ello te invitamos a ser parte del exclusivo <strong>CLUB SAGARETXE</strong>, en el que premiamos tu fidelidad ofreciendo un <strong>descuento del 12%</strong> en comidas a la carta por un año. Además periódicamente nuestro restaurante ofrece a los Socios increíbles promociones para momentos especiales como cumpleaños, eventos y otras celebraciones.
                </p>
                
                <p style="font-size: 1.05rem; color: var(--cider-gold); font-weight: 600; margin-bottom: 25px;">
                    No te las pierdas ¡Únete y comienza a gozar de los beneficios que brindamos a los miembros de nuestra Familia SAGARETXE!
                </p>

                <ul class="club-benefits-list">
                    <li><i class="fa-solid fa-circle-check"></i> <strong>12% de descuento directo en comidas a la carta siempre que vengas durante todo un año.</strong></li>
                    <li><i class="fa-solid fa-circle-check"></i> Promociones periódicas exclusivas para momentos especiales, cumpleaños y eventos.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Sin cuotas ni costes: alta 100% gratuita con tu teléfono móvil.</li>
                </ul>

                <div style="margin-top: 35px;">
                    <a href="<?= BASE_URL ?>/club" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-id-card"></i> Saber más ...
                    </a>
                </div>
            </div>

            <div class="club-hero-visual" style="text-align: center;">
                <div style="background: var(--bg-card); border: 2px solid var(--border-accent); border-radius: var(--radius-lg); padding: 45px 34px; box-shadow: var(--shadow-amber);">
                    <div style="font-size: 3rem; color: var(--cider-gold); margin-bottom: 12px;">
                        <i class="fa-solid fa-apple-whole"></i>
                    </div>
                    <div style="font-family: var(--font-heading); font-size: 3.4rem; font-weight: 800; color: #fff; line-height: 1;">
                        12% DTO
                    </div>
                    <p style="color: var(--cider-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-top: 10px; font-size: 0.95rem;">
                        En Toda la Carta
                    </p>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-top: 14px; line-height: 1.55;">
                        Válido en cada una de tus visitas durante un año entero al identificarte como socio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. OPINIONES DE NUESTROS COMENSALES (RESEÑAS REALES DE GOOGLE DE SAGARETXE) -->
<section class="reviews-section">
    <div class="container">
        <div class="section-header" style="margin-bottom: 30px;">
            <span class="section-tag">Opiniones de Nuestros Comensales</span>
            <h2 class="section-title">Lo Que Dicen de <span>Sagaretxe</span></h2>
            <p class="section-description">
                La satisfacción de nuestros clientes y la fidelidad de los vecinos de Chamberí y visitantes de Madrid avalan nuestra trayectoria.
            </p>
        </div>

        <div class="reviews-grid">
            <!-- Reseña 1 Oficial -->
            <div class="review-card">
                <div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-quote">
                        «Comida excelente un servicio maravilloso la verdad. 10/10»
                    </p>
                </div>
                <div class="review-author">
                    <div class="review-avatar">E</div>
                    <div class="review-author-info">
                        <strong>Elite_HD _</strong>
                        <span>Publicado en Google</span>
                    </div>
                </div>
            </div>

            <!-- Reseña 2 Oficial -->
            <div class="review-card">
                <div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-quote">
                        «Hace poco fuí a comer con unos amigos y la verdad que todo bastante bueno, sobre todo la sidra»
                    </p>
                </div>
                <div class="review-author">
                    <div class="review-avatar">B</div>
                    <div class="review-author-info">
                        <strong>Bananito YT</strong>
                        <span>Publicado en Google</span>
                    </div>
                </div>
            </div>

            <!-- Reseña 3 Oficial -->
            <div class="review-card">
                <div>
                    <div class="review-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p class="review-quote">
                        «Típica sidreria. Muy buena la tortilla de Bacalao y excelente el bacalao al pil pil.»
                    </p>
                </div>
                <div class="review-author">
                    <div class="review-avatar">A</div>
                    <div class="review-author-info">
                        <strong>alberto buendia</strong>
                        <span>Publicado en Google</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. LLAMADA FINAL A LA RESERVA (MÁRGENES AMPLIOS Y DESPEJADOS) -->
<section class="cta-final-section">
    <div class="cta-final-inner">
        <span class="section-tag" style="margin-bottom: 16px;">Te Esperamos en Chamberí</span>
        <h2 class="cta-final-title">
            ¿Listo para Vivir la Experiencia<br>
            <span style="color: var(--cider-gold);">Sagaretxe?</span>
        </h2>
        <p class="cta-final-desc">
            Reserva tu mesa online con confirmación inmediata o visítanos en nuestra barra de pintxos en Calle Eloy Gonzalo 26, Madrid.
        </p>
        <div class="cta-final-buttons">
            <a href="<?= BASE_URL ?>/reservas" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-calendar-check"></i> RESERVAR MESA ONLINE
            </a>
            <a href="tel:+34914462588" class="btn btn-outline btn-lg" style="border-color: rgba(255, 255, 255, 0.25);">
                <i class="fa-solid fa-phone"></i> LLAMAR AL 914 46 25 88
            </a>
        </div>
    </div>
</section>

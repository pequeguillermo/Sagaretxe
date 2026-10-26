<!-- ==========================================================================
     SAGARETXE – CONTACTO Y DÓNDE ESTAMOS (ESTÉTICA LANA)
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'CHAMBERÍ DISTRICT' : 'EN PLENO CHAMBERÍ' ?></span>
            <h1 class="section-title-lana"><?= isEn() ? 'Contact & Location' : 'Dónde Estamos' ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= isEn() 
                    ? 'Located at 26 Eloy Gonzalo Street, in one of Madrid’s most distinguished culinary hubs. Direct access via metro, bus, and nearby parking.' 
                    : 'Estamos ubicados en Calle Eloy Gonzalo 26, en una de las zonas gastronómicas más emblemáticas de Madrid. Fácil acceso en metro, autobús y con aparcamientos cercanos.' ?>
            </p>
            <div class="gold-hairline-sep"></div>
        </div>

        <div class="grid-2" style="margin-bottom: 55px; align-items: stretch;">
            <!-- Datos de Contacto y Transporte -->
            <div style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm); padding: 40px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h2 style="font-family: var(--font-serif); font-size: 2rem; margin-bottom: 20px; color: var(--gold-lana);">
                        <i class="fa-solid fa-location-dot"></i> Sagaretxe Asador & Sidrería
                    </h2>
                    <p style="font-size: 1.1rem; color: var(--text-white); margin-bottom: 25px; line-height: 1.6;">
                        <strong>Calle Eloy Gonzalo, 26</strong><br>
                        28010 Madrid (<?= isEn() ? 'Chamberí District, Spain' : 'Barrio de Chamberí, España' ?>)
                    </p>

                    <h3 style="font-family: var(--font-serif); font-size: 1.35rem; color: var(--text-white); margin-bottom: 14px;">
                        <i class="fa-solid fa-phone" style="color: var(--gold-lana);"></i> <?= isEn() ? 'Reservations & Contact Phones' : 'Teléfonos de Atención y Reservas' ?>
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 10px; margin-bottom: 25px; font-size: 1.05rem;">
                        <a href="tel:+34914462588" style="color: var(--gold-lana); font-weight: 700; font-size: 1.25rem;">
                            <i class="fa-solid fa-phone"></i> (+34) 914 46 25 88 <small style="font-size: 0.8rem; color: var(--text-muted); font-weight: 400;"><?= isEn() ? '(Main Phone)' : '(Fijo principal)' ?></small>
                        </a>
                        <a href="tel:+34914456023" style="color: var(--text-light);">
                            <i class="fa-solid fa-phone"></i> (+34) 914 45 60 23 <small style="font-size: 0.8rem; color: var(--text-muted);"><?= isEn() ? '(Secondary)' : '(Línea 2)' ?></small>
                        </a>
                        <a href="tel:+34622179060" style="color: var(--text-light);">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060 <small style="font-size: 0.8rem; color: var(--text-muted);">(WhatsApp)</small>
                        </a>
                        <a href="tel:+34633179060" style="color: var(--text-light);">
                            <i class="fa-solid fa-mobile-screen"></i> 633 179 060 <small style="font-size: 0.8rem; color: var(--text-muted);"><?= isEn() ? '(Mobile)' : '(Móvil)' ?></small>
                        </a>
                    </div>

                    <h3 style="font-family: var(--font-serif); font-size: 1.35rem; color: var(--text-white); margin-bottom: 12px;">
                        <i class="fa-solid fa-train-subway" style="color: var(--gold-lana);"></i> <?= isEn() ? 'How to Arrive' : 'Cómo Llegar' ?>
                    </h3>
                    <ul style="list-style: none; color: var(--text-muted); font-size: 0.95rem; display: flex; flex-direction: column; gap: 8px;">
                        <li><strong>Metro:</strong> Iglesia (Línea 1), Quevedo (Línea 2), Alonso Cano (Línea 7).</li>
                        <li><strong>Autobús EMT:</strong> Líneas 3, 16, 61 <?= isEn() ? 'with stop on Calle Eloy Gonzalo' : 'con parada en Calle Eloy Gonzalo' ?>.</li>
                        <li><strong>Parking:</strong> <?= isEn() ? 'Public parking available within 100 meters on the same street.' : 'Parkings públicos a menos de 100 metros en la misma calle.' ?></li>
                    </ul>
                </div>

                <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                    <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve btn-block" style="text-align: center; justify-content: center; width: 100%;">
                        <span class="btn-lana-dot"></span>
                        <span><?= __('nav_reserve_online') ?></span>
                    </a>
                </div>
            </div>

            <!-- Horarios y Mapa -->
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <!-- Tarjeta Horarios -->
                <div style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm); padding: 30px;">
                    <h3 style="font-family: var(--font-serif); font-size: 1.5rem; margin-bottom: 16px; color: var(--gold-lana);">
                        <i class="fa-solid fa-clock"></i> <?= __('footer_hours') ?>
                    </h3>
                    <div style="display: flex; flex-direction: column; gap: 12px; font-size: 1rem;">
                        <div style="display: flex; justify-content: space-between; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 10px;">
                            <strong><?= isEn() ? 'Sunday to Thursday:' : 'Domingo a Jueves:' ?></strong>
                            <span style="color: var(--gold-lana); font-weight: 600;">12:00 – 17:00 / 19:00 – 00:30</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding-top: 4px;">
                            <strong><?= isEn() ? 'Friday & Saturday:' : 'Viernes y Sábado:' ?></strong>
                            <span style="color: var(--gold-lana); font-weight: 600;">12:00 – 17:00 / 19:00 – 01:00</span>
                        </div>
                    </div>
                    <p style="color: var(--text-muted); font-size: 0.85rem; margin-top: 14px; margin-bottom: 0;">
                        * <?= __('footer_hours_note') ?>
                    </p>
                </div>

                <!-- Google Maps Embed -->
                <div style="border-radius: var(--radius-sm); overflow: hidden; border: 1px solid var(--border-color); flex-grow: 1; min-height: 280px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.7027376678224!2d-3.70271502347318!3d40.43328005437894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42288a6d610363%3A0x6b44ce6159c98863!2sC.%20de%20Eloy%20Gonzalo%2C%2026%2C%20Chamber%C3%AD%2C%2028010%20Madrid!5e0!3m2!1ses!2ses!4v1710000000000!5m2!1ses!2ses"
                        width="100%"
                        height="100%"
                        style="border:0; min-height: 280px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Ubicación de Sagaretxe en Google Maps">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

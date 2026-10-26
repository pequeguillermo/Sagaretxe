<!-- ==========================================================================
     SAGARETXE – CLUB GOURMET (12% DESCUENTO Y SOCIOS)
     Bilingüe ES / EN • Estética Lana Luxury Fine-Dining
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'EXCLUSIVE MEMBERSHIP' : 'PROGRAMA DE FIDELIZACIÓN' ?></span>
            <h1 class="section-title-lana"><?= isEn() ? 'Club Sagaretxe' : 'Club Gourmet Sagaretxe' ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= isEn() 
                    ? 'More than customers, we regard our guests as culinary family. Join free in under 1 minute and enjoy a direct 12% discount on all à la carte meals year-round.' 
                    : 'Más que clientes, pensamos en nuestros comensales como socios. Únete gratis en menos de 1 minuto y empieza a disfrutar de inmediato de un 12% de descuento directo en todas tus comidas a la carta.' ?>
            </p>
            <div class="gold-hairline-sep"></div>
        </div>

        <!-- Banner Explicativo del Club Lana -->
        <div class="club-card-lana" style="margin-bottom: 55px;">
            <div class="club-info-lana">
                <span class="section-subtag-lana"><?= isEn() ? 'PRIVILEGES' : 'VENTAJAS EXCLUSIVAS' ?></span>
                <h2 class="club-title-lana"><?= isEn() ? 'Why Become a Member?' : '¿Por qué Unirte al Club?' ?></h2>
                <p class="club-desc-lana">
                    <?= isEn() 
                        ? 'Joining Sagaretxe Gourmet Club is 100% free with zero fees or obligations. Enter your details to activate exclusive rewards every time you visit.' 
                        : 'Ser socio de Sagaretxe es totalmente gratuito. No hay cuotas ni compromisos. Solo déjanos tus datos de contacto para premiar tu fidelidad cada vez que vengas a disfrutar de nuestra taberna y asador.' ?>
                </p>
                <ul class="club-features-list-lana">
                    <li><i class="fa-solid fa-check"></i> <span><strong><?= isEn() ? '12% direct discount' : '12% de descuento directo' ?></strong> <?= isEn() ? 'on all à la carte dishes for a full year.' : 'en comidas a la carta durante todo un año renovable.' ?></span></li>
                    <li><i class="fa-solid fa-check"></i> <span><?= isEn() ? 'Personalized promotions for birthdays, group events, and anniversaries.' : 'Promociones personalizadas para cumpleaños, cenas de empresa y eventos.' ?></span></li>
                    <li><i class="fa-solid fa-check"></i> <span><?= isEn() ? 'Priority access to cider tasting sessions and seasonal meat specials.' : 'Acceso preferente a jornadas gastronómicas y temporada de sidra al txotx.' ?></span></li>
                    <li><i class="fa-solid fa-check"></i> <span><?= isEn() ? 'No physical cards: your mobile number is your ID.' : 'Sin tarjetas físicas: basta con dar tu número de teléfono al pedir la cuenta.' ?></span></li>
                </ul>
            </div>
            <div class="club-badge-visual-lana">
                <div class="club-gold-seal">
                    <div class="seal-icon"><i class="fa-solid fa-crown"></i></div>
                    <div class="seal-number">12%</div>
                    <div class="seal-label"><?= isEn() ? 'DIRECT DISCOUNT' : 'DESCUENTO DIRECTO' ?></div>
                    <div class="seal-sub"><?= isEn() ? 'Free Immediate Activation' : 'Alta inmediata 100% gratuita' ?></div>
                </div>
            </div>
        </div>

        <!-- Feedback de Mensajes -->
        <div id="clubFeedback" class="alert-feedback" style="max-width: 820px; margin-left: auto; margin-right: auto;"></div>

        <!-- Formulario de Registro al Club -->
        <div id="clubFormWrapper" class="form-card" style="border-color: var(--border-accent); background: #12151b;">
            <h2 style="font-family: var(--font-serif); font-size: 2rem; margin-bottom: 8px; text-align: center; color: var(--text-white);">
                <?= isEn() ? 'Free Registration to Club Sagaretxe' : 'Inscripción Gratuita al Club Sagaretxe' ?>
            </h2>
            <p style="text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 30px;">
                <?= isEn() ? 'Fill in your details to activate your 12% discount instantly.' : 'Rellena tus datos para activar tu descuento del 12% de forma instantánea.' ?>
            </p>

            <form id="clubRegistrationForm">
                <!-- Datos Personales -->
                <h3 class="form-section-title" style="margin-top: 0; font-family: var(--font-serif); font-size: 1.4rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-user-tag"></i> <?= isEn() ? 'Personal Details' : 'Datos Personales' ?>
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="clubName" class="form-label"><?= isEn() ? 'First Name' : 'Nombre' ?> <span>*</span></label>
                        <input type="text" id="clubName" class="form-control" placeholder="<?= isEn() ? 'First name' : 'Tu nombre' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="clubSurname" class="form-label"><?= isEn() ? 'Last Name' : 'Apellidos' ?> <span>*</span></label>
                        <input type="text" id="clubSurname" class="form-control" placeholder="<?= isEn() ? 'Last name' : 'Tus apellidos' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="clubPhone" class="form-label"><?= isEn() ? 'Mobile Phone' : 'Teléfono Móvil' ?> <span>*</span></label>
                        <input type="tel" id="clubPhone" class="form-control" placeholder="600 000 000" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);"><?= isEn() ? 'Your phone number serves as your membership ID.' : 'Será tu identificador para aplicar el descuento.' ?></small>
                    </div>

                    <div class="form-group">
                        <label for="clubEmail" class="form-label"><?= isEn() ? 'Email Address' : 'Correo Electrónico' ?> <span>*</span></label>
                        <input type="email" id="clubEmail" class="form-control" placeholder="socio@email.com" required>
                    </div>

                    <div class="form-group form-full">
                        <label for="clubPostalCode" class="form-label"><?= isEn() ? 'Postal / ZIP Code' : 'Código Postal' ?> <span>*</span></label>
                        <input type="text" id="clubPostalCode" class="form-control" placeholder="Ej. 28010" required>
                    </div>
                </div>

                <!-- Preferencias Gastronómicas -->
                <h3 class="form-section-title" style="font-family: var(--font-serif); font-size: 1.4rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-utensils"></i> <?= isEn() ? 'Culinary Preferences' : 'Tus Preferencias Gastronómicas' ?>
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="clubPrefSpace" class="form-label"><?= isEn() ? 'Bar or Dining Room?' : '¿Barra o Sala?' ?> <span>*</span></label>
                        <select id="clubPrefSpace" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select an option...' : 'Selecciona una opción...' ?></option>
                            <option value="barra"><?= isEn() ? 'Pintxos Bar (Casual & Dynamic)' : 'Barra (Pintxos y dinamismo)' ?></option>
                            <option value="sala"><?= isEn() ? 'Dining Room (Tablecloth & Calm)' : 'Sala (Comedor y mantel)' ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefFood" class="form-label"><?= isEn() ? 'Meat or Fish?' : '¿Carne o Pescado?' ?> <span>*</span></label>
                        <select id="clubPrefFood" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select...' : 'Selecciona...' ?></option>
                            <option value="carne"><?= isEn() ? 'Meat (Charcoal Ribeyes & Steaks)' : 'Carne (Txuleta y brasa)' ?></option>
                            <option value="pescado"><?= isEn() ? 'Fish (Wild Cod & Donostia Style)' : 'Pescado (Bacalao y Donostia)' ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefDrink1" class="form-label"><?= isEn() ? 'Beer or Natural Cider?' : '¿Cerveza o Sidra?' ?> <span>*</span></label>
                        <select id="clubPrefDrink1" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select...' : 'Selecciona...' ?></option>
                            <option value="sidra"><?= isEn() ? 'Natural Basque Cider (Txotx)' : 'Sidra Natural al Txotx' ?></option>
                            <option value="cerveza"><?= isEn() ? 'Beer / Draft' : 'Cerveza' ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefDrink2" class="form-label"><?= isEn() ? 'Red or White Wine?' : '¿Vino Tinto o Blanco?' ?> <span>*</span></label>
                        <select id="clubPrefDrink2" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select...' : 'Selecciona...' ?></option>
                            <option value="tinto"><?= isEn() ? 'Red Wine (Rioja / Ribera)' : 'Vino Tinto (Rioja / Ribera)' ?></option>
                            <option value="blanco"><?= isEn() ? 'White Wine (Rueda / Txakoli)' : 'Vino Blanco (Rueda / Txakoli)' ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefTime" class="form-label"><?= isEn() ? 'Weekdays or Weekend?' : '¿Entre semana o fin de semana?' ?> <span>*</span></label>
                        <select id="clubPrefTime" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select...' : 'Selecciona...' ?></option>
                            <option value="semana"><?= isEn() ? 'Weekdays' : 'Entre semana' ?></option>
                            <option value="finde"><?= isEn() ? 'Weekend' : 'Fin de semana' ?></option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubHowKnewUs" class="form-label"><?= isEn() ? 'How did you hear about us?' : '¿Cómo nos conociste?' ?> <span>*</span></label>
                        <select id="clubHowKnewUs" class="form-control" required>
                            <option value=""><?= isEn() ? 'Select...' : 'Selecciona...' ?></option>
                            <option value="vecino"><?= isEn() ? 'Chamberí neighbor / local' : 'Vecino del barrio de Chamberí' ?></option>
                            <option value="conocido"><?= isEn() ? 'Friend / Word of mouth' : 'Por recomendación de un amigo' ?></option>
                            <option value="internet"><?= isEn() ? 'Online / Social Media' : 'Por Internet / Redes Sociales' ?></option>
                            <option value="prensa"><?= isEn() ? 'Food guides / Press' : 'Prensa o guías gastronómicas' ?></option>
                            <option value="tv"><?= isEn() ? 'Television' : 'Televisión' ?></option>
                        </select>
                    </div>
                </div>

                <div style="margin-top: 36px; margin-bottom: 8px;">
                    <button type="submit" id="clubSubmitBtn" class="btn-lana-submit" style="width: 100%; padding: 16px;">
                        <i class="fa-solid fa-crown" style="margin-right: 8px;"></i> <?= isEn() ? 'Register for Club Sagaretxe (Free)' : 'Registrarme al Club Sagaretxe (Gratis)' ?>
                    </button>
                </div>
            </form>
        </div>

        <!-- Pantalla de Bienvenida al Socio -->
        <div id="clubSuccessWrapper" class="form-card" style="display: none; text-align: center; padding: 50px 40px; border-color: var(--gold-lana); background: #12151b; margin-bottom: 55px;">
            <div style="width: 76px; height: 76px; border-radius: var(--radius-full); background: rgba(196, 162, 118, 0.15); border: 2px solid var(--gold-lana); color: var(--gold-lana); display: flex; align-items: center; justify-content: center; font-size: 2.4rem; margin: 0 auto 20px;">
                <i class="fa-solid fa-crown"></i>
            </div>
            <h2 style="font-family: var(--font-serif); font-size: 2.4rem; color: #fff; margin-bottom: 10px;"><?= isEn() ? 'Welcome to Club Sagaretxe!' : '¡Bienvenido al Club Sagaretxe!' ?></h2>
            <p style="font-size: 1.15rem; color: var(--text-light); max-width: 580px; margin: 0 auto 25px;">
                <?= isEn() 
                    ? 'Your membership registration is complete. You can now enjoy your 12% direct discount on all dishes.' 
                    : 'Tu alta como socio ha sido completada con éxito. Ya puedes disfrutar de tu 12% de descuento directo en toda la carta.' ?>
            </p>

            <div style="background: #171a22; border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 24px; max-width: 460px; margin: 0 auto 30px; text-align: left;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Status:' : 'Estado:' ?></span>
                    <strong style="color: #10b981;"><i class="fa-solid fa-circle-check"></i> <?= isEn() ? 'Active' : 'Activo' ?></strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Member ID:' : 'Identificador:' ?></span>
                    <strong id="clubMemberNumber" style="color: var(--gold-lana);">#---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Name:' : 'Nombre:' ?></span>
                    <strong id="clubMemberName" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Phone:' : 'Teléfono de Socio:' ?></span>
                    <strong id="clubMemberPhone" style="color: #fff;">---</strong>
                </div>
            </div>

            <div style="background: rgba(196, 162, 118, 0.12); border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 18px; max-width: 520px; margin: 0 auto 30px; font-size: 0.95rem; color: #fff;">
                <i class="fa-solid fa-circle-info" style="color: var(--gold-lana);"></i> <strong><?= isEn() ? 'How to use your discount?' : '¿Cómo usar tu descuento?' ?></strong><br>
                <?= isEn() 
                    ? 'Whenever you book online or visit our tavern, simply provide your mobile phone number and the 12% discount will be applied automatically.' 
                    : 'Cada vez que reserves mesa online o visites nuestra taberna, facilita tu número de teléfono y el descuento se aplicará automáticamente.' ?>
            </div>

            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="<?= langUrl('/reservas') ?>" class="btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span><?= isEn() ? 'Book a Table with 12% Off' : 'Reservar Mesa con Mi 12% Dto' ?></span>
                </a>
                <a href="<?= langUrl('/') ?>" class="btn-lana-outline">
                    <?= isEn() ? 'Back to Home' : 'Volver al Inicio' ?>
                </a>
            </div>
        </div>
    </div>
</section>

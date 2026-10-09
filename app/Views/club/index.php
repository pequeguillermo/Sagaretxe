<!-- ==========================================================================
     SAGARETXE – CLUB GOURMET (12% DESCUENTO Y SOCIOS)
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Programa de Fidelización</span>
            <h1 class="section-title">Club Gourmet <span>Sagaretxe</span></h1>
            <p class="section-description">
                Más que clientes, pensamos en nuestros comensales como socios. Únete gratis en menos de 1 minuto y empieza a disfrutar de inmediato de un <strong>12% de descuento directo</strong> en todas tus comidas a la carta.
            </p>
        </div>

        <!-- Banner Explicativo del Club -->
        <div class="club-hero-card" style="margin-bottom: 55px;">
            <div class="club-hero-info">
                <div class="club-hero-badge"><i class="fa-solid fa-crown"></i> Ventajas Exclusivas</div>
                <h2>¿Por qué Unirte al Club?</h2>
                <p style="color: var(--text-light); font-size: 1.05rem; line-height: 1.7;">
                    Ser socio de Sagaretxe es <strong>totalmente gratuito</strong>. No hay cuotas ni compromisos. Solo déjanos tus datos de contacto y tus preferencias para premiar tu fidelidad cada vez que vengas a disfrutar de nuestra taberna y sidrería.
                </p>
                <ul class="club-benefits-list">
                    <li><i class="fa-solid fa-circle-check"></i> <strong>12% de descuento directo</strong> en comidas a la carta durante todo un año renovable.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Promociones personalizadas para <strong>cumpleaños, cenas de empresa y eventos</strong>.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Acceso preferente a jornadas gastronómicas y temporada de sidra al txotx.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Sin tarjetas físicas: basta con dar tu número de teléfono al pedir la cuenta.</li>
                </ul>
            </div>
            <div class="club-hero-visual" style="text-align: center;">
                <div style="background: var(--bg-card); border: 2px solid var(--border-accent); border-radius: var(--radius-lg); padding: 40px 30px; box-shadow: var(--shadow-amber);">
                    <div style="font-size: 3.2rem; color: var(--cider-gold); margin-bottom: 10px;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <div style="font-family: var(--font-heading); font-size: 3.2rem; font-weight: 800; color: #fff; line-height: 1;">
                        12% DTO
                    </div>
                    <p style="color: var(--cider-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-top: 8px;">
                        En Carta Todo el Año
                    </p>
                    <p style="color: var(--text-muted); font-size: 0.875rem; margin-top: 10px;">
                        Alta inmediata 100% gratuita.
                    </p>
                </div>
            </div>
        </div>

        <!-- Feedback de Mensajes -->
        <div id="clubFeedback" class="alert-feedback" style="max-width: 820px; margin-left: auto; margin-right: auto;"></div>

        <!-- Formulario de Registro al Club -->
        <div id="clubFormWrapper" class="form-card">
            <h2 style="font-size: 1.85rem; margin-bottom: 8px; text-align: center; color: var(--text-white);">
                Inscripción Gratuita al Club Sagaretxe
            </h2>
            <p style="text-align: center; color: var(--text-muted); font-size: 0.95rem; margin-bottom: 30px;">
                Rellena tus datos para activar tu descuento del 12% de forma instantánea.
            </p>

            <form id="clubRegistrationForm">
                <!-- Datos Personales -->
                <h3 class="form-section-title" style="margin-top: 0;">
                    <i class="fa-solid fa-user-tag"></i> Datos Personales
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="clubName" class="form-label">Nombre <span>*</span></label>
                        <input type="text" id="clubName" class="form-control" placeholder="Tu nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="clubSurname" class="form-label">Apellidos <span>*</span></label>
                        <input type="text" id="clubSurname" class="form-control" placeholder="Tus apellidos" required>
                    </div>

                    <div class="form-group">
                        <label for="clubPhone" class="form-label">Teléfono Móvil <span>*</span></label>
                        <input type="tel" id="clubPhone" class="form-control" placeholder="600 000 000" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);">Será tu identificador para aplicar el descuento.</small>
                    </div>

                    <div class="form-group">
                        <label for="clubEmail" class="form-label">Correo Electrónico <span>*</span></label>
                        <input type="email" id="clubEmail" class="form-control" placeholder="socio@email.com" required>
                    </div>

                    <div class="form-group form-full">
                        <label for="clubPostalCode" class="form-label">Código Postal <span>*</span></label>
                        <input type="text" id="clubPostalCode" class="form-control" placeholder="Ej. 28010" required>
                    </div>
                </div>

                <!-- Preferencias Gastronómicas -->
                <h3 class="form-section-title">
                    <i class="fa-solid fa-utensils"></i> Tus Preferencias Gastronómicas
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="clubPrefSpace" class="form-label">¿Barra o Sala? <span>*</span></label>
                        <select id="clubPrefSpace" class="form-control" required>
                            <option value="">Selecciona una opción...</option>
                            <option value="barra">Barra (Pintxos y dinamismo)</option>
                            <option value="sala">Sala (Comedor y mantel)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefFood" class="form-label">¿Carne o Pescado? <span>*</span></label>
                        <select id="clubPrefFood" class="form-control" required>
                            <option value="">Selecciona...</option>
                            <option value="carne">Carne (Txuleta y brasa)</option>
                            <option value="pescado">Pescado (Bacalao y Donostia)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefDrink1" class="form-label">¿Cerveza o Sidra? <span>*</span></label>
                        <select id="clubPrefDrink1" class="form-control" required>
                            <option value="">Selecciona...</option>
                            <option value="sidra">Sidra Natural al Txotx</option>
                            <option value="cerveza">Cerveza</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefDrink2" class="form-label">¿Vino Tinto o Blanco? <span>*</span></label>
                        <select id="clubPrefDrink2" class="form-control" required>
                            <option value="">Selecciona...</option>
                            <option value="tinto">Vino Tinto (Rioja / Ribera)</option>
                            <option value="blanco">Vino Blanco (Rueda / Txakoli)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubPrefTime" class="form-label">¿Entre semana o fin de semana? <span>*</span></label>
                        <select id="clubPrefTime" class="form-control" required>
                            <option value="">Selecciona...</option>
                            <option value="semana">Entre semana</option>
                            <option value="finde">Fin de semana</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="clubHowKnewUs" class="form-label">¿Cómo nos conociste? <span>*</span></label>
                        <select id="clubHowKnewUs" class="form-control" required>
                            <option value="">Selecciona...</option>
                            <option value="vecino">Vecino del barrio de Chamberí</option>
                            <option value="conocido">Por recomendación de un amigo</option>
                            <option value="internet">Por Internet / Redes Sociales</option>
                            <option value="prensa">Prensa o guías gastronómicas</option>
                            <option value="tv">Televisión</option>
                        </select>
                    </div>
                </div>

                <div style="margin-top: 36px; margin-bottom: 8px;">
                    <button type="submit" id="clubSubmitBtn" class="btn btn-primary btn-block btn-lg">
                        <i class="fa-solid fa-id-card"></i> Registrarme al Club Sagaretxe (Gratis)
                    </button>
                </div>
            </form>
        </div>

        <!-- Pantalla de Bienvenida al Socio -->
        <div id="clubSuccessWrapper" class="form-card" style="display: none; text-align: center; padding: 50px 40px; border-color: rgba(16, 185, 129, 0.5); background: linear-gradient(135deg, #152219 0%, #15181c 100%); margin-bottom: 55px;">
            <div style="width: 76px; height: 76px; border-radius: var(--radius-full); background: rgba(16, 185, 129, 0.15); border: 2px solid #10b981; color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 2.4rem; margin: 0 auto 20px;">
                <i class="fa-solid fa-crown"></i>
            </div>
            <h2 style="font-size: 2.3rem; color: #fff; margin-bottom: 10px;">¡Bienvenido al Club Sagaretxe!</h2>
            <p style="font-size: 1.15rem; color: var(--text-light); max-width: 580px; margin: 0 auto 25px;">
                Tu alta como socio ha sido completada con éxito. Ya puedes disfrutar de tu <strong>12% de descuento directo</strong> en toda la carta.
            </p>

            <div style="background: var(--bg-card); border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 24px; max-width: 460px; margin: 0 auto 30px; text-align: left;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Estado:</span>
                    <strong style="color: #10b981;"><i class="fa-solid fa-circle-check"></i> Activo</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Identificador:</span>
                    <strong id="clubMemberNumber" style="color: var(--cider-gold);">Nº de Socio: #---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Nombre:</span>
                    <strong id="clubMemberName" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Teléfono de Socio:</span>
                    <strong id="clubMemberPhone" style="color: #fff;">---</strong>
                </div>
            </div>

            <div style="background: rgba(217, 130, 43, 0.12); border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 18px; max-width: 520px; margin: 0 auto 30px; font-size: 0.95rem; color: #fff;">
                <i class="fa-solid fa-circle-info" style="color: var(--cider-gold);"></i> <strong>¿Cómo usar tu descuento?</strong><br>
                Cada vez que reserves mesa online o visites nuestra taberna, facilita tu número de teléfono y el descuento se aplicará automáticamente.
            </div>

            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="<?= BASE_URL ?>/reservas" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-calendar-check"></i> Reservar Mesa con Mi 12% Dto
                </a>
                <a href="<?= BASE_URL ?>/" class="btn btn-outline btn-lg">
                    Volver al Inicio
                </a>
            </div>
        </div>
    </div>
</section>

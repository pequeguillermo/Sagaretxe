<!-- ==========================================================================
     SAGARETXE – ORGANIZACIÓN DE EVENTOS Y CELEBRACIONES
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Celebraciones Inolvidables</span>
            <h1 class="section-title">Organización de <span>Eventos</span></h1>
            <p class="section-description">
                El equipo de Sagaretxe te propone los mejores planes para tus comidas y celebraciones en Madrid: desde reuniones de empresa y aniversarios, hasta bautizos, comuniones y fiestas familiares en espacios privados.
            </p>
        </div>

        <div class="grid-2" style="align-items: start; margin-bottom: 60px;">
            <!-- Información de los Eventos -->
            <div>
                <div style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 36px; margin-bottom: 24px;">
                    <h2 style="font-size: 1.85rem; margin-bottom: 16px; color: var(--cider-gold);">
                        <i class="fa-solid fa-champagne-glasses"></i> Tus Mejores Momentos en Sagaretxe
                    </h2>
                    <p style="color: var(--text-light); font-size: 1.05rem; line-height: 1.7; margin-bottom: 20px;">
                        Disponemos de dos salas climatizadas adaptables para grupos pequeños o banquetes de hasta decenas de comensales. Comparte tus ideas con nosotros y confeccionaremos el menú a tu medida.
                    </p>
                    <ul class="club-benefits-list" style="margin-bottom: 25px;">
                        <li><i class="fa-solid fa-check" style="color: var(--cider-gold);"></i> <strong>Comidas y Cenas de Empresa:</strong> Menús cerrados con barra libre y sidra al txotx.</li>
                        <li><i class="fa-solid fa-check" style="color: var(--cider-gold);"></i> <strong>Celebraciones Familiares:</strong> Bautizos, comuniones, cumpleaños y aniversarios.</li>
                        <li><i class="fa-solid fa-check" style="color: var(--cider-gold);"></i> <strong>Espacios Reservados:</strong> Salones independientes para privacidad.</li>
                        <li><i class="fa-solid fa-check" style="color: var(--cider-gold);"></i> <strong>Asesoramiento Personalizado:</strong> Coordinación de bodegas, alérgenos y tiempos.</li>
                    </ul>
                    <div style="border-top: 1px solid var(--border-color); padding-top: 20px; display: flex; align-items: center; gap: 14px;">
                        <i class="fa-solid fa-phone" style="font-size: 1.6rem; color: var(--cider-amber);"></i>
                        <div>
                            <span style="font-size: 0.85rem; color: var(--text-muted); display: block;">Atención telefónica directa para eventos:</span>
                            <strong style="font-size: 1.15rem; color: #fff;">914 46 25 88 / 622 179 060</strong>
                        </div>
                    </div>
                </div>

                <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-color);">
                    <img src="https://sagaretxe.net/wp-content/uploads/2023/10/IMG_0922-scaled-1.jpg" alt="Salón de eventos Sagaretxe" style="width: 100%; height: 260px; object-fit: cover;">
                </div>
            </div>

            <!-- Formulario de Solicitud de Evento -->
            <div class="form-card" style="margin: 0; width: 100%; max-width: 100%;">
                <h3 style="font-size: 1.6rem; margin-bottom: 8px; color: var(--text-white);">
                    Solicita Presupuesto sin Compromiso
                </h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 25px;">
                    Rellena este formulario y nuestro equipo experto en eventos se pondrá en contacto contigo en menos de 24 horas.
                </p>

                <div id="eventFeedback" class="alert-feedback"></div>

                <form id="eventInquiryForm">
                    <div class="form-group">
                        <label for="eventName" class="form-label">Nombre y Apellidos <span>*</span></label>
                        <input type="text" id="eventName" class="form-control" placeholder="Ej. Carlos Martínez" required>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label for="eventPhone" class="form-label">Teléfono de Contacto <span>*</span></label>
                            <input type="tel" id="eventPhone" class="form-control" placeholder="600 000 000" required>
                        </div>
                        <div class="form-group">
                            <label for="eventEmail" class="form-label">Correo Electrónico <span>*</span></label>
                            <input type="email" id="eventEmail" class="form-control" placeholder="carlos@ejemplo.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="eventGuests" class="form-label">Nº Estimado de Invitados / Comensales <span>*</span></label>
                        <input type="number" id="eventGuests" min="1" max="200" class="form-control" placeholder="Ej. 25" required>
                    </div>

                    <div class="form-group">
                        <label for="eventType" class="form-label">¿Qué tipo de evento vas a organizar y fecha aproximada? <span>*</span></label>
                        <textarea id="eventType" rows="4" class="form-control" placeholder="Cuéntanos: fecha tentativa, si prefieres cena o comida, menú especial o cualquier necesidad..." required></textarea>
                    </div>

                    <div style="margin-top: 30px; margin-bottom: 6px;">
                        <button type="submit" id="eventSubmitBtn" class="btn btn-primary btn-block btn-lg">
                            Enviar Solicitud de Evento
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

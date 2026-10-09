<!-- ==========================================================================
     SAGARETXE – MOTOR DE RESERVAS ONLINE (SIN PLUGINS)
     ========================================================================== -->

<section class="section">
    <div class="container reservation-wrapper">
        <div class="section-header">
            <span class="section-tag">Disponibilidad en Tiempo Real</span>
            <h1 class="section-title">Reserva tu <span>Mesa</span></h1>
            <p class="section-description">
                Elige la fecha y hora de tu visita y confirma tu mesa en segundos sin esperas ni intermediarios. Si perteneces al Club Sagaretxe, tu descuento del 12% se aplicará automáticamente.
            </p>
        </div>

        <!-- Feedback de Mensajes / Estado -->
        <div id="resFeedback" class="alert-feedback"></div>

        <!-- Tarjeta de Formulario de Reserva -->
        <div id="reservationStepCard" class="form-card">
            <form id="reservationForm">
                <!-- 1. FECHA Y COMENSALES -->
                <h3 class="form-section-title" style="margin-top: 0;">
                    <i class="fa-solid fa-calendar-day"></i> 1. Fecha y Comensales
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="resDate" class="form-label">Fecha de la Reserva <span>*</span></label>
                        <input type="date" id="resDate" class="form-control" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <div class="form-group">
                            <label for="resAdults" class="form-label">Adultos <span>*</span></label>
                            <input type="number" id="resAdults" min="1" max="50" value="2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="resChildren" class="form-label">Niños</label>
                            <input type="number" id="resChildren" min="0" max="20" value="0" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- 2. HORA DE LA RESERVA -->
                <h3 class="form-section-title">
                    <i class="fa-solid fa-clock"></i> 2. Selecciona la Hora del Turno <span>*</span>
                </h3>

                <input type="hidden" id="resSelectedTime" name="time" value="" required>

                <div id="timeSlotsContainer" class="time-slots-container">
                    <!-- Turno de Comida -->
                    <div class="time-shift-group">
                        <div class="time-shift-header">
                            <div class="time-shift-title">
                                <i class="fa-solid fa-sun"></i>
                                <span>Turno de Comida / Almuerzo</span>
                            </div>
                            <span class="time-shift-hours">13:30 – 16:00</span>
                        </div>
                        <div class="time-slots-grid">
                            <button type="button" class="time-slot-btn" data-time="13:30">13:30</button>
                            <button type="button" class="time-slot-btn" data-time="14:00">14:00</button>
                            <button type="button" class="time-slot-btn" data-time="14:30">14:30</button>
                            <button type="button" class="time-slot-btn" data-time="15:00">15:00</button>
                            <button type="button" class="time-slot-btn" data-time="15:30">15:30</button>
                            <button type="button" class="time-slot-btn" data-time="16:00">16:00</button>
                        </div>
                    </div>

                    <!-- Turno de Cena -->
                    <div class="time-shift-group">
                        <div class="time-shift-header">
                            <div class="time-shift-title">
                                <i class="fa-solid fa-moon"></i>
                                <span>Turno de Cena</span>
                            </div>
                            <span class="time-shift-hours">20:00 – 23:00</span>
                        </div>
                        <div class="time-slots-grid">
                            <button type="button" class="time-slot-btn" data-time="20:00">20:00</button>
                            <button type="button" class="time-slot-btn" data-time="20:30">20:30</button>
                            <button type="button" class="time-slot-btn" data-time="21:00">21:00</button>
                            <button type="button" class="time-slot-btn" data-time="21:30">21:30</button>
                            <button type="button" class="time-slot-btn" data-time="22:00">22:00</button>
                            <button type="button" class="time-slot-btn" data-time="22:30">22:30</button>
                            <button type="button" class="time-slot-btn" data-time="23:00">23:00</button>
                        </div>
                    </div>

                    <!-- Resumen del turno seleccionado -->
                    <div id="selectedTimeBadge" class="selected-time-summary" style="display: none;">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Hora seleccionada: <strong id="selectedTimeText">--:--</strong></span>
                    </div>
                </div>

                <!-- 3. DATOS DE CONTACTO -->
                <h3 class="form-section-title">
                    <i class="fa-solid fa-user"></i> 3. Datos de la Persona de Contacto
                </h3>

                <div class="form-grid-2">
                    <div class="form-group form-full">
                        <label for="resName" class="form-label">Nombre y Apellidos <span>*</span></label>
                        <input type="text" id="resName" class="form-control" placeholder="Ej. Ana Belén García" required>
                    </div>

                    <div class="form-group">
                        <label for="resEmail" class="form-label">Correo Electrónico <span>*</span></label>
                        <input type="email" id="resEmail" class="form-control" placeholder="anabelen@email.com" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);">Te enviaremos la confirmación oficial a este email.</small>
                    </div>

                    <div class="form-group">
                        <label for="resPhone" class="form-label">Teléfono Móvil <span>*</span></label>
                        <input type="tel" id="resPhone" class="form-control" placeholder="600 000 000" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);">Si eres del Club Sagaretxe indícalo aquí para el descuento.</small>
                    </div>
                </div>

                <!-- 4. NECESIDADES ESPECIALES Y NOTAS -->
                <h3 class="form-section-title">
                    <i class="fa-solid fa-clipboard-list"></i> 4. Necesidades Especiales y Observaciones
                </h3>

                <div class="special-needs-grid">
                    <label class="checkbox-card">
                        <input type="checkbox" id="resAllergies">
                        <span>Alergias o intolerancias alimentarias</span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resCeliac">
                        <span>Menú celíaco / Sin gluten</span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resStrollers">
                        <span>Llevamos carrito de bebé</span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resReducedMobility">
                        <span>Persona con movilidad reducida</span>
                    </label>
                    <label class="checkbox-card" style="grid-column: span 2;">
                        <input type="checkbox" id="resWheelchairs">
                        <span>Espacio adaptado para silla de ruedas</span>
                    </label>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="resNotes" class="form-label">Observaciones adicionales para cocina o sala</label>
                    <textarea id="resNotes" rows="2" class="form-control" placeholder="Ej. Preferencia en mesa tranquila, celebración de cumpleaños..."></textarea>
                </div>

                <div style="margin-top: 32px; margin-bottom: 6px;">
                    <button type="submit" id="resSubmitBtn" class="btn btn-primary btn-block btn-lg" disabled>
                        <i class="fa-solid fa-calendar-check"></i> Confirmar Reserva
                    </button>
                </div>
            </form>
        </div>

        <!-- Pantalla de Confirmación de Éxito -->
        <div id="reservationSuccessCard" class="form-card" style="display: none; text-align: center; padding: 50px 40px; border-color: rgba(16, 185, 129, 0.5); background: linear-gradient(135deg, #131d18 0%, #15181c 100%);">
            <div style="width: 72px; height: 72px; border-radius: var(--radius-full); background: rgba(16, 185, 129, 0.15); border: 2px solid #10b981; color: #10b981; display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 20px;">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h2 style="font-size: 2.2rem; color: #fff; margin-bottom: 10px;">¡Reserva Confirmada con Éxito!</h2>
            <p style="font-size: 1.1rem; color: var(--text-light); max-width: 550px; margin: 0 auto 25px;">
                Hemos registrado tu mesa correctamente en el sistema de Sagaretxe. Hemos enviado un correo con todos los detalles y el enlace para gestionar tu reserva.
            </p>

            <!-- Aviso de Socio del Club -->
            <div id="successClubDiscountNotice" style="display: none; background: rgba(217, 130, 43, 0.15); border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 16px; margin: 0 auto 25px; max-width: 580px; color: var(--cider-gold); font-weight: 700; font-size: 1.05rem;">
                <i class="fa-solid fa-crown"></i> ¡ERES SOCIO DEL CLUB SAGARETXE!<br>
                <span style="font-size: 0.9rem; font-weight: 500; color: #fff;">Indica en sala al pedir la cuenta que perteneces al club facilitando tu teléfono y te aplicaremos tu <strong>12% de descuento directo</strong>.</span>
            </div>

            <div style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; max-width: 500px; margin: 0 auto 30px; text-align: left;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Referencia:</span>
                    <strong id="successRefId" style="color: var(--cider-gold);">#---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Titular:</span>
                    <strong id="successName" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);">Fecha y Turno:</span>
                    <strong id="successDateTime" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);">Comensales:</span>
                    <strong id="successGuests" style="color: #fff;">---</strong>
                </div>
            </div>

            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="<?= BASE_URL ?>/" class="btn btn-outline">
                    Volver al Inicio
                </a>
                <a href="<?= BASE_URL ?>/carta" class="btn btn-primary">
                    Explorar la Carta
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     SAGARETXE – MOTOR DE RESERVAS ONLINE (SIN PLUGINS)
     Bilingüe ES / EN • Estética Lana Luxury Fine-Dining Steakhouse
     ========================================================================== -->

<section class="section">
    <div class="container reservation-wrapper">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'LIVE REAL-TIME AVAILABILITY' : 'DISPONIBILIDAD EN TIEMPO REAL' ?></span>
            <h1 class="section-title-lana"><?= __('res_title') ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= __('res_subtitle') ?>
            </p>
            <div class="gold-hairline-sep"></div>
        </div>

        <!-- Feedback de Mensajes / Estado -->
        <div id="resFeedback" class="alert-feedback"></div>

        <!-- Tarjeta de Formulario de Reserva -->
        <div id="reservationStepCard" class="form-card" style="border-color: var(--border-accent); background: #12151b;">
            <form id="reservationForm">
                <!-- 1. FECHA Y COMENSALES -->
                <h3 class="form-section-title" style="margin-top: 0; font-family: var(--font-serif); font-size: 1.45rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-calendar-day"></i> <?= __('res_step_1') ?>
                </h3>

                <div class="form-grid-2">
                    <div class="form-group">
                        <label for="resDate" class="form-label"><?= isEn() ? 'Reservation Date' : 'Fecha de la Reserva' ?> <span>*</span></label>
                        <input type="date" id="resDate" class="form-control" required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <div class="form-group">
                            <label for="resAdults" class="form-label"><?= isEn() ? 'Adults' : 'Adultos' ?> <span>*</span></label>
                            <input type="number" id="resAdults" min="1" max="50" value="2" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="resChildren" class="form-label"><?= isEn() ? 'Children' : 'Niños' ?></label>
                            <input type="number" id="resChildren" min="0" max="20" value="0" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- 2. HORA DE LA RESERVA -->
                <h3 class="form-section-title" style="font-family: var(--font-serif); font-size: 1.45rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-clock"></i> <?= __('res_step_2') ?> <span>*</span>
                </h3>

                <input type="hidden" id="resSelectedTime" name="time" value="" required>

                <div id="timeSlotsContainer" class="time-slots-container">
                    <!-- Turno de Comida -->
                    <div class="time-shift-group">
                        <div class="time-shift-header">
                            <div class="time-shift-title">
                                <i class="fa-solid fa-sun" style="color: var(--gold-lana);"></i>
                                <span><?= isEn() ? 'Lunch Shift' : 'Turno de Comida / Almuerzo' ?></span>
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
                                <i class="fa-solid fa-moon" style="color: var(--gold-lana);"></i>
                                <span><?= isEn() ? 'Dinner Shift (Ember Grill)' : 'Turno de Cena a la Brasa' ?></span>
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
                        <span><?= isEn() ? 'Selected Time:' : 'Hora seleccionada:' ?> <strong id="selectedTimeText">--:--</strong></span>
                    </div>
                </div>

                <!-- 3. DATOS DE CONTACTO -->
                <h3 class="form-section-title" style="font-family: var(--font-serif); font-size: 1.45rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-user"></i> <?= __('res_step_3') ?>
                </h3>

                <div class="form-grid-2">
                    <div class="form-group form-full">
                        <label for="resName" class="form-label"><?= __('res_name') ?> <span>*</span></label>
                        <input type="text" id="resName" class="form-control" placeholder="<?= isEn() ? 'e.g. John Smith' : 'Ej. Ana Belén García' ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="resEmail" class="form-label"><?= __('res_email') ?> <span>*</span></label>
                        <input type="email" id="resEmail" class="form-control" placeholder="cliente@email.com" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);"><?= isEn() ? 'Official confirmation will be sent to this address.' : 'Te enviaremos la confirmación oficial a este email.' ?></small>
                    </div>

                    <div class="form-group">
                        <label for="resPhone" class="form-label"><?= __('res_phone') ?> <span>*</span></label>
                        <input type="tel" id="resPhone" class="form-control" placeholder="600 000 000" required>
                        <small style="font-size: 0.775rem; color: var(--text-muted);"><?= isEn() ? 'If you are a Club Sagaretxe member enter your phone here for the 12% discount.' : 'Si eres del Club Sagaretxe indícalo aquí para el 12% de descuento.' ?></small>
                    </div>
                </div>

                <!-- 4. NECESIDADES ESPECIALES Y NOTAS -->
                <h3 class="form-section-title" style="font-family: var(--font-serif); font-size: 1.45rem; color: var(--gold-lana);">
                    <i class="fa-solid fa-clipboard-list"></i> <?= isEn() ? '4. Special Requests & Dietary Needs' : '4. Necesidades Especiales y Observaciones' ?>
                </h3>

                <div class="special-needs-grid">
                    <label class="checkbox-card">
                        <input type="checkbox" id="resAllergies">
                        <span><?= isEn() ? 'Food allergies or intolerances' : 'Alergias o intolerancias alimentarias' ?></span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resCeliac">
                        <span><?= isEn() ? 'Gluten-free / Celiac menu' : 'Menú celíaco / Sin gluten' ?></span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resStrollers">
                        <span><?= isEn() ? 'Baby stroller space' : 'Llevamos carrito de bebé' ?></span>
                    </label>
                    <label class="checkbox-card">
                        <input type="checkbox" id="resReducedMobility">
                        <span><?= isEn() ? 'Reduced mobility guest' : 'Persona con movilidad reducida' ?></span>
                    </label>
                    <label class="checkbox-card" style="grid-column: span 2;">
                        <input type="checkbox" id="resWheelchairs">
                        <span><?= isEn() ? 'Wheelchair accessible table' : 'Espacio adaptado para silla de ruedas' ?></span>
                    </label>
                </div>

                <div class="form-group" style="margin-top: 15px;">
                    <label for="resNotes" class="form-label"><?= __('res_notes') ?></label>
                    <textarea id="resNotes" rows="2" class="form-control" placeholder="<?= isEn() ? 'e.g. Quiet table preference, anniversary celebration...' : 'Ej. Preferencia en mesa tranquila, celebración de cumpleaños...' ?>"></textarea>
                </div>

                <div style="margin-top: 32px; margin-bottom: 6px;">
                    <button type="submit" id="resSubmitBtn" class="btn-lana-submit" style="width: 100%; padding: 16px;" disabled>
                        <i class="fa-solid fa-calendar-check" style="margin-right: 8px;"></i> <?= __('res_confirm_btn') ?>
                    </button>
                </div>
            </form>
        </div>

        <!-- Pantalla de Confirmación de Éxito -->
        <div id="reservationSuccessCard" class="form-card" style="display: none; text-align: center; padding: 50px 40px; border-color: var(--gold-lana); background: #12151b;">
            <div style="width: 72px; height: 72px; border-radius: var(--radius-full); background: rgba(196, 162, 118, 0.15); border: 2px solid var(--gold-lana); color: var(--gold-lana); display: flex; align-items: center; justify-content: center; font-size: 2.2rem; margin: 0 auto 20px;">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <h2 style="font-family: var(--font-serif); font-size: 2.4rem; color: #fff; margin-bottom: 10px;"><?= isEn() ? 'Reservation Confirmed!' : '¡Reserva Confirmada con Éxito!' ?></h2>
            <p style="font-size: 1.1rem; color: var(--text-light); max-width: 550px; margin: 0 auto 25px;">
                <?= isEn() ? 'Your table is confirmed in Sagaretxe system. A confirmation email with full booking details has been dispatched.' : 'Hemos registrado tu mesa correctamente en el sistema de Sagaretxe. Hemos enviado un correo con todos los detalles y el enlace para gestionar tu reserva.' ?>
            </p>

            <!-- Aviso de Socio del Club -->
            <div id="successClubDiscountNotice" style="display: none; background: rgba(196, 162, 118, 0.12); border: 1px solid var(--border-accent); border-radius: var(--radius-md); padding: 16px; margin: 0 auto 25px; max-width: 580px; color: var(--gold-lana); font-weight: 700; font-size: 1.05rem;">
                <i class="fa-solid fa-crown"></i> <?= isEn() ? 'GOURMET CLUB MEMBER DETECTED' : '¡ERES SOCIO DEL CLUB GASTRONÓMICO!' ?><br>
                <span style="font-size: 0.9rem; font-weight: 500; color: #fff;"><?= isEn() ? 'Mention your membership phone number tableside to receive your direct 12% discount.' : 'Indica en sala al pedir la cuenta que perteneces al club facilitando tu teléfono y te aplicaremos tu 12% de descuento directo.' ?></span>
            </div>

            <div style="background: #171a22; border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; max-width: 500px; margin: 0 auto 30px; text-align: left;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Reference:' : 'Referencia:' ?></span>
                    <strong id="successRefId" style="color: var(--gold-lana);">#---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Guest Name:' : 'Titular:' ?></span>
                    <strong id="successName" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px; border-bottom: 1px solid rgba(255,255,255,0.06); padding-bottom: 8px;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Date & Time:' : 'Fecha y Turno:' ?></span>
                    <strong id="successDateTime" style="color: #fff;">---</strong>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: var(--text-muted);"><?= isEn() ? 'Guests:' : 'Comensales:' ?></span>
                    <strong id="successGuests" style="color: #fff;">---</strong>
                </div>
            </div>

            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="<?= langUrl('/') ?>" class="btn-lana-outline">
                    <?= isEn() ? 'Return to Home' : 'Volver al Inicio' ?>
                </a>
                <a href="<?= langUrl('/carta') ?>" class="btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span><?= isEn() ? 'Explore the Menu' : 'Explorar la Carta' ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

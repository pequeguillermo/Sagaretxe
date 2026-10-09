/**
 * Sagaretxe – Lógica del Motor de Reservas Directo con la API
 */
document.addEventListener('DOMContentLoaded', () => {
    const reservationForm = document.getElementById('reservationForm');
    const dateInput = document.getElementById('resDate');
    const adultsInput = document.getElementById('resAdults');
    const childrenInput = document.getElementById('resChildren');
    const timeSlotsContainer = document.getElementById('timeSlotsContainer');
    const selectedTimeInput = document.getElementById('resSelectedTime');
    const feedbackMsg = document.getElementById('resFeedback');
    const submitBtn = document.getElementById('resSubmitBtn');
    const step1Box = document.getElementById('reservationStepCard');
    const successCard = document.getElementById('reservationSuccessCard');

    if (!reservationForm || !dateInput) return;

    // Leer parámetros de URL si viene desde el selector rápido del Hero
    const urlParams = new URLSearchParams(window.location.search);
    const paramPersonas = urlParams.get('personas');
    const paramFecha = urlParams.get('fecha');

    // Establecer fecha mínima: hoy
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    dateInput.min = `${yyyy}-${mm}-${dd}`;

    if (paramFecha && paramFecha >= dateInput.min) {
        dateInput.value = paramFecha;
    } else if (!dateInput.value) {
        dateInput.value = `${yyyy}-${mm}-${dd}`;
    }

    if (paramPersonas && adultsInput) {
        adultsInput.value = Math.max(1, parseInt(paramPersonas, 10) || 2);
    }

    const selectedBadge = document.getElementById('selectedTimeBadge');
    const selectedText = document.getElementById('selectedTimeText');

    // Inicializar enlace de eventos para botones de turnos existentes
    bindSlotButtons();

    // Comprobar disponibilidad al cargar y cuando cambia la fecha
    checkAvailability(dateInput.value);

    dateInput.addEventListener('change', (e) => {
        if (e.target.value) {
            checkAvailability(e.target.value);
        }
    });

    function selectTimeSlot(slot) {
        selectedTimeInput.value = slot;
        document.querySelectorAll('.time-slot-btn').forEach(b => {
            if (b.dataset.time === slot || b.innerText.trim() === slot) {
                b.classList.add('selected');
            } else {
                b.classList.remove('selected');
            }
        });

        if (selectedBadge && selectedText) {
            selectedText.innerText = `${slot} h`;
            selectedBadge.style.display = 'flex';
        }

        if (submitBtn) {
            submitBtn.disabled = false;
        }
    }

    function bindSlotButtons() {
        const buttons = document.querySelectorAll('.time-slot-btn');
        buttons.forEach(btn => {
            btn.removeEventListener('click', handleSlotClick);
            btn.addEventListener('click', handleSlotClick);
        });
    }

    function handleSlotClick(e) {
        const slot = e.currentTarget.dataset.time || e.currentTarget.innerText.trim();
        selectTimeSlot(slot);
    }

    async function checkAvailability(date) {
        if (feedbackMsg) {
            feedbackMsg.className = 'alert-feedback info';
            feedbackMsg.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Comprobando disponibilidad para ' + date + '...';
            feedbackMsg.style.display = 'block';
        }

        try {
            const baseUrl = window.SAGARETXE_CONFIG?.baseUrl || '';
            const res = await fetch(`${baseUrl}/api/reservations/availability?date=${encodeURIComponent(date)}`);
            const data = await res.json();

            if (data.available === false) {
                if (feedbackMsg) {
                    feedbackMsg.className = 'alert-feedback error';
                    feedbackMsg.innerHTML = `<i class="fa-solid fa-calendar-xmark"></i> El restaurante no acepta reservas en esta fecha: ${data.message || 'Cerrado por descanso o evento especial.'}`;
                    feedbackMsg.style.display = 'block';
                }
                timeSlotsContainer.innerHTML = '<div style="color: #f87171; font-weight: 600; padding: 15px; background: rgba(248, 113, 113, 0.1); border-radius: 8px; border: 1px solid rgba(248, 113, 113, 0.3);"><i class="fa-solid fa-circle-exclamation"></i> No hay turnos disponibles para esta fecha. Por favor, selecciona otro día.</div>';
                selectedTimeInput.value = '';
                if (submitBtn) submitBtn.disabled = true;
                if (selectedBadge) selectedBadge.style.display = 'none';
                return;
            }

            // Generar franjas horarias organizadas en Comida y Cena
            const lunchSlots = [];
            const dinnerSlots = [];

            function populateSlots(openStr, closeStr) {
                if (!openStr || !closeStr) return;
                const [oH, oM] = openStr.split(':').map(Number);
                const [cH, cM] = closeStr.split(':').map(Number);
                let current = new Date(); current.setHours(oH, oM, 0);
                let end = new Date(); end.setHours(cH, cM, 0);
                while (current <= end) {
                    const h = String(current.getHours()).padStart(2, '0');
                    const m = String(current.getMinutes()).padStart(2, '0');
                    const timeStr = `${h}:${m}`;
                    if (current.getHours() < 18) {
                        lunchSlots.push(timeStr);
                    } else {
                        dinnerSlots.push(timeStr);
                    }
                    current.setMinutes(current.getMinutes() + 30);
                }
            }

            populateSlots(data.open_time, data.close_time);
            populateSlots(data.open_time_2, data.close_time_2);

            if (lunchSlots.length === 0 && dinnerSlots.length === 0) {
                if (feedbackMsg) {
                    feedbackMsg.className = 'alert-feedback error';
                    feedbackMsg.innerHTML = '<i class="fa-solid fa-calendar-xmark"></i> No hay horas disponibles para esta fecha.';
                }
                return;
            }

            if (feedbackMsg) {
                feedbackMsg.className = 'alert-feedback success';
                feedbackMsg.innerHTML = '<i class="fa-solid fa-circle-check"></i> Mesas disponibles. Selecciona a continuación tu hora preferida de almuerzo o cena:';
            }

            // Renderizar turnos con diseño elegante por turnos
            let html = '';
            if (lunchSlots.length > 0) {
                html += `
                <div class="time-shift-group">
                    <div class="time-shift-header">
                        <div class="time-shift-title">
                            <i class="fa-solid fa-sun"></i>
                            <span>Turno de Comida / Almuerzo</span>
                        </div>
                        <span class="time-shift-hours">${lunchSlots[0]} – ${lunchSlots[lunchSlots.length - 1]}</span>
                    </div>
                    <div class="time-slots-grid">
                        ${lunchSlots.map(slot => `<button type="button" class="time-slot-btn" data-time="${slot}">${slot}</button>`).join('')}
                    </div>
                </div>`;
            }

            if (dinnerSlots.length > 0) {
                html += `
                <div class="time-shift-group">
                    <div class="time-shift-header">
                        <div class="time-shift-title">
                            <i class="fa-solid fa-moon"></i>
                            <span>Turno de Cena</span>
                        </div>
                        <span class="time-shift-hours">${dinnerSlots[0]} – ${dinnerSlots[dinnerSlots.length - 1]}</span>
                    </div>
                    <div class="time-slots-grid">
                        ${dinnerSlots.map(slot => `<button type="button" class="time-slot-btn" data-time="${slot}">${slot}</button>`).join('')}
                    </div>
                </div>`;
            }

            html += `
            <div id="selectedTimeBadge" class="selected-time-summary" style="display: ${selectedTimeInput.value ? 'flex' : 'none'};">
                <i class="fa-solid fa-circle-check"></i>
                <span>Hora seleccionada: <strong id="selectedTimeText">${selectedTimeInput.value || '--:--'} h</strong></span>
            </div>`;

            timeSlotsContainer.innerHTML = html;
            bindSlotButtons();

            // Si había una hora seleccionada que sigue existiendo, restaurar selección
            if (selectedTimeInput.value) {
                selectTimeSlot(selectedTimeInput.value);
            }

        } catch (error) {
            console.warn('Uso de turnos predeterminados por fallback de conexión:', error);
            if (feedbackMsg) {
                feedbackMsg.className = 'alert-feedback info';
                feedbackMsg.innerHTML = '<i class="fa-solid fa-info-circle"></i> Horarios habituales activos. Selecciona tu turno preferido:';
            }
            bindSlotButtons();
        }
    }

    // Envío del Formulario
    reservationForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const date = dateInput.value;
        const time = selectedTimeInput.value;
        const adults = parseInt(adultsInput.value, 10) || 0;
        const children = parseInt(childrenInput.value, 10) || 0;
        const name = document.getElementById('resName').value.trim();
        const email = document.getElementById('resEmail').value.trim();
        const phone = document.getElementById('resPhone').value.trim();
        const notes = document.getElementById('resNotes')?.value.trim() || '';

        const allergies = document.getElementById('resAllergies')?.checked || false;
        const celiac = document.getElementById('resCeliac')?.checked || false;
        const strollers = document.getElementById('resStrollers')?.checked || false;
        const reducedMobility = document.getElementById('resReducedMobility')?.checked || false;
        const wheelchairs = document.getElementById('resWheelchairs')?.checked || false;

        if (!date || !time) {
            alert('Por favor selecciona la hora de la reserva.');
            return;
        }

        if (adults < 1) {
            alert('Debe haber al menos 1 comensal adulto.');
            return;
        }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Confirmando tu reserva...';
        feedbackMsg.style.display = 'none';

        const payload = {
            date: `${date} ${time}:00`,
            people: adults + children,
            adults: adults,
            children: children,
            name: name,
            email: email,
            phone: phone,
            notes: notes,
            allergies: allergies,
            celiac: celiac,
            strollers: strollers,
            reduced_mobility: reducedMobility,
            wheelchairs: wheelchairs
        };

        try {
            const baseUrl = window.SAGARETXE_CONFIG?.baseUrl || '';
            const res = await fetch(`${baseUrl}/api/reservations`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            });

            const data = await res.json();

            if (data.reservation_id) {
                // Éxito: ocultar formulario y mostrar pantalla de confirmación
                step1Box.style.display = 'none';
                successCard.style.display = 'block';

                document.getElementById('successRefId').innerText = `#${data.reservation_id}`;
                document.getElementById('successDateTime').innerText = `${date} a las ${time} h`;
                document.getElementById('successGuests').innerText = `${adults + children} comensales (${adults} adultos${children > 0 ? ', ' + children + ' niños' : ''})`;
                document.getElementById('successName').innerText = name;

                const clubNotice = document.getElementById('successClubDiscountNotice');
                if (data.discount_applied && clubNotice) {
                    clubNotice.style.display = 'block';
                }

                window.scrollTo({ top: successCard.offsetTop - 80, behavior: 'smooth' });
            } else if (data.message) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fa-solid fa-calendar-check"></i> Confirmar Reserva';
                feedbackMsg.className = 'alert-feedback error';
                feedbackMsg.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> Error: ${data.message}`;
                feedbackMsg.style.display = 'block';
            } else {
                throw new Error('Respuesta inválida del servidor');
            }
        } catch (error) {
            console.error(error);
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<i class="fa-solid fa-calendar-check"></i> Confirmar Reserva';
            feedbackMsg.className = 'alert-feedback error';
            feedbackMsg.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> No se pudo procesar la reserva. Por favor, llámanos al 914 46 25 88.';
            feedbackMsg.style.display = 'block';
        }
    });
});

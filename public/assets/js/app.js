/**
 * Sagaretxe – JavaScript Principal de la Aplicación
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Header Sticky Effect al hacer Scroll
    const header = document.getElementById('mainHeader');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // 2. Menú Móvil Lateral (Drawer)
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const mobileDrawer = document.getElementById('mobileNavDrawer');
    const closeMobileBtn = document.getElementById('closeMobileNav');
    const mobileBackdrop = document.getElementById('mobileNavBackdrop');

    function openMobileMenu() {
        if (mobileDrawer) {
            mobileDrawer.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (mobileDrawer) {
            mobileDrawer.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    if (mobileToggle) mobileToggle.addEventListener('click', openMobileMenu);
    if (closeMobileBtn) closeMobileBtn.addEventListener('click', closeMobileMenu);
    if (mobileBackdrop) mobileBackdrop.addEventListener('click', closeMobileMenu);

    // 3. Modal de Teléfonos de Contacto
    const phoneModal = document.getElementById('phoneModal');
    const openPhoneBtn = document.getElementById('openPhoneModal');
    const closePhoneBtn = document.getElementById('closePhoneModal');

    function openPhone() {
        if (phoneModal) {
            phoneModal.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closePhone() {
        if (phoneModal) {
            phoneModal.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    const openFloatingPhoneBtn = document.getElementById('openFloatingPhoneModal');

    if (openPhoneBtn) openPhoneBtn.addEventListener('click', openPhone);
    if (openFloatingPhoneBtn) openFloatingPhoneBtn.addEventListener('click', openPhone);
    if (closePhoneBtn) closePhoneBtn.addEventListener('click', closePhone);
    if (phoneModal) {
        phoneModal.addEventListener('click', (e) => {
            if (e.target === phoneModal) closePhone();
        });
    }

    // 4. Visor Lightbox para la Galería de Fotos
    const galleryItems = document.querySelectorAll('.gallery-card');
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const closeLightboxBtn = document.getElementById('closeLightbox');

    if (galleryItems.length > 0 && lightboxModal && lightboxImg) {
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                if (img) {
                    lightboxImg.src = img.src;
                    lightboxModal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        if (closeLightboxBtn) {
            closeLightboxBtn.addEventListener('click', () => {
                lightboxModal.classList.remove('active');
                document.body.style.overflow = '';
            });
        }

        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal) {
                lightboxModal.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // 5. Formulario de Organización de Eventos
    const eventForm = document.getElementById('eventInquiryForm');
    const eventFeedback = document.getElementById('eventFeedback');
    const eventSubmitBtn = document.getElementById('eventSubmitBtn');

    if (eventForm && eventFeedback) {
        eventForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const payload = {
                name: document.getElementById('eventName').value.trim(),
                phone: document.getElementById('eventPhone').value.trim(),
                email: document.getElementById('eventEmail').value.trim(),
                guests: document.getElementById('eventGuests').value.trim(),
                event_type: document.getElementById('eventType').value.trim()
            };

            if (eventSubmitBtn) {
                eventSubmitBtn.disabled = true;
                eventSubmitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Enviando...';
            }

            try {
                const baseUrl = window.SAGARETXE_CONFIG?.baseUrl || '';
                const response = await fetch(`${baseUrl}/api/eventos`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                    body: JSON.stringify(payload)
                });

                const data = await response.json();
                eventFeedback.style.display = 'block';

                if (data.status === 'success') {
                    eventFeedback.className = 'alert-feedback success';
                    eventFeedback.innerHTML = `<i class="fa-solid fa-circle-check"></i> ${data.message}`;
                    eventForm.reset();
                } else {
                    eventFeedback.className = 'alert-feedback error';
                    eventFeedback.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> ${data.message || 'Ocurrió un error al enviar la solicitud.'}`;
                }
            } catch (error) {
                console.error(error);
                eventFeedback.style.display = 'block';
                eventFeedback.className = 'alert-feedback error';
                eventFeedback.innerHTML = '<i class="fa-solid fa-triangle-exclamation"></i> Error de conexión. Por favor, llámanos directamente al 914 46 25 88.';
            } finally {
                if (eventSubmitBtn) {
                    eventSubmitBtn.disabled = false;
                    eventSubmitBtn.innerHTML = 'Enviar Solicitud de Evento';
                }
            }
        });
    }

    // 7. Pelota brillante que recorre el borde de la reserva en la Home
    function initBookingBorderOrb() {
        const bar = document.querySelector('.hero-booking-bar-lana');
        const orb = document.querySelector('.booking-border-orb');
        if (!bar || !orb) return;

        // Comprobar soporte nativo de CSS offset-path
        const supportsOffset = window.CSS && CSS.supports && (
            CSS.supports('offset-path', 'inset(0 round 4px)') || 
            CSS.supports('offset-path', 'rect(0 0 0 0 round 4px)')
        );

        if (supportsOffset) {
            return;
        }

        // Fallback matemático con velocidad lineal constante
        let progress = 0;
        const duration = 7500;
        let lastTime = performance.now();

        function animateOrb(now) {
            const delta = now - lastTime;
            lastTime = now;
            progress = (progress + (delta / duration)) % 1;

            const w = bar.offsetWidth;
            const h = bar.offsetHeight;
            const perimeter = 2 * (w + h);
            const dist = progress * perimeter;

            let x = 0;
            let y = 0;

            if (dist <= w) {
                x = dist;
                y = 0;
            } else if (dist <= w + h) {
                x = w;
                y = dist - w;
            } else if (dist <= 2 * w + h) {
                x = w - (dist - (w + h));
                y = h;
            } else {
                x = 0;
                y = h - (dist - (2 * w + h));
            }

            orb.style.left = x + 'px';
            orb.style.top = y + 'px';
            orb.style.transform = 'translate(-50%, -50%)';

            requestAnimationFrame(animateOrb);
        }

        requestAnimationFrame(animateOrb);
    }

    initBookingBorderOrb();

    // 7. Aparición con Efecto Chulo de los Botones Flotantes en Móvil al hacer Scroll
    function initFloatingDocksOnScroll() {
        const actionsDock = document.getElementById('floatingActionsDock');
        const langDock = document.getElementById('floatingLangDock');

        if (!actionsDock && !langDock) return;

        function updateDocks() {
            // Se muestran suavemente al hacer scroll hacia abajo (> 70px)
            const isScrolled = window.scrollY > 70;
            if (actionsDock) actionsDock.classList.toggle('dock-visible', isScrolled);
            if (langDock) langDock.classList.toggle('dock-visible', isScrolled);
        }

        window.addEventListener('scroll', updateDocks, { passive: true });
        updateDocks(); // Evaluar posición actual al cargar la página
    }

    initFloatingDocksOnScroll();
});



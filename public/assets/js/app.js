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

    if (openPhoneBtn) openPhoneBtn.addEventListener('click', openPhone);
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
});

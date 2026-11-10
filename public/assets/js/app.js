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

    // 8. Navegación y ScrollSpy de Categorías en la Carta
    function initMenuCategoriesScrollSpy() {
        const pillsNav = document.querySelector('.menu-categories-nav-lana');
        if (!pillsNav) return;
        const pills = pillsNav.querySelectorAll('.cat-pill-lana');
        const sections = document.querySelectorAll('.carta-section');
        if (!pills.length || !sections.length) return;

        function updateActivePill() {
            const scrollPos = window.scrollY + 180;
            let currentSectionId = '';

            sections.forEach(section => {
                const top = section.offsetTop;
                const height = section.offsetHeight;
                if (scrollPos >= top && scrollPos < top + height) {
                    currentSectionId = section.getAttribute('id');
                }
            });

            if (currentSectionId) {
                pills.forEach(pill => {
                    const href = pill.getAttribute('href');
                    if (href === '#' + currentSectionId) {
                        if (!pill.classList.contains('active')) {
                            pill.classList.add('active');
                            pill.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                        }
                    } else {
                        pill.classList.remove('active');
                    }
                });
            }
        }

        window.addEventListener('scroll', updateActivePill, { passive: true });
        updateActivePill();
    }

    // 9. Slider / Carrusel Interactivo de la Barra de Pintxos
    function initPintxosSlider() {
        const track = document.getElementById('pintxosSliderTrack');
        const prevBtn = document.getElementById('pintxosSlidePrev');
        const nextBtn = document.getElementById('pintxosSlideNext');

        if (!track) return;

        function getCardStep() {
            const firstCard = track.querySelector('.pintxo-slide-card');
            if (!firstCard) return 302;
            const gap = parseFloat(window.getComputedStyle(track).gap) || 22;
            return firstCard.offsetWidth + gap;
        }

        function scrollNext() {
            const step = getCardStep();
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft >= maxScroll - 15) {
                track.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: step, behavior: 'smooth' });
            }
        }

        function scrollPrev() {
            const step = getCardStep();
            const maxScroll = track.scrollWidth - track.clientWidth;
            if (track.scrollLeft <= 15) {
                track.scrollTo({ left: maxScroll, behavior: 'smooth' });
            } else {
                track.scrollBy({ left: -step, behavior: 'smooth' });
            }
        }

        if (nextBtn) nextBtn.addEventListener('click', scrollNext);
        if (prevBtn) prevBtn.addEventListener('click', scrollPrev);

        // Autoplay con pausa en interacción
        let autoPlayTimer = null;
        const autoPlayInterval = 3800;

        function startAutoplay() {
            if (autoPlayTimer) clearInterval(autoPlayTimer);
            autoPlayTimer = setInterval(scrollNext, autoPlayInterval);
        }

        function stopAutoplay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        track.addEventListener('mouseenter', stopAutoplay);
        track.addEventListener('mouseleave', startAutoplay);
        track.addEventListener('touchstart', stopAutoplay, { passive: true });
        track.addEventListener('touchend', startAutoplay, { passive: true });

        if (nextBtn) {
            nextBtn.addEventListener('mouseenter', stopAutoplay);
            nextBtn.addEventListener('mouseleave', startAutoplay);
        }
        if (prevBtn) {
            prevBtn.addEventListener('mouseenter', stopAutoplay);
            prevBtn.addEventListener('mouseleave', startAutoplay);
        }

        startAutoplay();

        // Soporte de arrastre táctil y con ratón (Drag to scroll)
        let isDown = false;
        let startX = 0;
        let scrollStart = 0;
        let hasDragged = false;

        track.addEventListener('mousedown', (e) => {
            isDown = true;
            hasDragged = false;
            startX = e.pageX - track.offsetLeft;
            scrollStart = track.scrollLeft;
            stopAutoplay();
        });

        window.addEventListener('mouseup', () => {
            if (isDown) {
                isDown = false;
                startAutoplay();
            }
        });

        track.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 1.4;
            if (Math.abs(walk) > 6) {
                hasDragged = true;
            }
            track.scrollLeft = scrollStart - walk;
        });

        // Prevenir la apertura del lightbox si el usuario estaba arrastrando
        track.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('click', (e) => {
                if (hasDragged) {
                    e.stopImmediatePropagation();
                    e.preventDefault();
                }
            }, true);
        });
    }

    initPintxosSlider();

    // 10. Slider Cinemático de Videos de Brasa en el Hero (Parrilla al Carbón & Txuletón 1kg)
    function initHeroVideoSlider() {
        const slides = document.querySelectorAll('.hero-video-slide');
        const pills = document.querySelectorAll('.hero-vctrl-pill');
        const prevBtn = document.getElementById('heroPrevVideo');
        const nextBtn = document.getElementById('heroNextVideo');
        const stage = document.getElementById('heroCenterStage');
        if (!slides.length) return;

        let currentSlide = 0;
        const totalSlides = slides.length;
        let autoRotateTimer = null;
        const ROTATE_INTERVAL = 7500; // 7.5 segundos entre cortes

        function goToSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;

            slides.forEach((slide, i) => {
                if (i === currentSlide) {
                    slide.classList.add('active');
                    const vid = slide.querySelector('video');
                    if (vid) {
                        vid.play().catch(() => {});
                    }
                } else {
                    slide.classList.remove('active');
                }
            });

            pills.forEach((pill, i) => {
                if (i === currentSlide) {
                    pill.classList.add('active');
                } else {
                    pill.classList.remove('active');
                }
            });
        }

        function startAutoRotate() {
            stopAutoRotate();
            autoRotateTimer = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, ROTATE_INTERVAL);
        }

        function stopAutoRotate() {
            if (autoRotateTimer) {
                clearInterval(autoRotateTimer);
                autoRotateTimer = null;
            }
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                goToSlide(currentSlide - 1);
                startAutoRotate();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                goToSlide(currentSlide + 1);
                startAutoRotate();
            });
        }

        pills.forEach((pill) => {
            pill.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const target = parseInt(pill.getAttribute('data-slide-target') || '0', 10);
                goToSlide(target);
                startAutoRotate();
            });
        });

        if (stage) {
            stage.addEventListener('mouseenter', stopAutoRotate);
            stage.addEventListener('mouseleave', startAutoRotate);

            // Soporte de gesto táctil (Swipe) en móvil
            let touchStartX = 0;
            let touchEndX = 0;
            stage.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            stage.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                const diff = touchStartX - touchEndX;
                if (Math.abs(diff) > 40) {
                    if (diff > 0) {
                        goToSlide(currentSlide + 1);
                    } else {
                        goToSlide(currentSlide - 1);
                    }
                    startAutoRotate();
                }
            }, { passive: true });
        }

        startAutoRotate();
    }

    initHeroVideoSlider();
});



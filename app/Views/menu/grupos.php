<!-- ==========================================================================
     SAGARETXE – MENÚS ESPECIALES PARA GRUPOS Y EMPRESAS
     Reserva Exclusiva Telefónica • Sin Botón de Reserva Online
     ========================================================================== -->

<section class="section">
    <div class="container">
        <div class="section-header-lana">
            <span class="section-subtag-lana"><?= isEn() ? 'CELEBRATIONS & CORPORATE DINNERS' : 'CELEBRACIONES Y CENAS DE EMPRESA' ?></span>
            <h1 class="section-title-lana"><?= isEn() ? 'Group Menus' : 'Menús para Grupos' ?></h1>
            <p class="section-description" style="max-width: 720px; margin: 0 auto 24px auto;">
                <?= isEn() 
                    ? 'Curated to deliver a complete, generous, and festive Basque experience. Shared appetizers at center table, choice of individual charcoal-grilled mains, artisan desserts, select cellar wines, and natural cider from the barrel included.' 
                    : 'Confeccionados para brindar una experiencia gastronómica completa, abundante y festiva. Entrantes al centro de mesa, platos principales individuales a elegir, postres caseros, bodega selecta y sidra al txotx incluida.' ?>
            </p>
            
            <!-- Bloque de Contacto Telefónico Superior -->
            <div class="group-header-phones-block">
                <span class="gh-phone-badge"><i class="fa-solid fa-phone-volume"></i> <?= isEn() ? 'DIRECT RESERVATIONS BY PHONE' : 'RESERVAS DIRECTAS POR TELÉFONO' ?></span>
                <div class="gh-phone-pairs">
                    <div class="gh-pair">
                        <span class="gh-type"><?= isEn() ? 'Landlines:' : 'Fijos:' ?></span>
                        <a href="tel:+34914462588" class="gh-phone-link highlight">(+34) 914 46 25 88</a>
                        <span class="gh-sep">//</span>
                        <a href="tel:+34914456023" class="gh-phone-link">914 45 60 23</a>
                    </div>
                    <div class="gh-pair">
                        <span class="gh-type"><?= isEn() ? 'Mobiles / WhatsApp:' : 'Móviles / WhatsApp:' ?></span>
                        <a href="tel:+34622179060" class="gh-phone-link mobile">622 179 060</a>
                        <span class="gh-sep">//</span>
                        <a href="tel:+34633179060" class="gh-phone-link mobile">633 179 060</a>
                    </div>
                </div>
            </div>

            <div class="gold-hairline-sep" style="margin-top: 25px;"></div>
        </div>

        <!-- AVISO DESTACADO: MENÚS DE GRUPOS NO SE RESERVAN ONLINE -->
        <div class="group-phone-notice-card">
            <div class="gpn-icon">
                <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="gpn-content">
                <div class="gpn-badge">
                    <span><i class="fa-solid fa-triangle-exclamation"></i> <?= isEn() ? 'IMPORTANT NOTICE' : 'AVISO IMPORTANTE' ?></span>
                    <span class="gpn-badge-sub"><?= isEn() ? 'No Online Booking for Group Menus' : 'Los menús de grupos no admiten reserva online' ?></span>
                </div>
                <h3 class="gpn-title">
                    <?= isEn() ? 'Group Menus are reserved exclusively by phone' : 'Los menús de grupos se deben reservar poniéndose en contacto por teléfono' ?>
                </h3>
                <p class="gpn-desc">
                    <?= isEn() 
                        ? 'To ensure proper room allocation, date confirmation, and menu tailoring for food allergies or dietary preferences, <strong>our group menus cannot be booked online</strong>. Please get in touch directly with our team:' 
                        : 'Para garantizar la mejor organización de sala, disponibilidad de fechas y adaptación de platos o alérgenos, <strong>los menús de grupos no se pueden reservar de forma online</strong>. Debes ponerte en contacto directamente por teléfono con nosotros:' ?>
                </p>
                <div class="gpn-phones-wrapper">
                    <div class="gpn-phone-block">
                        <span class="gpn-phone-type"><i class="fa-solid fa-phone"></i> <?= isEn() ? 'Landlines:' : 'Teléfonos Fijos:' ?></span>
                        <div class="gpn-phone-links">
                            <a href="tel:+34914462588" class="gpn-link highlight"><i class="fa-solid fa-phone"></i> (+34) 914 46 25 88</a>
                            <span class="gpn-sep">//</span>
                            <a href="tel:+34914456023" class="gpn-link">914 45 60 23</a>
                        </div>
                    </div>
                    <div class="gpn-phone-block">
                        <span class="gpn-phone-type"><i class="fa-solid fa-mobile-screen"></i> <?= isEn() ? 'Mobiles / WhatsApp:' : 'Móviles / WhatsApp:' ?></span>
                        <div class="gpn-phone-links">
                            <a href="tel:+34622179060" class="gpn-link mobile"><i class="fa-solid fa-mobile-screen"></i> 622 179 060</a>
                            <span class="gpn-sep">//</span>
                            <a href="tel:+34633179060" class="gpn-link mobile">633 179 060</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Condiciones Generales de Reserva de Grupos -->
        <div class="group-conditions-box" style="background: #12151b; border: 1px solid var(--border-accent); border-radius: var(--radius-sm); margin-top: 30px;">
            <h3 style="font-family: var(--font-serif); font-size: 1.35rem; color: var(--gold-lana);"><i class="fa-solid fa-clipboard-check"></i> <?= isEn() ? 'Important Guidelines for Group Reservations' : 'Condiciones y Normativa de Menús de Grupos' ?></h3>
            <ul>
                <li><strong><?= isEn() ? 'Tailored Menus:' : 'Menús a Medida:' ?></strong> <?= isEn() ? 'If you wish to modify courses or accommodate dietary allergies or vegetarian requests, reach out and we will personalize your menu.' : 'Si deseas realizar alguna modificación o adaptar opciones para alérgenos o vegetarianos, consúltanos y confeccionaremos una propuesta personalizada.' ?></li>
                <li><strong><?= isEn() ? 'Notice period:' : 'Antelación mínima:' ?></strong> <?= isEn() ? 'Group bookings and menu choices should be confirmed at least 10 days in advance by telephone.' : 'Se ruega que las reservas de grupos y la confirmación de menús se formalicen con un mínimo de 10 días de antelación llamando por teléfono.' ?></li>
                <li><strong><?= isEn() ? 'Market freshness:' : 'Frescura de mercado:' ?></strong> <?= isEn() ? 'Courses may vary slightly depending on fish market availability, replaced with equal or superior grade cuts.' : 'Los platos pueden sufrir ligeras variaciones según disponibilidad de lonja, sustituyéndose por opciones de categoría igual o superior.' ?></li>
                <li><strong><?= isEn() ? 'Corporate & Holiday Dinners:' : 'Aviso especial (Noviembre y Diciembre):' ?></strong> <?= isEn() ? 'Christmas and end-of-year corporate dinners require a 20% advance booking deposit.' : 'Las reservas para cenas de empresa y Navidad requieren el abono de una señal del 20% para quedar formalizadas.' ?></li>
            </ul>
        </div>

        <!-- Grid de los 6 Menús -->
        <div class="group-menus-grid" style="margin-top: 45px;">
            <!-- MENÚ 1 -->
            <div class="group-menu-card">
                <div class="group-menu-header">
                    <h3 class="group-menu-name">Menú 1 Sagaretxe</h3>
                    <div class="group-menu-price">45€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Entrantes al Centro</h4>
                    <ul>
                        <li>Shitakes salteados con jamón ibérico y foie</li>
                        <li>Croquetas caseras de bacalao</li>
                        <li>Pimientos de piquillo rellenos de brandada</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-utensils"></i> Plato a Elegir</h4>
                    <ul>
                        <li>Medallones de solomillo ibérico con salsa Idiazábal</li>
                        <li>Carrilleras estofadas al vino tinto</li>
                        <li>Brocheta de rape y langostinos</li>
                        <li>Bacalao confitado con crema de ajo negro</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Tarta de queso Idiazábal casera</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>1 botella de Vino Tinto Joven o Blanco Rueda / 2 pax</li>
                        <li>Agua mineral, cerveza, sidra natural y refrescos</li>
                        <li>Café o infusión + <strong>Chupito cortesía de la casa</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 1 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>

            <!-- MENÚ 2 -->
            <div class="group-menu-card">
                <div class="group-menu-header">
                    <h3 class="group-menu-name">Menú 2 Sagaretxe</h3>
                    <div class="group-menu-price">50€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Entrantes al Centro</h4>
                    <ul>
                        <li>Paleta ibérica de Guijuelo</li>
                        <li>Croquetas de bacalao artesanas</li>
                        <li>Piquillos rellenos de brandada de bacalao</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-utensils"></i> Plato a Elegir</h4>
                    <ul>
                        <li>Medallones de ibérico con salsa de Idiazábal</li>
                        <li>Rabo de toro estofado al vino tinto tradicional</li>
                        <li>Bacalao a la parrilla de carbón de encina</li>
                        <li>Salmón fresco a la brasa con trigueros</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Tarta cremosa de queso Idiazábal</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>1 botella Rioja Crianza o Blanco Rueda / 2 pax</li>
                        <li>Agua, cerveza, sidra y refrescos variados</li>
                        <li>Café o infusión + <strong>Chupito de la casa</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 2 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>

            <!-- MENÚ 3 -->
            <div class="group-menu-card">
                <div class="group-menu-header">
                    <h3 class="group-menu-name">Menú 3 Sagaretxe</h3>
                    <div class="group-menu-price">55€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Entrantes al Centro</h4>
                    <ul>
                        <li>Shitakes salteados con jamón y foie fresco</li>
                        <li>Paleta ibérica de Guijuelo</li>
                        <li>Parrillada de verduras de temporada al carbón</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-utensils"></i> Plato a Elegir</h4>
                    <ul>
                        <li>Brochetas solomillo de vacuno con patatas paja</li>
                        <li>Lagarto ibérico a la brasa con miel y mostaza</li>
                        <li>Lomo de lubina a la sal con salteado de piquillos</li>
                        <li>Merluza de pincho en salsa verde</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Pastel Vasco artesano (Gâteau Basque)</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>1 botella Ribera del Duero o Blanco Rueda / 2 pax</li>
                        <li>Agua mineral, cerveza, sidra vasca y refrescos</li>
                        <li>Café o infusión + <strong>Chupito de la casa</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 3 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>

            <!-- MENÚ 4 -->
            <div class="group-menu-card">
                <div class="group-menu-header">
                    <h3 class="group-menu-name">Menú 4 Sagaretxe</h3>
                    <div class="group-menu-price">65€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Entrantes al Centro</h4>
                    <ul>
                        <li>Jamón ibérico de bellota de Guijuelo</li>
                        <li>Pimientos de piquillo con brandada de bacalao</li>
                        <li>Morcilla crujiente con espuma de manzana</li>
                        <li>Ensalada de langostinos con aliño vasco</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-utensils"></i> Plato a Elegir</h4>
                    <ul>
                        <li>Lomo bajo de vaca a la parrilla de carbón</li>
                        <li>Rabo de toro estofado al vino tinto</li>
                        <li>Lubina a la sal con salteado de piquillos</li>
                        <li>Bacalao tradicional a la vizcaína</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Pantxineta tradicional Sagaretxe</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>1 botella Rioja Crianza o Blanco Rueda / 2 pax</li>
                        <li>Agua, cerveza, sidra natural y refrescos</li>
                        <li>Café o infusión + <strong>Chupito cortesía</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 4 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>

            <!-- MENÚ 5 (EL MÁS EXCLUSIVO) -->
            <div class="group-menu-card" style="border: 2px solid var(--border-accent); background: linear-gradient(135deg, #241e17 0%, #1c1f24 100%);">
                <div class="group-menu-header">
                    <span style="background: var(--cider-amber); color: #fff; font-size: 0.75rem; font-weight: 700; padding: 2px 10px; border-radius: var(--radius-full); text-transform: uppercase;">Selección Gran Gastronomía</span>
                    <h3 class="group-menu-name" style="margin-top: 6px;">Menú 5 Sagaretxe</h3>
                    <div class="group-menu-price">79€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Entrantes Nobles al Centro</h4>
                    <ul>
                        <li>Jamón ibérico de bellota de Guijuelo</li>
                        <li>Ensalada templada de langostinos al aliño vasco</li>
                        <li>Flores de alcachofas de Tudela a la brasa</li>
                        <li>Pulpo con patatas ahumadas y aceite de pimentón</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-utensils"></i> Plato a Elegir</h4>
                    <ul>
                        <li><strong>Txuleta de vaca a la parrilla de carbón</strong></li>
                        <li>Dados de solomillo de vaca con salsa de foie</li>
                        <li>Rape al txacolí con refrito de ajos</li>
                        <li>Merluza de pincho en salsa verde</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Canutillos artesanos rellenos de chocolate templado</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>1 botella Rioja Crianza o Blanco Rueda / 2 pax</li>
                        <li>Agua, cerveza, sidra natural y refrescos</li>
                        <li>Café o infusión + <strong>Chupito cortesía</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 5 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>

            <!-- MENÚ 6 DEGUSTACIÓN DE PINTXOS Y TABERNA -->
            <div class="group-menu-card">
                <div class="group-menu-header">
                    <span style="background: var(--cider-amber-glow); color: var(--cider-gold); font-size: 0.75rem; font-weight: 700; padding: 2px 10px; border-radius: var(--radius-full); text-transform: uppercase;">Experiencia Taberna</span>
                    <h3 class="group-menu-name" style="margin-top: 6px;">Menú 6 Degustación</h3>
                    <div class="group-menu-price">48€ <span>/ persona</span></div>
                    <small style="color: var(--text-muted); font-size: 0.8rem;">IVA Incluido</small>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-plate-wheat"></i> Pase Completo al Centro</h4>
                    <ul>
                        <li>Surtido de pintxos fríos y calientes de nuestra barra</li>
                        <li>Paleta ibérica de Guijuelo</li>
                        <li>Croquetas caseras de bacalao</li>
                        <li>Crujiente de morcilla con espuma de manzana</li>
                        <li>Queso Idiazábal D.O. curado con nueces</li>
                        <li>Langostinos cocidos con ali-oli verde</li>
                        <li>Chistorra de Bera de Bidasoa frita</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-cake-candles"></i> Postre</h4>
                    <ul>
                        <li>Canutillos rellenos de chocolate templado</li>
                    </ul>
                </div>

                <div class="group-menu-section">
                    <h4><i class="fa-solid fa-wine-glass"></i> Bodega y Bebidas</h4>
                    <ul>
                        <li>Vino Tinto Rioja Joven y Blanco de Rueda</li>
                        <li>Agua mineral, cerveza, sidra al txotx y refrescos</li>
                        <li>Café o infusión + <strong>Chupito cortesía</strong></li>
                    </ul>
                </div>

                <!-- Acción telefónica para reservar Menú 6 -->
                <div class="group-card-booking-box">
                    <span class="group-card-booking-label">
                        <i class="fa-solid fa-phone"></i> <?= isEn() ? 'Reservations strictly by phone:' : 'Reserva exclusiva por teléfono:' ?>
                    </span>
                    <div class="group-card-booking-phones">
                        <a href="tel:+34914462588" class="btn-card-phone btn-card-main" title="Llamar al fijo">
                            <i class="fa-solid fa-phone"></i> 914 46 25 88
                        </a>
                        <a href="tel:+34622179060" class="btn-card-phone btn-card-mobile" title="Llamar o WhatsApp">
                            <i class="fa-solid fa-mobile-screen"></i> 622 179 060
                        </a>
                    </div>
                    <div class="group-card-subphones">
                        <span><?= isEn() ? 'Other lines:' : 'Otras líneas:' ?></span>
                        <a href="tel:+34914456023">914 45 60 23</a>
                        <span class="sep">//</span>
                        <a href="tel:+34633179060">633 179 060</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacto telefónico completo para reservas de grupos y empresas -->
        <div class="group-bottom-contact-box">
            <span class="group-bottom-tag"><?= isEn() ? 'DIRECT PHONE BOOKING' : 'ATENCIÓN Y RESERVAS DE GRUPO' ?></span>
            <h3 class="group-bottom-title"><?= isEn() ? 'Personalized Attention for Groups & Corporate Dinners' : 'Reserva tu Menú de Grupo Directamente por Teléfono' ?></h3>
            <p class="group-bottom-desc">
                <?= isEn() 
                    ? 'Our team coordinates room assignments, dietary modifications, and wine selections to ensure an unforgettable gathering. Reach out to any of our lines:' 
                    : 'Los menús de grupos se reservan exclusivamente por teléfono para coordinar salas privadas, alérgenos y detalles a medida. Llámanos a cualquiera de nuestras líneas directas:' ?>
            </p>
            
            <div class="group-bottom-phones-grid">
                <div class="group-bphone-col">
                    <span class="group-bphone-type"><i class="fa-solid fa-phone"></i> <?= isEn() ? 'Landlines:' : 'Teléfonos Fijos:' ?></span>
                    <div class="group-bphone-numbers">
                        <a href="tel:+34914462588" class="group-bphone-link highlight"><i class="fa-solid fa-phone"></i> (+34) 914 46 25 88</a>
                        <span class="group-bphone-sep">//</span>
                        <a href="tel:+34914456023" class="group-bphone-link">914 45 60 23</a>
                    </div>
                </div>
                <div class="group-bphone-col">
                    <span class="group-bphone-type"><i class="fa-solid fa-mobile-screen"></i> <?= isEn() ? 'Mobiles / WhatsApp:' : 'Móviles / WhatsApp:' ?></span>
                    <div class="group-bphone-numbers">
                        <a href="tel:+34622179060" class="group-bphone-link mobile"><i class="fa-solid fa-mobile-screen"></i> 622 179 060</a>
                        <span class="group-bphone-sep">//</span>
                        <a href="tel:+34633179060" class="group-bphone-link mobile">633 179 060</a>
                    </div>
                </div>
            </div>

            <div style="margin-top: 30px;">
                <a href="<?= langUrl('/eventos') ?>" class="btn-lana-reserve">
                    <span class="btn-lana-dot"></span>
                    <span><i class="fa-solid fa-champagne-glasses"></i> <?= isEn() ? 'Request Tailored Corporate Quote' : 'Solicitar Presupuesto Especial para Eventos' ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

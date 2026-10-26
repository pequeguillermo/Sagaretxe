<!-- ==========================================================================
     SAGARETXE – PÁGINA 404 NO ENCONTRADA (LANA STYLE)
     ========================================================================== -->

<section class="section" style="padding: 110px 0; text-align: center;">
    <div class="container" style="max-width: 620px;">
        <div style="font-family: var(--font-serif); font-size: 6.5rem; font-weight: 400; color: var(--gold-lana); line-height: 1; margin-bottom: 20px;">
            404
        </div>
        <h1 style="font-family: var(--font-serif); font-size: 2.4rem; margin-bottom: 16px; color: #fff;">
            <?= isEn() ? 'Page Not Found' : 'Página No Encontrada' ?>
        </h1>
        <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; margin-bottom: 35px;">
            <?= isEn() 
                ? 'The page you are looking for does not exist or has been moved. We invite you to explore our Basque cider house menu or return home.' 
                : 'Parece que la página que buscas no existe o ha cambiado de dirección. Te invitamos a volver al inicio o descubrir nuestra carta de sidrería vasca.' ?>
        </p>
        <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
            <a href="<?= langUrl('/') ?>" class="btn-lana-reserve">
                <span class="btn-lana-dot"></span>
                <span><?= __('nav_home') ?></span>
            </a>
            <a href="<?= langUrl('/carta') ?>" class="btn-lana-outline">
                <span><?= __('nav_menu') ?></span>
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

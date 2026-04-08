<?php require_once 'includes/header.php'; ?>

<section class="page-hero page-hero-with-bg">
    <div class="page-hero-bg" style="background-image: url('assets/img/banner6.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <nav class="page-hero-breadcrumb animate-on-scroll">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span>Services</span>
        </nav>
        <h1 class="animate-on-scroll delay-2">Our Vehicle Rental Services in Rourkela</h1>
        <p class="animate-on-scroll delay-3 section-desc-wide">Self drive cars, bikes, SUVs, luxury and wedding cars — explore every way you can rent with <?php echo htmlspecialchars(SITE_NAME_SHORT); ?>.</p>
    </div>
</section>

<section class="section section-surface">
    <div class="services-intro glow-card animate-on-scroll">
        <p class="section-desc-wide" style="margin-bottom:0;">Whether you need a compact for city errands or a large SUV for a family holiday, we structure <strong>rourkela car rental service</strong> around self drive. Tell us your dates and we will suggest the right segment — pricing is always on request so you get an accurate quote.</p>
    </div>
    <div class="services-grid services-grid-page" style="margin-top:2.5rem;">
        <?php foreach ($services as $i => $service): ?>
        <div class="service-card glow-card animate-on-scroll <?php echo $i % 2 === 0 ? '' : 'animate-up'; ?> delay-<?php echo min($i % 5 + 1, 5); ?>">
            <div class="service-icon"><i class="fas <?php echo $service['icon']; ?>"></i></div>
            <h3><?php echo htmlspecialchars($service['name']); ?></h3>
            <p><?php echo htmlspecialchars($service['desc']); ?></p>
            <button type="button" class="service-card-cta js-open-book-modal">Enquire <i class="fas fa-arrow-right"></i></button>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section-muted">
    <div class="services-split animate-on-scroll">
        <div class="services-split-text">
            <h2 class="section-title section-title-left">How booking works</h2>
            <ol class="services-steps">
                <li><strong>Enquire</strong> — call, WhatsApp or use the book form with vehicle type and dates.</li>
                <li><strong>Quote</strong> — we confirm availability and share price on request for your trip.</li>
                <li><strong>Handover</strong> — complete paperwork and drive away from our Rourkela location.</li>
            </ol>
        </div>
        <div class="services-split-panel glow-card animate-on-scroll animate-right delay-1">
            <h3><i class="fas fa-circle-info"></i> Good to know</h3>
            <ul class="services-notes">
                <li>Valid driving licence and ID required</li>
                <li>Security deposit as per vehicle segment</li>
                <li>Outstation trips — please mention while booking</li>
                <li>Fuel policy explained at handover</li>
            </ul>
            <a href="contact.php" class="btn-outline glow-btn-outline">Contact page</a>
        </div>
    </div>
</section>

<section class="section section-deep">
    <div class="cta-inline-block glow-card animate-on-scroll">
        <h2>Custom requirement?</h2>
        <p class="section-desc-wide">Wedding convoy, long-term corporate self drive or multi-day highway trip — we will plan with you.</p>
        <button type="button" class="btn-primary glow-btn js-open-book-modal"><i class="fas fa-paper-plane"></i> Send enquiry</button>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

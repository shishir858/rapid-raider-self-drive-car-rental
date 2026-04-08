<?php require_once 'includes/header.php'; ?>

<section class="page-hero page-hero-with-bg">
    <div class="page-hero-bg" style="background-image: url('assets/img/banner2.webp');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <nav class="page-hero-breadcrumb animate-on-scroll">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span>About</span>
        </nav>
        <h1 class="animate-on-scroll delay-2"><?php echo htmlspecialchars(SITE_NAME); ?></h1>
        <p class="animate-on-scroll delay-3 section-desc-wide">Self drive car rental in Rourkela — Station Road, Udit Nagar. Your car, your itinerary, our support.</p>
    </div>
</section>

<section class="section section-surface">
    <div class="about-page-grid about-page-grid-wide">
        <div class="about-page-content animate-on-scroll">
            <h2 class="section-title section-title-left">Who we are</h2>
            <p class="about-page-text section-desc-wide"><?php echo htmlspecialchars(SITE_NAME); ?> is a focused self drive rental service in Rourkela, Odisha. We cater to travellers, families and professionals who want <strong>car hire without driver</strong> — with clear handovers and responsive communication on call and WhatsApp.</p>
            <p class="about-page-text">Our office is on <strong>Station Road, Udit Nagar</strong>, making pickups convenient for residents and commuters across the Steel City. From economy hatches to SUVs and luxury cars, we align vehicles to your duration: daily, weekly or monthly.</p>
            <div class="about-page-highlights">
                <div class="about-highlight-item"><i class="fas fa-map-location-dot"></i><span>Rourkela, Odisha 769001</span></div>
                <div class="about-highlight-item"><i class="fas fa-car"></i><span>Self drive only</span></div>
                <div class="about-highlight-item"><i class="fas fa-circle-check"></i><span>Prices on request</span></div>
            </div>
        </div>
        <aside class="about-page-sidebar animate-on-scroll animate-right delay-1">
            <div class="about-location-card glow-card">
                <h3><i class="fas fa-map-marker-alt"></i> Address</h3>
                <p><?php echo htmlspecialchars(ADDRESS); ?></p>
            </div>
            <div class="about-contact-card glow-card">
                <h3><i class="fas fa-headset"></i> Quick contact</h3>
                <a href="tel:<?php echo PHONE; ?>" class="about-contact-link"><i class="fas fa-phone"></i> <?php echo PHONE; ?></a>
                <a href="mailto:<?php echo htmlspecialchars(EMAIL); ?>" class="about-contact-link"><i class="fas fa-envelope"></i> <?php echo htmlspecialchars(EMAIL); ?></a>
                <a href="https://wa.me/<?php echo WHATSAPP; ?>" target="_blank" rel="noopener" class="about-contact-link"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
        </aside>
    </div>
</section>

<section class="section section-muted">
    <div class="section-header">
        <p class="section-badge animate-on-scroll">Our approach</p>
        <h2 class="section-title animate-on-scroll delay-1">Safety, clarity &amp; flexibility</h2>
        <p class="section-desc animate-on-scroll delay-2 section-desc-wide">We believe <strong>self drive car rental near me</strong> should feel simple: inspect the car, understand the agreement, and enjoy the trip.</p>
    </div>
    <div class="features-grid">
        <div class="feature-card glow-card animate-on-scroll">
            <div class="feature-icon"><i class="fas fa-clipboard-check"></i></div>
            <h3>Documented handover</h3>
            <p>Mileage and condition recorded so both sides have a clear baseline.</p>
        </div>
        <div class="feature-card glow-card animate-on-scroll animate-up delay-1">
            <div class="feature-icon"><i class="fas fa-screwdriver-wrench"></i></div>
            <h3>Maintenance first</h3>
            <p>We prioritize serviced vehicles suitable for city and highway use.</p>
        </div>
        <div class="feature-card glow-card animate-on-scroll delay-2">
            <div class="feature-icon"><i class="fas fa-handshake"></i></div>
            <h3>Local team</h3>
            <p>Talk directly to people who know Rourkela roads and schedules.</p>
        </div>
    </div>
</section>

<section class="section section-deep">
    <div class="about-story-grid">
        <div class="about-story-card glow-card animate-on-scroll animate-left">
            <h3><i class="fas fa-bullseye"></i> Mission</h3>
            <p class="section-desc-wide">Make <strong>rent car in Rourkela</strong> predictable — honest timelines, fair quotes and vehicles that match how you actually drive.</p>
        </div>
        <div class="about-story-card glow-card animate-on-scroll animate-right delay-1">
            <h3><i class="fas fa-eye"></i> Vision</h3>
            <p class="section-desc-wide">Grow as the natural choice when anyone searches for <strong>best car rental company in Rourkela</strong> for self drive.</p>
        </div>
    </div>
</section>

<section class="section section-surface">
    <div class="cta-inline-block glow-card animate-on-scroll">
        <h2>See our fleet</h2>
        <p class="section-desc-wide">Browse popular models from Nexon to Fortuner — then book in one tap.</p>
        <a href="cars.php" class="btn-primary glow-btn"><i class="fas fa-car"></i> View cars</a>
        <button type="button" class="btn-outline glow-btn-outline js-open-book-modal" style="margin-left:0.75rem;margin-top:0.75rem;">Book now</button>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

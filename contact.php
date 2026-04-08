<?php require_once 'includes/header.php'; ?>

<section class="page-hero page-hero-with-bg">
    <div class="page-hero-bg" style="background-image: url('assets/img/banner1.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <nav class="page-hero-breadcrumb animate-on-scroll">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span>Contact</span>
        </nav>
        <h1 class="animate-on-scroll delay-2">Contact Rapid Raider</h1>
        <p class="animate-on-scroll delay-3 section-desc-wide">Book self drive car online Rourkela — we reply fast on phone and WhatsApp.</p>
    </div>
</section>

<section class="section section-surface">
    <div class="contact-cards contact-cards-enhanced">
        <div class="contact-card glow-card animate-on-scroll">
            <div class="contact-card-icon"><i class="fas fa-location-dot"></i></div>
            <h3>Visit us</h3>
            <p><?php echo htmlspecialchars(ADDRESS); ?></p>
        </div>
        <div class="contact-card glow-card animate-on-scroll animate-up delay-1">
            <div class="contact-card-icon"><i class="fas fa-phone-volume"></i></div>
            <h3>Phone</h3>
            <p><a href="tel:<?php echo PHONE; ?>"><?php echo PHONE; ?></a></p>
        </div>
        <div class="contact-card glow-card animate-on-scroll delay-2">
            <div class="contact-card-icon"><i class="fas fa-envelope-open-text"></i></div>
            <h3>Email</h3>
            <p><a href="mailto:<?php echo htmlspecialchars(EMAIL); ?>"><?php echo htmlspecialchars(EMAIL); ?></a></p>
        </div>
    </div>
    <div class="contact-actions animate-on-scroll">
        <a href="tel:<?php echo PHONE; ?>" class="btn-primary glow-btn"><i class="fas fa-phone"></i> Call now</a>
        <a href="https://wa.me/<?php echo WHATSAPP; ?>?text=<?php echo rawurlencode('Hi, enquiry about self drive car rental Rourkela'); ?>" target="_blank" rel="noopener" class="btn-outline glow-btn-outline"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <button type="button" class="btn-outline glow-btn-outline js-open-book-modal"><i class="fas fa-calendar-check"></i> Book form</button>
    </div>
</section>

<section class="section section-muted">
    <div class="contact-form-map contact-form-map-enhanced">
        <div class="contact-form-wrap glow-card animate-on-scroll">
            <h2 class="section-title section-title-left">Send a message</h2>
            <p class="section-desc section-desc-wide">We read every enquiry. Fields marked * are required.</p>
            <form class="contact-form" id="contactPageForm" action="send-enquiry.php" method="post">
                <input type="hidden" name="form_type" value="contact">
                <div class="form-row">
                    <div class="form-group">
                        <label for="cf_name">Name *</label>
                        <input type="text" id="cf_name" name="name" required placeholder="Your name" autocomplete="name">
                    </div>
                    <div class="form-group">
                        <label for="cf_phone">Phone *</label>
                        <input type="tel" id="cf_phone" name="phone" required placeholder="Mobile" autocomplete="tel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cf_email">Email *</label>
                    <input type="email" id="cf_email" name="email" required placeholder="you@email.com" autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="cf_subject">Subject</label>
                    <input type="text" id="cf_subject" name="subject" placeholder="e.g. Self drive SUV for 3 days">
                </div>
                <div class="form-group">
                    <label for="cf_message">Message *</label>
                    <textarea id="cf_message" name="message" rows="5" required placeholder="Your dates, vehicle preference, questions..."></textarea>
                </div>
                <div class="booking-form-message" id="contactFormMessage" role="status"></div>
                <button type="submit" class="btn-submit" id="contactFormSubmit"><i class="fas fa-paper-plane"></i> Send message</button>
            </form>
        </div>
        <div class="contact-map-wrap glow-card animate-on-scroll animate-right delay-1">
            <h2 class="section-title section-title-left">Find us</h2>
            <p class="section-desc"><?php echo htmlspecialchars(ADDRESS); ?></p>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps?q=<?php echo urlencode(ADDRESS); ?>&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php echo htmlspecialchars(SITE_NAME); ?> location"></iframe>
            </div>
            <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode(ADDRESS); ?>" target="_blank" rel="noopener" class="map-link"><i class="fas fa-external-link-alt"></i> Open in Google Maps</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

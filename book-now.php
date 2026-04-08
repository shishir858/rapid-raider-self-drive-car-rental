<?php require_once 'includes/header.php'; ?>

<section class="page-hero page-hero-with-bg">
    <div class="page-hero-bg" style="background-image: url('assets/img/banner2.webp');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <nav class="page-hero-breadcrumb animate-on-scroll">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span>Book Now</span>
        </nav>
        <h1 class="animate-on-scroll delay-2">Book your self drive car</h1>
        <p class="animate-on-scroll delay-3 section-desc-wide">Submit the form — we email your request to our team and reply with availability and <strong>price on request</strong>.</p>
    </div>
</section>

<section class="section section-surface">
    <div class="book-now-layout">
        <div class="book-form-wrap glow-card animate-on-scroll">
            <form class="book-form" id="bookPageForm" action="send-enquiry.php" method="post">
                <input type="hidden" name="form_type" value="book">
                <div class="form-group">
                    <label for="bf_name">Name *</label>
                    <input type="text" id="bf_name" name="name" required placeholder="Your name" autocomplete="name">
                </div>
                <div class="form-group">
                    <label for="bf_phone">Phone *</label>
                    <input type="tel" id="bf_phone" name="phone" required placeholder="Mobile number" autocomplete="tel">
                </div>
                <div class="form-group">
                    <label for="bf_email">Email</label>
                    <input type="email" id="bf_email" name="email" placeholder="Optional" autocomplete="email">
                </div>
                <div class="form-group">
                    <label for="bf_service">Service / vehicle</label>
                    <select id="bf_service" name="service">
                        <option value="">Select</option>
                        <?php foreach ($services as $s): ?>
                        <option value="<?php echo htmlspecialchars($s['name']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bf_datetime">Date &amp; time</label>
                    <input type="datetime-local" id="bf_datetime" name="datetime">
                </div>
                <div class="form-group">
                    <label for="bf_message">Message</label>
                    <textarea id="bf_message" name="message" rows="4" placeholder="Trip details, vehicle preference..."></textarea>
                </div>
                <div class="booking-form-message" id="bookPageFormMessage" role="status"></div>
                <button type="submit" class="btn-submit btn-full" id="bookPageSubmit"><i class="fas fa-paper-plane"></i> Submit booking request</button>
            </form>
        </div>
        <aside class="book-now-sidebar">
            <div class="book-now-info glow-card animate-on-scroll animate-up delay-1">
                <h3><i class="fas fa-phone-volume"></i> Call</h3>
                <p>Fastest for same-day questions</p>
                <a href="tel:<?php echo PHONE; ?>" class="book-phone-link"><?php echo PHONE; ?></a>
            </div>
            <div class="book-now-info glow-card animate-on-scroll delay-2">
                <h3><i class="fab fa-whatsapp"></i> WhatsApp</h3>
                <p>Share dates &amp; car type</p>
                <a href="https://wa.me/<?php echo WHATSAPP; ?>?text=<?php echo rawurlencode('Hi Rapid Raider, I want to book a self drive car.'); ?>" target="_blank" rel="noopener" class="btn-outline glow-btn-outline" style="display:inline-flex;">WhatsApp us</a>
            </div>
        </aside>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

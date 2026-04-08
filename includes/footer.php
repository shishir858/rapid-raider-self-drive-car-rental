    </main>

    <div class="floating-actions">
        <a href="tel:<?php echo PHONE; ?>" class="fab-btn fab-call" title="Call <?php echo PHONE; ?>">
            <span class="fab-icon-wrap fab-icon-call" aria-hidden="true"><i class="fas fa-phone-volume"></i></span>
            <span class="fab-label">Call <?php echo PHONE; ?></span>
        </a>
        <a href="https://wa.me/<?php echo WHATSAPP; ?>?text=<?php echo rawurlencode('Hi, I would like to book a self drive car in Rourkela.'); ?>" target="_blank" rel="noopener" class="fab-btn fab-whatsapp" title="WhatsApp">
            <span class="fab-icon-wrap fab-icon-wa" aria-hidden="true"><i class="fab fa-whatsapp"></i></span>
            <span class="fab-label">WhatsApp</span>
        </a>
    </div>

    <footer class="main-footer">
        <div class="footer-wave" aria-hidden="true"></div>
        <div class="footer-main">
            <div class="footer-grid footer-grid-enhanced">
                <div class="footer-brand footer-brand-block">
                    <a href="index.php" class="footer-logo">
                        <img src="assets/img/logo.png" alt="<?php echo htmlspecialchars(SITE_NAME); ?>" class="footer-logo-img" width="160" height="52">
                    </a>
                    <p class="footer-tagline"><?php echo htmlspecialchars(SITE_TAGLINE); ?></p>
                    <div class="footer-social-row">
                        <a href="tel:<?php echo PHONE; ?>" class="footer-pill"><i class="fas fa-phone"></i> Call</a>
                        <a href="https://wa.me/<?php echo WHATSAPP; ?>" target="_blank" rel="noopener" class="footer-pill footer-pill-wa"><i class="fab fa-whatsapp"></i> Chat</a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Explore</h4>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="services.php">Services</a>
                    <a href="cars.php">Cars for Rent</a>
                    <a href="contact.php">Contact</a>
                    <button type="button" class="footer-link-btn js-open-book-modal">Book Now</button>
                </div>
                <div class="footer-services">
                    <h4>Rental Services</h4>
                    <?php foreach (array_slice($services, 0, 5) as $svc): ?>
                    <a href="services.php"><?php echo htmlspecialchars($svc['name']); ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="footer-contact footer-contact-card">
                    <h4>Contact</h4>
                    <p class="footer-contact-line"><i class="fas fa-location-dot"></i> <span><?php echo htmlspecialchars(ADDRESS); ?></span></p>
                    <p class="footer-contact-line"><i class="fas fa-phone"></i> <a href="tel:<?php echo PHONE; ?>"><?php echo PHONE; ?></a></p>
                    <p class="footer-contact-line"><i class="fas fa-envelope"></i> <a href="mailto:<?php echo htmlspecialchars(EMAIL); ?>"><?php echo htmlspecialchars(EMAIL); ?></a></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars(SITE_NAME); ?>. Self drive car rental Rourkela. All rights reserved.</p>
        </div>
    </footer>

<?php require_once __DIR__ . '/booking-modal.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>

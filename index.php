<?php require_once 'includes/header.php';

$hero_slides = [
    [
        'image' => 'assets/img/banner1.jpg',
        'badge' => 'Self Drive in Rourkela',
        'title' => 'Rent a Car <span>Drive Yourself</span>',
        'desc' => 'Best self drive car rental in Rourkela — no driver, full privacy. Daily, weekly and monthly hire on request.',
        'cta' => 'Book Now',
    ],
    
];
$gallery_imgs = ['img1.jpeg', 'img2.jpeg', 'img3.jpeg', 'img4.jpeg', 'img5.jpeg', 'img7.jpeg', 'img8.jpeg', 'img9.jpeg'];
$cars_home = array_slice($popular_cars, 0, 6);

$kw_highlight = [
    'self drive car rental rourkela',
    'car rental rourkela',
    'rent car in rourkela',
    'self drive cars in rourkela',
    'car on rent rourkela',
    'car hire rourkela',
    'rourkela car rental service',
    'rent car without driver rourkela',
    'book self drive car online rourkela',
    'best self drive car rental in rourkela',
    'best car rental company in rourkela',
    'self drive car rental near me',
];

$testimonials = [
    ['name' => 'S. Patnaik', 'role' => 'Family trip', 'city' => 'Rourkela', 'text' => 'Booked a self drive SUV for a weekend. Vehicle was clean, paperwork was clear, and the team responded quickly on WhatsApp.', 'rating' => 5],
    ['name' => 'Ankita D.', 'role' => 'Corporate', 'city' => 'Odisha', 'text' => 'Reliable car rental without driver in Rourkela. Flexible timing and fair process — will use Rapid Raider again.', 'rating' => 5],
    ['name' => 'R. Khan', 'role' => 'Wedding guest', 'city' => 'Rourkela', 'text' => 'Needed a luxury sedan for two days — smooth pickup near Station Road. Highly recommend for self drive hire.', 'rating' => 5],
    ['name' => 'P. Mohanty', 'role' => 'Local', 'city' => 'Rourkela', 'text' => 'Easy booking and good fleet options. Best experience we have had with rourkela car rental service.', 'rating' => 5],
];
// duplicate for seamless marquee
$testimonials_marquee = array_merge($testimonials, $testimonials);
?>

<section class="hero hero-with-img">
    <div class="hero-bg" id="heroBg" style="background-image: url('<?php echo htmlspecialchars($hero_slides[0]['image']); ?>');"></div>
    <div class="hero-overlay"></div>
    <div class="hero-pattern"></div>
    <div class="hero-content">
        <span class="hero-badge animate-on-scroll" id="heroBadge"><?php echo htmlspecialchars($hero_slides[0]['badge']); ?></span>
        <h1 class="animate-on-scroll delay-1" id="heroTitle"><?php echo $hero_slides[0]['title']; ?></h1>
        <p class="hero-desc animate-on-scroll delay-2" id="heroDesc"><?php echo htmlspecialchars($hero_slides[0]['desc']); ?></p>
        <div class="hero-buttons animate-on-scroll delay-3">
            <a href="#" class="btn-primary glow-btn js-open-book-modal" id="heroPrimaryBtn"><i class="fas fa-calendar-check"></i> <span><?php echo htmlspecialchars($hero_slides[0]['cta']); ?></span></a>
            <a href="tel:<?php echo PHONE; ?>" class="btn-outline"><i class="fas fa-phone"></i> Call <?php echo PHONE; ?></a>
        </div>
        <!-- <div class="hero-controls animate-on-scroll delay-4">
            <button type="button" class="hero-arrow" id="heroPrev" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
            <div class="hero-dots" id="heroDots"></div>
            <button type="button" class="hero-arrow" id="heroNext" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
        </div> -->
    </div>
</section>

<section class="section about-section section-surface">
    <div class="section-header">
        <span class="section-badge animate-on-scroll">About Us</span>
        <h2 class="section-title animate-on-scroll delay-1"><?php echo htmlspecialchars(SITE_NAME); ?></h2>
        <p class="section-desc animate-on-scroll delay-2 section-desc-wide"><?php echo htmlspecialchars(META_DESC_HOME); ?></p>
    </div>
    <div class="about-content-grid">
        <div class="about-img-wrap animate-on-scroll delay-1">
            <img src="assets/img/img1.jpeg" alt="<?php echo htmlspecialchars(SITE_NAME); ?> Rourkela" class="about-img glow-card-static" />
        </div>
        <div class="about-text-wrap animate-on-scroll animate-left delay-2">
            <h3 class="about-subtitle">Why customers choose us</h3>
            <ul class="about-features">
                <li><i class="fas fa-key"></i> True self drive — no driver, your schedule</li>
                <li><i class="fas fa-car-side"></i> Hatchback to SUV &amp; luxury options</li>
                <li><i class="fas fa-shield-halved"></i> Well-maintained, documented vehicles</li>
                <li><i class="fas fa-location-dot"></i> Based at Station Road, Udit Nagar</li>
                <li><i class="fas fa-clock"></i> Daily, weekly &amp; monthly plans</li>
                <li><i class="fas fa-headset"></i> Call &amp; WhatsApp support</li>
            </ul>
            <a href="about.php" class="btn-primary glow-btn about-btn"><i class="fas fa-info-circle"></i> Learn more</a>
        </div>
    </div>
</section>

<section class="section section-muted mb-5">
    <div class="section-header">
        <p class="section-badge animate-on-scroll">Why Rapid Raider</p>
        <h2 class="section-title animate-on-scroll delay-1">Built for self drive in Rourkela</h2>
        <p class="section-desc animate-on-scroll delay-2 section-desc-wide">Transparent process, local team, and a fleet suited for city runs, highways and special days — so you can focus on the road ahead.</p>
    </div>
    <div class="features-grid">
        <div class="feature-card glow-card animate-on-scroll delay-1">
            <div class="feature-icon"><i class="fas fa-road"></i></div>
            <h3>Freedom to roam</h3>
            <p>Plan your own routes — ideal for work, family visits and outstation weekends.</p>
        </div>
        <div class="feature-card glow-card animate-on-scroll animate-up delay-2">
            <div class="feature-icon"><i class="fas fa-tags"></i></div>
            <h3>Pricing on request</h3>
            <p>Tell us the vehicle and duration; we share clear quotes with no surprise charges.</p>
        </div>
        <div class="feature-card glow-card animate-on-scroll delay-3">
            <div class="feature-icon"><i class="fas fa-file-signature"></i></div>
            <h3>Simple handover</h3>
            <p>Guided documentation and quick briefing so you can drive away with confidence.</p>
        </div>
        <div class="feature-card glow-card animate-on-scroll animate-up delay-4">
            <div class="feature-icon"><i class="fas fa-star"></i></div>
            <h3>Trusted locally</h3>
            <p>Growing choice for <strong>car hire Rourkela</strong> and <strong>book self drive car online Rourkela</strong>.</p>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="stats-inner">
        <div class="stat-item glow-card animate-on-scroll">
            <span class="stat-number" data-count="850">0</span><span class="stat-suffix">+</span>
            <p class="stat-label">Self drive trips</p>
        </div>
        <div class="stat-item glow-card animate-on-scroll animate-up delay-1">
            <span class="stat-number" data-count="35">0</span><span class="stat-suffix">+</span>
            <p class="stat-label">Vehicles on rotation</p>
        </div>
        <div class="stat-item glow-card animate-on-scroll delay-2">
            <span class="stat-number" data-count="6">0</span>
            <p class="stat-label">Years serving Rourkela</p>
        </div>
        <div class="stat-item glow-card animate-on-scroll animate-up delay-3">
            <span class="stat-number" data-count="24">0</span><span class="stat-suffix">/7</span>
            <p class="stat-label">Enquiry support</p>
        </div>
    </div>
</section>

<section class="section section-surface">
    <div class="section-header">
        <p class="section-badge animate-on-scroll">Our Rental Services</p>
        <h2 class="section-title animate-on-scroll delay-1">Our Vehicle Rental Services in Rourkela</h2>
        <p class="section-desc animate-on-scroll delay-2 section-desc-wide">From economy hatches to luxury cars and wedding arrivals — explore what you can drive with Rapid Raider.</p>
    </div>
    <div class="services-grid services-grid-4">
        <?php foreach (array_slice($services, 0, 4) as $i => $service): ?>
        <div class="service-card glow-card animate-on-scroll <?php echo $i % 2 === 0 ? '' : 'animate-up'; ?> delay-<?php echo min($i % 5 + 1, 5); ?>">
            <div class="service-icon"><i class="fas <?php echo $service['icon']; ?>"></i></div>
            <h3><?php echo htmlspecialchars($service['name']); ?></h3>
            <p><?php echo htmlspecialchars($service['desc']); ?></p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="section-cta animate-on-scroll">
        <a href="services.php" class="btn-outline glow-btn-outline">All services <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<section class="section section-muted">
    <div class="section-header">
        <p class="section-badge animate-on-scroll">Fleet preview</p>
        <h2 class="section-title animate-on-scroll delay-1">Popular Cars for Rent in Rourkela</h2>
        <p class="section-desc animate-on-scroll delay-2 section-desc-wide">A glimpse of models often available for self drive. <strong>Prices on request</strong> — ask for your dates and we will confirm.</p>
    </div>
    <div class="cars-grid cars-grid-premium">
        <?php foreach ($cars_home as $i => $car): ?>
        <div class="car-card car-card-premium glow-card animate-on-scroll <?php echo $i % 2 === 0 ? '' : 'animate-up'; ?> delay-<?php echo min($i + 1, 4); ?>">
            <div class="car-image">
                <img src="assets/cars/<?php echo htmlspecialchars($car['img']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?> self drive Rourkela" loading="lazy" width="400" height="220">
            </div>
            <div class="car-info">
                <h3><?php echo htmlspecialchars($car['name']); ?></h3>
                <p><?php echo htmlspecialchars($car['note']); ?></p>
                <span class="car-price-tag">Price on request</span>
                <a href="https://wa.me/<?php echo WHATSAPP; ?>?text=<?php echo rawurlencode('Hi Rapid Raider, I want to book ' . $car['name'] . ' in Rourkela.'); ?>" target="_blank" rel="noopener" class="car-card-btn"><i class="fab fa-whatsapp"></i> WhatsApp</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="section-cta animate-on-scroll">
        <a href="cars.php" class="btn-outline glow-btn-outline">View full fleet <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<!-- <section class="section section-surface">
    <div class="section-header">
        <p class="section-badge animate-on-scroll">Gallery</p>
        <h2 class="section-title animate-on-scroll delay-1">On the road with Rapid Raider</h2>
        <p class="section-desc animate-on-scroll delay-2">Moments from our fleet and happy renters around Rourkela.</p>
    </div>
    <div class="gallery-grid">
        <?php foreach ($gallery_imgs as $i => $img): ?>
        <div class="gallery-item glow-card animate-on-scroll <?php echo $i % 3 === 0 ? 'animate-up' : ''; ?> delay-<?php echo min($i % 4 + 1, 4); ?>">
            <img src="assets/img/<?php echo $img; ?>" alt="Rapid Raider fleet gallery <?php echo $i + 1; ?>" loading="lazy" width="400" height="400">
        </div>
        <?php endforeach; ?>
    </div>
</section> -->

<div class="gallery-modal-overlay" id="galleryModalOverlay">
    <div class="gallery-modal" id="galleryModal">
        <button class="gallery-modal-close" id="galleryModalClose" aria-label="Close">&times;</button>
        <img src="" alt="Gallery large" class="gallery-modal-img" id="galleryModalImg" width="800" height="600">
        <div class="gallery-modal-nav">
            <button class="gallery-modal-nav-btn" id="galleryModalPrev" aria-label="Previous">&#8592;</button>
            <button class="gallery-modal-nav-btn" id="galleryModalNext" aria-label="Next">&#8594;</button>
        </div>
        <div class="gallery-modal-counter" id="galleryModalCounter"></div>
    </div>
</div>

<section class="taxi-cta-banner animate-on-scroll" aria-label="Call to action">
    <div class="taxi-checker taxi-checker-top" aria-hidden="true"></div>
    <div class="taxi-cta-inner">
        <div class="taxi-cta-col taxi-cta-copy">
            <h2 class="taxi-cta-title text-white" style="color:#fff!important;">Start your journey with <?php echo htmlspecialchars(SITE_NAME_SHORT); ?> today</h2>
            <p class="taxi-cta-desc">Book affordable <strong>self drive cars in Rourkela</strong>, SUVs and premium models — handover at Station Road, Udit Nagar. We are here to make <strong>car on rent Rourkela</strong> straightforward.</p>
        </div>
        <div class="taxi-cta-divider" aria-hidden="true"></div>
        <div class="taxi-cta-col taxi-cta-action">
            <div class="taxi-cta-phone-row">
                <span class="taxi-cta-icon-circle" aria-hidden="true"><i class="fas fa-headset"></i></span>
                <a href="tel:<?php echo PHONE; ?>" class="taxi-cta-phone"><?php echo PHONE; ?></a>
            </div>
            <button type="button" class="taxi-cta-btn glow-btn js-open-book-modal">Book your car <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
    <div class="taxi-checker taxi-checker-bottom" aria-hidden="true"></div>
</section>

<section class="section testimonials-section section-muted">
    <div class="testimonials-bg"></div>
    <div class="testimonials-content">
        <div class="section-header">
            <p class="section-badge">Reviews</p>
            <h2 class="section-title">What renters say</h2>
            <p class="section-desc section-desc-wide">Real feedback from customers who chose Rapid Raider for self drive in Rourkela.</p>
        </div>
        <div class="testimonials-marquee" id="testimonialsMarquee">
            <div class="testimonials-marquee-track">
                <?php foreach ($testimonials_marquee as $t): ?>
                <div class="testimonial-card testimonial-card--marquee glow-card">
                    <div class="testimonial-quote-icon"><i class="fas fa-quote-left"></i></div>
                    <div class="testimonial-stars">
                        <?php for ($s = 0; $s < $t['rating']; $s++): ?>
                        <i class="fas fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="testimonial-text">"<?php echo htmlspecialchars($t['text']); ?>"</p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar"><span><?php echo strtoupper(substr($t['name'], 0, 1)); ?></span></div>
                        <div class="testimonial-meta">
                            <strong><?php echo htmlspecialchars($t['name']); ?></strong>
                            <span><?php echo htmlspecialchars($t['role']); ?> · <?php echo htmlspecialchars($t['city']); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="section seo-keywords-section section-deep">
    <div class="glow-card seo-keywords-inner animate-on-scroll">
        <h2 class="seo-keywords-title">Self drive &amp; car rental in Rourkela — what we offer</h2>
        <p class="seo-keywords-lead section-desc-wide">Rapid Raider helps you <strong>rent car without driver Rourkela</strong> with simple booking and local support. Whether you searched for <mark class="keyword-mark">self drive car rental near me</mark> or need a vehicle for an event, we align the right car to your trip length and budget.</p>
        <p class="seo-keywords-body">Popular searches we serve include
            <?php foreach ($kw_highlight as $i => $kw): ?>
            <mark class="keyword-mark"><?php echo htmlspecialchars($kw); ?></mark><?php echo $i < count($kw_highlight) - 1 ? ', ' : '.'; ?>
            <?php endforeach; ?>
        </p>
        <p class="seo-keywords-close">Plan your next outing with the team customers rate among the <strong>best self drive car rental in Rourkela</strong> — message us or use the book form for a fast reply.</p>
    </div>
</section>

<section class="section cta-section-adv animate-on-scroll">
    <div class="cta-adv-bg"></div>
    <div class="cta-adv-content">
        <div class="cta-adv-icon"><i class="fas fa-car-side"></i></div>
        <h2 class="cta-adv-title">Ready to hit the road?</h2>
        <p class="cta-adv-desc section-desc-wide">Get your <strong>self drive car rental Rourkela</strong> quote today — <?php echo htmlspecialchars(SITE_NAME_SHORT); ?> is your partner for flexible, no-driver car hire and friendly local service.</p>
        <div class="cta-adv-buttons">
            <button type="button" class="btn-primary btn-cta-adv glow-btn js-open-book-modal"><i class="fas fa-calendar-check"></i> Book now</button>
            <a href="https://wa.me/<?php echo WHATSAPP; ?>?text=<?php echo rawurlencode('Hi Rapid Raider, I want to book a self drive car in Rourkela.'); ?>" target="_blank" rel="noopener" class="btn-outline btn-cta-adv glow-btn-outline"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </div>
    </div>
</section>

<script>
window.heroSlides = <?php echo json_encode($hero_slides, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
</script>
<?php require_once 'includes/footer.php'; ?>

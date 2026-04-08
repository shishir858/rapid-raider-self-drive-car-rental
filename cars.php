<?php require_once 'includes/header.php'; ?>

<section class="page-hero page-hero-with-bg">
    <div class="page-hero-bg" style="background-image: url('assets/img/banner4.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <nav class="page-hero-breadcrumb animate-on-scroll">
            <a href="index.php">Home</a>
            <span class="separator">/</span>
            <span>Cars</span>
        </nav>
        <h1 class="animate-on-scroll delay-2">Popular Cars for Rent in Rourkela</h1>
        <p class="animate-on-scroll delay-3 section-desc-wide">Self drive hatchbacks, sedans, SUVs and more. <strong>Prices on request</strong> — tap book to send your dates.</p>
    </div>
</section>

<section class="section section-surface">
    <div class="cars-grid cars-grid-premium">
        <?php foreach ($popular_cars as $i => $car): ?>
        <div class="car-card car-card-premium glow-card animate-on-scroll <?php echo $i % 2 === 0 ? '' : 'animate-up'; ?> delay-<?php echo min(($i % 4) + 1, 4); ?>">
            <div class="car-image">
                <img src="assets/cars/<?php echo htmlspecialchars($car['img']); ?>" alt="<?php echo htmlspecialchars($car['name']); ?> rent in Rourkela" loading="lazy" width="400" height="220">
            </div>
            <div class="car-info">
                <h3><?php echo htmlspecialchars($car['name']); ?></h3>
                <p><?php echo htmlspecialchars($car['note']); ?></p>
                <span class="car-price-tag">Price on request</span>
                <button type="button" class="car-card-btn js-open-book-modal">Book now</button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="section section-muted">
    <div class="cta-inline-block glow-card animate-on-scroll">
        <h2>Need another model?</h2>
        <p class="section-desc-wide">Ask us for Thar, Fortuner, wedding cars or long-term self drive — we will check live availability.</p>
        <button type="button" class="btn-primary glow-btn js-open-book-modal"><i class="fas fa-calendar-check"></i> Book now</button>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>

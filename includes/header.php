<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}
require_once __DIR__ . '/functions.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$page_title = get_page_title($current_page);
$meta_desc = get_meta_description($current_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars(META_KEYWORDS); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Source+Serif+4:ital,opsz,wght@0,8..60,600;0,8..60,700;1,8..60,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <aside class="mobile-drawer" id="mobileDrawer">
        <button class="drawer-close" id="drawerClose" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>
        <nav class="drawer-nav">
            <a href="index.php" class="<?php echo is_active_page('index'); ?>"><i class="fas fa-home"></i> Home</a>
            <a href="about.php" class="<?php echo is_active_page('about'); ?>"><i class="fas fa-info-circle"></i> About</a>
            <a href="services.php" class="<?php echo is_active_page('services'); ?>"><i class="fas fa-concierge-bell"></i> Services</a>
            <a href="cars.php" class="<?php echo is_active_page('cars'); ?>"><i class="fas fa-car"></i> Cars</a>
            <a href="contact.php" class="<?php echo is_active_page('contact'); ?>"><i class="fas fa-envelope"></i> Contact</a>
            <button type="button" class="btn-book-drawer js-open-book-modal"><i class="fas fa-calendar-check"></i> Book Now</button>
        </nav>
        <div class="drawer-contact">
            <a href="tel:<?php echo PHONE; ?>"><i class="fas fa-phone"></i> <?php echo PHONE; ?></a>
            <a href="https://wa.me/<?php echo WHATSAPP; ?>" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        </div>
    </aside>

    <header class="main-header" id="mainHeader">
        <div class="header-inner">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" alt="<?php echo htmlspecialchars(SITE_NAME); ?>" class="logo-img" width="180" height="60">
            </a>
            <nav class="desktop-nav">
                <a href="index.php" class="<?php echo is_active_page('index'); ?>">Home</a>
                <a href="about.php" class="<?php echo is_active_page('about'); ?>">About</a>
                <a href="services.php" class="<?php echo is_active_page('services'); ?>">Services</a>
                <a href="cars.php" class="<?php echo is_active_page('cars'); ?>">Cars</a>
                <a href="contact.php" class="<?php echo is_active_page('contact'); ?>">Contact</a>
            </nav>
            <div class="header-actions">
                <button type="button" class="btn-book js-open-book-modal">Book Now</button>
                <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main class="main-content">

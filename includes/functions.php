<?php
/**
 * Rapid Raider - Helper Functions
 */

function get_page_title($page = 'index') {
    if ($page === 'index') {
        return META_TITLE_HOME;
    }
    $titles = [
        'about' => 'About Us',
        'services' => 'Our Vehicle Rental Services',
        'cars' => 'Popular Cars for Rent in Rourkela',
        'contact' => 'Contact Us',
        'book-now' => 'Book Now',
    ];
    $label = $titles[$page] ?? 'Home';
    return $label . ' | ' . SITE_NAME_SHORT;
}

function get_meta_description($page = 'index') {
    if ($page === 'index') {
        return META_DESC_HOME;
    }
    $desc = [
        'about' => SITE_NAME . ' in Rourkela — self drive car rental, SUVs and luxury cars without driver. Trusted local service at Station Road, Udit Nagar.',
        'services' => 'Our vehicle rental services in Rourkela: self drive cars, bikes, SUVs, luxury and wedding cars. Enquire for availability and rates.',
        'cars' => 'Popular cars for rent in Rourkela including Nexon, Swift, Creta, Fortuner and more. Prices on request — book self drive online.',
        'contact' => 'Contact ' . SITE_NAME . ' in Rourkela. Call ' . PHONE . ' or email ' . EMAIL . ' for self drive car hire without driver.',
        'book-now' => 'Book a self drive car in Rourkela. Submit your details and we will confirm availability. Best car rental company in Rourkela.',
    ];
    return $desc[$page] ?? META_DESC_HOME;
}

function is_active_page($page) {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    return $current === $page ? 'active' : '';
}

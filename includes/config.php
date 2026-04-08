<?php
/**
 * Rapid Raider Self Drive Car Rental - Configuration
 */

define('SITE_NAME', 'Rapid Raider Self Drive Car Rental');
define('SITE_NAME_SHORT', 'Rapid Raider');
define('SITE_TAGLINE', 'Premium self drive car rental in Rourkela — book cars, SUVs and luxury vehicles without driver. Daily, weekly and monthly hire with transparent support.');
define('PHONE', '7077595350');
define('WHATSAPP', '917077595350');
define('EMAIL', 'Rapidraider01@gmail.com');
define('ADDRESS', 'Station Road, Udit Nagar, Rourkela, Odisha 769001');

/** SEO — home page */
define('META_TITLE_HOME', 'Rapid Raider Self Drive Car Rental in Rourkela | Car Hire Without Driver | self drive car rental near me');
define('META_DESC_HOME', 'Rapid Raider provides the best self drive car rental in Rourkela. Book affordable cars, SUVs and luxury vehicles without driver. Daily, weekly and monthly car hire available.');
define('META_KEYWORDS', 'self drive car rental rourkela, car rental rourkela, rent car in rourkela, self drive cars in rourkela, car on rent rourkela, car hire rourkela, rourkela car rental service, rent car without driver rourkela, book self drive car online rourkela, best self drive car rental in rourkela, best car rental company in rourkela, self drive car rental near me');

/** SMTP (Hostinger) — enquiry mailbox sends to business inbox */
define('SMTP_HOST', 'smtp.hostinger.com');
define('SMTP_USER', 'enquiry01@sspsoftproindia.com');
define('SMTP_PASS', '?2ML!FZciI');
define('SMTP_PORT', 587);
define('SMTP_FROM_EMAIL', 'enquiry01@sspsoftproindia.com');
define('SMTP_FROM_NAME', 'Rapid Raider Website');
/** Customer enquiries delivered here */
define('ENQUIRY_TO_EMAIL', 'Rapidraider01@gmail.com');

$services = [
    ['name' => 'Self Drive Car Rental in Rourkela', 'icon' => 'fa-car', 'desc' => 'Drive yourself with well-maintained cars — flexible pickup in Rourkela and nearby areas.'],
    ['name' => 'Bike Rental in Rourkela', 'icon' => 'fa-motorcycle', 'desc' => 'Two-wheeler rental options for city runs and short trips (subject to availability).'],
    ['name' => 'SUV Rental in Rourkela', 'icon' => 'fa-truck-monster', 'desc' => 'Spacious SUVs for family trips, highways and outstation comfort.'],
    ['name' => 'Luxury Car Rental in Rourkela', 'icon' => 'fa-gem', 'desc' => 'Premium sedans and luxury models for business and special occasions.'],
    ['name' => 'Wedding Car Rental in Rourkela', 'icon' => 'fa-heart', 'desc' => 'Elegant vehicles to make your wedding day arrivals memorable.'],
];

/** Popular / fleet list — images map to existing assets where possible */
$popular_cars = [
    ['name' => 'Tata Nexon', 'img' => 'tata-nexon.jpg', 'note' => 'Compact SUV — city & weekend trips'],
    ['name' => 'Tata Tiago', 'img' => 'tata-tiago.jpg', 'note' => 'Hatchback — easy parking & mileage'],
    ['name' => 'Maruti Swift', 'img' => 'swiftdzire.png', 'note' => 'Popular hatch for daily use'],
    ['name' => 'Hyundai i20', 'img' => 'hyundai-i20.jpg', 'note' => 'Premium hatch feel'],
    ['name' => 'Hyundai Verna', 'img' => 'hyundai-verna.jpg', 'note' => 'Comfortable sedan'],
    ['name' => 'Hyundai Creta', 'img' => 'hyundai-creta.jpg', 'note' => 'Mid SUV — bestseller'],
    ['name' => 'Fortuner', 'img' => 'fortuner.webp', 'note' => 'Full-size SUV — road presence'],
    ['name' => 'MG Hector Plus', 'img' => 'mg-hector-plus.png', 'note' => '6/7 seater space'],
    ['name' => 'Thar', 'img' => 'thar.webp', 'note' => 'Adventure-ready 4x4 style'],
    ['name' => 'Maruti Ertiga', 'img' => 'ertiga.jfif', 'note' => 'Family MPV — 7 seats'],
    ['name' => 'Baleno', 'img' => 'baleno.webp', 'note' => 'Spacious premium hatch'],
    ['name' => 'Scorpio', 'img' => 'scorpio.jpg', 'note' => 'Bold SUV for all terrain'],
];

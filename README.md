# Rapid Raider Self Drive Car Rental

PHP-based marketing website for **Rapid Raider Self Drive Car Rental (Rourkela)** with a modern red/blue UI, animated sections, and enquiry forms that send email via SMTP (PHPMailer).

## Tech stack
- PHP (works on XAMPP/WAMP)
- HTML/CSS/JS (no framework)
- PHPMailer via Composer (`vendor/`)

## Local setup (XAMPP)
1. Copy this folder into `c:\xampp\htdocs\rapid-raider-self-drive-car-rental`
2. Start **Apache** in XAMPP Control Panel
3. Open:
   - `http://localhost/rapid-raider-self-drive-car-rental/`

## Email / forms (Book Now + Contact)
- Form handler: `send-enquiry.php`
- Config: `includes/config.php`
- Uses SMTP (Hostinger) and sends to the business inbox configured as `ENQUIRY_TO_EMAIL`.

## Project structure
- `index.php` — Home page
- `about.php`, `services.php`, `cars.php`, `contact.php`, `book-now.php` — Inner pages
- `includes/` — `header.php`, `footer.php`, `config.php`, `functions.php`, `booking-modal.php`
- `assets/css/style.css` — Styles
- `assets/js/main.js` — JS (hero slider, modal, AJAX forms, animations)
- `vendor/` — Composer dependencies (ignored in git via `.gitignore`)

## Notes for git
- Do **not** commit secrets like SMTP passwords.
- If you want to keep SMTP credentials out of git, move them to an `.env` file and read them in PHP (and keep `.env` ignored).

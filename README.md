# VASTRA MART — Proper Working PHP/MySQL Package

## Stack
PHP 8+, MySQL/MariaDB, HTML5, CSS3, JavaScript, PDO.

## XAMPP setup
1. Copy this folder to `C:\xampp\htdocs\VASTRA_MART_PROPER`.
2. Start Apache and MySQL in XAMPP.
3. Open phpMyAdmin: `http://localhost/phpmyadmin/`.
4. Import `database.sql`.
5. Open `http://localhost/VASTRA_MART_PROPER/`.
6. Owner panel: `http://localhost/VASTRA_MART_PROPER/admin/login.php`.

### Owner login
Email: `owner@vastramart.local`
Password: `Owner@123`

If the supplied password hash is rejected on a particular PHP build, run this once in a PHP page/CLI to generate a hash and replace the admin row in phpMyAdmin:
`password_hash('Owner@123', PASSWORD_DEFAULT)`

## Main features
- 17 categories and 84 products from the supplied VASTRA MART HTML project.
- Customer registration/login/logout.
- Product search and category-ready product listing.
- Session shopping cart with quantity updates/removal.
- Checkout with COD and demo UPI/card/net-banking options.
- MySQL order storage and stock deduction.
- Order history and printable invoice.
- Owner dashboard, product stock update and order status update.
- Responsive UI for desktop/mobile.

## Important
Payment methods marked Demo do not process real money. For real payments, integrate a payment gateway and server-side verification.

## Original source basis
The product catalogue, categories, business identity and project wording were adapted from the supplied VASTRA MART HTML file. External product images still use the image URLs contained in that source; a local placeholder is used if an image fails.

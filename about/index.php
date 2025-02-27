<?php
/**
 * About Page - Viet Deli Restaurant
 * 
 * This file displays the about page with company information.
 * URL path: /about/
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/vietdeli/' : '/'; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Viet Deli</title>
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header-footer-styles.css">
    <link rel="stylesheet" href="css/about-styles.css">
</head>
<body>
    <?php 
    $root = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? $_SERVER['DOCUMENT_ROOT'] . '/vietdeli/' : $_SERVER['DOCUMENT_ROOT'] . '/';
    include $root . 'header.html'; 
    ?>

    <div class="about-container">
        <h1>About Viet Deli</h1>
        
        <div class="about-content">
            <section>
                <h2>Who We Are</h2>
                <p>Welcome to Viet Deli. We are passionate about bringing authentic Vietnamese cuisine to your table, offering a delightful blend of traditional flavors and fresh ingredients that capture the essence of Vietnam's rich culinary heritage.</p>
            </section>
            
            <section>
                <h2>Our Mission</h2>
                <p>Our mission is to share the authentic taste of Vietnamese cuisine with our community. We believe in preserving traditional recipes while using the freshest ingredients to create memorable dining experiences. Every dish we serve carries the warmth and hospitality that Vietnamese food culture is known for.</p>
            </section>
            
            <section class="contact-section">
                <h2>Contact Us</h2>
                <p>Have questions? Call us at <a href="tel:0893176708">0893 176 708</a> or <a href="sms:0893176708">send us a text</a></p>
            </section>
        </div>
    </div>

    <?php include $root . 'footer.html'; ?>
    <script src="js/main.js"></script>
</body>
</html>

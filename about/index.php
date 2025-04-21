<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Viet Deli</title>
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header-footer-styles.css">
    <link rel="stylesheet" href="css/about-styles.css">
</head>
<body>
    <?php include BASE_PATH . '/header.html'; ?>

    <div class="about-container">
        <h1>About Viet Deli</h1>
        
        <div class="about-content">
            <section>
                <h2>Who We Are</h2>
                <p>Viet Deli is <em>Perth's beloved destination</em> for authentic Vietnamese cuisine. We take pride in serving delightful dishes that capture the <em>essence of Vietnam's rich culinary heritage</em>, bringing fresh ingredients and traditional flavors to every meal we prepare.</p>
                
                <div class="legacy-image">
                    <img src="images/district-1-saigon-cafe-founders.jpg" alt="Our team preparing banh mi" class="history-image">
                    <p class="image-caption">A cherished memory from our early days, when we first started sharing our love for Vietnamese cuisine</p>
                </div>

                <p>While some may remember us as District 1 Saigon Cafe, we've <em>grown and evolved</em> to become Viet Deli, continuing our passion for bringing <em>authentic Vietnamese flavors</em> to our community.</p>
            </section>
            
            <section>
                <h2>Our Mission</h2>
                <p>At Viet Deli, our mission is simple: to bring a <em>taste of Vietnam to the heart of Perth</em>. We strive to create a <em>welcoming space</em> where everyone—whether you're Vietnamese or simply a lover of great food—can experience the bold, authentic flavors of Vietnam.</p>
                
                <p>Every dish we serve carries the <em>warmth and hospitality</em> that Vietnamese food culture is known for. Through our carefully crafted menu, we share not just meals, but a <em>piece of our heritage</em> with our community.</p>
            </section>
            
            <section>
                <h2>Our Commitments</h2>
                <ul>
                    <li><strong>Authenticity</strong> – Preserving the true flavors of Vietnamese cuisine using traditional recipes passed down through generations.</li>
                    <li><strong>Quality</strong> – Using fresh, high-quality ingredients to ensure every dish is made to perfection.</li>
                    <li><strong>Family & Community</strong> – Sharing the warmth and hospitality of Vietnamese culture, treating every customer like family.</li>
                    <li><strong>Sustainability</strong> – Supporting ethical sourcing of ingredients and minimizing waste to protect the environment.</li>
                </ul>
            </section>
            
            <section class="contact-section">
                <h2>Contact Us</h2>
                <p>Have questions? Call us at <a href="tel:0893176708">08 9317 6708</a> or <a href="sms:0490146689">send us a text</a></p>
            </section>
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'footer.html'; ?>
    <script src="js/main.js"></script>
</body>
</html>

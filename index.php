<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to Viet Kitchen - serving authentic Vietnamese cuisine">
    <title>Viet Deli | Vietnamese Banh Mi & Pho Restaurant | Perth</title>
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header-footer-styles.css">
    <link rel="stylesheet" href="css/features.css">
    <link rel="stylesheet" href="css/hero-styles.css">
    <link rel="stylesheet" href="css/gallery.css">
</head>
<body>
    <!-- Include header -->
    <?php include 'header.html'; ?>

    <main>
        <section class="hero">
            <div class="hero-content">
                <span class="decorative-icon">🍜</span>
                <h1>Welcome to Viet Deli</h1>
                <p>Experience authentic North Vietnamese cuisine crafted by our family. Bringing the genuine flavors of Hanoi to Perth, we pour our hearts into every traditional dish we serve.</p>
                <a href="menu" class="btn">View Menu</a>
            </div>
            <div class="hero-decoration">
                <span></span>
                <span></span>
            </div>
            <div class="wave-decoration"></div>
        </section>

        <section class="features">
            <div class="feature">
                <h2>Signature Dishes</h2>
                <p>Explore our most beloved traditional Vietnamese dishes, from Pho to Banh Mi</p>
                <a href="menu" class="feature-link">View Our Full Menu</a>
            </div>
            <div class="feature">
                <h2>Contact Us</h2>
                <p>Call us at 0893 176 708 or visit us at Unit 14/47 McCoy Street, Myaree</p>
                <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA" class="feature-link" target="_blank">Get Directions</a>
            </div>
            <div class="feature">
                <h2>Hours & Location</h2>
                <p>Open Mon-Sun:<br>Lunch: 11am - 3pm<br>Dinner: 5pm - 8pm</p>
                <a href="tel:0893176708" class="feature-link">Call to Order</a>
            </div>
        </section>

        <section class="gallery">
            <h2>Our Popular Dishes</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/pho.jpg" alt="Traditional Vietnamese Pho">
                    <div class="gallery-caption">Phở Bò</div>
                </div>
                <div class="gallery-item">
                    <img src="images/banh-mi.jpg" alt="Banh Mi Sandwich">
                    <div class="gallery-caption">Bánh Mì</div>
                </div>
                <div class="gallery-item">
                    <img src="images/spring-rolls.jpg" alt="Fresh Spring Rolls">
                    <div class="gallery-caption">Gỏi Cuốn</div>
                </div>
                <div class="gallery-item">
                    <img src="images/coffee.jpg" alt="Vietnamese Coffee">
                    <div class="gallery-caption">Cà Phê Sữa Đá</div>
                </div>
            </div>
        </section>
    </main>

    <!-- Include footer -->
    <?php include 'footer.html'; ?>

    <script src="js/main.js"></script>
</body>
</html>

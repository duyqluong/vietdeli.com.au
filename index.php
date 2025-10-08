<?php
require_once __DIR__ . '/config/constants.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
    <!-- Include head -->
    <?php include __DIR__ . '/head.html'; ?>
    
    <!-- Page-specific SEO Meta Tags -->
    <title>Viet Deli | Authentic Vietnamese Banh Mi & Pho Restaurant in Perth</title>
    <meta name="description" content="Experience authentic Vietnamese street food in Perth. Family-owned Viet Deli serves fresh Banh Mi, traditional Pho, rice dishes & vermicelli bowls. Located in Myaree. Order online or call 08 9317 6708.">
    <meta name="keywords" content="Vietnamese restaurant Perth, Banh Mi Perth, Pho Perth, Vietnamese food Myaree, authentic Vietnamese cuisine, Vietnamese street food, Bun bowls Perth, Com rice dishes, Vietnamese noodles, family restaurant Perth">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <base href="<?php echo SITE_URL; ?>">
    <link rel="canonical" href="https://www.vietdeli.com.au/">
    
    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vietdeli.com.au/">
    <meta property="og:title" content="Viet Deli | Authentic Vietnamese Banh Mi & Pho Restaurant in Perth">
    <meta property="og:description" content="Experience authentic Vietnamese street food in Perth. Family-owned restaurant serving fresh Banh Mi, traditional Pho, rice dishes & vermicelli bowls in Myaree.">
    <meta property="og:image" content="https://www.vietdeli.com.au/images/banh-mi-viet-deli.JPG">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/">
    <meta name="twitter:title" content="Viet Deli | Authentic Vietnamese Restaurant in Perth">
    <meta name="twitter:description" content="Family-owned Vietnamese restaurant serving fresh Banh Mi, Pho & traditional dishes in Perth. Order online or visit us in Myaree.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/banh-mi-viet-deli.JPG">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="geo.region" content="AU-WA">
    <meta name="geo.placename" content="Myaree, Perth">
    <meta name="geo.position" content="-32.039167;115.828611">
    <meta name="ICBM" content="-32.039167, 115.828611">
    <meta name="author" content="Viet Deli">
    <meta name="rating" content="general">
    <meta name="referrer" content="no-referrer-when-downgrade">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/features.css?v=<?php echo ASSET_VERSION; ?>">
    <link rel="stylesheet" href="css/hero-styles.css?v=<?php echo ASSET_VERSION; ?>">
    <link rel="stylesheet" href="css/gallery.css?v=<?php echo ASSET_VERSION; ?>">
    
    <!-- Structured Data - Local Business -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Viet Deli",
      "image": "https://www.vietdeli.com.au/images/viet-deli-store-front.jpg",
      "description": "Family-owned Vietnamese restaurant serving authentic street food including Banh Mi, Pho, rice dishes and vermicelli bowls in Perth.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Unit 14/47 McCoy Street",
        "addressLocality": "Myaree",
        "addressRegion": "WA",
        "postalCode": "6154",
        "addressCountry": "AU"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -32.039167,
        "longitude": 115.828611
      },
      "url": "https://www.vietdeli.com.au/",
      "telephone": "+61893176708",
      "email": "vietdelipty@gmail.com",
      "servesCuisine": ["Vietnamese", "Asian"],
      "priceRange": "$$",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "bestRating": "5",
        "ratingCount": "150"
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "09:00",
          "closes": "17:00"
        }
      ],
      "menu": "https://www.vietdeli.com.au/menu",
      "acceptsReservations": "False",
      "paymentAccepted": ["Cash", "Credit Card", "Debit Card"],
      "sameAs": [
        "https://www.facebook.com/vietdeli",
        "https://www.instagram.com/vietdeli"
      ]
    }
    </script>
<body>
    <!-- Include header -->
    <?php include __DIR__ . '/header.html'; ?>

    <main>
        <section class="hero" role="banner" aria-label="Hero section">
            <div class="hero-content">
                <h1>Authentic Vietnamese Street Food in Perth</h1>
                <p>Savor the vibrant flavors of Vietnam with our freshly crafted <em>Bánh Mì</em> sandwiches, aromatic <em>Phở</em> noodle soup, and traditional Vietnamese dishes made with love and fresh ingredients daily.</p>
                
                <div class="hero-food-image">
                    <img src="images/banh-mi-viet-deli.JPG" alt="Fresh Vietnamese Banh Mi Sandwich" loading="lazy">
                    <div class="food-overlay"></div>
                </div>
                
                <div class="btn-container">
                    <a href="https://vietdeli.orderup.com.au/" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        Order Now
                    </a>
                    <a href="menu/" class="btn btn-secondary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 12h18m-9-9l9 9-9 9"/>
                        </svg>
                        See Menu
                    </a>
                </div>
                
                <div class="trust-indicators">
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"></polygon>
                        </svg>
                        <span class="trust-text">4.8/5 Rating</span>
                    </div>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="trust-text">Family Owned</span>
                    </div>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12,6 12,12 16,14"></polyline>
                        </svg>
                        <span class="trust-text">Fresh Daily</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="features" aria-labelledby="family-tradition-heading">
            <div class="feature">
                <h2 id="family-tradition-heading">A Family Tradition in Vietnamese Cuisine</h2>
                
                <div class="feature-with-image">
                    <div class="image-side">
                        <img src="images/store-wall-viet-deli.JPG" alt="Viet Deli Shop Interior in Perth with Vietnamese Decor">
                    </div>
                    <div class="text-side">
                        <p>Viet Deli is a family-owned Vietnamese eatery, proudly bringing the authentic flavors of Vietnam to Perth. Located in Myaree, near Applecross and Fremantle Port, we serve fresh, traditional dishes made daily with the highest quality ingredients.</p>
                        <p>Our founder, born in Hanoi and raised in Saigon, brings a unique culinary blend that harmonizes the rich flavors of North and South Vietnam. This fusion makes our dishes truly special, offering a taste of home for Vietnamese food lovers and an exciting journey for those new to Vietnamese cuisine.</p>
                    </div>
                </div>

                <div class="feature-highlights">
                    <div class="highlight-item">
                        <h3>Traditional Phở</h3>
                        <p>Our signature noodle soup features a rich, aromatic broth simmered for hours using our founder's family recipe from Hanoi, perfected over decades of tradition.</p>
                    </div>
                    <div class="highlight-item">
                        <h3>Authentic Bánh Mì</h3>
                        <p>Inspired by our founder's childhood in Saigon, our crispy baguettes combine French colonial influence with traditional Vietnamese flavors, just like street vendors back home.</p>
                    </div>
                    <div class="highlight-item">
                        <h3>Homestyle Cơm</h3>
                        <p>These hearty rice dishes reflect the comfort food our founder grew up with, bringing the warmth of Vietnamese family meals to every plate.</p>
                    </div>
                    <div class="highlight-item">
                        <h3>Fresh Bún Bowls</h3>
                        <p>Light and refreshing vermicelli bowls prepared with the same attention to herbs and freshness that Vietnamese families use in their daily cooking.</p>
                    </div>
                </div>

                <div class="menu-cta">
                    <a href="menu" class="feature-link">
                        Explore Our Full Vietnamese Menu
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <div class="gallery-section" aria-labelledby="gallery-heading">
                    <h2 id="gallery-heading">Step Into Our World - Viet Deli Perth Photo Gallery</h2>
                    <p>Discover the heart of Vietnamese dining at Viet Deli. Our gallery showcases the vibrant atmosphere of our restaurant, from carefully prepared dishes to the welcoming environment where friends and family gather to enjoy authentic Vietnamese cuisine.</p>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item gallery-item--large">
                            <img src="images/gallery/viet-deli-interior.jpg" alt="Viet Deli Restaurant Interior" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Where Stories Begin</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item gallery-item--tall">
                            <img src="images/gallery/viet-deli-store.JPG" alt="Viet Deli Store View" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Your Home Away From Home</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/banh-mi-station.jpg" alt="Banh Mi Station" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Artistry in Every Bite</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item gallery-item--wide">
                            <img src="images/gallery/combination-pho-bowl.jpg" alt="Combination Pho Bowl" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Bowl of Comfort</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/chicken-pho.jpg" alt="Chicken Pho Bowl" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Warmth in Every Sip</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item gallery-item--tall">
                            <img src="images/gallery/viet-deli-catering.jpg" alt="Viet Deli Catering" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Bringing Joy to Your Table</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item">
                            <img src="images/gallery/viet-deli-catering-kitchen.jpg" alt="Catering Kitchen" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Love in Every Dish</span>
                            </div>
                        </div>
                        
                        <div class="gallery-item gallery-item--wide">
                            <img src="images/gallery/viet-deli-interior.webp" alt="Restaurant Interior View" loading="lazy">
                            <div class="gallery-overlay">
                                <span>Memories Made Here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section" aria-labelledby="contact-heading">
            <div class="contact-container">
                <div class="contact-map-section">
                    <div class="contact-info">
                        <h2 id="contact-heading">Visit Us Today - Vietnamese Restaurant in Myaree, Perth</h2>
                        <p class="contact-subtitle">Authentic Vietnamese flavors in the heart of Perth at our Myaree location</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>
                                </div>
                                <div class="contact-content">
                                    <h3>Call Us</h3>
                                    <p><a href="tel:0893176708">08 9317 6708</a></p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <div class="contact-content">
                                    <h3>Visit Us</h3>
                                    <p>Unit 14/47 McCoy Street, Myaree, Perth, WA 6154</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div class="contact-content">
                                    <h3>Email Us</h3>
                                    <p><a href="mailto:vietdelipty@gmail.com">vietdelipty@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-actions">
                            <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154" class="btn btn-primary" target="_blank">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                Get Directions
                            </a>
                            <a href="tel:0893176708" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                Call Now
                            </a>
                        </div>
                    </div>
                    
                    <div class="storefront-container">
                        <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154" target="_blank" rel="noopener noreferrer" class="storefront-link">
                            <div class="storefront-image">
                                <img src="images/viet-deli-store-front.jpg" alt="Viet Deli Storefront - Vietnamese Restaurant in Myaree, Perth" loading="lazy">
                                <div class="storefront-overlay">
                                    <div class="storefront-overlay-content">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <p>View on Google Maps</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-section" aria-labelledby="about-heading">
            <div class="about-container">
                <h2 id="about-heading">Authentic Vietnamese Street Food in Perth</h2>
                <p>At Viet Deli, we take pride in serving authentic Vietnamese street food, made fresh every day in our Myaree kitchen. Every dish is prepared with care, following traditional recipes passed down through generations. We believe in using fresh ingredients, bold flavors, and authentic Vietnamese cooking techniques to bring you a true taste of Vietnam right here in Perth, Western Australia.</p>
                
                <div class="feature-image">
                    <a href="#" class="menu-link lightbox-trigger" data-image="images/menu.png" title="Click to view our full menu">
                        <img src="images/menu.png" alt="Viet Deli's Authentic Vietnamese Menu in Perth" class="menu-image">
                    </a>
                    <div class="feature-image-caption">Click on our menu to see all our authentic Vietnamese dishes</div>
                </div>
                
                <p>Whether you're looking for a quick bite or a comforting meal, we have something for everyone. From our signature Phở with fragrant broth to crispy Bánh Mì sandwiches, hearty Cơm rice dishes, and fresh Bún noodle bowls - each dish offers an authentic taste of Vietnam right here in Perth.</p>
                
                <a href="menu" class="feature-link">View Our Full Vietnamese Menu
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12,5 19,12 12,19"></polyline>
                    </svg>
                </a>
            </div>
        </section>

        <section class="cta-pickup" aria-labelledby="order-heading">
            <div class="cta-pickup-container">
                <h2 id="order-heading">Ready to Order Vietnamese Food in Perth?</h2>
                <p>Enjoy the authentic taste of Vietnam with our fresh, made-to-order dishes. Choose your preferred way to place your order for pickup or delivery and get ready for a delicious Vietnamese meal!</p>
                
                <div class="cta-actions">
                    <div class="order-option online-order">
                        <div class="order-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                        </div>
                        <div class="order-content">
                            <h3>Order Online</h3>
                            <p>Quick and convenient online ordering with real-time updates</p>
                            <a href="https://vietdeli.orderup.com.au/" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                    
                    <div class="order-divider">
                        <span>or</span>
                    </div>
                    
                    <div class="order-option phone-order">
                        <div class="order-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div class="order-content">
                            <h3>Call Us</h3>
                            <p>Speak directly with our team for personalized service</p>
                            <a href="tel:0893176708" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                                08 9317 6708
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Replace the current lightbox div with this dialog element (place it near the end of the body) -->
    <dialog id="menu-dialog" class="menu-lightbox">
      <div class="lightbox-container">
        <img src="images/menu.png" alt="Viet Deli's Authentic Vietnamese Menu in Perth" id="lightbox-image">
        
        <!-- Navigation D-Pad -->
        <div class="dpad-container">
          <div class="dpad">
            <button class="dpad-btn dpad-up" id="nav-up">↑</button>
            <div class="dpad-middle">
              <button class="dpad-btn dpad-left" id="nav-left">←</button>
              <div class="dpad-center"></div>
              <button class="dpad-btn dpad-right" id="nav-right">→</button>
            </div>
            <button class="dpad-btn dpad-down" id="nav-down">↓</button>
          </div>
        </div>
        
        <!-- Zoom Controls -->
        <div class="zoom-controls">
          <button class="zoom-btn" id="zoom-in">+</button>
          <button class="zoom-btn" id="zoom-out">−</button>
          <button class="zoom-btn" id="zoom-reset">⌂</button>
        </div>
        
        <!-- Close Button -->
        <button class="close-btn" id="close-btn">&times;</button>
      </div>
    </dialog>

    <!-- Include footer -->
    <?php include __DIR__ . '/footer.html'; ?>

    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html>

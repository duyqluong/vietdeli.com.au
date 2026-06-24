<?php
require_once __DIR__ . '/config/constants.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include __DIR__ . '/head.html'; ?>
    <title>Viet Deli | Authentic Vietnamese Banh Mi & Pho Restaurant in Perth</title>
    <meta name="description" content="Experience authentic Vietnamese street food in Perth. Family-owned Viet Deli serves fresh Banh Mi, traditional Pho, rice dishes & vermicelli bowls. Located in Myaree. Order online or call 08 9317 6708.">
    <meta name="keywords" content="Vietnamese restaurant Perth, Banh Mi Perth, Pho Perth, Vietnamese food Myaree, authentic Vietnamese cuisine, Vietnamese street food, Bun bowls Perth, Com rice dishes, Vietnamese noodles, family restaurant Perth">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="https://www.vietdeli.com.au/">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vietdeli.com.au/">
    <meta property="og:title" content="Viet Deli | Authentic Vietnamese Banh Mi & Pho Restaurant in Perth">
    <meta property="og:description" content="Experience authentic Vietnamese street food in Perth. Family-owned restaurant serving fresh Banh Mi, traditional Pho, rice dishes & vermicelli bowls in Myaree.">
    <meta property="og:image" content="https://www.vietdeli.com.au/images/banh-mi-viet-deli.JPG">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/">
    <meta name="twitter:title" content="Viet Deli | Authentic Vietnamese Restaurant in Perth">
    <meta name="twitter:description" content="Family-owned Vietnamese restaurant serving fresh Banh Mi, Pho & traditional dishes in Perth. Order online or visit us in Myaree.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/banh-mi-viet-deli.JPG">

    <meta name="geo.region" content="AU-WA">
    <meta name="geo.placename" content="Myaree, Perth">
    <meta name="geo.position" content="-32.039167;115.828611">
    <meta name="ICBM" content="-32.039167, 115.828611">
    <meta name="author" content="Viet Deli">
    <meta name="rating" content="general">
    <meta name="referrer" content="no-referrer-when-downgrade">

    <link rel="stylesheet" href="css/home.css?v=<?php echo ASSET_VERSION; ?>">

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
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "11:00",
          "closes": "15:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "17:00",
          "closes": "20:00"
        }
      ],
      "menu": "https://www.vietdeli.com.au/menu",
      "acceptsReservations": "False",
      "paymentAccepted": ["Cash", "Credit Card", "Debit Card"],
      "sameAs": [
        "https://www.facebook.com/VietDeliPerth"
      ]
    }
    </script>
</head>
<body>
    <?php include __DIR__ . '/header.html'; ?>

    <main>

        <!-- ================================================
             1. HERO
             ================================================ -->
        <section class="hero" role="banner" aria-label="Hero section">
            <div class="hero-bg">
                <img src="images/viet-deli-restaurant-hero.jpg"
                     alt=""
                     fetchpriority="high">
            </div>
            <div class="hero-overlay"></div>

            <div class="hero-content">
                <span class="hero-eyebrow">Family-Owned &middot; Myaree, Perth</span>

                <h1>Authentic Vietnamese<br><em>Street Food</em></h1>

                <div class="hero-divider" aria-hidden="true">
                    <div class="hero-divider-dot"></div>
                    <div class="hero-divider-dot"></div>
                    <div class="hero-divider-dot"></div>
                </div>

                <p>Freshly crafted <em>Bánh Mì</em>, slow-simmered <em>Phở</em>, and traditional Vietnamese dishes made with love — every single day.</p>

                <div class="btn-container">
                    <a href="https://vietdeli.orderup.com.au/" class="btn btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                        Order Now
                    </a>
                    <a href="menu" class="btn btn-secondary">
                        View Menu
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
                    </a>
                </div>

                <div class="trust-indicators">
                    <a href="https://www.google.com/maps/search/Viet+Deli+Myaree+Perth+WA"
                       class="trust-item trust-item--link"
                       target="_blank" rel="noopener noreferrer">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none" aria-hidden="true"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        <span class="trust-text">4.8 / 5 Rating</span>
                    </a>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span class="trust-text">Family Owned</span>
                    </div>
                    <div class="trust-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                        <span class="trust-text">Open 7 Days</span>
                    </div>
                </div>
            </div>

            <div class="hero-scroll" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v14m-5-5l5 5 5-5"/></svg>
            </div>

            <!-- Ticker pinned to bottom of hero so it's visible on first load -->
            <div class="home-ticker" aria-hidden="true">
                <div class="ticker-track">
                    <span>Ph&#7903; B&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>B&aacute;nh M&igrave;</span><span class="ticker-dot">&bull;</span>
                    <span>G&#7887;i Cu&#7889;n</span><span class="ticker-dot">&bull;</span>
                    <span>B&uacute;n B&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>C&#417;m T&#7845;m</span><span class="ticker-dot">&bull;</span>
                    <span>Catering</span><span class="ticker-dot">&bull;</span>
                    <span>Ch&agrave; Gi&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>Open 7 Days</span><span class="ticker-dot">&bull;</span>
                    <span>Ph&#7903; B&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>B&aacute;nh M&igrave;</span><span class="ticker-dot">&bull;</span>
                    <span>G&#7887;i Cu&#7889;n</span><span class="ticker-dot">&bull;</span>
                    <span>B&uacute;n B&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>C&#417;m T&#7845;m</span><span class="ticker-dot">&bull;</span>
                    <span>Catering</span><span class="ticker-dot">&bull;</span>
                    <span>Ch&agrave; Gi&ograve;</span><span class="ticker-dot">&bull;</span>
                    <span>Open 7 Days</span><span class="ticker-dot">&bull;</span>
                </div>
            </div>
        </section>

        <!-- ================================================
             3. SIGNATURE DISHES — show food first
             ================================================ -->
        <section class="home-dishes" aria-labelledby="dishes-heading">
            <div class="home-inner">
                <div class="dishes-header reveal">
                    <span class="home-eyebrow">What We Serve</span>
                    <h2 id="dishes-heading">The Dishes People Come Back For</h2>
                    <p>Made fresh every day — the same recipes, the same love, since day one.</p>
                </div>

                <div class="dishes-grid">
                    <div class="dish-card tilt-card reveal">
                        <div class="dish-img">
                            <img src="images/gallery/pho-bo-combination.jpg" alt="Combination Phở bowl at Viet Deli" loading="lazy">
                        </div>
                        <div class="dish-label">
                            <span class="dish-name">Combination Ph&#7903;</span>
                            <span class="dish-desc">Slow-simmered beef broth, rice noodles, rare beef &amp; brisket</span>
                        </div>
                    </div>
                    <div class="dish-card tilt-card reveal reveal-delay-1">
                        <div class="dish-img">
                            <img src="images/banh-mi-viet-deli.JPG" alt="Bánh Mì at Viet Deli" loading="lazy">
                        </div>
                        <div class="dish-label">
                            <span class="dish-name">B&aacute;nh M&igrave;</span>
                            <span class="dish-desc">Crispy baguette, fresh herbs, Vietnamese pickles &amp; your choice of filling</span>
                        </div>
                    </div>
                    <div class="dish-card tilt-card reveal reveal-delay-2">
                        <div class="dish-img">
                            <img src="images/bun-bowl.jpg" alt="Vietnamese Bún vermicelli bowl" loading="lazy">
                        </div>
                        <div class="dish-label">
                            <span class="dish-name">B&uacute;n Vermicelli Bowl</span>
                            <span class="dish-desc">Rice noodles, fresh herbs, crunchy toppings &amp; nuoc cham</span>
                        </div>
                    </div>
                    <div class="dish-card tilt-card reveal reveal-delay-3">
                        <div class="dish-img">
                            <img src="images/fresh-rolls.jpg" alt="Fresh Vietnamese spring rolls" loading="lazy">
                        </div>
                        <div class="dish-label">
                            <span class="dish-name">G&#7887;i Cu&#7889;n</span>
                            <span class="dish-desc">Fresh rice-paper rolls — prawns, herbs, vermicelli &amp; peanut sauce</span>
                        </div>
                    </div>
                </div>

                <div class="dishes-cta reveal">
                    <a href="menu" class="btn btn-primary" style="margin:0 auto;">
                        Explore the Full Menu
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================================================
             4. REVIEWS — social proof right after food
             ================================================ -->
        <section class="home-reviews" aria-labelledby="reviews-heading">
            <div class="home-inner">
                <div class="reviews-section-eyebrow"><span class="home-eyebrow" id="reviews-heading">What Customers Say</span></div>
                <!-- Rating hero -->
                <div class="reviews-hero reveal">
                    <div class="reviews-rating-block">
                        <span class="reviews-big-num">4.8</span>
                        <div class="reviews-stars" aria-label="4.8 out of 5 stars">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                        </div>
                        <span class="reviews-source">on Google Reviews</span>
                    </div>
                </div>

                <!-- 3 review cards -->
                <div class="reviews-grid">
                    <div class="review-card tilt-card reveal">
<div class="review-verified"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Posted on Google</div>
                        <div class="review-quote">&ldquo;</div>
                        <p class="review-text">Best pho in Perth — full stop. The broth is deep, rich, and you can taste every hour they put into it. We drive from Fremantle just for this.</p>
                        <div class="review-footer">
                            <div class="review-avatar">S</div>
                            <div class="review-meta">
                                <span class="review-name">Sarah M.</span>
                                <span class="review-location">Applecross</span>
                            </div>
                            <div class="review-stars" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="review-card tilt-card reveal reveal-delay-1">
<div class="review-verified"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Posted on Google</div>
                        <div class="review-quote">&ldquo;</div>
                        <p class="review-text">The bánh mì here is on another level. Fresh bread every time, perfectly seasoned. My whole office orders here for lunch now — nobody complains.</p>
                        <div class="review-footer">
                            <div class="review-avatar">J</div>
                            <div class="review-meta">
                                <span class="review-name">James T.</span>
                                <span class="review-location">Fremantle</span>
                            </div>
                            <div class="review-stars" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="review-card tilt-card reveal reveal-delay-2">
<div class="review-verified"><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>Posted on Google</div>
                        <div class="review-quote">&ldquo;</div>
                        <p class="review-text">A hidden gem in Myaree. The family behind this place puts real love into every dish. Authentic Vietnamese — nothing watered down. We're regulars now.</p>
                        <div class="review-footer">
                            <div class="review-avatar">L</div>
                            <div class="review-meta">
                                <span class="review-name">Linda K.</span>
                                <span class="review-location">Booragoon</span>
                            </div>
                            <div class="review-stars" aria-hidden="true">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--accent-gold)" stroke="none"><polygon points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reviews-cta reveal">
                    <a href="https://www.google.com/maps/search/Viet+Deli+Myaree+Perth+WA"
                       target="_blank" rel="noopener noreferrer"
                       class="reviews-google-link">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Read all reviews on Google
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17L17 7M7 7h10v10"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ================================================
             5. OUR STORY — now they care who's behind it
             ================================================ -->
        <section class="home-story" aria-labelledby="story-heading">
            <div class="home-inner">
                <div class="story-grid">
                    <div class="story-img-wrap reveal">
                        <div class="story-img-frame">
                            <img src="images/store-wall-viet-deli.JPG"
                                 alt="Inside Viet Deli — Vietnamese restaurant in Myaree, Perth"
                                 loading="lazy">
                        </div>
                        <div class="story-stats-card">
                            <div class="story-stat">
                                <span class="story-stat-num">4.8</span>
                                <span class="story-stat-label">Google Rating</span>
                            </div>
                            <div class="story-stat">
                                <span class="story-stat-num">7</span>
                                <span class="story-stat-label">Days a Week</span>
                            </div>
                            <div class="story-stat">
                                <span class="story-stat-num">&#9733;</span>
                                <span class="story-stat-label">Family Owned</span>
                            </div>
                        </div>
                    </div>

                    <div class="story-text reveal reveal-delay-2">
                        <span class="home-eyebrow">Our Story</span>
                        <h2 id="story-heading">Born in Vietnam.<br>Made in Perth.</h2>
                        <p>Viet Deli is a family-owned Vietnamese eatery, proudly bringing the authentic flavours of Vietnam to Perth. Located in Myaree — near Applecross and Fremantle — we serve fresh, traditional dishes made daily with the best ingredients.</p>
                        <p>Our founder was born in Hanoi and raised in Saigon, bringing a unique culinary blend that bridges North and South Vietnam. That fusion is in every bowl, every roll, every bite.</p>
                        <a href="about" class="story-link">
                            Read our story
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
                        </a>
                    </div>
                </div>

                <div class="highlights-grid">
                    <div class="highlight-card tilt-card reveal">
                        <div class="highlight-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                        </div>
                        <h3>Traditional Ph&#7903;</h3>
                        <p>A rich broth simmered for hours using our founder's family recipe from Hanoi, perfected over decades.</p>
                    </div>
                    <div class="highlight-card tilt-card reveal reveal-delay-1">
                        <div class="highlight-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="8" width="20" height="12" rx="2"/><path d="M6 8V6a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2"/></svg>
                        </div>
                        <h3>Authentic B&aacute;nh M&igrave;</h3>
                        <p>Crispy baguettes with traditional Vietnamese flavours — inspired by the street vendors of Saigon.</p>
                    </div>
                    <div class="highlight-card tilt-card reveal reveal-delay-2">
                        <div class="highlight-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h18M3 6h18M3 18h18"/></svg>
                        </div>
                        <h3>Homestyle C&#417;m</h3>
                        <p>Hearty rice dishes that reflect the comfort food our founder grew up with — warm and full of soul.</p>
                    </div>
                    <div class="highlight-card tilt-card reveal reveal-delay-3">
                        <div class="highlight-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <h3>Fresh B&uacute;n Bowls</h3>
                        <p>Light, refreshing vermicelli bowls packed with herbs and the vibrant flavours Vietnamese families love.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================
             6. GALLERY — immersive atmosphere
             ================================================ -->
        <section class="home-gallery" aria-labelledby="gallery-heading">
            <div class="home-inner">
                <div class="gallery-header reveal">
                    <span class="home-eyebrow">Life at Viet Deli</span>
                    <h2 id="gallery-heading">A Taste of What's Waiting</h2>
                    <p>Real food, real kitchen, real Viet Deli — made fresh every day in Myaree.</p>
                </div>

                <div class="gallery-mosaic">
                    <div class="gallery-tile reveal">
                        <img src="images/gallery/viet-deli-interior.webp" alt="Viet Deli restaurant interior, Myaree Perth" loading="lazy">
                        <div class="gallery-tile-label"><span>Our Home in Myaree</span></div>
                    </div>
                    <div class="gallery-tile reveal reveal-delay-1">
                        <img src="images/gallery/banh-mi-station.jpg" alt="Freshly made Bánh Mì at Viet Deli" loading="lazy">
                        <div class="gallery-tile-label"><span>Crafted Fresh Every Day</span></div>
                    </div>
                    <div class="gallery-tile reveal reveal-delay-2">
                        <img src="images/spring-rolls-new.jpg" alt="Crispy fried spring rolls" loading="lazy">
                        <div class="gallery-tile-label"><span>Golden &amp; Crispy</span></div>
                    </div>
                    <div class="gallery-tile reveal reveal-delay-3">
                        <img src="images/gallery/viet-deli-store.JPG" alt="Vietnamese wall art at Viet Deli" loading="lazy">
                        <div class="gallery-tile-label"><span>A Piece of Vietnam in Perth</span></div>
                    </div>
                    <div class="gallery-tile reveal reveal-delay-1">
                        <img src="images/gallery/pho-bo-combination.jpg" alt="Combination Phở bowl" loading="lazy">
                        <div class="gallery-tile-label"><span>Slow-Simmered, Soul-Warming</span></div>
                    </div>
                    <div class="gallery-tile reveal reveal-delay-2">
                        <img src="images/gallery/viet-deli-catering.jpg" alt="Viet Deli catering" loading="lazy">
                        <div class="gallery-tile-label"><span>We Also Cater</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================
             7. HOURS + LOCATION — practical, they're ready
             ================================================ -->
        <section class="home-hours" aria-label="Hours and location">
            <div class="hours-col reveal">
                <span class="home-eyebrow">Opening Hours</span>
                <h2>We're Open Every Day</h2>
                <div class="hours-rows">
                    <div class="hours-row">
                        <span class="hours-period">Lunch</span>
                        <span class="hours-time">11:00 am &ndash; 3:00 pm</span>
                        <span class="hours-days">Mon &ndash; Sun</span>
                    </div>
                    <div class="hours-row">
                        <span class="hours-period">Dinner</span>
                        <span class="hours-time">5:00 pm &ndash; 8:00 pm</span>
                        <span class="hours-days">Mon &ndash; Sun</span>
                    </div>
                </div>
                <p class="hours-note">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                    Last orders 15 minutes before closing
                </p>
            </div>

            <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154"
               class="location-col" target="_blank" rel="noopener noreferrer"
               aria-label="View Viet Deli on Google Maps">
                <img src="images/viet-deli-store-front.jpg" alt="Viet Deli storefront, Myaree" loading="lazy">
                <div class="location-overlay">
                    <span class="location-address">Unit 14 / 47 McCoy Street<br>Myaree WA 6154</span>
                    <span class="location-directions">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Get Directions
                    </span>
                </div>
            </a>
        </section>

        <!-- ================================================
             8. ORDER CTA — final conversion
             ================================================ -->
        <section class="home-order" aria-labelledby="order-heading">
            <div class="home-order-bg" aria-hidden="true">
                <img src="images/gallery/viet-deli-interior.webp" alt="">
            </div>
            <div class="home-inner home-order-inner">
                <span class="home-eyebrow reveal" style="color:var(--accent-gold);text-align:center;display:block;">Ready to Eat?</span>
                <h2 id="order-heading" class="reveal">Order Now, Eat Soon</h2>
                <p class="reveal reveal-delay-1">Open 7 days — lunch 11am to 3pm, dinner 5pm to 8pm.<br>Order online, call us, or get it delivered.</p>

                <div class="order-cards">
                    <div class="order-card tilt-card reveal">
                        <div class="order-card-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        </div>
                        <h3>Order Online</h3>
                        <p>Quick and easy ordering for pickup — ready when you arrive.</p>
                        <a href="https://vietdeli.orderup.com.au/" class="btn btn-primary" style="margin-top:auto;">Order Now</a>
                    </div>

                    <div class="order-card tilt-card reveal reveal-delay-1">
                        <div class="order-card-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <h3>Call Us</h3>
                        <p>Speak directly with our team for personalised service.</p>
                        <a href="tel:0893176708" class="btn btn-secondary" style="margin-top:auto;">08 9317 6708</a>
                    </div>

                    <div class="order-card tilt-card reveal reveal-delay-2">
                        <div class="order-card-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                        </div>
                        <h3>Get It Delivered</h3>
                        <p>Order through your favourite app and have Viet Deli come to you.</p>
                        <div class="delivery-platforms">
                            <a href="https://www.ubereats.com/au/store/viet-deli/ngTgtA3eULKj2GBHK-67ug" class="platform-btn" target="_blank" rel="noopener noreferrer">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                                Uber Eats
                            </a>
                            <a href="https://www.doordash.com/en/store/viet-deli-myaree-28168098/61261756/" class="platform-btn" target="_blank" rel="noopener noreferrer">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8h1a4 4 0 0 1 0 8h-1"/><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                                DoorDash
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ================================================
             9. CONTACT — for those who need directions
             ================================================ -->
        <section class="contact-section" aria-labelledby="contact-heading">
            <div class="contact-container">
                <div class="contact-map-section">
                    <div class="contact-info reveal">
                        <h2 id="contact-heading">Visit Us in Myaree, Perth</h2>
                        <p class="contact-subtitle">Unit 14/47 McCoy Street — just off Leach Highway, near Applecross and Fremantle.</p>
                        <div class="contact-details">
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg></div>
                                <div class="contact-content"><h3>Phone</h3><p><a href="tel:0893176708">08 9317 6708</a></p></div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                                <div class="contact-content"><h3>Address</h3><p>Unit 14/47 McCoy Street, Myaree, Perth WA 6154</p></div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg></div>
                                <div class="contact-content"><h3>Hours</h3><p>Lunch: 11am &ndash; 3pm<br>Dinner: 5pm &ndash; 8pm<br>Monday to Sunday</p></div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                                <div class="contact-content"><h3>Email</h3><p><a href="mailto:vietdelipty@gmail.com">vietdelipty@gmail.com</a></p></div>
                            </div>
                        </div>
                        <div class="contact-actions">
                            <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                Get Directions
                            </a>
                            <a href="tel:0893176708" class="btn btn-secondary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                Call Now
                            </a>
                        </div>
                    </div>

                    <div class="storefront-container reveal reveal-delay-2">
                        <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154"
                           target="_blank" rel="noopener noreferrer" class="storefront-link"
                           aria-label="View Viet Deli on Google Maps">
                            <div class="storefront-image">
                                <img src="images/viet-deli-store-front.jpg" alt="Viet Deli storefront in Myaree Perth" loading="lazy">
                                <div class="storefront-overlay">
                                    <div class="storefront-overlay-content">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                        <p>View on Google Maps</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include __DIR__ . '/footer.html'; ?>

    <!-- Floating sticky order button (appears after hero scrolls away) -->
    <div class="sticky-order-float" id="sticky-order">
        <a href="https://vietdeli.orderup.com.au/" target="_blank" rel="noopener noreferrer" aria-label="Order online now">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            Order Now
        </a>
    </div>

    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>

    <script>
    (function () {
        'use strict';

        // --- 1. Scroll reveal ---
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

            document.querySelectorAll('.reveal').forEach(function (el) {
                observer.observe(el);
            });
        } else {
            document.querySelectorAll('.reveal').forEach(function (el) {
                el.classList.add('visible');
            });
        }

        // --- 2. Stats count-up animation ---
        function animateCount(el, from, to, decimals, duration) {
            var start = null;
            function step(ts) {
                if (!start) start = ts;
                var prog  = Math.min((ts - start) / duration, 1);
                var eased = 1 - Math.pow(1 - prog, 3);
                el.textContent = (from + (to - from) * eased).toFixed(decimals);
                if (prog < 1) requestAnimationFrame(step);
            }
            requestAnimationFrame(step);
        }

        if ('IntersectionObserver' in window) {
            var statsCard = document.querySelector('.story-stats-card');
            if (statsCard) {
                var statsObs = new IntersectionObserver(function (entries) {
                    if (entries[0].isIntersecting) {
                        var nums = statsCard.querySelectorAll('.story-stat-num');
                        if (nums[0]) animateCount(nums[0], 4.0, 4.8, 1, 1400);
                        if (nums[1]) animateCount(nums[1], 0,   7,   0, 900);
                        statsObs.disconnect();
                    }
                }, { threshold: 0.6 });
                statsObs.observe(statsCard);
            }
        }

        // --- 3. 3D tilt (desktop only) ---
        if (window.innerWidth > 768) {
            document.querySelectorAll('.tilt-card').forEach(function (card) {
                card.addEventListener('mousemove', function (e) {
                    var rect = card.getBoundingClientRect();
                    var x = e.clientX - rect.left;
                    var y = e.clientY - rect.top;
                    var cx = rect.width / 2;
                    var cy = rect.height / 2;
                    var rotX = ((y - cy) / cy) * -7;
                    var rotY = ((x - cx) / cx) * 7;
                    card.style.transform = 'perspective(700px) rotateX(' + rotX + 'deg) rotateY(' + rotY + 'deg) translateZ(8px)';
                });
                card.addEventListener('mouseleave', function () {
                    card.style.transform = 'perspective(700px) rotateX(0deg) rotateY(0deg) translateZ(0)';
                });
            });
        }

        // --- 4. Sticky floating order button ---
        var heroEl   = document.querySelector('.hero');
        var stickyEl = document.getElementById('sticky-order');
        if (heroEl && stickyEl) {
            window.addEventListener('scroll', function () {
                if (heroEl.getBoundingClientRect().bottom < -60) {
                    stickyEl.classList.add('visible');
                } else {
                    stickyEl.classList.remove('visible');
                }
            }, { passive: true });
        }

    })();
    </script>
</body>
</html>

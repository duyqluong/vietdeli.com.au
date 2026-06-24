<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>

    <title>About Us — Family-Owned Vietnamese Restaurant | Viet Deli Perth</title>
    <meta name="description" content="Learn about Viet Deli, a family-owned Vietnamese restaurant in Perth. Formerly District 1 Saigon Cafe, we bring authentic Vietnamese flavours and traditional recipes to Myaree, WA.">
    <meta name="keywords" content="About Viet Deli, Vietnamese restaurant Perth, family owned restaurant, District 1 Saigon Cafe, authentic Vietnamese food, Myaree restaurant">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.vietdeli.com.au/about/">

    <meta property="og:type"        content="website">
    <meta property="og:url"         content="https://www.vietdeli.com.au/about/">
    <meta property="og:title"       content="About Viet Deli — Family-Owned Vietnamese Restaurant in Perth">
    <meta property="og:description" content="Discover the story of Viet Deli, a family-owned Vietnamese restaurant serving authentic cuisine in Perth.">
    <meta property="og:image"       content="https://www.vietdeli.com.au/images/store-wall-viet-deli.JPG">
    <meta property="og:locale"      content="en_AU">
    <meta property="og:site_name"   content="Viet Deli">

    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="About Viet Deli — Vietnamese Restaurant Perth">
    <meta name="twitter:description" content="Family-owned Vietnamese restaurant bringing authentic flavours to Perth. Learn our story.">
    <meta name="twitter:image"       content="https://www.vietdeli.com.au/images/store-wall-viet-deli.JPG">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home",  "item": "https://www.vietdeli.com.au/" },
        { "@type": "ListItem", "position": 2, "name": "About", "item": "https://www.vietdeli.com.au/about/" }
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Viet Deli",
      "alternateName": "District 1 Saigon Cafe",
      "description": "Family-owned Vietnamese restaurant serving authentic street food in Perth, Western Australia",
      "url": "https://www.vietdeli.com.au/",
      "telephone": "+61893176708",
      "email": "vietdelipty@gmail.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Unit 14/47 McCoy Street",
        "addressLocality": "Myaree",
        "addressRegion": "WA",
        "postalCode": "6154",
        "addressCountry": "AU"
      },
      "servesCuisine": ["Vietnamese", "Asian"],
      "priceRange": "$$",
      "foundingDate": "2018"
    }
    </script>

    <link rel="stylesheet" href="css/about-styles.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include BASE_PATH . '/header.html'; ?>

    <main>

        <!-- ── Hero ── -->
        <section class="about-hero" role="banner">
            <div class="about-hero-bg">
                <img src="images/store-wall-viet-deli.JPG" alt="" fetchpriority="high">
            </div>
            <div class="about-hero-overlay"></div>
            <div class="about-hero-content">
                <nav class="about-breadcrumb" aria-label="Breadcrumb">
                    <a href="">Home</a>
                    <span aria-hidden="true">/</span>
                    <span>About</span>
                </nav>
                <span class="about-eyebrow">Family-Owned &middot; Since 2018</span>
                <h1>Our Story</h1>
                <p class="about-hero-sub">A family&rsquo;s love for Vietnamese food, brought to Perth</p>
            </div>
        </section>

        <!-- ── Story ── -->
        <section class="about-story" aria-labelledby="story-heading">
            <div class="about-inner">
                <div class="about-story-grid">

                    <div class="about-story-img-col reveal">
                        <div class="about-img-frame">
                            <img src="images/district-1-saigon-cafe-founders.jpg"
                                 alt="Viet Deli founders — a cherished memory from the early days"
                                 loading="lazy">
                        </div>
                        <p class="about-img-caption">A cherished memory from our early days at District&nbsp;1 Saigon Cafe</p>
                    </div>

                    <div class="about-story-text reveal reveal-delay-2">
                        <span class="page-eyebrow">Our Story</span>
                        <h2 id="story-heading">Born in Vietnam.<br>Made in Perth.</h2>
                        <p>Viet Deli is Perth&rsquo;s beloved destination for authentic Vietnamese cuisine. We take pride in serving dishes that capture the <em>essence of Vietnam&rsquo;s rich culinary heritage</em> &mdash; bringing fresh ingredients and traditional flavours to every meal we prepare.</p>
                        <p>While some may remember us as <strong>District 1 Saigon Cafe</strong>, we&rsquo;ve grown and evolved to become Viet Deli, continuing our passion for bringing the true taste of Vietnam to our community right here in Myaree.</p>
                        <p>Our founder was born in Hanoi and raised in Saigon, bringing a unique culinary blend that bridges North and South Vietnam. That fusion lives in every bowl, every roll, every bite we serve.</p>
                        <a href="menu" class="about-story-link">
                            Explore our menu
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ── Values ── -->
        <section class="about-values" aria-labelledby="values-heading">
            <div class="about-inner">
                <div class="about-section-header reveal">
                    <span class="page-eyebrow">What We Stand For</span>
                    <h2 id="values-heading">Our Values</h2>
                    <p>The principles that shape every dish we make and every customer we serve.</p>
                </div>

                <div class="about-values-grid">
                    <div class="about-value-card tilt-card reveal">
                        <div class="about-value-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3>Authenticity</h3>
                        <p>We preserve the true flavours of Vietnamese cuisine using traditional recipes passed down through generations &mdash; nothing watered down, nothing compromised.</p>
                    </div>

                    <div class="about-value-card tilt-card reveal reveal-delay-1">
                        <div class="about-value-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 3v7l4 2"/></svg>
                        </div>
                        <h3>Quality</h3>
                        <p>Fresh, high-quality ingredients sourced daily. Every dish is made to order &mdash; the same care whether it&rsquo;s your first visit or your hundredth.</p>
                    </div>

                    <div class="about-value-card tilt-card reveal reveal-delay-2">
                        <div class="about-value-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>Community</h3>
                        <p>We share the warmth and hospitality of Vietnamese culture. Every customer is treated like family, and we&rsquo;re proud to be part of the Myaree community.</p>
                    </div>

                    <div class="about-value-card tilt-card reveal reveal-delay-3">
                        <div class="about-value-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <h3>Love for Food</h3>
                        <p>Food is our love language. We believe good food has the power to connect people, tell stories, and create memories that last a lifetime.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Mission quote ── -->
        <section class="about-mission" aria-labelledby="mission-heading">
            <div class="about-inner">
                <div class="about-mission-inner reveal">
                    <span class="page-eyebrow page-eyebrow--light">Our Mission</span>
                    <blockquote class="about-quote">
                        &ldquo;To bring a taste of Vietnam to the heart of Perth &mdash; sharing not just meals, but a piece of our heritage with every guest.&rdquo;
                    </blockquote>
                    <p>Through our carefully crafted menu we share the <em>bold, authentic flavours</em> of Vietnam. Every dish carries the warmth and hospitality that Vietnamese food culture is known for.</p>
                    <p>Whether you&rsquo;re Vietnamese and craving a taste of home, or simply a lover of great food &mdash; there&rsquo;s always a seat at our table.</p>
                </div>
            </div>
        </section>

        <!-- ── CTA / Visit Us ── -->
        <section class="about-visit" aria-label="Visit Viet Deli">
            <div class="about-inner">
                <div class="about-visit-grid">
                    <div class="about-visit-text reveal">
                        <span class="page-eyebrow">Come Find Us</span>
                        <h2 id="visit-heading">Visit Us in Myaree</h2>
                        <p>We&rsquo;re open seven days a week for lunch and dinner. Come in, sit down, and let the food speak for itself.</p>

                        <div class="about-visit-details">
                            <div class="about-visit-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                <span>Unit 14/47 McCoy Street, Myaree WA 6154</span>
                            </div>
                            <div class="about-visit-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12,6 12,12 16,14"/></svg>
                                <span>Lunch 11am&ndash;3pm &middot; Dinner 5pm&ndash;8pm &middot; Mon&ndash;Sun</span>
                            </div>
                            <div class="about-visit-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                <a href="tel:0893176708">08 9317 6708</a>
                            </div>
                        </div>

                        <div class="about-visit-actions">
                            <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154"
                               class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                Get Directions
                            </a>
                            <a href="menu" class="btn btn-secondary">View Our Menu</a>
                        </div>
                    </div>

                    <div class="about-visit-img reveal reveal-delay-2">
                        <a href="https://maps.google.com?q=Unit+14/47+McCoy+Street+Myaree+Perth+WA+6154"
                           target="_blank" rel="noopener noreferrer" aria-label="View on Google Maps">
                            <img src="images/viet-deli-store-front.jpg"
                                 alt="Viet Deli storefront at Unit 14/47 McCoy Street, Myaree"
                                 loading="lazy">
                            <div class="about-visit-img-overlay">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                    View on Google Maps
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include BASE_PATH . '/footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html>

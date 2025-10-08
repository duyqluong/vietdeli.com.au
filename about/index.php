<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>
    
    <!-- Page-specific SEO Meta Tags -->
    <title>About Us - Family-Owned Vietnamese Restaurant | Viet Deli Perth</title>
    <meta name="description" content="Learn about Viet Deli, a family-owned Vietnamese restaurant in Perth. Formerly District 1 Saigon Cafe, we bring authentic Vietnamese flavors and traditional recipes to Myaree, WA.">
    <meta name="keywords" content="About Viet Deli, Vietnamese restaurant Perth, family owned restaurant, District 1 Saigon Cafe, authentic Vietnamese food, Vietnamese restaurant history, Perth Vietnamese cuisine, Myaree restaurant">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.vietdeli.com.au/about/">
    
    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vietdeli.com.au/about/">
    <meta property="og:title" content="About Viet Deli - Family-Owned Vietnamese Restaurant in Perth">
    <meta property="og:description" content="Discover the story of Viet Deli, a family-owned Vietnamese restaurant serving authentic cuisine in Perth. Traditional recipes, fresh ingredients, warm hospitality.">
    <meta property="og:image" content="https://www.vietdeli.com.au/images/district-1-saigon-cafe-founders.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/about/">
    <meta name="twitter:title" content="About Viet Deli - Vietnamese Restaurant Perth">
    <meta name="twitter:description" content="Family-owned Vietnamese restaurant bringing authentic flavors and traditional recipes to Perth. Learn our story.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/district-1-saigon-cafe-founders.jpg">
    
    <!-- Breadcrumb Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.vietdeli.com.au/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "About",
          "item": "https://www.vietdeli.com.au/about/"
        }
      ]
    }
    </script>
    
    <!-- Organization Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "Viet Deli",
      "alternateName": "District 1 Saigon Cafe",
      "description": "Family-owned Vietnamese restaurant serving authentic street food in Perth, Western Australia",
      "url": "https://www.vietdeli.com.au/",
      "logo": "https://www.vietdeli.com.au/images/logo.png",
      "image": "https://www.vietdeli.com.au/images/viet-deli-store-front.jpg",
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
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -32.039167,
        "longitude": 115.828611
      },
      "servesCuisine": ["Vietnamese", "Asian"],
      "priceRange": "$$",
      "foundingDate": "2018",
      "slogan": "Authentic Vietnamese Street Food",
      "knowsAbout": ["Vietnamese Cuisine", "Banh Mi", "Pho", "Traditional Vietnamese Cooking"],
      "paymentAccepted": ["Cash", "Credit Card", "Debit Card"],
      "currenciesAccepted": "AUD"
    }
    </script>
    
    <!-- Page-specific Stylesheet -->
    <link rel="stylesheet" href="css/about-styles.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include BASE_PATH . '/header.html'; ?>

    <main class="about-container" role="main">
        <header class="about-header">
            <h1>About Us</h1>
        </header>
        
        <div class="about-content">
            <section aria-labelledby="story-heading">
                <h2 id="story-heading">Our Story</h2>
                
                <div class="story-content">
                    <div class="story-text">
                        <p>Viet Deli is <em>Perth's beloved destination</em> for authentic Vietnamese cuisine. We take pride in serving delightful dishes that capture the <em>essence of Vietnam's rich culinary heritage</em>, bringing fresh ingredients and traditional flavors to every meal we prepare.</p>
                        
                        <p>While some may remember us as District 1 Saigon Cafe, we've <em>grown and evolved</em> to become Viet Deli, continuing our passion for bringing <em>authentic Vietnamese flavors</em> to our community.</p>
                    </div>
                    
                    <div class="legacy-image">
                        <img src="images/district-1-saigon-cafe-founders.jpg" alt="Viet Deli founders in the early days at District 1 Saigon Cafe" loading="lazy">
                        <p class="image-caption">A cherished memory from our early days, when we first started sharing our love for Vietnamese cuisine</p>
                    </div>
                </div>
            </section>
            
            <section aria-labelledby="mission-heading">
                <h2 id="mission-heading">Our Mission</h2>
                <p>At Viet Deli, our mission is simple: to bring a <em>taste of Vietnam to the heart of Perth</em>. We strive to create a <em>welcoming space</em> where everyone—whether you're Vietnamese or simply a lover of great food—can experience the bold, authentic flavors of Vietnam.</p>
                
                <p>Every dish we serve carries the <em>warmth and hospitality</em> that Vietnamese food culture is known for. Through our carefully crafted menu, we share not just meals, but a <em>piece of our heritage</em> with our community.</p>
            </section>
            
            <section aria-labelledby="values-heading">
                <h2 id="values-heading">Our Values</h2>
                <ul>
                    <li><strong>Authenticity</strong> – Preserving the true flavors of Vietnamese cuisine using traditional recipes passed down through generations.</li>
                    <li><strong>Quality</strong> – Using fresh, high-quality ingredients to ensure every dish is made to perfection.</li>
                    <li><strong>Community</strong> – Sharing the warmth and hospitality of Vietnamese culture, treating every customer like family.</li>
                    <li><strong>Sustainability</strong> – Supporting ethical sourcing of ingredients and minimizing waste to protect the environment.</li>
                </ul>
            </section>
            
            <section class="contact-section" aria-labelledby="contact-heading">
                <h2 id="contact-heading">Get in Touch</h2>
                <p>Have questions? Call us at <a href="tel:0893176708">08 9317 6708</a> or <a href="sms:0490146689">send us a text</a>.</p>
            </section>
        </div>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html>

<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>

    <!-- Page-specific SEO Meta Tags -->
    <title>Menu - Authentic Vietnamese Food | Banh Mi, Pho, Bun | Viet Deli Perth</title>
    <meta name="description" content="Browse our authentic Vietnamese menu featuring fresh Banh Mi sandwiches, traditional Pho noodle soup, vermicelli bowls, and rice dishes. All made fresh daily in Perth. View prices and order online.">
    <meta name="keywords" content="Vietnamese menu Perth, Banh Mi menu, Pho menu, Bun bowls, Vietnamese rice dishes, Com tam, Vietnamese food prices, authentic Vietnamese menu, gluten free Vietnamese food, vegetarian Vietnamese options">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="https://www.vietdeli.com.au/menu/">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.vietdeli.com.au/menu/">
    <meta property="og:title" content="Vietnamese Menu | Banh Mi, Pho & More | Viet Deli Perth">
    <meta property="og:description" content="Explore our authentic Vietnamese menu with Banh Mi, Pho, vermicelli bowls, and rice dishes. Fresh ingredients, traditional recipes, affordable prices.">
    <meta property="og:image" content="https://www.vietdeli.com.au/images/gallery/combination-pho-bowl.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/menu/">
    <meta name="twitter:title" content="Vietnamese Menu | Viet Deli Perth">
    <meta name="twitter:description" content="Browse our authentic Vietnamese menu featuring Banh Mi, Pho, Bun bowls, and rice dishes. Order online or visit us in Myaree.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/gallery/combination-pho-bowl.jpg">

    <!-- Structured Data - Menu -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Menu",
      "name": "Viet Deli Vietnamese Food Menu",
      "description": "Authentic Vietnamese street food menu featuring Banh Mi, Pho, vermicelli bowls, rice dishes, fresh rolls, bao buns and drinks",
      "inLanguage": "en-AU",
      "hasMenuSection": [
        {
          "@type": "MenuSection",
          "name": "Banh Mi - Vietnamese Sandwiches",
          "description": "Daily-baked crispy baguette with choice of protein, mayo, pate spread, pickled daikon and carrot, cucumber, coriander, jalapeno",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Crispy Roast Pork Belly Banh Mi", "offers": { "@type": "Offer", "price": "15.00", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Grilled Chicken Banh Mi", "offers": { "@type": "Offer", "price": "13.00", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Beef Stir Fried Banh Mi", "offers": { "@type": "Offer", "price": "14.00", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Traditional Banh Mi (Pork & Pork Ham)", "offers": { "@type": "Offer", "price": "13.00", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Crispy Tofu Banh Mi", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "12.00", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Pho - Vietnamese Noodle Soup",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Chicken Pho", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Cooked Beef Pho", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Rare Beef Pho", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Beef Balls Pho", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Combination Beef Pho", "offers": { "@type": "Offer", "price": "22.00", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Bun - Vietnamese Vermicelli Bowls",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Crispy Roast Pork Belly Vermicelli", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Grilled Chicken Vermicelli", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Beef Stir Fry Vermicelli", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Sugar Cane Prawn Vermicelli", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Prawn Vermicelli", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Pork Spring Roll Vermicelli", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Vegetarian Spring Roll Vermicelli", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "17.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Crispy Tofu Vermicelli", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "17.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Com - Vietnamese Rice Dishes",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Crispy Roast Pork Belly Rice", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Grilled Chicken Rice", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Beef Stir Fry Rice", "offers": { "@type": "Offer", "price": "19.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Crispy Tofu Rice", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "17.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Goi - Vietnamese Salad",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Crispy Roast Pork Belly Salad", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Grilled Chicken Salad", "offers": { "@type": "Offer", "price": "17.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Beef Stir Fry Salad", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Prawn Salad", "offers": { "@type": "Offer", "price": "18.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Crispy Tofu Salad", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "16.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Fresh Rolls",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Pork Fresh Rolls", "offers": { "@type": "Offer", "price": "11.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Chicken Fresh Rolls", "offers": { "@type": "Offer", "price": "10.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Prawn Fresh Rolls", "offers": { "@type": "Offer", "price": "11.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Tofu Fresh Rolls", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "9.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Pork & Prawn Fresh Rolls", "offers": { "@type": "Offer", "price": "12.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Side Dishes",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Pork Spring Rolls", "offers": { "@type": "Offer", "price": "10.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Vegetarian Spring Rolls", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "9.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Bao Buns",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Pork Bao Bun", "offers": { "@type": "Offer", "price": "8.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Chicken Bao Bun", "offers": { "@type": "Offer", "price": "8.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Tofu Bao Bun", "suitableForDiet": "https://schema.org/VegetarianDiet", "offers": { "@type": "Offer", "price": "7.50", "priceCurrency": "AUD" } }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Drinks",
          "hasMenuItem": [
            { "@type": "MenuItem", "name": "Vietnamese Coffee", "offers": { "@type": "Offer", "price": "5.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Vietnamese Green Tea", "offers": { "@type": "Offer", "price": "5.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Young Coconut Water", "offers": { "@type": "Offer", "price": "7.50", "priceCurrency": "AUD" } },
            { "@type": "MenuItem", "name": "Sugar Cane Juice", "offers": { "@type": "Offer", "price": "7.50", "priceCurrency": "AUD" } }
          ]
        }
      ]
    }
    </script>

    <!-- Breadcrumb Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://www.vietdeli.com.au/" },
        { "@type": "ListItem", "position": 2, "name": "Menu", "item": "https://www.vietdeli.com.au/menu/" }
      ]
    }
    </script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/menu-styles.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'header.html'; ?>

    <!-- ── Compact Page Hero ── -->
    <div class="menu-page-hero">
        <div class="menu-page-hero-bg" aria-hidden="true">
            <img src="images/banh-mi-viet-deli.JPG" alt="" fetchpriority="high">
        </div>
        <div class="menu-page-hero-content">
            <nav class="menu-page-breadcrumb" aria-label="Breadcrumb">
                <a href="">Home</a>
                <span aria-hidden="true">/</span>
                <span>Menu</span>
            </nav>
            <h1>Our Menu</h1>
            <p class="menu-hero-tagline">Fresh ingredients &middot; Made to order &middot; Family recipes</p>
        </div>
    </div>

    <!-- ── Sticky Category Navigation ── -->
    <nav class="menu-cat-nav" id="menuCatNav" aria-label="Menu categories">
        <div class="menu-cat-nav-inner">
            <a href="#banh-mi"     class="menu-cat-tab is-active">B&#225;nh M&#236;</a>
            <a href="#pho"         class="menu-cat-tab">Ph&#7903;</a>
            <a href="#bun"         class="menu-cat-tab">Vermicelli</a>
            <a href="#com"         class="menu-cat-tab">Rice</a>
            <a href="#goi"         class="menu-cat-tab">Salads</a>
            <a href="#fresh-rolls" class="menu-cat-tab">Fresh Rolls</a>
            <a href="#sides"       class="menu-cat-tab">Sides</a>
            <a href="#bao"         class="menu-cat-tab">Bao Buns</a>
            <a href="#drinks"      class="menu-cat-tab">Drinks</a>
        </div>
    </nav>

    <!-- ── Menu Body ── -->
    <div class="menu-body">
        <div class="menu-body-inner">

            <!-- Dietary Legend -->
            <div class="dietary-legend" role="note" aria-label="Dietary key">
                <span class="dietary-legend-label">Key</span>
                <span class="dietary-legend-item">
                    <span class="tag tag-v">V</span> Vegetarian
                </span>
                <span class="dietary-legend-item">
                    <span class="tag tag-gf">GF</span> Gluten Free
                </span>
            </div>

            <!-- Order Online CTA -->
            <div class="menu-order-cta" role="complementary">
                <div class="menu-order-cta-text">
                    <strong>Ready to order?</strong>
                    Pickup via OrderUp &middot; Delivery via Uber Eats or DoorDash
                </div>
                <div class="menu-cta-actions">
                    <a href="https://vietdeli.orderup.com.au/" class="menu-order-cta-btn" target="_blank" rel="noopener noreferrer">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        Order Pickup
                    </a>
                    <a href="https://www.ubereats.com/au/store/viet-deli/ngTgtA3eULKj2GBHK-67ug"
                       class="menu-cta-platform-btn"
                       target="_blank"
                       rel="noopener noreferrer">
                        Uber Eats
                    </a>
                    <a href="https://www.doordash.com/en/store/viet-deli-myaree-28168098/61261756/"
                       class="menu-cta-platform-btn"
                       target="_blank"
                       rel="noopener noreferrer">
                        DoorDash
                    </a>
                </div>
            </div>

            <!-- ════════════════════════════════════
                 BANH MI — Vietnamese Sandwiches
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="banh-mi" aria-labelledby="cat-banh-mi">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/banh-mi-pork-belly.jpg" alt="Bánh Mì at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">Vietnamese Sandwiches</div>
                        <h2 id="cat-banh-mi">B&#225;nh M&#236;</h2>
                        <p class="menu-cat-desc">Daily-baked crispy baguette with mayo &amp; p&acirc;t&eacute; spread, pickled daikon &amp; carrot, fresh cucumber, coriander and jalape&ntilde;o. Your choice of protein, made fresh to order.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Roast Pork Belly</h3>
                            <p class="menu-item-sub">Slow-roasted pork with golden crackling skin</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$15.00</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Grilled Chicken</h3>
                            <p class="menu-item-sub">Lemongrass-marinated chicken, char-grilled to order</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$13.00</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Beef Stir Fried</h3>
                            <p class="menu-item-sub">Wok-tossed beef with Vietnamese five-spice</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$14.00</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Traditional &mdash; Pork &amp; Pork Ham</h3>
                            <p class="menu-item-sub">P&acirc;t&eacute;, ch&#7843; l&#7909;a &amp; Vietnamese cold cuts &mdash; the classic street food experience</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$13.00</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Tofu</h3>
                            <p class="menu-item-sub">Golden-fried firm tofu with house marinade</p>
                            <div class="item-tags">
                                <span class="tag tag-v">V</span>
                            </div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$12.00</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Add-ons for Banh Mi">
                    <div class="menu-extras-heading">Add-ons</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Extra Meat</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Double Meat</span>
                        <span class="menu-extra-price">$5.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Egg</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 PHO — Vietnamese Noodle Soup
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="pho" aria-labelledby="cat-pho">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/pho-bowl.jpg" alt="Phở at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">
                            Vietnamese Noodle Soup
                            <div class="cat-diet-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <h2 id="cat-pho">Ph&#7903;</h2>
                        <p class="menu-cat-desc">Aromatic bone broth simmered for hours using our founder&rsquo;s family recipe. Served over rice noodles with spring onion, bean sprouts, fresh herbs, lime and chilli. Naturally gluten free.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Chicken</h3>
                            <p class="menu-item-sub">Tender poached chicken in golden broth</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Cooked Beef</h3>
                            <p class="menu-item-sub">Thinly sliced, fully cooked beef brisket</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Rare Beef</h3>
                            <p class="menu-item-sub">Pink-sliced beef, gently cooked in the hot broth</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Beef Balls</h3>
                            <p class="menu-item-sub">Chewy hand-rolled beef meatballs</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Combination Beef</h3>
                            <p class="menu-item-sub">Cooked beef, rare beef &amp; beef balls &mdash; the house special</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$22.00</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Add-ons for Pho">
                    <div class="menu-extras-heading">Add-ons</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Extra Meat</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Double Meat</span>
                        <span class="menu-extra-price">$5.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Egg</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 BUN — Vietnamese Vermicelli Bowls
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="bun" aria-labelledby="cat-bun">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/bun-bowl.jpg" alt="Bún at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">
                            Vietnamese Vermicelli Bowls
                            <div class="cat-diet-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <h2 id="cat-bun">B&#250;n</h2>
                        <p class="menu-cat-desc">Light and refreshing rice vermicelli bowls topped with crushed peanuts, fresh herbs, pickled vegetables and our house N&#432;&#7899;c Ch&#7845;m dipping sauce. Naturally gluten free.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Roast Pork Belly</h3>
                            <p class="menu-item-sub">Golden crackling pork belly over vermicelli</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Grilled Chicken</h3>
                            <p class="menu-item-sub">Lemongrass-marinated chicken, char-grilled</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Beef Stir Fry</h3>
                            <p class="menu-item-sub">Wok-tossed five-spice beef</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Sugar Cane Prawn</h3>
                            <p class="menu-item-sub">Prawn mousse wrapped around sugar cane, grilled</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Prawn</h3>
                            <p class="menu-item-sub">Grilled whole prawns</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Pork Spring Roll</h3>
                            <p class="menu-item-sub">Crispy fried pork rolls, sliced over the bowl</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Vegetarian Spring Roll</h3>
                            <p class="menu-item-sub">Crispy fried vegetable rolls, sliced over the bowl</p>
                            <div class="item-tags">
                                <span class="tag tag-v">V</span>
                                <span class="tag tag-gf">GF</span>
                            </div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$17.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Tofu</h3>
                            <p class="menu-item-sub">Golden-fried firm tofu with house marinade</p>
                            <div class="item-tags">
                                <span class="tag tag-v">V</span>
                                <span class="tag tag-gf">GF</span>
                            </div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$17.50</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Add-ons for Bun">
                    <div class="menu-extras-heading">Add-ons</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Extra Meat</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Double Meat</span>
                        <span class="menu-extra-price">$5.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Egg</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 COM — Vietnamese Rice Dishes
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="com" aria-labelledby="cat-com">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/com-rice.png" alt="Cơm — Vietnamese Rice Dishes at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">
                            Vietnamese Rice Dishes
                            <div class="cat-diet-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <h2 id="cat-com">C&#417;m</h2>
                        <p class="menu-cat-desc">Steamed fragrant jasmine rice topped with your choice of protein, pickled carrot, sliced cucumber, fresh tomato and crispy fried shallots. Served with house fish sauce. Naturally gluten free.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Roast Pork Belly</h3>
                            <p class="menu-item-sub">Golden crackling pork belly on steamed rice</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Grilled Chicken</h3>
                            <p class="menu-item-sub">Lemongrass-marinated chicken, char-grilled</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Beef Stir Fry</h3>
                            <p class="menu-item-sub">Wok-tossed five-spice beef</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$19.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Tofu</h3>
                            <p class="menu-item-sub">Golden-fried firm tofu with house marinade</p>
                            <div class="item-tags">
                                <span class="tag tag-v">V</span>
                                <span class="tag tag-gf">GF</span>
                            </div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$17.50</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Add-ons for Com">
                    <div class="menu-extras-heading">Add-ons</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Extra Meat</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Double Meat</span>
                        <span class="menu-extra-price">$5.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Egg</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 GOI — Vietnamese Salad
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="goi" aria-labelledby="cat-goi">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/salad-bowl.jpg" alt="Gỏi Vietnamese Salad at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">
                            Vietnamese Salad
                            <div class="cat-diet-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <h2 id="cat-goi">G&#7887;i</h2>
                        <p class="menu-cat-desc">Fresh, crunchy salad of shredded cabbage, carrot, cucumber, mint and coriander &mdash; topped with crispy shallots and roasted peanuts, dressed in our sweet zesty fish sauce. Add chilli for extra kick. Naturally gluten free.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Roast Pork Belly</h3>
                            <p class="menu-item-sub">Sliced golden crackling pork belly</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Grilled Chicken</h3>
                            <p class="menu-item-sub">Shredded lemongrass chicken</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$17.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Beef Stir Fry</h3>
                            <p class="menu-item-sub">Wok-tossed five-spice beef</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Prawn</h3>
                            <p class="menu-item-sub">Poached whole prawns</p>
                            <div class="item-tags"><span class="tag tag-gf">GF</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$18.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Crispy Tofu</h3>
                            <p class="menu-item-sub">Golden-fried firm tofu with house marinade</p>
                            <div class="item-tags">
                                <span class="tag tag-v">V</span>
                                <span class="tag tag-gf">GF</span>
                            </div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$16.50</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Add-ons for Goi">
                    <div class="menu-extras-heading">Add-ons</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Extra Meat</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Double Meat</span>
                        <span class="menu-extra-price">$5.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 FRESH ROLLS
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="fresh-rolls" aria-labelledby="cat-fresh-rolls">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/fresh-rolls.jpg" alt="Fresh Rolls at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">Hand-Rolled &middot; 2 per serve</div>
                        <h2 id="cat-fresh-rolls">Fresh Rolls</h2>
                        <p class="menu-cat-desc">Delicate rice paper hand-rolled with vermicelli, crisp lettuce, pickled carrot, fresh cucumber and mint. Served with house hoisin and N&#432;&#7899;c Ch&#7845;m dipping sauces.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Pork</h3>
                            <p class="menu-item-sub">Vietnamese pork cold cuts</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$11.50</span>
                            <span class="menu-item-unit">2 pcs</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Chicken</h3>
                            <p class="menu-item-sub">Poached lemongrass chicken</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$10.50</span>
                            <span class="menu-item-unit">2 pcs</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Prawn</h3>
                            <p class="menu-item-sub">Poached whole prawns</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$11.50</span>
                            <span class="menu-item-unit">2 pcs</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Tofu</h3>
                            <p class="menu-item-sub">Golden-fried firm tofu</p>
                            <div class="item-tags"><span class="tag tag-v">V</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$9.50</span>
                            <span class="menu-item-unit">2 pcs</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Pork &amp; Prawn</h3>
                            <p class="menu-item-sub">The classic combination</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$12.50</span>
                            <span class="menu-item-unit">2 pcs</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 SIDE DISHES
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="sides" aria-labelledby="cat-sides">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/spring-rolls-new.jpg" alt="Side Dishes at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">Perfect to Share</div>
                        <h2 id="cat-sides">Side Dishes</h2>
                        <p class="menu-cat-desc">Crispy fried spring rolls made fresh in-house, served with sweet chilli dipping sauce. Great as a starter or alongside any main.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Pork Spring Rolls</h3>
                            <p class="menu-item-sub">Crispy fried rolls filled with seasoned minced pork &amp; glass noodles</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$10.50</span>
                            <span class="menu-item-unit">3 pcs</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Vegetarian Spring Rolls</h3>
                            <p class="menu-item-sub">Crispy fried rolls with seasoned vegetables &amp; glass noodles</p>
                            <div class="item-tags"><span class="tag tag-v">V</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$9.50</span>
                            <span class="menu-item-unit">3 pcs</span>
                        </div>
                    </div>
                </div>

                <div class="menu-extras-block" aria-label="Extra spring rolls">
                    <div class="menu-extras-heading">Extra</div>
                    <div class="menu-extra-row">
                        <span class="menu-extra-name">Spring Roll (1 pc)</span>
                        <span class="menu-extra-price">$3.50</span>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 BAO BUNS
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="bao" aria-labelledby="cat-bao">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/bao-buns.png" alt="Bao Buns at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">Steamed &middot; Sold Individually</div>
                        <h2 id="cat-bao">Bao Buns</h2>
                        <p class="menu-cat-desc">Pillowy soft steamed bao layered with a sweet aromatic sauce, pickled carrot and your choice of filling. Warm, fluffy and deeply satisfying.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Pork</h3>
                            <p class="menu-item-sub">Slow-braised pork with house sweet sauce</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$8.50</span>
                            <span class="menu-item-unit">each</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Chicken</h3>
                            <p class="menu-item-sub">Tender chicken with house sweet sauce</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$8.50</span>
                            <span class="menu-item-unit">each</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Tofu</h3>
                            <p class="menu-item-sub">Crispy tofu with house sweet sauce</p>
                            <div class="item-tags"><span class="tag tag-v">V</span></div>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$7.50</span>
                            <span class="menu-item-unit">each</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ════════════════════════════════════
                 DRINKS
                 ════════════════════════════════════ -->
            <section class="menu-cat-section" id="drinks" aria-labelledby="cat-drinks">
                <div class="menu-cat-header has-image">
                    <div class="menu-cat-img-wrap">
                        <img src="images/coffee-new.jpg" alt="Vietnamese Coffee at Viet Deli" loading="lazy">
                    </div>
                    <div class="menu-cat-title-wrap">
                        <div class="menu-cat-eyebrow">Beverages</div>
                        <h2 id="cat-drinks">Drinks</h2>
                        <p class="menu-cat-desc">Authentic Vietnamese drinks to complement your meal &mdash; from rich slow-drip coffee to refreshing coconut water and freshly pressed sugar cane juice.</p>
                    </div>
                </div>

                <div class="menu-items-list" role="list">
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Vietnamese Coffee</h3>
                            <p class="menu-item-sub">Strong Trung Nguy&ecirc;n robusta, slow-drip style &middot; Hot / Iced / Milk / Black</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$5.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Vietnamese Green Tea</h3>
                            <p class="menu-item-sub">Aromatic Tr&agrave; Th&aacute;i Nguy&ecirc;n mountain green tea</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$5.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Young Coconut Water</h3>
                            <p class="menu-item-sub">Fresh young coconut &mdash; light, sweet and hydrating</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$7.50</span>
                        </div>
                    </div>
                    <div class="menu-item-row" role="listitem">
                        <div class="menu-item-info">
                            <h3 class="menu-item-name">Sugar Cane Juice</h3>
                            <p class="menu-item-sub">Freshly pressed cane juice, naturally sweet and refreshing</p>
                        </div>
                        <div class="menu-item-right">
                            <span class="menu-item-price">$7.50</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Order Online CTA (bottom) -->
            <div class="menu-order-cta" role="complementary">
                <div class="menu-order-cta-text">
                    <strong>Ready to order?</strong>
                    Pickup via OrderUp &middot; Delivery via Uber Eats or DoorDash
                </div>
                <div class="menu-cta-actions">
                    <a href="https://vietdeli.orderup.com.au/" class="menu-order-cta-btn" target="_blank" rel="noopener noreferrer">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        Order Pickup
                    </a>
                    <a href="https://www.ubereats.com/au/store/viet-deli/ngTgtA3eULKj2GBHK-67ug"
                       class="menu-cta-platform-btn"
                       target="_blank"
                       rel="noopener noreferrer">
                        Uber Eats
                    </a>
                    <a href="https://www.doordash.com/en/store/viet-deli-myaree-28168098/61261756/"
                       class="menu-cta-platform-btn"
                       target="_blank"
                       rel="noopener noreferrer">
                        DoorDash
                    </a>
                </div>
            </div>

            <!-- Allergen Note -->
            <p class="menu-allergen-note">
                Please inform our staff of any allergies or dietary requirements before ordering.<br>
                Menu items and prices are subject to change without notice.
            </p>

        </div><!-- /.menu-body-inner -->
    </div><!-- /.menu-body -->

    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'footer.html'; ?>

    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
    <script>
    (function () {
        var tabs = document.querySelectorAll('.menu-cat-tab');
        var sections = document.querySelectorAll('.menu-cat-section');
        if (!tabs.length || !sections.length) return;

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var id = entry.target.getAttribute('id');
                    tabs.forEach(function (tab) {
                        tab.classList.toggle('is-active', tab.getAttribute('href') === '#' + id);
                    });
                }
            });
        }, { rootMargin: '-130px 0px -55% 0px', threshold: 0 });

        sections.forEach(function (s) { observer.observe(s); });

        tabs.forEach(function (tab) {
            tab.addEventListener('click', function (e) {
                e.preventDefault();
                var targetId = this.getAttribute('href').slice(1);
                var target = document.getElementById(targetId);
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                var navInner = document.querySelector('.menu-cat-nav-inner');
                if (navInner) {
                    var tabCenter = this.offsetLeft + this.offsetWidth / 2;
                    navInner.scrollTo({ left: tabCenter - navInner.clientWidth / 2, behavior: 'smooth' });
                }
            });
        });
    })();
    </script>
</body>
</html>

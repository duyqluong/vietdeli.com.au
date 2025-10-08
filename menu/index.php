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
    <meta property="og:image" content="https://www.vietdeli.com.au/images/menu.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_AU">
    <meta property="og:site_name" content="Viet Deli">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.vietdeli.com.au/menu/">
    <meta name="twitter:title" content="Vietnamese Menu | Viet Deli Perth">
    <meta name="twitter:description" content="Browse our authentic Vietnamese menu featuring Banh Mi, Pho, Bun bowls, and rice dishes. Order online or visit us in Myaree.">
    <meta name="twitter:image" content="https://www.vietdeli.com.au/images/menu.png">
    
    <!-- Structured Data - Menu -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Menu",
      "name": "Viet Deli Vietnamese Food Menu",
      "description": "Authentic Vietnamese street food menu featuring Banh Mi, Pho, vermicelli bowls, and rice dishes",
      "inLanguage": "en-AU",
      "hasMenuSection": [
        {
          "@type": "MenuSection",
          "name": "Banh Mi",
          "description": "Vietnamese Baguette filled with Spread/Mayo, pickled carrots, cucumbers, coriander, and chillies",
          "hasMenuItem": [
            {
              "@type": "MenuItem",
              "name": "Crispy Roast Pork Belly Banh Mi",
              "offers": {
                "@type": "Offer",
                "price": "15.00",
                "priceCurrency": "AUD"
              }
            },
            {
              "@type": "MenuItem",
              "name": "Grilled Chicken Banh Mi",
              "offers": {
                "@type": "Offer",
                "price": "13.00",
                "priceCurrency": "AUD"
              }
            }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Pho",
          "description": "Vietnamese soup with bone broth, rice noodles, and thinly sliced meat",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            {
              "@type": "MenuItem",
              "name": "Chicken Pho",
              "offers": {
                "@type": "Offer",
                "price": "19.50",
                "priceCurrency": "AUD"
              }
            },
            {
              "@type": "MenuItem",
              "name": "Combination Beef Pho",
              "offers": {
                "@type": "Offer",
                "price": "22.00",
                "priceCurrency": "AUD"
              }
            }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Vermicelli - Bun",
          "description": "Vietnamese vermicelli bowls topped with crushed peanuts and Nuoc Cham sauce",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            {
              "@type": "MenuItem",
              "name": "Crispy Pork Belly Vermicelli",
              "offers": {
                "@type": "Offer",
                "price": "19.50",
                "priceCurrency": "AUD"
              }
            }
          ]
        },
        {
          "@type": "MenuSection",
          "name": "Rice Dishes - Com",
          "description": "Steamed Jasmine rice with savory meats, pickled vegetables, and fish sauce",
          "suitableForDiet": "https://schema.org/GlutenFreeDiet",
          "hasMenuItem": [
            {
              "@type": "MenuItem",
              "name": "Crispy Pork Belly Rice",
              "offers": {
                "@type": "Offer",
                "price": "19.50",
                "priceCurrency": "AUD"
              }
            }
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
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://www.vietdeli.com.au/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Menu",
          "item": "https://www.vietdeli.com.au/menu/"
        }
      ]
    }
    </script>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/menu-styles.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'header.html'; ?>
    
    <main class="container" role="main">
        <header class="menu-header">
            <p class="subheading">Authentic Vietnamese Cuisine</p>
            <h1>Our Menu</h1>
            <p class="location">Unit 14/47 McCoy Street, Myaree, Perth, WA</p>
        </header>

        <section class="menu-section" id="banh-mi" aria-labelledby="banh-mi-heading">
            <h2 id="banh-mi-heading">Bánh Mì - Vietnamese Sandwiches</h2>
            <p class="menu-description">
                Traditional Vietnamese baguette sandwiches filled with your choice of protein, spread, pickled carrots, fresh cucumbers, coriander, and chillies. 
                Drizzled with savory soy sauce or our signature homemade Banh Mi sauce. Made fresh to order with crispy baguettes baked daily.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$15.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$13.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fried</span>
                <span class="menu-item-price">$14.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Traditional (Pork & Pork Ham)</span>
                <span class="menu-item-price">$13.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$12.00</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra Meat</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Double Meat</span>
                <span class="menu-addon-price">$5.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Egg</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
        </section>

        <section class="menu-section" id="pho" aria-labelledby="pho-heading">
            <h2 id="pho-heading">Phở - Vietnamese Noodle Soup <span aria-label="Gluten Free">(GF)</span></h2>
            <p class="menu-description">
                Authentic Vietnamese soup featuring aromatic bone broth simmered for hours, rice noodles, and thinly sliced meat or chicken. 
                Served with fresh onion, spring onion, bean sprouts, mint, coriander, lemon, chillies, hoisin sauce, and sriracha. A gluten-free comfort food classic.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Cooked Beef</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Rare Beef</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Balls</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Combination Beef</span>
                <span class="menu-item-price">$22.00</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra Meat</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Double Meat</span>
                <span class="menu-addon-price">$5.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Egg</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
        </section>

        <section class="menu-section" id="vermicelli" aria-labelledby="vermicelli-heading">
            <h2 id="vermicelli-heading">Bún - Vietnamese Vermicelli Bowls <span aria-label="Gluten Free">(GF)</span></h2>
            <p class="menu-description">
                Light and refreshing Vietnamese vermicelli noodle bowls topped with your choice of protein, crushed peanuts, fresh herbs, 
                pickled vegetables, and our signature Nuoc Cham (Vietnamese dipping sauce). A healthy gluten-free option perfect for any time of day.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fry</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Sugar Cane Prawn</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork Spring Roll</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Veg Spring Roll (V)</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra Meat</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Double Meat</span>
                <span class="menu-addon-price">$5.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Egg</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
        </section>

        <section class="menu-section" id="rice" aria-labelledby="rice-heading">
            <h2 id="rice-heading">Cơm - Vietnamese Rice Dishes <span aria-label="Gluten Free">(GF)</span></h2>
            <p class="menu-description">
                Steamed fragrant Jasmine rice topped with your choice of savory grilled or roasted meats, pickled carrots, sliced cucumber, 
                fresh tomato, and crispy fried shallots. Served with our homemade sweet and tangy fish sauce or soy sauce. A satisfying gluten-free meal.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fry</span>
                <span class="menu-item-price">$19.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra Meat</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Double Meat</span>
                <span class="menu-addon-price">$5.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Egg</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
        </section>

        <section class="menu-section" id="salad" aria-labelledby="salad-heading">
            <h2 id="salad-heading">Gỏi - Vietnamese Salad <span aria-label="Gluten Free">(GF)</span></h2>
            <p class="menu-description">
                Fresh, crunchy mixed salad of lettuce, pickled carrot, cucumber, coriander, and mint, 
                topped with a sprinkle of crispy shallots and roasted peanuts served with our sweet zesty fish sauce dressing 
                add some chillies for extra kick.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fry</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra Meat</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Double Meat</span>
                <span class="menu-addon-price">$5.50</span>
            </div>
        </section>

        <section class="menu-section" id="fresh-rolls" aria-labelledby="fresh-rolls-heading">
            <h2 id="fresh-rolls-heading">Fresh Rolls</h2>
            <p class="menu-description">
                Fresh Hand rolled rice paper wraps combined with your choice. Topped with Vermicelli / Lettuce / 
                Pickled carrots / Fresh crunchy cucumbers / Mint served with homemade Hoisin sauce with Nuoc Cham.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Pork</span>
                <span class="menu-item-price">$11.50 / 2pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
                <span class="menu-item-price">$10.50 / 2pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
                <span class="menu-item-price">$11.50 / 2pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Tofu (V)</span>
                <span class="menu-item-price">$9.50 / 2pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork & Prawn</span>
                <span class="menu-item-price">$12.50 / 2pcs</span>
            </div>
        </section>

        <section class="menu-section" id="side-dishes" aria-labelledby="side-dishes-heading">
            <h2 id="side-dishes-heading">Side Dishes</h2>
            <div class="menu-item">
                <span class="menu-item-name">Pork Spring Rolls</span>
                <span class="menu-item-price">$10.50 / 3pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vegetarian Spring Rolls</span>
                <span class="menu-item-price">$9.50 / 3pcs</span>
            </div>
            <div class="menu-addon">
                <span class="menu-addon-name">Extra 1pc Spring Roll</span>
                <span class="menu-addon-price">$3.50</span>
            </div>
        </section>

        <section class="menu-section" id="bao" aria-labelledby="bao-heading">
            <h2 id="bao-heading">Bao Buns</h2>
            <p class="menu-description">
                Bao buns are a delicious, warm fluffy treat, filled with savory meats of your choice, 
                white steamed bun layered with a sweet aromatic sauce, topped with pickled carrots, homemade sweet sauce.
            </p>
            <div class="menu-item">
                <span class="menu-item-name">Pork</span>
                <span class="menu-item-price">$8.50 / each</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
                <span class="menu-item-price">$8.50 / each</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Tofu</span>
                <span class="menu-item-price">$7.50 / each</span>
            </div>
        </section>

        <section class="menu-section" id="drinks" aria-labelledby="drinks-heading">
            <h2 id="drinks-heading">Drinks</h2>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Coffee (Hot / Cold / Milk / Black)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Green Tea (Tra Thai Nguyen)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Young Coconut Water (Nuoc dua non)</span>
                <span class="menu-item-price">$7.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Sugar Cane Juice</span>
                <span class="menu-item-price">$7.50</span>
            </div>
        </section>
    </main>

    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html> 
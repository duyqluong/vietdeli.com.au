<?php
/**
 * Menu Page - Viet Deli Restaurant
 * 
 * This file displays the main menu page with all food and drink items.
 * URL path: /menu/
 * 
 * Sections included:
 * - Banh Mi
 * - Pho
 * - Vermicelli (Bun)
 * - Rice Dishes
 * - Bao
 * - Vietnamese Salad (Goi)
 * - Fresh Rolls
 * - Side Dishes
 * - Drinks
 */
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$root = (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? $_SERVER['DOCUMENT_ROOT'] . '/vietdeli/' : $_SERVER['DOCUMENT_ROOT'] . '/';
include $root . 'head.html'; 
?>
<title>Vietnamese Delicious Street Food - Viet Deli Restaurant</title>
<meta name="description" content="Explore our authentic Vietnamese street food menu featuring Banh Mi, Pho, Rice Dishes, and more at Viet Deli Restaurant in Perth.">
<base href="<?php echo (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/vietdeli/' : '/'; ?>">
<link rel="stylesheet" href="css/menu-styles.css">
</head>
<body>
    <?php include $root . 'header.html'; ?>
    
    <div class="container">
        <div class="menu-header">
            <h1>Vietnamese Delicious Street Food</h1>
            <div class="subheading">Fresh & Healthy</div>
            <div class="location">Unit 14/47 McCoy Street, Myaree, Perth, WA</div>
        </div>

        <div class="menu-section" id="banh-mi">
            <h2>Banh Mi</h2>
            <div class="menu-description">
                Vietnamese Baguette filled with Spread/Mayo. Topped with pickled carrots, fresh crunchy cucumbers, coriander, chillies. 
                Drizzled with soy sauce or Banh Mi homemade sauce.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$13.90</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$11.90</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fried</span>
                <span class="menu-item-price">$12.90</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Traditional Crispy Tofu (V)</span>
                <span class="menu-item-price">$10.90</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra Meat</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Double Meat</span>
                <span class="menu-item-price">$5.00</span>
            </div>
        </div>

        <div class="menu-section" id="pho">
            <h2>Pho (GF)</h2>
            <div class="menu-description">
                Pho is a Vietnamese soup consisting of bone broth, rice noodles, and thinly sliced meat or chicken. 
                It is also served with onion, spring onion, bean sprouts, mints, coriander, lemon, chillies, hoisin sauce, and sriracha.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Cooked Beef</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Rare Beef</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Balls</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Combination Beef</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra Meat</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Double Meat</span>
                <span class="menu-item-price">$5.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Egg</span>
                <span class="menu-item-price">$2.50</span>
            </div>
        </div>

        <div class="menu-section" id="vermicelli">
            <h2>Vermicelli - Bún (GF)</h2>
            <div class="menu-description">
                Vermicelli is just one of the mouth-watering Vietnamese recipes. Topped with crushed peanuts, 
                laced with Nuoc Cham, the famous dipping sauce that's served with everything.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fry</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Sugar Cane Prawn</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork Spring Roll</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Veg Spring Roll (V)</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra Meat</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Double Meat</span>
                <span class="menu-item-price">$5.00</span>
            </div>
        </div>

        <div class="menu-section" id="rice">
            <h2>Rice (GF)</h2>
            <div class="menu-description">
                Steamed Jasmine rice topped with savory meats of your choice, pickled carrots, sliced cucumber, 
                and tomato served with a sprinkle of crispy shallots and homemade sweet zesty fish sauce or soy sauce.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Roast Pork Belly</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef Stir Fry</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra Meat</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Double Meat</span>
                <span class="menu-item-price">$5.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Egg</span>
                <span class="menu-item-price">$2.50</span>
            </div>
        </div>

        <div class="menu-section" id="salad">
            <h2>Viet Salad - Goi (GF)</h2>
            <div class="menu-description">
                Fresh, crunchy mixed salad of lettuce, pickled carrot, cucumber, coriander, and mint, 
                topped with a sprinkle of crispy shallots and roasted peanuts served with our sweet zesty fish sauce dressing 
                add some chillies for extra kick.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
                <span class="menu-item-price">$15.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef</span>
                <span class="menu-item-price">$16.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (V)</span>
                <span class="menu-item-price">$15.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra Meat</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Double Meat</span>
                <span class="menu-item-price">$5.00</span>
            </div>
        </div>

        <div class="menu-section" id="fresh-rolls">
            <h2>Fresh Rolls ($9.50 for 2pcs)</h2>
            <div class="menu-description">
                Fresh Hand rolled rice paper wraps combined with your choice. Topped with Vermicelli / Lettuce / 
                Pickled carrots / Fresh crunchy cucumbers / Mint served with homemade Hoisin sauce with Nuoc Cham.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Tofu (V)</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Avocado (V)</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Summer Special: Pork & Prawn</span>
                <span class="menu-item-price">$10.50 for 2pcs</span>
            </div>
        </div>

        <div class="menu-section" id="side-dishes">
            <h2>Side Dishes</h2>
            <div class="menu-item">
                <span class="menu-item-name">Pork Spring Rolls</span>
                <span class="menu-item-price">$9.80 / 3pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vegetarian Spring Rolls</span>
                <span class="menu-item-price">$9.50 / 3pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra 1pc Spring Roll</span>
                <span class="menu-item-price">$2.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Seafood Basket</span>
                <span class="menu-item-price">$12.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Salt & Pepper Squid</span>
                <span class="menu-item-price">$9.80 / 4pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crumbed Prawn</span>
                <span class="menu-item-price">$9.80 / 4pcs</span>
            </div>
        </div>

        <div class="menu-section" id="bao">
            <h2>Bao ($7.50 / each)</h2>
            <div class="menu-description">
                Bao buns are a delicious, warm fluffy treat, filled with savory meats of your choice, 
                white steamed bun layered with a sweet aromatic sauce, topped with pickled carrots, homemade sweet sauce.
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Pork</span>
            </div>
        </div>

        <div class="menu-section" id="drinks">
            <h2>Drink Menu</h2>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Ice Coffee with Milk (Ca phe sua da)</span>
                <span class="menu-item-price">$6.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Ice Coffee (Ca phe den da)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Hot Black Coffee (Ca phe den nong)</span>
                <span class="menu-item-price">$5.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Hot Cafe with Milk (Ca phe sua nong)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese Green Tea (Tra Thai Nguyen)</span>
                <span class="menu-item-price">$6.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Young Coconut Water (Nuoc dua non)</span>
                <span class="menu-item-price">$7.50</span>
            </div>
        </div>
    </div>

    <?php include $root . 'footer.html'; ?>
    <script src="js/main.js"></script>
</body>
</html> 
<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>
    <title>Vietnamese Delicious Street Food - Viet Deli Restaurant</title>
    <meta name="description" content="Explore our authentic Vietnamese street food menu featuring Banh Mi, Pho, Rice Dishes, and more at Viet Deli Restaurant in Perth.">
    <link rel="stylesheet" href="css/menu-styles.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'header.html'; ?>
    
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
        </div>

        <div class="menu-section" id="pho">
            <h2>Pho (GF)</h2>
            <div class="menu-description">
                Pho is a Vietnamese soup consisting of bone broth, rice noodles, and thinly sliced meat or chicken. 
                It is also served with onion, spring onion, bean sprouts, mints, coriander, lemon, chillies, hoisin sauce, and sriracha.
            </div>
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
        </div>

        <div class="menu-section" id="vermicelli">
            <h2>Vermicelli - Bún (GF)</h2>
            <div class="menu-description">
                Vermicelli is just one of the mouth-watering Vietnamese recipes. Topped with crushed peanuts, 
                laced with Nuoc Cham, the famous dipping sauce that's served with everything.
            </div>
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
        </div>

        <div class="menu-section" id="rice">
            <h2>Rice (GF)</h2>
            <div class="menu-description">
                Steamed Jasmine rice topped with savory meats of your choice, pickled carrots, sliced cucumber, 
                and tomato served with a sprinkle of crispy shallots and homemade sweet zesty fish sauce or soy sauce.
            </div>
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
        </div>

        <div class="menu-section" id="salad">
            <h2>Viet Salad - Goi (GF)</h2>
            <div class="menu-description">
                Fresh, crunchy mixed salad of lettuce, pickled carrot, cucumber, coriander, and mint, 
                topped with a sprinkle of crispy shallots and roasted peanuts served with our sweet zesty fish sauce dressing 
                add some chillies for extra kick.
            </div>
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
        </div>

        <div class="menu-section" id="fresh-rolls">
            <h2>Fresh Rolls</h2>
            <div class="menu-description">
                Fresh Hand rolled rice paper wraps combined with your choice. Topped with Vermicelli / Lettuce / 
                Pickled carrots / Fresh crunchy cucumbers / Mint served with homemade Hoisin sauce with Nuoc Cham.
            </div>
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
        </div>

        <div class="menu-section" id="side-dishes">
            <h2>Side Dishes</h2>
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
        </div>

        <div class="menu-section" id="bao">
            <h2>Bao</h2>
            <div class="menu-description">
                Bao buns are a delicious, warm fluffy treat, filled with savory meats of your choice, 
                white steamed bun layered with a sweet aromatic sauce, topped with pickled carrots, homemade sweet sauce.
            </div>
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
        </div>

        <div class="menu-section" id="drinks">
            <h2>Drink Menu</h2>
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
        </div>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . SITE_URL . 'footer.html'; ?>
    <script src="js/main.js"></script>
</body>
</html> 
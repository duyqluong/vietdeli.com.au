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
<!-- Page-specific head elements -->
<title>Menu - Viet Deli Restaurant</title>
<meta name="description" content="Explore our authentic Vietnamese menu featuring Banh Mi, Pho, Rice Dishes, and more at Viet Deli Restaurant.">
<base href="<?php echo (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) ? '/vietdeli/' : '/'; ?>">
<link rel="stylesheet" href="css/menu-styles.css">
</head>
<body>
    <?php 
    include $root . 'header.html'; 
    ?>
    
    <div class="container">
        <div class="menu-header">
            <h1>Our Authentic Vietnamese Menu</h1>
            <p class="welcome-text">Welcome to Viet Deli! We're proud to serve Perth's most authentic Vietnamese cuisine, prepared fresh daily with traditional recipes and quality ingredients. From our signature Banh Mi sandwiches to steaming bowls of Pho, each dish is crafted with care and passion for the flavors of Vietnam.</p>
            <p class="dietary-note">Many of our dishes can be made gluten-free (GF) or vegetarian (v). Please ask our friendly staff about any dietary requirements or allergies.</p>
        </div>

        <div class="menu-section" id="banh-mi">
            <h2>Banh Mi</h2>
            <div class="menu-item">
                <span class="menu-item-name">Crispy roast Pork Belly</span>
                <span class="menu-item-price">$13.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$11.90</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef stir fry</span>
                <span class="menu-item-price">$12.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Traditional</span>
                <span class="menu-item-price">$11.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (v)</span>
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
            <h2>Pho <span class="note">(GF)</span></h2>
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
                <span class="menu-item-name">Combination beef</span>
                <span class="menu-item-price">$19.80</span>
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
                <span class="menu-item-name">Extra Noodle</span>
                <span class="menu-item-price">$2.50</span>
            </div>
        </div>

        <div class="menu-section" id="vermicelli">
            <h2>Vermicelli - Bun <span class="note">(GF)</span></h2>
            <div class="menu-item">
                <span class="menu-item-name">Crispy roast Pork belly</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$16.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef stir fry</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Sugar cane Prawn</span>
                <span class="menu-item-price">$16.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Pork spring roll</span>
                <span class="menu-item-price">$16.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Veg spring rolls (v)</span>
                <span class="menu-item-price">$16.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (v)</span>
                <span class="menu-item-price">$16.80</span>
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
            <h2>Rice <span class="note">(GF)</span></h2>
            <div class="menu-item">
                <span class="menu-item-name">Crispy roast Pork belly</span>
                <span class="menu-item-price">$18.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$16.80</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Beef stir fry</span>
                <span class="menu-item-price">$17.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Crispy Tofu (v)</span>
                <span class="menu-item-price">$16.80</span>
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

        <div class="menu-section" id="bao">
            <h2>Bao <span class="note">(each)</span></h2>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Chicken</span>
                <span class="menu-item-price">$7.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Grilled Pork</span>
                <span class="menu-item-price">$7.50</span>
            </div>
        </div>

        <div class="menu-section" id="salad">
            <h2>Viet Salad - Goi <span class="note">(GF)</span></h2>
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
                <span class="menu-item-name">Crispy Tofu (v)</span>
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
            <h2>Fresh Rolls</h2>
            <p class="note">$9.50 for 2pcs</p>
            <div class="menu-item">
                <span class="menu-item-name">Chicken</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Prawn</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Tofu (v)</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Avocado (v)</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Summer special: Pork & Prawn</span>
                <span class="menu-item-price">$10.50 for 2pcs</span>
            </div>
        </div>

        <div class="menu-section" id="side-dishes">
            <h2>Side Dishes</h2>
            <div class="menu-item">
                <span class="menu-item-name">Pork</span>
                <span class="menu-item-price">$9.80 / 3 pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vegetarian</span>
                <span class="menu-item-price">$9.50 / 3 pcs</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Extra 1 pcs spring roll</span>
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

        <div class="menu-section" id="drinks">
            <h2>Drink Menu</h2>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese ice coffee with milk (Ca phe sua da)</span>
                <span class="menu-item-price">$6.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese ice coffee (Ca phe den da)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese hot black coffee (Ca phe den nong)</span>
                <span class="menu-item-price">$5.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese hot coffee with milk (Ca phe sua nong)</span>
                <span class="menu-item-price">$5.50</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Vietnamese lotus green tea (Tra Nhan Nguyen)</span>
                <span class="menu-item-price">$6.00</span>
            </div>
            <div class="menu-item">
                <span class="menu-item-name">Young Coconut water (Nuoc dua non)</span>
                <span class="menu-item-price">$7.50</span>
            </div>
        </div>
    </div>

    <?php include $root . 'footer.html'; ?>
    <script src="js/main.js"></script>
</body>
</html> 
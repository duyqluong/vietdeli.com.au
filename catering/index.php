<?php
require_once __DIR__ . '/../config/constants.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo SITE_URL; ?>">
    <?php include BASE_PATH . '/head.html'; ?>
    <title>Catering & Events — Viet Deli Perth</title>
    <meta name="description" content="Viet Deli offers catering for events, parties, and corporate functions in Perth. Authentic Vietnamese food for groups. Call us or visit to discuss your event.">
    <link rel="canonical" href="https://www.vietdeli.com.au/catering/">
    <link rel="stylesheet" href="css/catering.css?v=<?php echo ASSET_VERSION; ?>">
</head>
<body>
    <?php include BASE_PATH . '/header.html'; ?>

    <main>

        <!-- Hero -->
        <section class="catering-hero">
            <div class="catering-hero-inner">
                <span class="eyebrow">Catering & Events</span>
                <h1>Feed Your Guests Something They'll Actually Remember</h1>
                <p>From family gatherings to corporate lunches — we bring authentic Vietnamese food to your event. Talk to us and we'll sort out the rest.</p>
                <a href="tel:0893176708" class="catering-cta-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.64 3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.6a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 18z"/></svg>
                    Call Us — 08 9317 6708
                </a>
            </div>
        </section>

        <!-- What We Offer -->
        <section class="catering-what">
            <div class="catering-inner">
                <div class="catering-what-grid">
                    <div class="catering-what-text">
                        <span class="eyebrow-dark">What We Offer</span>
                        <h2>Real Vietnamese Food, Made for a Crowd</h2>
                        <p>We cater for all kinds of events — birthday parties, family reunions, workplace lunches, community gatherings, and more. Our food is made fresh, the same way we make it in-store every day.</p>
                        <p>Think steaming pho, freshly rolled spring rolls, bánh mì platters, bun bowls, and rice dishes — the kind of food people actually get excited about.</p>
                        <p>Every event is different, so we prefer to talk through what you need in person or over the phone. That way we can make sure everything is right for your occasion.</p>
                    </div>
                    <div class="catering-what-images">
                        <img src="images/gallery/viet-deli-catering.jpg" alt="Viet Deli catering spread" class="catering-img-main">
                        <img src="images/gallery/viet-deli-catering-kitchen.jpg" alt="Viet Deli kitchen" class="catering-img-secondary">
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Types -->
        <section class="catering-events">
            <div class="catering-inner">
                <span class="eyebrow-dark">Who We Cater For</span>
                <h2>Any Occasion, Any Size</h2>
                <div class="catering-events-grid">
                    <div class="catering-event-card">
                        <div class="catering-event-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>Family Gatherings</h3>
                        <p>Reunions, birthdays, anniversaries — food that brings everyone to the table.</p>
                    </div>
                    <div class="catering-event-card">
                        <div class="catering-event-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>
                        </div>
                        <h3>Corporate Lunches</h3>
                        <p>Team lunches, client events, office celebrations — something better than sandwiches.</p>
                    </div>
                    <div class="catering-event-card">
                        <div class="catering-event-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <h3>Community Events</h3>
                        <p>Markets, festivals, school events, fundraisers — we're proud to be part of the community.</p>
                    </div>
                    <div class="catering-event-card">
                        <div class="catering-event-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                        </div>
                        <h3>Special Occasions</h3>
                        <p>Engagements, baby showers, cultural celebrations — we'll make sure the food is memorable.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="catering-contact">
            <div class="catering-inner">
                <div class="catering-contact-box">
                    <div class="catering-contact-text">
                        <span class="eyebrow">Get in Touch</span>
                        <h2>Let's Talk About Your Event</h2>
                        <p>The best way to organise catering with us is to call or come in. We'll sit down with you, understand what you need, and make sure everything is sorted properly.</p>
                        <p>No online forms. No back-and-forth emails. Just a real conversation.</p>
                    </div>
                    <div class="catering-contact-details">
                        <a href="tel:0893176708" class="catering-contact-card">
                            <div class="catering-contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.6a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.64 3h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 10.6a16 16 0 0 0 6 6l.94-.94a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 18z"/></svg>
                            </div>
                            <div>
                                <span class="catering-contact-label">Call Us</span>
                                <span class="catering-contact-value">08 9317 6708</span>
                            </div>
                        </a>
                        <div class="catering-contact-card">
                            <div class="catering-contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <span class="catering-contact-label">Visit Us</span>
                                <span class="catering-contact-value">Unit 14/47 McCoy Street, Myaree WA 6154</span>
                            </div>
                        </div>
                        <div class="catering-contact-card">
                            <div class="catering-contact-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            </div>
                            <div>
                                <span class="catering-contact-label">Opening Hours</span>
                                <span class="catering-contact-value">Mon – Sun: 11am – 3pm & 5pm – 8pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include BASE_PATH . '/footer.html'; ?>
    <script src="js/main.js?v=<?php echo ASSET_VERSION; ?>"></script>
</body>
</html>

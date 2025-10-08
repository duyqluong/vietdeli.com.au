# Cache Busting Guide

## How to Force Browser Updates

When you make changes to CSS or JavaScript files, browsers may cache the old versions. To force browsers to load the latest files, simply update the version number.

### Step 1: Update the Version Number

Open `config/constants.php` and update the `ASSET_VERSION` constant:

```php
// Asset version for cache busting - Update this when you change CSS/JS files
define('ASSET_VERSION', '1.0.0');  // Change this to 1.0.1, 1.0.2, etc.
```

### Step 2: What Version to Use?

Use semantic versioning:
- **Patch (x.x.1)** - Small fixes, minor CSS tweaks
- **Minor (x.1.0)** - New features, layout changes
- **Major (2.0.0)** - Complete redesigns

### Examples:

```php
// Small CSS fix to menu styles
define('ASSET_VERSION', '1.0.1');

// Added new blog features
define('ASSET_VERSION', '1.1.0');

// Complete site redesign
define('ASSET_VERSION', '2.0.0');
```

### What Files Are Affected?

All CSS and JS files now include `?v=X.X.X` in their URLs:
- `css/variables.css?v=1.0.0`
- `css/fonts.css?v=1.0.0`
- `css/base.css?v=1.0.0`
- `css/menu-styles.css?v=1.0.0`
- `css/about-styles.css?v=1.0.0`
- `css/blog.css?v=1.0.0`
- `css/features.css?v=1.0.0`
- `css/hero-styles.css?v=1.0.0`
- `css/gallery.css?v=1.0.0`
- `css/header-footer-styles.css?v=1.0.0`
- `css/cta-pickup.css?v=1.0.0`
- `js/main.js?v=1.0.0`

### Quick Workflow:

1. Make your CSS/JS changes
2. Open `config/constants.php`
3. Update `ASSET_VERSION` to a new number
4. Save and refresh your browser
5. Browsers will now load the new version!

### Note:

You only need to update the version ONCE in `constants.php` - all files across your entire site will automatically use the new version.

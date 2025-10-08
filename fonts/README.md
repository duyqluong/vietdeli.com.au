# Custom Fonts Directory

This directory is for storing custom font files for the VietDeli website.

## How to Add Custom Fonts

### 1. Place Font Files
- Copy your font files (`.woff2`, `.woff`, `.ttf`, `.otf`) into this directory
- Use descriptive names like `FontName-Regular.woff2`, `FontName-Bold.woff2`, etc.

### 2. Declare Fonts in CSS
Edit `css/fonts.css` and add your `@font-face` declarations:

```css
@font-face {
    font-family: 'YourFontName';
    src: url('../fonts/YourFontName-Regular.woff2') format('woff2'),
         url('../fonts/YourFontName-Regular.woff') format('woff'),
         url('../fonts/YourFontName-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
```

### 3. Update CSS Variables
Edit `css/variables.css` and update the font family variables:

```css
--font-family-custom: 'YourFontName', 'Arial', sans-serif;
```

### 4. Include Font CSS
Make sure to include the fonts CSS file in your HTML head section:

```html
<link rel="stylesheet" href="css/fonts.css">
```

### 5. Apply the Font
Use the CSS variable or class in your styles:

```css
/* Using CSS variable */
.my-element {
    font-family: var(--font-family-custom);
}

/* Using utility class */
.my-element {
    font-family: font-custom;
}
```

## Font File Formats

- **WOFF2**: Best compression, modern browsers
- **WOFF**: Good compression, older browsers
- **TTF/OTF**: Fallback for older browsers

## Best Practices

1. **Font Loading**: Use `font-display: swap` for better performance
2. **Vietnamese Support**: Include Unicode ranges for Vietnamese characters if needed
3. **File Size**: Optimize font files to reduce loading time
4. **Fallbacks**: Always provide fallback fonts in your CSS

## Example: Vietnamese Font

For Vietnamese text support, you might want to use fonts like:
- Inter (with Vietnamese subset)
- Source Sans Pro
- Roboto
- Custom Vietnamese fonts

Make sure to include the appropriate Unicode ranges for Vietnamese characters.

# NexBlocks WordPress Theme — Complete Blueprint

## Project Overview
Premium WordPress Full Site Editing (FSE) Block Theme for iNeedMarketer.
Goal: Feature-rich theme like Blocksy — with even more functionality.
Built to ThemeForest submission standards.
Designed so headers, footers, and templates can be added/updated anytime without breaking existing code.

---

## Tech Stack
- WordPress 6.0+ (Full Site Editing / FSE)
- PHP 8.0+
- Vanilla JavaScript (ES6 modules) — no jQuery
- SCSS → compiled CSS
- Webpack for bundling
- theme.json for global styles and settings

---

## Planned Features (Full Scope)

### Headers (Multiple styles, switchable from Customizer)
- Sticky header support
- Transparent header support
- Mobile hamburger menu
- Mega menu support
- Header with topbar
- Header with search overlay
- Header with cart icon (WooCommerce ready)
- Each header style: separate HTML template + CSS file

### Footers (Multiple styles, switchable from Customizer)
- Multi-column footer
- Minimal footer
- Footer with newsletter signup
- Footer with social icons
- Each footer style: separate HTML template + CSS file

### Page Templates
- Default (blank canvas)
- Full Width (no sidebar)
- Landing Page (no header/footer)
- Blog / Archive
- Single Post
- Single Page
- 404 Error Page
- Search Results
- WooCommerce: Shop, Product, Cart, Checkout, My Account

### Block Patterns (Reusable Sections)
- Hero sections (multiple styles)
- Features / Services sections
- Pricing tables
- Testimonials
- Team sections
- CTA (Call to Action) sections
- FAQ sections
- Portfolio / Gallery sections
- Blog post grids
- Contact sections

### Customizer Options
- Header style selector (with thumbnail preview)
- Footer style selector (with thumbnail preview)
- Global colors (primary, secondary, accent)
- Typography (font family, size, weight)
- Button styles
- Layout width (boxed / full)
- WooCommerce settings

### WooCommerce Integration
- Shop page template
- Single product template
- Cart and Checkout styling
- Mini cart in header
- Product gallery support

### Performance
- Lazy load images
- Critical CSS inlining for above-the-fold
- Deferred JS loading
- Minimal HTTP requests

### Accessibility
- WCAG 2.1 AA compliant
- Keyboard navigation support
- Skip to content link
- ARIA labels on all interactive elements

---

## Complete Folder Structure

```
nexblocks/
├── style.css                          # Theme header info
├── index.php                          # Fallback (FSE themes need this)
├── functions.php                      # Main loader
├── theme.json                         # Global styles & settings
├── readme.txt                         # ThemeForest readme
│
├── parts/                             # Template parts (FSE)
│   ├── headers/
│   │   ├── header-1.html
│   │   ├── header-2.html
│   │   └── header-3.html
│   ├── footers/
│   │   ├── footer-1.html
│   │   ├── footer-2.html
│   │   └── footer-3.html
│   └── general/
│       ├── site-title.html
│       └── breadcrumbs.html
│
├── templates/                         # Full page templates (FSE)
│   ├── index.html
│   ├── single.html
│   ├── page.html
│   ├── archive.html
│   ├── search.html
│   ├── 404.html
│   ├── page-landing.html
│   ├── page-full-width.html
│   └── woocommerce/
│       ├── single-product.html
│       ├── archive-product.html
│       └── page-cart.html
│
├── patterns/                          # Block patterns
│   ├── headers/
│   │   ├── header-1.php
│   │   ├── header-2.php
│   │   └── header-3.php
│   ├── footers/
│   │   ├── footer-1.php
│   │   ├── footer-2.php
│   │   └── footer-3.php
│   ├── heroes/
│   │   ├── hero-1.php
│   │   └── hero-2.php
│   ├── features/
│   ├── pricing/
│   ├── testimonials/
│   ├── team/
│   ├── cta/
│   ├── faq/
│   ├── portfolio/
│   ├── blog/
│   └── contact/
│
├── assets/
│   ├── css/
│   │   ├── main.css                   # Global styles
│   │   ├── headers/
│   │   │   ├── header-1.css
│   │   │   ├── header-2.css
│   │   │   └── header-3.css
│   │   ├── footers/
│   │   │   ├── footer-1.css
│   │   │   ├── footer-2.css
│   │   │   └── footer-3.css
│   │   ├── templates/
│   │   ├── woocommerce/
│   │   └── editor.css                 # Block editor styles
│   ├── scss/
│   │   ├── _variables.scss
│   │   ├── _mixins.scss
│   │   ├── main.scss
│   │   ├── headers/
│   │   └── footers/
│   ├── js/
│   │   ├── main.js
│   │   ├── headerManager.js
│   │   ├── mobileMenu.js
│   │   ├── stickyHeader.js
│   │   ├── megaMenu.js
│   │   └── customizer-preview.js
│   └── images/
│       ├── headers/
│       │   ├── header-1.jpg           # Thumbnail for customizer
│       │   ├── header-2.jpg
│       │   └── header-3.jpg
│       ├── footers/
│       │   ├── footer-1.jpg
│       │   ├── footer-2.jpg
│       │   └── footer-3.jpg
│       └── screenshot.png
│
└── inc/
    ├── setup.php                      # Theme setup (add_theme_support etc.)
    ├── enqueue.php                    # All wp_enqueue_scripts
    ├── customizer/
    │   ├── customizer.php             # Main customizer loader
    │   ├── header-options.php         # Header switcher options
    │   ├── footer-options.php         # Footer switcher options
    │   ├── color-options.php
    │   ├── typography-options.php
    │   └── woo-options.php
    ├── classes/
    │   ├── class-header-manager.php   # Header auto-discovery & render
    │   ├── class-footer-manager.php   # Footer auto-discovery & render
    │   └── class-pattern-manager.php  # Pattern registration
    ├── woocommerce/
    │   ├── woo-setup.php
    │   └── woo-hooks.php
    └── helpers.php                    # Utility functions
```

---

## Coding Standards
- Follow WordPress Coding Standards (WPCS)
- Use tabs for indentation (WordPress standard)
- All strings translation-ready: `__('text', 'nexblocks')`
- Escape all output: `esc_html()`, `esc_url()`, `esc_attr()`
- Use `wp_enqueue_scripts()` for all assets
- No inline CSS or JS in PHP files
- PHPDoc blocks on all functions

---

## File Naming Rules
- PHP files: kebab-case → `header-manager.php`
- CSS files: kebab-case → `header-1.css`
- JS files: camelCase → `headerManager.js`
- Template parts: kebab-case → `header-1.html`
- Block patterns: kebab-case slug

---

## Adding New Headers
1. Create: `parts/headers/header-{n}.html`
2. Create: `patterns/headers/header-{n}.php`
3. Create: `assets/css/headers/header-{n}.css`
4. Create: `assets/scss/headers/header-{n}.scss`
5. Add thumbnail: `assets/images/headers/header-{n}.jpg`
6. Add entry in: `inc/customizer/header-options.php` array
Header manager auto-discovers — no other PHP changes needed.

## Adding New Footers
Same pattern as headers but in `footers/` directories.

## Adding New Page Templates
1. Create: `templates/template-{slug}.html`
2. Create: `patterns/templates/template-{slug}.php` (if pattern needed)
Template manager auto-discovers from directory.

## Adding New Block Patterns
1. Create: `patterns/{category}/pattern-name.php`
2. Register with pattern header comment at top of file
Pattern manager auto-discovers from all subdirectories.

---

## Important Paths
- Theme root: `/nexblocks/`
- Template parts: `/nexblocks/parts/`
- Page templates: `/nexblocks/templates/`
- Patterns: `/nexblocks/patterns/`
- Assets: `/nexblocks/assets/`
- PHP includes: `/nexblocks/inc/`

---

## Environment
- Hosted on Hostinger (shared or cloud)
- Dev: Local by Flywheel or LocalWP
- WordPress version: 6.0+

---

## DO NOT
- Add jQuery dependency for theme features
- Use deprecated WordPress functions
- Hardcode URLs — use `get_template_directory_uri()`
- Commit `node_modules/` or `vendor/`
- Use inline scripts — use `wp_add_inline_script()` if needed
- Mix WooCommerce code with core theme code (keep in `inc/woocommerce/`)

---

## Build Commands
```
npm run dev       → development build with watch
npm run build     → production minified build
npm run pot       → generate .pot translation file
```

---

## Development Priority Order
1. theme.json + style.css (foundation)
2. functions.php + inc/setup.php + inc/enqueue.php
3. Header 1 (HTML + CSS + JS)
4. Footer 1 (HTML + CSS)
5. Core templates (index, single, page, archive, 404)
6. Customizer (header/footer switcher)
7. Block patterns (hero, features, CTA first)
8. Header 2, 3 + Footer 2, 3
9. WooCommerce integration
10. Additional patterns and templates

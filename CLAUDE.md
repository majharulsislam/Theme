# NexBlocks WordPress Theme — Complete Blueprint

## Project Overview
Premium WordPress Full Site Editing (FSE) Block Theme for iNeedMarketer.
Goal: Feature-rich theme like Blocksy — with even more functionality.
Built to ThemeForest submission standards (Envato Quality Team requirements).
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

## ThemeForest Submission Requirements (MUST FOLLOW)

### Required Files (Envato mandatory)
- `style.css` — with correct theme header (Theme Name, Author, Version, License, Text Domain)
- `index.php` — fallback file (even FSE themes must have this)
- `screenshot.png` — exactly **1200 × 900px**, JPG or PNG, shows theme demo
- `readme.txt` — Envato standard format (changelog, credits, license info)
- `license.txt` — GPL v2 or later (all theme code must be GPL compatible)
- `languages/nexblocks.pot` — translation template file

### style.css Header (exact format required)
```css
/*
Theme Name:  NexBlocks
Theme URI:   https://ineedmarketer.com/nexblocks
Author:      iNeedMarketer
Author URI:  https://ineedmarketer.com
Description: Premium WordPress FSE block theme with multiple headers, footers, and templates.
Version:     1.0.0
License:     GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: nexblocks
Tags:        full-site-editing, block-patterns, wide-blocks, custom-colors, custom-logo, custom-menu, featured-images, rtl-language-support, translation-ready, woocommerce
*/
```

### WordPress Theme Check (must pass before submission)
- Run: Theme Check plugin — zero errors, zero warnings allowed
- Run: Theme Unit Test with WordPress test data
- Run: WPCS (WordPress Coding Standards) linting — zero errors
- Must pass: Accessibility audit (WAVE or axe tool)
- Must pass: HTML validation (W3C validator)

### Envato Code Quality Rules
- No obfuscated or encrypted code
- No external calls without user consent (no phoning home)
- No ads, tracking, or affiliate links injected into themes
- No license enforcement that breaks the theme on expiry
- All third-party libraries must be GPL compatible and credited in readme.txt
- No premium plugins bundled — only free/GPL plugins allowed
- Plugin territory features (SEO, sliders, page builders) must NOT be in the theme

### Licensing Rules
- Theme code: GPL v2 or later
- Images used in demo: must be CC0 / royalty-free (e.g., Unsplash, Pexels)
- Fonts: must be GPL compatible or hosted on Google Fonts
- Icons: SVG inline or GPL-compatible icon set (e.g., Dashicons, Heroicons, Feather)
- JavaScript libraries: GPL or MIT license only

### Required WordPress Feature Support (add_theme_support)
```php
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', ['search-form','comment-form','comment-list','gallery','caption','style','script'] );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'editor-styles' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'align-wide' );
add_theme_support( 'custom-logo' );
add_theme_support( 'woocommerce' );
```

### Demo Content
- `demo-content.xml` — WordPress export file with dummy content
- All demo images must be CC0 licensed
- Dummy text must be lorem ipsum or similar (no real personal data)
- Include import instructions in documentation

### Documentation (required for ThemeForest)
- `documentation/` folder or link to online docs
- Must cover: installation, demo import, customizer options, header/footer switching, adding new headers/footers
- Written in clear English

### Changelog (in readme.txt)
```
== Changelog ==
= 1.0.0 =
* Initial release
```

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
- Deferred JS loading
- Minimal HTTP requests
- No render-blocking resources

### Accessibility (WCAG 2.1 AA — ThemeForest requirement)
- Keyboard navigation support
- Skip to content link
- ARIA labels on all interactive elements
- Sufficient color contrast ratios
- Focus styles visible on all interactive elements

---

## Complete Folder Structure

```
nexblocks/
├── style.css                          # Theme header (required by WordPress)
├── index.php                          # Fallback (required by WordPress)
├── functions.php                      # Main loader
├── theme.json                         # Global styles & settings
├── readme.txt                         # ThemeForest required readme
├── license.txt                        # GPL v2 license file
├── screenshot.png                     # 1200×900px theme preview
│
├── languages/
│   └── nexblocks.pot                  # Translation template
│
├── documentation/
│   ├── index.html                     # Theme documentation
│   └── assets/                        # Doc images/CSS
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
│       │   ├── header-1.jpg           # Thumbnail for customizer (300×200px)
│       │   ├── header-2.jpg
│       │   └── header-3.jpg
│       ├── footers/
│       │   ├── footer-1.jpg
│       │   ├── footer-2.jpg
│       │   └── footer-3.jpg
│       └── screenshot.png             # 1200×900px
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
- Follow WordPress Coding Standards (WPCS) — enforced by phpcs
- Use tabs for indentation (WordPress standard)
- All strings translation-ready: `__('text', 'nexblocks')`
- Escape ALL output: `esc_html()`, `esc_url()`, `esc_attr()`, `wp_kses_post()`
- Sanitize ALL input: `sanitize_text_field()`, `absint()`, `sanitize_hex_color()`
- Use `wp_enqueue_scripts()` for all assets — never echo `<script>` or `<link>` tags
- No inline CSS or JS in PHP files
- PHPDoc blocks on all functions
- Nonce verification on all form submissions

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
5. Add thumbnail: `assets/images/headers/header-{n}.jpg` (300×200px)
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
2. Add pattern header comment at top of file
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
- Add any tracking, analytics, or external calls without user opt-in
- Bundle premium plugins or nulled software
- Use copyrighted images or non-GPL assets
- Skip nonce checks on form submissions
- Output unescaped user data anywhere

---

## Build Commands
```
npm run dev       → development build with watch
npm run build     → production minified build
npm run pot       → generate .pot translation file
npx phpcs         → check PHP coding standards
```

---

## Pre-Submission Checklist (ThemeForest)
- [ ] Theme Check plugin — zero errors/warnings
- [ ] WPCS linting — zero errors
- [ ] HTML W3C validation — no errors
- [ ] WAVE accessibility audit — no errors
- [ ] WordPress Theme Unit Test data — all templates render correctly
- [ ] WooCommerce pages tested
- [ ] Mobile responsive on all breakpoints (320px, 768px, 1024px, 1440px)
- [ ] Cross-browser tested (Chrome, Firefox, Safari, Edge)
- [ ] screenshot.png is exactly 1200×900px
- [ ] readme.txt has correct format and changelog
- [ ] license.txt is present (GPL v2)
- [ ] All demo images are CC0 licensed
- [ ] Translation .pot file generated
- [ ] No console errors in browser
- [ ] Page speed score 80+ on GTmetrix or PageSpeed Insights

---

## Development Priority Order
1. `style.css` + `theme.json` + `index.php` (WordPress foundation)
2. `functions.php` + `inc/setup.php` + `inc/enqueue.php`
3. Header 1 (HTML + CSS + JS — sticky + mobile menu)
4. Footer 1 (HTML + CSS)
5. Core templates (index, single, page, archive, 404, search)
6. Customizer (header/footer switcher with thumbnail preview)
7. Block patterns (hero, features, CTA first)
8. Header 2, 3 + Footer 2, 3
9. WooCommerce integration
10. Additional patterns and templates
11. Demo content XML
12. Documentation
13. Final ThemeForest pre-submission checklist

# NexBlocks WordPress Theme

## Project Overview
Premium WordPress Block Theme for iNeedMarketer.
Built to ThemeForest submission standards.
Designed to be extended easily with new layouts.

## Tech Stack
- WordPress 6.0+ (Full Site Editing)
- PHP 8.0+
- Vanilla JavaScript (ES6 modules)
- SCSS → compiled CSS
- Webpack for bundling
- No jQuery required (theme-side)

## Coding Standards
- Follow WordPress Coding Standards (WPCS)
- Use tabs for indentation (WordPress standard)
- All strings must be translation-ready: __('text', 'nexblocks')
- Escape all output: esc_html(), esc_url(), esc_attr()
- Use wp_enqueue_scripts() for all assets
- No inline CSS or JS in PHP files
- Comment all functions with PHPDoc blocks

## File Naming Rules
- PHP files: kebab-case (header-manager.php)
- CSS files: kebab-case matching PHP (header-1.css)
- JS files: camelCase (headerManager.js)
- Template parts: kebab-case (header-agency.html)
- Block patterns: kebab-case slug

## Adding New Headers (Future)
1. Create: parts/headers/header-{n}.html
2. Create: patterns/headers/header-{n}.php
3. Create: assets/css/headers/header-{n}.css
4. Add entry in: inc/customizer/header-options.php array
5. Add thumbnail image: assets/images/headers/header-{n}.jpg
Header manager auto-discovers — no other changes needed.

## Adding New Footers (Future)
Same pattern as headers, in footers/ directories.

## Adding New Templates (Future)
1. Create: patterns/templates/template-{slug}.php
Template manager auto-discovers from directory.

## Important Paths
- Theme root: /nexblocks/
- Patterns: /nexblocks/patterns/
- Template parts: /nexblocks/parts/
- Assets: /nexblocks/assets/
- PHP includes: /nexblocks/inc/

## Environment
- Hosted on Hostinger (shared or cloud)
- Dev: Local by Flywheel or LocalWP
- WordPress version: 6.0+

## DO NOT
- Add jQuery dependency for theme features
- Use deprecated WordPress functions
- Hardcode URLs (use get_template_directory_uri())
- Commit node_modules/ or vendor/
- Use inline scripts (use wp_add_inline_script() if needed)

## Build Commands
npm run dev       → development build with watch
npm run build     → production minified build
npm run pot       → generate .pot translation file

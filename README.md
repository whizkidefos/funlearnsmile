# FunLearn Smile WordPress Theme

A vibrant, playful, and modern WordPress theme designed for FunLearn Smile - a charity dedicated to bringing joyful, play-based education to disadvantaged children around the world.

## 🎨 Theme Features

- **Modern Design**: Beautiful, child-friendly design with playful animations and bright colors
- **Responsive**: Fully responsive design that works perfectly on all devices
- **Fast Performance**: Optimized for speed with clean code and minimal dependencies
- **Accessible**: WCAG compliant with proper semantic HTML and ARIA labels
- **SEO Optimized**: Built-in schema markup and SEO best practices
- **Customizable**: Easy customization through WordPress Customizer
- **Animation Library**: Smooth scroll animations and playful micro-interactions

## 🎨 Color Palette

- **Bright Yellow** (#FFD700) - Happiness and energy
- **Sky Blue** (#00BFFF) - Calm and trust
- **Grass Green** (#32CD32) - Growth and learning
- **Soft Coral** (#FF6F61) - Warmth and friendliness
- **Deep Blue** (#0D4F7D) - Professional and trustworthy

## 📦 Installation

### Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- Node.js 16+ and npm (for development)

### Step 1: Upload Theme

1. Download the theme ZIP file
2. Go to WordPress Admin → Appearance → Themes → Add New
3. Click "Upload Theme" and select the ZIP file
4. Click "Install Now" and then "Activate"

### Step 2: Install Dependencies (For Development)

If you plan to modify the theme's CSS:

```bash
cd wp-content/themes/funlearnsmile-theme
npm install
```

### Step 3: Build CSS

Compile Tailwind CSS:

```bash
# For development (with watch mode)
npm run dev

# For production (minified)
npm run build
```

**Important**: After running the build command, update `functions.php` to load the compiled CSS:

Change this line:
```php
wp_enqueue_style( 'funlearnsmile-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
```

To:
```php
wp_enqueue_style( 'funlearnsmile-main', get_template_directory_uri() . '/assets/css/output.css', array(), '1.0.0' );
```

## 🎯 Initial Setup

### 1. Set Up Menus

1. Go to Appearance → Menus
2. Create a new menu called "Primary Menu"
3. Add pages: Home, About Us, Our Work, Blog, Contact, Donate
4. Assign to "Primary Menu" location
5. Create another menu for "Footer Menu" (optional)

### 2. Configure Homepage

1. Go to Settings → Reading
2. Select "A static page"
3. Set Homepage to your homepage
4. Set Posts page to your blog page

### 3. Upload Logo

1. Go to Appearance → Customize → Site Identity
2. Upload your logo (recommended size: 400x100px)
3. Upload Site Icon (recommended size: 512x512px)

### 4. Customize Theme Settings

Navigate to Appearance → Customize → FunLearn Smile Options:

- **Theme Colors**: Adjust primary and secondary colors
- **Footer Settings**: Add custom copyright text
- **Social Media**: Add Instagram, Facebook, Twitter URLs
- **Contact Information**: Add email, phone, and address

### 5. Set Up Widgets

1. Go to Appearance → Widgets
2. Add widgets to Footer Widget Area 1, 2, and 3
3. Recommended widgets:
   - About text widget
   - Recent posts
   - Categories
   - Custom HTML for social links

## 📁 File Structure

```
funlearnsmile-theme/
├── assets/
│   ├── css/
│   │   ├── main.css (source)
│   │   └── output.css (compiled - gitignored)
│   ├── js/
│   │   ├── main.js
│   │   └── customizer.js
│   └── images/
│       ├── icon.png
│       └── logo.png
├── inc/
│   ├── customizer.php
│   └── template-functions.php
├── template-parts/
│   └── (template part files)
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── single.php
├── style.css
├── tailwind.config.js
├── package.json
└── README.md
```

## 🎨 Customization

### Fonts

The theme uses:
- **Fredoka** for headings (Google Fonts)
- **Nunito** for body text (Google Fonts)

To change fonts, edit `functions.php` and update the Google Fonts URL.

### Colors

Colors can be customized in two ways:

1. **WordPress Customizer** (Appearance → Customize → FunLearn Smile Options → Theme Colors)
2. **Tailwind Config** (edit `tailwind.config.js` for more control)

### Animations

Animations are controlled via:
- `assets/css/main.css` - CSS animations
- `assets/js/main.js` - JavaScript animations

## 📱 Responsive Breakpoints

- Mobile: < 640px
- Tablet: 640px - 1024px
- Desktop: > 1024px

## ♿ Accessibility

The theme follows WCAG 2.1 AA standards:
- Proper heading hierarchy
- ARIA labels on interactive elements
- Keyboard navigation support
- Sufficient color contrast
- Skip to content link
- Alt text for images

## 🚀 Performance Optimization

- Minified CSS and JavaScript in production
- Lazy loading for images (WordPress native)
- Preconnect to Google Fonts
- Deferred JavaScript loading
- Optimized database queries
- Clean, semantic HTML

## 📄 Page Templates

The theme includes:
- **Front Page** (Homepage with hero section)
- **Default Page** (Standard page layout)
- **Single Post** (Blog post layout)
- **Archive** (Blog listing)
- **404 Page** (Custom error page)

## 🔧 Development

### Watch Mode

Run Tailwind in watch mode during development:

```bash
npm run dev
```

### Production Build

Create minified CSS for production:

```bash
npm run build
```

### Adding Custom Styles

1. Edit `assets/css/main.css`
2. Run `npm run dev` to see changes
3. Run `npm run build` before deploying

## 🐛 Troubleshooting

### Styles Not Loading

1. Make sure you've run `npm run build`
2. Check that `functions.php` is loading `output.css` not `main.css`
3. Clear WordPress cache
4. Hard refresh browser (Ctrl+Shift+R / Cmd+Shift+R)

### JavaScript Not Working

1. Check browser console for errors
2. Make sure jQuery is loaded
3. Clear browser cache

### Animations Not Running

1. Check if IntersectionObserver is supported in browser
2. Verify JavaScript file is loaded
3. Check for console errors

## 📝 Support

For support, please contact:
- Email: infofunlearnsmile@gmail.com
- Website: https://www.funlearnsmile.org

## 📜 License

This theme is licensed under the GNU General Public License v2 or later.

## 🙏 Credits

- Theme Design & Development: Fun Learn Smile Team
- Fonts: Google Fonts (Fredoka & Nunito)
- Icons: Heroicons (via inline SVG)
- Framework: Tailwind CSS

## 📈 Changelog

### Version 1.0.0
- Initial release
- Homepage with hero section
- Blog functionality
- Custom widgets
- Responsive design
- Accessibility features
- Performance optimizations

---

Made with ❤️ for FunLearn Smile - Bringing joy through play-based education
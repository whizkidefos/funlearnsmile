# FunLearn Smile WordPress Theme

A vibrant, playful, and modern WordPress theme designed for FunLearn Smile - a charity dedicated to bringing joyful, play-based education to disadvantaged children across Ghana.

## 🎨 Theme Features

- **Modern Design**: Beautiful, child-friendly design with playful animations and bright colors
- **Responsive**: Fully responsive design that works perfectly on all devices
- **Fast Performance**: Optimized for speed with clean code and minimal dependencies
- **Accessible**: WCAG compliant with proper semantic HTML and ARIA labels
- **SEO Optimized**: Built-in schema markup and SEO best practices
- **Custom Post Types**: Gallery Items, Annual Reports, and Testimonials
- **PayPal Integration**: Complete donation system with tracking
- **Customizable**: Extensive customization through WordPress Customizer
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
- MySQL 5.7 or higher
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

## 🎯 Initial Setup

### 1. Set Up Menus

1. Go to Appearance → Menus
2. Create a new menu called "Primary Menu"
3. Add pages: Home, About, Our Work, Gallery, Blog, Get Involved, Donate
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

#### Contact Information
- Email address
- Phone number
- Physical address
- WhatsApp number
- WhatsApp welcome message

#### Social Media
- Instagram URL
- Facebook URL
- Twitter URL
- LinkedIn URL

#### Footer Settings
- Custom copyright text
- Footer description
- Credit link URL (for "Built with ❤️ in Manchester")

#### PayPal Settings
- PayPal Client ID
- Payment mode (Sandbox/Live)
- Currency (GBP/USD/EUR)

### 5. Configure Custom Post Types

The theme includes three custom post types that need to be populated:

#### Gallery Items
1. Go to Gallery → Add New
2. Add title (e.g., "Children Playing Football")
3. Set featured image
4. Select category (Activities, Learning, Events, Community)
5. Publish

#### Annual Reports
1. Go to Annual Reports → Add New
2. Add title and description
3. Enter report year (e.g., "2023/24")
4. Click "Upload PDF" to add report file
5. Publish

#### Testimonials
1. Go to Testimonials → Add New
2. Add testimonial text in editor
3. Enter person name and role
4. Upload photo (optional)
5. Publish

## 📄 Page Templates

The theme includes these custom page templates:

### Template: About
- Mission statement
- Team section
- Values showcase
- Impact statistics

### Template: Our Work
- Mission overview
- Programs & activities
- Impact stories
- Annual reports (pulls from Annual Reports CPT)

### Template: Donate
- Donation amount selector
- PayPal integration
- Impact descriptions
- Testimonial from founder

### Template: Contact
- AJAX contact form
- Contact information display
- Map placeholder
- Social media links

### Template: Get Involved
- Volunteer opportunities
- Application form
- Testimonials (pulls from Testimonials CPT)
- Call-to-action sections

### Template: Gallery
- Filterable photo gallery
- Category filtering
- Lightbox viewer
- Pulls from Gallery Items CPT

## 💳 PayPal Donation Setup

### 1. Get PayPal Credentials

**For Testing (Sandbox):**
1. Go to https://developer.paypal.com/
2. Log in with your PayPal account
3. Create a Sandbox app
4. Copy the "Client ID"

**For Live Payments:**
1. Go to https://developer.paypal.com/
2. Switch to "Live" mode
3. Create a Live app
4. Copy the "Client ID"

### 2. Configure in WordPress

1. Go to Appearance → Customize → PayPal Settings
2. Paste your Client ID
3. Select Mode: "Sandbox" for testing, "Live" for production
4. Select Currency (GBP recommended)
5. Click "Publish"

### 3. View Donations

All donations are tracked in WordPress Admin:
- Go to Dashboard → Donations
- View donation history, amounts, and donor information
- Email notifications sent to admin for each donation

## 🖼️ Managing Content

### Gallery

**Add Gallery Items:**
1. Gallery → Add New
2. Title: Short description
3. Featured Image: Upload photo
4. Category: Select from Activities, Learning, Events, Community
5. Publish

**Tips:**
- Use high-quality images (minimum 800x800px)
- Images are automatically cropped to square
- Categories are filterable on frontend

### Annual Reports

**Add Reports:**
1. Annual Reports → Add New
2. Title: Report name
3. Report Year: Enter year (e.g., "2023/24")
4. Click "Upload PDF" button
5. Select or upload PDF file
6. Add description in editor (optional)
7. Publish

### Testimonials

**Add Testimonials:**
1. Testimonials → Add New
2. Content: Enter the testimonial quote
3. Person Name: Volunteer's name
4. Role: Their role (e.g., "Volunteer Teacher")
5. Featured Image: Upload photo (optional)
6. Publish

## 🎨 Customization

### Fonts

The theme uses:
- **Fredoka** for headings (Google Fonts)
- **Nunito** for body text (Google Fonts)

### Login Screen

The theme includes a custom branded login screen that matches your site design with animated background shapes and theme colors.

### WhatsApp Integration

**Setup:**
1. Go to Appearance → Customize → Contact Information
2. Enter WhatsApp number with country code (e.g., 447123456789)
3. Enter welcome message
4. Floating button appears on all pages

## 📱 Responsive Breakpoints

- Mobile: < 640px
- Tablet: 640px - 1024px
- Desktop: > 1024px

## ♿ Accessibility

The theme follows WCAG 2.1 AA standards:
- Proper heading hierarchy
- ARIA labels on interactive elements
- Keyboard navigation support
- Sufficient color contrast (4.5:1 minimum)
- Skip to content link
- Alt text for images

## 🚀 Performance Optimization

- Minified CSS and JavaScript in production
- Lazy loading for images
- Preconnect to Google Fonts
- Deferred JavaScript loading
- Optimized database queries
- Clean, semantic HTML

## 🐛 Troubleshooting

### PayPal Not Working

1. Verify Client ID is correct
2. Check mode (Sandbox vs Live)
3. Check browser console for errors
4. Test with Sandbox first before going live

### Gallery Filtering Issues

1. Open browser console (F12)
2. Click filter buttons
3. Check console output for category mismatches
4. Verify gallery items have categories assigned

### Contact Form Not Sending

1. Verify email is configured in Customizer
2. Check spam folder
3. Test with different email addresses

## 📊 Database Tables

The theme creates these custom tables:

### wp_funlearnsmile_donations
Stores donation records with order ID, donor information, amount, currency, transaction status, and timestamp.

**Access:** Dashboard → Donations

## 📝 Support

For support, please contact:
- Email: infofunlearnsmile@gmail.com
- Website: https://www.funlearnsmile.org

## 📜 License

This theme is licensed under the GNU General Public License v2 or later.

## 🙏 Credits

- Theme Design & Development: FunLearn Smile Team
- Fonts: Google Fonts (Fredoka & Nunito)
- Icons: Heroicons (via inline SVG)
- Framework: Tailwind CSS
- Payment Processing: PayPal

## 📈 Changelog

### Version 1.0.0 - January 2026

**Core Features:**
- Responsive homepage with hero section and statistics
- Custom page templates (About, Our Work, Donate, Contact, Get Involved, Gallery)
- Blog functionality with archive and single post layouts
- Custom 404 page

**Custom Post Types:**
- Gallery Items with categories and lightbox
- Annual Reports with PDF management
- Testimonials with photos and roles

**Integrations:**
- PayPal donation system with admin tracking
- WhatsApp floating button
- AJAX contact form
- Social media links

**Customization:**
- Comprehensive WordPress Customizer options
- Custom login screen
- Footer customization
- Color and typography controls

**Performance:**
- Optimized asset loading
- Lazy image loading
- Minified CSS/JS
- Clean database queries

**Accessibility:**
- WCAG 2.1 AA compliant
- Keyboard navigation
- Screen reader support
- Proper ARIA labels

---

Made with ❤️ in Manchester for FunLearn Smile - Bringing joy through play-based education across Ghana

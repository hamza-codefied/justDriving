# Just Driving - Complete Code Guide

## Table of Contents
1. [Project Overview](#project-overview)
2. [Technology Stack](#technology-stack)
3. [Project Structure](#project-structure)
4. [Routes and Routing](#routes-and-routing)
5. [Views and Templates](#views-and-templates)
6. [Assets and Styling](#assets-and-styling)
7. [JavaScript Functionality](#javascript-functionality)
8. [Features and Functionality](#features-and-functionality)
9. [Configuration](#configuration)
10. [Database Structure](#database-structure)
11. [Deployment and Setup](#deployment-and-setup)
12. [File Organization](#file-organization)

---

## Project Overview

**Just Driving** is a comprehensive web application built for driving schools in Denmark. It serves as a marketing and information website that showcases the complete digital management system for driving schools, including administration, teaching, booking, and financial management features.

### Key Characteristics:
- **Framework**: Laravel 12.0 (PHP 8.2+)
- **Template Engine**: Blade
- **Frontend**: Tailwind CSS with custom styling
- **Language**: Danish (da)
- **Purpose**: Marketing website for a driving school management platform

### Main Features Showcased:
1. Online Administration System
2. Online Teaching System
3. Online Booking System
4. Online Financial System
5. Contact and Pricing Information
6. About Us Section

---

## Technology Stack

### Backend
- **PHP**: 8.2+
- **Laravel Framework**: 12.0
- **Laravel Tinker**: 2.10.1

### Frontend
- **Tailwind CSS**: 4.1.14 (via CDN)
- **Vite**: 7.0.7 (Build tool)
- **Custom CSS**: Custom font definitions and animations
- **JavaScript Libraries**:
  - GSAP (GreenSock Animation Platform) 3.12.5
  - ScrollTrigger Plugin
  - Splide.js 4.1.4 (Carousel/Slider)
  - Lucide Icons (Icon library)

### Development Tools
- **Laravel Pint**: Code formatting
- **PHPUnit**: Testing framework
- **Laravel Sail**: Docker development environment
- **Laravel Pail**: Log viewer

---

## Project Structure

```
justDriving/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── Controller.php          # Base controller (abstract)
│   ├── Models/
│   │   └── User.php                   # User model (Laravel default)
│   └── Providers/
│       └── AppServiceProvider.php     # Service provider
├── bootstrap/
│   ├── app.php                        # Application bootstrap
│   └── cache/                         # Cached files
├── config/                            # Configuration files
│   ├── app.php                        # Application config
│   ├── auth.php                       # Authentication config
│   ├── cache.php                      # Cache config
│   ├── database.php                   # Database config
│   ├── filesystems.php                # File storage config
│   ├── logging.php                    # Logging config
│   ├── mail.php                       # Mail config
│   ├── queue.php                      # Queue config
│   ├── services.php                   # Services config
│   └── session.php                    # Session config
├── database/
│   ├── database.sqlite                # SQLite database
│   ├── factories/
│   │   └── UserFactory.php           # User factory
│   ├── migrations/                    # Database migrations
│   └── seeders/
│       └── DatabaseSeeder.php         # Database seeder
├── public/
│   ├── css/
│   │   └── styles.css                 # Custom stylesheet
│   ├── fonts/
│   │   ├── manrope/                   # Manrope font family
│   │   └── product-sans/              # Product Sans font family
│   ├── images/                        # All image assets
│   ├── js/
│   │   └── script.js                  # Custom JavaScript
│   ├── favicon.png                    # Site favicon
│   ├── index.php                      # Entry point
│   └── robots.txt                     # SEO robots file
├── resources/
│   ├── css/
│   │   └── app.css                   # Vite CSS entry
│   ├── js/
│   │   ├── app.js                    # Vite JS entry
│   │   └── bootstrap.js              # JS bootstrap
│   └── views/
│       ├── layouts/
│       │   ├── header.blade.php       # Site header/navigation
│       │   └── footer.blade.php       # Site footer
│       ├── administration.blade.php   # Administration system page
│       ├── booking.blade.php          # Booking system page
│       ├── home.blade.php             # Homepage
│       ├── kontakt.blade.php          # Contact page
│       ├── login.blade.php            # Login page
│       ├── okonomi.blade.php          # Financial system page
│       ├── omJustDriving.blade.php    # About Us page
│       ├── priser.blade.php           # Pricing page
│       ├── undervisning.blade.php     # Teaching system page
│       └── welcome.blade.php          # Welcome page (default)
├── routes/
│   ├── console.php                    # Console routes
│   └── web.php                        # Web routes
├── storage/                            # Storage directory
├── tests/                             # Test files
├── vendor/                             # Composer dependencies
├── .env                               # Environment configuration
├── artisan                            # Laravel CLI
├── composer.json                      # PHP dependencies
├── composer.lock                      # Locked PHP dependencies
├── package.json                       # Node dependencies
├── package-lock.json                   # Locked Node dependencies
├── phpunit.xml                        # PHPUnit config
├── tailwind.config.js                 # Tailwind CSS config
└── vite.config.js                     # Vite build config
```

---

## Routes and Routing

All routes are defined in `routes/web.php`. The application uses simple route closures that return Blade views directly.

### Route Definitions

```php
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/administration-system', function () {
    return view('administration');
})->name('administration');

Route::get('/undervisning-system', function () {
    return view('undervisning');
})->name('undervisning');

Route::get('/booking-system', function () {
    return view('booking');
})->name('booking');

Route::get('/okonomi-system', function () {
    return view('okonomi');
})->name('okonomi');

Route::get('/om-just-driving', function () {
    return view('omJustDriving');
})->name('omJustDriving');

Route::get('/kontakt-os', function () {
    return view('kontakt');
})->name('kontakt');

Route::get('/priser', function () {
    return view('priser');
})->name('priser');

Route::get('/login', function () {
    return view('login');
})->name('login');
```

### Route Naming Convention
- All routes use named routes for easy reference
- Route names follow camelCase convention
- URLs use kebab-case (hyphenated)

### Route Structure
- **No Controllers**: All routes use closures directly
- **Simple Views**: Each route returns a Blade view
- **Named Routes**: All routes have names for `route()` helper usage

---

## Views and Templates

### Layout System

The application uses a component-based layout system with reusable header and footer components.

#### Header Component (`resources/views/layouts/header.blade.php`)

**Features:**
- Responsive navigation with mobile hamburger menu
- Mega menu dropdown for "Funktioner" (Features)
- Logo linking to homepage
- Login button
- Smooth hover animations
- JavaScript-powered mega menu positioning

**Navigation Structure:**
- Forside (Home)
- Funktioner (Features) - Dropdown with:
  - Online administrationssystem
  - Online undervisningsystem
  - Online bookingsystem
  - Online økonomisystem
- Om Os (About Us)
- Priser (Pricing)
- Kontakt (Contact)
- Login

**Technical Details:**
- Uses Tailwind CSS for styling
- Custom JavaScript for mega menu positioning
- Responsive design with mobile-first approach
- Z-index management for proper layering

#### Footer Component (`resources/views/layouts/footer.blade.php`)

**Features:**
- Four-column layout (responsive)
- Social media links (LinkedIn, Facebook, Instagram, TikTok)
- Company information
- Newsletter subscription form
- Login links for different user types
- Scroll-to-top button
- Smooth scroll functionality

**Sections:**
1. Company info and social links
2. Company links (Virksomheden)
3. Login links (Køreskole, Kørelærer, Elev)
4. Newsletter subscription

### Page Templates

#### 1. Homepage (`home.blade.php`)

**Sections:**
- Hero section with tagline and CTA
- Client logo carousel (Splide.js)
- Key features grid (6 feature cards)
- System showcase sections (4 scroll-triggered sections)
- Payment flow section
- Testimonials/Reviews carousel
- FAQ section with accordion
- Footer

**Key Features:**
- GSAP ScrollTrigger animations
- Dynamic feature data via PHP arrays
- FAQ accordion functionality
- Client logo infinite scroll

#### 2. Administration System (`administration.blade.php`)

**Sections:**
- Hero section
- Feature cards grid (7 features)
- Holdadministration section
- Features workflow (6-step process)
- Afdelingsstyring section
- Notification system section
- Synkroniseret data section
- SMS notifications section
- Data security section

**Technical Features:**
- Intersection Observer animations
- Scroll-triggered content reveals
- Image-text alternating layouts

#### 3. Booking System (`booking.blade.php`)

**Sections:**
- Hero section
- Feature cards (4 features)
- Booking & payment integration section
- Dynamic forms section (3 feature cards)
- Footer

**Key Features:**
- Simple scroll animations
- Feature showcase cards
- Integration information

#### 4. Financial System (`okonomi.blade.php`)

**Sections:**
- Hero section
- Feature cards (4 features)
- Payment automation section
- Automation features (4 cards)
- Payment overview section
- Footer

**Key Features:**
- Payment flow explanations
- Automation benefits
- Integration details

#### 5. Teaching System (`undervisning.blade.php`)

**Sections:**
- Hero section
- System features (7 cards)
- Digital lesson plans section
- Lesson plan features (4 cards)
- Customized teaching section
- Online theory tests section
- Footer

**Key Features:**
- Teaching system showcase
- Multi-language support information
- Theory test integration

#### 6. Pricing Page (`priser.blade.php`)

**Sections:**
- Hero with pricing headline
- Features included section (organized in columns):
  - System og administration
  - Undervisning og læring
  - Økonomi og betaling
  - Booking og tilmelding
  - Digital dokumentation og elevstyring
  - Kommunikation og påmindelser
- Pricing CTA section
- Testimonials carousel
- FAQ section
- Footer

**Key Features:**
- Comprehensive feature list
- Organized pricing information
- Feature comparison layout

#### 7. Contact Page (`kontakt.blade.php`)

**Sections:**
- Hero section
- Contact form and information
- Footer

**Features:**
- Contact form (Name, Phone, Email, Budget, Message)
- Company contact information
- Address, phone, email display

#### 8. About Us (`omJustDriving.blade.php`)

**Sections:**
- Hero section
- Ecosystem information
- Platform showcase (video)
- Why choose us section
- CTA section
- Footer

**Key Features:**
- Video integration
- Company story
- Partnership information

#### 9. Login Page (`login.blade.php`)

**Features:**
- Three login card options:
  - Køreskole (Driving School)
  - Kørelærer (Instructor)
  - Elever (Students)
- Each card links to external login system
- Custom animations and styling
- Glass morphism design

**Technical Details:**
- Custom CSS animations
- Ripple effect on buttons
- Fade-in animations
- Responsive card grid

### Blade Template Features

**Common Patterns:**
- `@include('layouts.header')` - Includes header
- `@include('layouts.footer')` - Includes footer
- `{{ asset('images/filename.png') }}` - Asset helper
- `{{ route('routeName') }}` - Route helper
- `@php ... @endphp` - PHP code blocks
- `@foreach ... @endforeach` - Loops
- `@if ... @endif` - Conditionals

**Data Management:**
- PHP arrays defined in templates for dynamic content
- Feature lists, FAQs, testimonials stored as arrays
- Easy to modify without database changes

---

## Assets and Styling

### CSS Architecture

#### Custom Stylesheet (`public/css/styles.css`)

**Font Definitions:**
- **Product Sans**: Complete font family (Thin, Light, Regular, Medium, Bold, Black) with italic variants
- **Manrope**: Complete font family (ExtraLight, Light, Regular, Medium, SemiBold, Bold, ExtraBold)

**Font Classes:**
- `.font-product-sans-*` - Product Sans variants
- `.font-manrope-*` - Manrope variants

**Animations:**
- `@keyframes scroll-left` - Left scrolling animation
- `@keyframes scroll-right` - Right scrolling animation
- `@keyframes moveLogos` - Logo movement
- `@keyframes floatUpDown` - Floating animation

**Component Styles:**
- Hero background gradients
- Testimonial elements positioning
- Logo animation classes
- Mega menu hover effects

**Layout Styles:**
- Content container
- Body styling
- Header z-index management
- Background decorations

### Tailwind CSS Configuration

**Configuration File:** `tailwind.config.js`

**Custom Fonts:**
- Product Sans as primary font
- Manrope as secondary font
- System fonts as fallback

**Content Scanning:**
- Scans all HTML and PHP files
- Includes subdirectories

### Image Assets

**Location:** `public/images/`

**Asset Categories:**
- **Icons**: Feature icons, UI elements
- **Logos**: Company logos, client logos
- **Backgrounds**: Background images, gradients
- **UI Elements**: Buttons, arrows, decorative elements
- **Testimonials**: Review images
- **Hero Images**: Main page images

**Key Images:**
- `logo.png` - Main logo
- `favicon.png` - Site favicon
- `Background.svg` - Background pattern
- `newLaptop.png` - Hero laptop image
- Various feature and system screenshots

### Font Assets

**Location:** `public/fonts/`

**Font Families:**
1. **Product Sans** (`product-sans/`)
   - Multiple weights and styles
   - TTF format
   - Used for headings and primary text

2. **Manrope** (`manrope/`)
   - Multiple weights
   - TTF format
   - Used for body text and secondary content

---

## JavaScript Functionality

### Main JavaScript File (`public/js/script.js`)

**Features:**

1. **FAQ Accordion:**
   - Toggle functionality
   - Icon switching (plus/minus)
   - Smooth animations
   - Single open at a time

2. **Lucide Icons:**
   - Dynamic icon rendering
   - Icon updates on interactions

3. **Splide Carousel:**
   - Client logo carousel
   - Infinite loop
   - Auto-play
   - No user interaction required

4. **Year Display:**
   - Dynamic year calculation
   - Copyright year management

### Inline JavaScript in Templates

**GSAP Animations (home.blade.php):**
- ScrollTrigger setup
- Element animations on scroll
- Image and text slide-in effects
- Staggered animations

**Intersection Observer (Multiple Pages):**
- Scroll-triggered animations
- Fade-in effects
- Translate animations
- Performance-optimized

**Splide Initialization:**
- Client logo slider
- Custom configuration
- Auto-play settings

### External Libraries

**CDN Resources:**
- **Tailwind CSS**: Via CDN (for rapid prototyping)
- **GSAP**: Animation library
- **ScrollTrigger**: GSAP plugin
- **Splide.js**: Carousel library
- **Lucide Icons**: Icon library

---

## Features and Functionality

### 1. Navigation System

**Desktop Navigation:**
- Horizontal menu bar
- Mega menu on hover
- Smooth transitions
- Logo and login button

**Mobile Navigation:**
- Hamburger menu
- Collapsible menu
- Accordion-style features dropdown
- Full-width mobile menu

**Mega Menu:**
- 4-column layout
- Icon-based navigation
- Sub-menu items with anchors
- Smooth hover effects
- JavaScript positioning

### 2. Responsive Design

**Breakpoints:**
- Mobile: Default
- Tablet: `md:` prefix (768px+)
- Desktop: `lg:` prefix (1024px+)
- Large Desktop: `xl:` prefix (1280px+)

**Responsive Features:**
- Flexible grid layouts
- Responsive typography
- Mobile-optimized navigation
- Touch-friendly interactions

### 3. Animations

**Scroll Animations:**
- GSAP ScrollTrigger
- Intersection Observer
- Fade-in effects
- Slide-in effects
- Staggered animations

**Hover Effects:**
- Card lift effects
- Scale transformations
- Color transitions
- Shadow effects

**Page Animations:**
- Smooth scrolling
- Scroll-to-top button
- Logo carousel
- Testimonial animations

### 4. Content Management

**Dynamic Content:**
- PHP arrays for features
- PHP arrays for FAQs
- Easy content updates
- No database required for content

**Content Sections:**
- Hero sections
- Feature grids
- Information sections
- CTA sections
- Footer

### 5. Forms

**Contact Form:**
- Name input
- Phone input
- Email input
- Budget input
- Message textarea
- Submit button

**Newsletter Form:**
- Email input
- Subscribe button
- Footer placement

**Note:** Forms are currently frontend-only (no backend processing implemented)

### 6. External Integrations

**Login System:**
- Links to external system: `https://school.just-driving.dk/login?lang=da`
- Three user types supported
- Opens in new tab

**External Services:**
- e-teori.dk (Theory teaching)
- findkoreskole.dk (Student enrollment)
- just-pay.dk (Payment processing)

---

## Configuration

### Application Configuration (`config/app.php`)

**Key Settings:**
- Application name
- Environment (production/development)
- Debug mode
- URL configuration
- Timezone (likely Europe/Copenhagen)
- Locale (Danish)

### Database Configuration (`config/database.php`)

**Database:**
- SQLite database (`database/database.sqlite`)
- Default Laravel migrations
- User table structure

**Note:** This is primarily a static marketing site, so database usage is minimal.

### Vite Configuration (`vite.config.js`)

**Build Tool:**
- Laravel Vite plugin
- Tailwind CSS plugin
- CSS and JS entry points
- Hot module replacement

### Tailwind Configuration (`tailwind.config.js`)

**Settings:**
- Content scanning paths
- Custom font families
- Extended theme
- No plugins

### Environment Variables (`.env`)

**Required Variables:**
- `APP_NAME`
- `APP_ENV`
- `APP_KEY`
- `APP_DEBUG`
- `APP_URL`
- Database configuration
- Mail configuration

---

## Database Structure

### Current Database Setup

**Database Type:** SQLite

**Tables (Laravel Default):**
1. **users** - User authentication (if needed)
2. **cache** - Cache storage
3. **cache_locks** - Cache locks
4. **jobs** - Queue jobs
5. **job_batches** - Job batches
6. **failed_jobs** - Failed jobs
7. **sessions** - Session storage

**Note:** The application is primarily a static marketing site. Database is used minimally, mainly for Laravel's core functionality.

### Migrations

**Location:** `database/migrations/`

**Default Migrations:**
- `0001_01_01_000000_create_users_table.php`
- `0001_01_01_000001_create_cache_table.php`
- `0001_01_01_000002_create_jobs_table.php`

---

## Deployment and Setup

### Installation Steps

1. **Clone Repository:**
   ```bash
   git clone [repository-url]
   cd justDriving
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install Node Dependencies:**
   ```bash
   npm install
   ```

4. **Environment Setup:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup:**
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

6. **Build Assets:**
   ```bash
   npm run build
   ```

7. **Development Server:**
   ```bash
   php artisan serve
   npm run dev  # For Vite HMR
   ```

### Production Build

```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Server Requirements

- **PHP**: 8.2 or higher
- **Composer**: Latest version
- **Node.js**: 18+ (for asset building)
- **Web Server**: Apache/Nginx
- **Database**: SQLite (or MySQL/PostgreSQL)

### Deployment Checklist

- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Generate application key
- [ ] Run migrations
- [ ] Build assets (`npm run build`)
- [ ] Set proper file permissions
- [ ] Configure web server
- [ ] Set up SSL certificate
- [ ] Configure caching
- [ ] Test all routes
- [ ] Verify asset loading

---

## File Organization

### View Files Structure

```
resources/views/
├── layouts/
│   ├── header.blade.php    # Reusable header
│   └── footer.blade.php     # Reusable footer
├── home.blade.php           # Homepage
├── administration.blade.php # Admin system page
├── booking.blade.php        # Booking system page
├── okonomi.blade.php        # Financial system page
├── undervisning.blade.php    # Teaching system page
├── priser.blade.php         # Pricing page
├── kontakt.blade.php        # Contact page
├── omJustDriving.blade.php  # About page
├── login.blade.php          # Login page
└── welcome.blade.php        # Default welcome
```

### Asset Organization

```
public/
├── css/
│   └── styles.css           # Custom styles
├── js/
│   └── script.js            # Custom JavaScript
├── fonts/
│   ├── manrope/             # Manrope font files
│   └── product-sans/        # Product Sans font files
└── images/                  # All image assets
    ├── logo.png
    ├── favicon.png
    ├── Background.svg
    └── [other images]
```

### Naming Conventions

**Blade Files:**
- camelCase for multi-word files
- Descriptive names matching route names
- Layout files in `layouts/` subdirectory

**CSS Classes:**
- Tailwind utility classes
- Custom classes with descriptive names
- Font classes: `.font-{family}-{weight}`

**JavaScript:**
- Event-driven architecture
- DOM manipulation
- Library integration

---

## Key Design Patterns

### 1. Component-Based Layout
- Reusable header and footer
- Consistent structure across pages
- Easy maintenance

### 2. Data-Driven Content
- PHP arrays for dynamic content
- Easy content updates
- No database queries for content

### 3. Progressive Enhancement
- Works without JavaScript
- Enhanced with JavaScript
- Graceful degradation

### 4. Mobile-First Design
- Responsive breakpoints
- Touch-friendly interactions
- Optimized for all devices

---

## Browser Compatibility

**Supported Browsers:**
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

**Features Used:**
- CSS Grid
- Flexbox
- CSS Animations
- ES6+ JavaScript
- Intersection Observer API

---

## Performance Considerations

### Optimization Strategies

1. **Asset Optimization:**
   - Image optimization
   - Font subsetting
   - CSS minification
   - JavaScript minification

2. **Caching:**
   - Laravel view caching
   - Route caching
   - Config caching
   - Browser caching headers

3. **CDN Usage:**
   - External libraries via CDN
   - Reduced server load
   - Faster global delivery

4. **Lazy Loading:**
   - Images lazy loading
   - Scroll-triggered animations
   - On-demand content loading

---

## Security Considerations

### Current Security Measures

1. **Laravel Framework:**
   - Built-in CSRF protection
   - XSS protection
   - SQL injection prevention
   - Secure session handling

2. **Input Validation:**
   - Form validation (frontend)
   - Sanitization (if backend processing added)

3. **Asset Security:**
   - Secure asset serving
   - Proper file permissions

### Recommendations

1. **Form Processing:**
   - Add backend validation
   - Implement CSRF tokens
   - Sanitize inputs
   - Email validation

2. **Environment:**
   - Secure `.env` file
   - Production settings
   - Error handling

3. **HTTPS:**
   - SSL certificate
   - Secure connections
   - HSTS headers

---

## Maintenance and Updates

### Content Updates

**Easy Updates:**
- Feature lists in PHP arrays
- FAQ content in arrays
- Text content in Blade templates
- Image replacements in `public/images/`

### Code Updates

**Structure:**
- Clear file organization
- Consistent naming
- Commented code
- Modular components

### Version Control

**Git Workflow:**
- Feature branches
- Commit messages
- Code reviews
- Deployment process

---

## Support and Documentation

### Internal Documentation

- This code guide
- Inline comments
- File structure
- Route definitions

### External Resources

- Laravel Documentation: https://laravel.com/docs
- Tailwind CSS Documentation: https://tailwindcss.com/docs
- GSAP Documentation: https://greensock.com/docs
- Splide.js Documentation: https://splidejs.com

---

## Conclusion

This Just Driving project is a well-structured Laravel Blade application designed as a marketing website for a driving school management platform. It features:

- **Clean Architecture**: Organized file structure
- **Modern Frontend**: Tailwind CSS with custom styling
- **Smooth Animations**: GSAP and Intersection Observer
- **Responsive Design**: Mobile-first approach
- **Easy Maintenance**: Component-based layout
- **Performance Optimized**: CDN usage and lazy loading

The codebase is maintainable, scalable, and follows Laravel best practices. All content is easily updatable through PHP arrays and Blade templates, making it simple for non-developers to update content.

---

**Document Version:** 1.0  
**Last Updated:** 2025  
**Project:** Just Driving Marketing Website  
**Framework:** Laravel 12.0 with Blade Templates


# Just Driving - Local Setup Guide

## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Installation Steps](#installation-steps)
3. [Configuration](#configuration)
4. [Running the Project](#running-the-project)
5. [Troubleshooting](#troubleshooting)
6. [Additional Information](#additional-information)

---

## Prerequisites

Before you begin, you need to install the following software on your computer. This guide will walk you through each installation step.

### Required Software:

1. **PHP 8.2 or higher** - The programming language used by Laravel
2. **Composer** - PHP dependency manager
3. **Node.js 18+ and npm** - For managing JavaScript dependencies and building assets
4. **Git** - Version control system (if cloning from repository)
5. **Code Editor** (Optional but recommended) - Visual Studio Code, PhpStorm, etc.

### System Requirements:

- **Operating System**: Windows 10/11, macOS, or Linux
- **RAM**: Minimum 4GB (8GB recommended)
- **Disk Space**: At least 2GB free space
- **Internet Connection**: Required for downloading dependencies

---

## Installation Steps

### Step 1: Install PHP

#### For Windows:

1. **Download PHP:**
   - Visit: https://windows.php.net/download/
   - Download PHP 8.2 or higher (Thread Safe version recommended)
   - Choose the ZIP file (not the installer)

2. **Extract PHP:**
   - Extract the ZIP file to `C:\php` (or any location you prefer)
   - Remember this path as you'll need it later

3. **Add PHP to System PATH:**
   - Press `Windows Key + R`, type `sysdm.cpl`, and press Enter
   - Click on the "Advanced" tab
   - Click "Environment Variables"
   - Under "System Variables", find and select "Path", then click "Edit"
   - Click "New" and add the path to your PHP folder (e.g., `C:\php`)
   - Click "OK" on all windows

4. **Verify Installation:**
   - Open Command Prompt (cmd) or PowerShell
   - Type: `php -v`
   - You should see PHP version information

5. **Enable Required Extensions:**
   - Open `php.ini` file in your PHP folder (copy from `php.ini-development` if it doesn't exist)
   - Uncomment (remove the `;` at the start) these lines:
     ```
     extension=mbstring
     extension=openssl
     extension=pdo_sqlite
     extension=fileinfo
     extension=curl
     ```

#### For macOS:

1. **Using Homebrew (Recommended):**
   ```bash
   # Install Homebrew if you don't have it
   /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
   
   # Install PHP
   brew install php@8.2
   
   # Link PHP
   brew link php@8.2
   ```

2. **Verify Installation:**
   ```bash
   php -v
   ```

#### For Linux (Ubuntu/Debian):

```bash
# Update package list
sudo apt update

# Install PHP and required extensions
sudo apt install php8.2 php8.2-cli php8.2-common php8.2-mbstring php8.2-xml php8.2-curl php8.2-zip php8.2-sqlite3

# Verify installation
php -v
```

---

### Step 2: Install Composer

#### For Windows:

1. **Download Composer:**
   - Visit: https://getcomposer.org/download/
   - Download "Composer-Setup.exe"
   - Run the installer

2. **Installation Process:**
   - The installer will detect your PHP installation
   - If it doesn't, browse to your PHP folder (e.g., `C:\php\php.exe`)
   - Follow the installation wizard
   - Make sure "Add to PATH" is checked

3. **Verify Installation:**
   - Open Command Prompt or PowerShell
   - Type: `composer --version`
   - You should see Composer version information

#### For macOS:

```bash
# Download and install Composer
curl -sS https://getcomposer.org/installer | php

# Move to global location
sudo mv composer.phar /usr/local/bin/composer

# Verify installation
composer --version
```

#### For Linux:

```bash
# Download Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"

# Move to global location
sudo mv composer.phar /usr/local/bin/composer

# Verify installation
composer --version
```

---

### Step 3: Install Node.js and npm

#### For Windows:

1. **Download Node.js:**
   - Visit: https://nodejs.org/
   - Download the LTS (Long Term Support) version (18.x or higher)
   - Choose the Windows Installer (.msi)

2. **Installation:**
   - Run the installer
   - Follow the installation wizard
   - Make sure "Add to PATH" is checked
   - Complete the installation

3. **Verify Installation:**
   - Open Command Prompt or PowerShell
   - Type: `node -v` (should show version like v18.x.x)
   - Type: `npm -v` (should show version like 9.x.x)

#### For macOS:

1. **Using Homebrew:**
   ```bash
   brew install node
   ```

2. **Or Download Installer:**
   - Visit: https://nodejs.org/
   - Download macOS Installer
   - Run the installer

3. **Verify Installation:**
   ```bash
   node -v
   npm -v
   ```

#### For Linux:

```bash
# Using NodeSource repository (recommended)
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt-get install -y nodejs

# Verify installation
node -v
npm -v
```

---

### Step 4: Install Git (Optional - Only if cloning from repository)

#### For Windows:

1. **Download Git:**
   - Visit: https://git-scm.com/download/win
   - Download the installer
   - Run and follow the installation wizard

2. **Verify Installation:**
   - Open Command Prompt
   - Type: `git --version`

#### For macOS:

```bash
# Git usually comes pre-installed, but if not:
brew install git
```

#### For Linux:

```bash
sudo apt install git
```

---

## Configuration

### Step 5: Get the Project Files

You have two options:

#### Option A: If you have a ZIP file:

1. Extract the ZIP file to a location of your choice (e.g., `C:\Projects\justDriving` or `~/Projects/justDriving`)
2. Open Command Prompt/Terminal
3. Navigate to the project folder:
   ```bash
   cd path/to/justDriving
   ```

#### Option B: If you have a Git repository:

1. Open Command Prompt/Terminal
2. Navigate to where you want the project:
   ```bash
   cd C:\Projects  # Windows
   cd ~/Projects    # macOS/Linux
   ```
3. Clone the repository:
   ```bash
   git clone [repository-url]
   cd justDriving
   ```

---

### Step 6: Install PHP Dependencies

1. **Open Terminal/Command Prompt** in the project folder

2. **Install Composer dependencies:**
   ```bash
   composer install
   ```
   
   This will download all PHP packages required by the project. It may take a few minutes.

3. **If you encounter memory errors:**
   ```bash
   # Windows
   php -d memory_limit=-1 composer install
   
   # macOS/Linux
   COMPOSER_MEMORY_LIMIT=-1 composer install
   ```

---

### Step 7: Install Node.js Dependencies

1. **Still in the project folder**, run:
   ```bash
   npm install
   ```
   
   This will download all JavaScript packages. It may take a few minutes.

---

### Step 8: Environment Configuration

1. **Create Environment File:**
   - Look for a file named `.env.example` in the project root
   - Copy it and rename to `.env`:
   
   **Windows:**
   ```bash
   copy .env.example .env
   ```
   
   **macOS/Linux:**
   ```bash
   cp .env.example .env
   ```

2. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```
   
   This creates a unique encryption key for your application.

3. **Edit .env File (Optional):**
   - Open `.env` file in a text editor
   - Update these values if needed:
     ```
     APP_NAME="Just Driving"
     APP_ENV=local
     APP_DEBUG=true
     APP_URL=http://localhost:8000
     ```
   - For now, you can leave other settings as default

---

### Step 9: Database Setup

1. **Create SQLite Database:**
   
   **Windows:**
   ```bash
   type nul > database\database.sqlite
   ```
   
   **macOS/Linux:**
   ```bash
   touch database/database.sqlite
   ```

2. **Run Database Migrations:**
   ```bash
   php artisan migrate
   ```
   
   This creates the necessary database tables.

---

### Step 10: Build Assets

1. **Build Frontend Assets:**
   ```bash
   npm run build
   ```
   
   This compiles CSS and JavaScript files for production use.

---

## Running the Project

### Step 11: Start the Development Server

1. **Start Laravel Development Server:**
   ```bash
   php artisan serve
   ```
   
   You should see:
   ```
   INFO  Server running on [http://127.0.0.1:8000]
   ```

2. **Open Your Browser:**
   - Navigate to: `http://localhost:8000` or `http://127.0.0.1:8000`
   - You should see the Just Driving website!

3. **For Development with Hot Reload (Optional):**
   - Open a **new terminal window** (keep the first one running)
   - Navigate to the project folder
   - Run:
     ```bash
     npm run dev
     ```
   - This enables automatic page refresh when you change files

---

## Troubleshooting

### Common Issues and Solutions

#### Issue 1: "php is not recognized as an internal or external command"

**Solution:**
- PHP is not in your system PATH
- Re-add PHP to your system PATH (see Step 1)
- Restart your terminal/command prompt
- Verify with `php -v`

#### Issue 2: "composer is not recognized"

**Solution:**
- Composer is not installed or not in PATH
- Reinstall Composer (see Step 2)
- Restart terminal
- Verify with `composer --version`

#### Issue 3: "npm is not recognized"

**Solution:**
- Node.js is not installed or not in PATH
- Reinstall Node.js (see Step 3)
- Restart terminal
- Verify with `npm -v`

#### Issue 4: "Class 'PDO' not found" or SQLite errors

**Solution:**
- PHP SQLite extension is not enabled
- Edit `php.ini` file
- Uncomment: `extension=pdo_sqlite`
- Restart your web server/terminal

#### Issue 5: "Permission denied" (macOS/Linux)

**Solution:**
- Add `sudo` before commands that need admin access
- Or fix permissions:
  ```bash
  sudo chown -R $USER:$USER storage bootstrap/cache
  chmod -R 775 storage bootstrap/cache
  ```

#### Issue 6: Port 8000 is already in use

**Solution:**
- Use a different port:
  ```bash
  php artisan serve --port=8001
  ```
- Then access: `http://localhost:8001`

#### Issue 7: "Memory limit exhausted" during composer install

**Solution:**
```bash
# Windows
php -d memory_limit=-1 composer install

# macOS/Linux
COMPOSER_MEMORY_LIMIT=-1 composer install
```

#### Issue 8: Assets not loading (CSS/JS not working)

**Solution:**
1. Make sure you ran `npm run build`
2. Clear Laravel cache:
   ```bash
   php artisan cache:clear
   php artisan config:clear
   php artisan view:clear
   ```
3. Rebuild assets:
   ```bash
   npm run build
   ```

#### Issue 9: "SQLSTATE[HY000] [14] unable to open database file"

**Solution:**
- Make sure `database/database.sqlite` file exists
- Check file permissions
- Recreate the database:
  ```bash
  # Delete old database
  rm database/database.sqlite  # macOS/Linux
  del database\database.sqlite  # Windows
  
  # Create new one
  touch database/database.sqlite  # macOS/Linux
  type nul > database\database.sqlite  # Windows
  
  # Run migrations
  php artisan migrate
  ```

---

## Additional Information

### Development Workflow

1. **Making Changes:**
   - Edit files in `resources/views/` for page content
   - Edit `public/css/styles.css` for custom styles
   - Edit `public/js/script.js` for JavaScript
   - Edit `routes/web.php` for routing

2. **Viewing Changes:**
   - If using `npm run dev`: Changes appear automatically
   - If using `npm run build`: Rebuild after changes:
     ```bash
     npm run build
     ```
   - Refresh browser to see changes

3. **Stopping the Server:**
   - Press `Ctrl + C` in the terminal where the server is running

### Project Structure Quick Reference

- **Views**: `resources/views/` - All page templates
- **CSS**: `public/css/styles.css` - Custom styles
- **JavaScript**: `public/js/script.js` - Custom scripts
- **Images**: `public/images/` - All images
- **Routes**: `routes/web.php` - URL routing

### Useful Commands

```bash
# Start development server
php artisan serve

# Build assets for production
npm run build

# Watch for changes (development)
npm run dev

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Run database migrations
php artisan migrate

# Check Laravel version
php artisan --version
```

### Getting Help

If you encounter issues not covered here:

1. **Check Laravel Documentation**: https://laravel.com/docs
2. **Check Error Messages**: Read the full error message in terminal
3. **Check Logs**: Look in `storage/logs/laravel.log`
4. **Verify Requirements**: Make sure all software versions are correct

### System Information Commands

To check your installed versions:

```bash
# PHP version
php -v

# Composer version
composer --version

# Node.js version
node -v

# npm version
npm -v

# Laravel version
php artisan --version
```

---

## Quick Start Checklist

Use this checklist to ensure you've completed all steps:

- [ ] PHP 8.2+ installed and in PATH
- [ ] Composer installed and working
- [ ] Node.js 18+ and npm installed
- [ ] Project files extracted/cloned
- [ ] Navigated to project folder in terminal
- [ ] Ran `composer install` successfully
- [ ] Ran `npm install` successfully
- [ ] Created `.env` file from `.env.example`
- [ ] Ran `php artisan key:generate`
- [ ] Created `database/database.sqlite` file
- [ ] Ran `php artisan migrate`
- [ ] Ran `npm run build`
- [ ] Started server with `php artisan serve`
- [ ] Opened `http://localhost:8000` in browser
- [ ] Website loads successfully

---

## Next Steps

Once your project is running:

1. **Explore the Website:**
   - Navigate through all pages
   - Test all links and features
   - Check responsive design on different screen sizes

2. **Make Customizations:**
   - Update content in Blade templates
   - Modify styles in CSS files
   - Add new features as needed

3. **Learn More:**
   - Read the `CODE_GUIDE.md` for detailed technical documentation
   - Review Laravel documentation for advanced features
   - Check Tailwind CSS docs for styling options

---

**Congratulations!** 🎉

You have successfully set up the Just Driving project on your local machine. You can now develop, test, and customize the website locally before deploying to production.

---

**Document Version:** 1.0  
**Last Updated:** 2025  
**Project:** Just Driving Local Setup Guide


# Online Shopping Cart

An object-oriented PHP web application for session-based shopping with user authentication and password recovery.

## Description

This project implements a complete online shopping cart system with user authentication, session management, and email-based password recovery. It demonstrates object-oriented PHP programming principles and is based on Dr. Farrell's class template with significant OOP enhancements.

## Features

- User registration and login
- Session-based authentication
- Password encryption and hashing
- Email-based password recovery
- Shopping cart management
- Product browsing and selection
- Order management
- Secure session handling

## Technology Stack

- **Language**: PHP
- **Server**: Apache or compatible web server
- **Database**: MySQL/MariaDB
- **Frontend**: HTML, CSS, JavaScript

## Prerequisites

- PHP 7.0 or later
- Apache web server with PHP support
- MySQL/MariaDB database
- PHP extensions: `mysqli`, `mail` (for password recovery)

## Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/jstocke2/Online-Shopping-Cart.git
cd Online-Shopping-Cart
```

### Step 2: Database Setup
1. Create a MySQL database
2. Import the database schema:
   ```bash
   mysql -u username -p database_name < database.sql
   ```

### Step 3: Configure Application
Edit `config.php` with your database credentials:
```php
$db_host = 'localhost';
$db_user = 'your_username';
$db_password = 'your_password';
$db_name = 'shopping_cart';
$smtp_server = 'your_smtp_server';
```

### Step 4: Set Permissions
```bash
chmod 755 .
chmod 644 *.php
```

## Project Structure

```
Online-Shopping-Cart/
├── index.php           # Main entry point
├── login.php          # Login page
├── register.php       # Registration page
├── cart.php           # Shopping cart
├── checkout.php       # Checkout process
├── recovery.php       # Password recovery
├── classes/           # OOP classes
│   ├── User.php       # User management
│   ├── Product.php    # Product handling
│   ├── Cart.php       # Cart functionality
│   └── Database.php   # Database wrapper
├── includes/          # Include files
│   ├── header.php
│   ├── footer.php
│   └── config.php
├── css/               # Stylesheets
├── js/                # JavaScript
└── database.sql       # Database schema
```

## Usage

### Starting the Server
```bash
# Using PHP built-in server
php -S localhost:8000

# Or use Apache
sudo service apache2 start
```

### User Operations
1. **Register**: Create a new account
2. **Login**: Authenticate with email and password
3. **Browse Products**: View available items
4. **Add to Cart**: Select items and quantities
5. **Checkout**: Complete purchase
6. **Password Recovery**: Reset forgotten password via email

## Key Classes

### User Class
- User registration
- Login authentication
- Password hashing (bcrypt)
- Session management
- Password recovery

### Product Class
- Product data management
- Inventory tracking
- Price calculation
- Search functionality

### Cart Class
- Item management
- Quantity tracking
- Total calculation
- Session-based persistence

### Database Class
- Database connection
- Query execution
- Error handling
- Prepared statements

## Security Features

- Password hashing with bcrypt
- SQL injection prevention via prepared statements
- Session-based authentication
- Email verification for password recovery
- HTTPS recommended for production
- CSRF token validation

## Email Configuration

For password recovery to work, configure your SMTP settings:

```php
$mail_from = 'noreply@example.com';
$smtp_server = 'mail.example.com';
$smtp_port = 587;
$smtp_secure = 'tls';
$smtp_user = 'your_email';
$smtp_pass = 'your_password';
```

## Requirements

- PHP 7.0+
- Apache web server
- MySQL/MariaDB 5.5+
- Modern web browser

## License

No license specified. See LICENSE file if present.

## Author

Based on Dr. Farrell's class template (Kent State University) with significant OOP enhancements

---

**Last Updated**: 2015

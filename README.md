# Kibalanga PHP Framework Documentation

Welcome to the Kibalanga PHP Framework documentation! This guide provides all the information you need to get started with Kibalanga, from installation to advanced usage.

---

## Table of Contents
1. [Introduction](#introduction)
2. [Installation](#installation)
3. [Directory Structure](#directory-structure)
4. [Configuration](#configuration)
5. [Routing](#routing)
6. [Controllers](#controllers)
7. [Views and Templating](#views-and-templating)
8. [Database Interaction](#database-interaction)
9. [Custom Features](#custom-features)
10. [Deployment](#deployment)
11. [API Reference](#api-reference)
12. [Examples](#examples)
13. [FAQs](#faqs)
14. [Contributing](#contributing)

---

## 1. Introduction
Kibalanga is a lightweight PHP framework designed for simplicity and efficiency. It enables developers to create robust web applications quickly while maintaining flexibility and performance.

### Key Features:
- **Simple Routing System**
- **Customizable Templating Engine**
- **Built-in Database Interaction**
- **Lightweight and Fast**
- **Developer-Friendly Architecture**

---

## 2. Installation

### Prerequisites:
- PHP 8.0 or higher
- Composer installed
- Web server (e.g., Apache, Nginx, xampp)

### Steps:
1. Clone the Kibalanga framework:
   ```bash
   git clone https://github.com/SamTechnologyTz/kibalanga
   ```

2. Navigate to the project directory:
   ```bash
   cd kibalanga
   ```

3. Install dependencies:
   ```bash
   php sam run:installer
   ```

4. Set up your web server to point to the `index.php` directory.

---

## 3. Directory Structure

```plaintext
kibalanga/
├── assets/
│   ├── css/
│   ├── img/
│   └── js/
├── app/
│   ├── Controller/
│   └── Model/
├── config/
├── public/
├── vendor/
├── views/
│   ├── about.sam.php
│   └── welcome.sam.php
├── .env
├── .env.example
├── index.php
└── sam
```

### Key Directories:
- **app/**: Contains core application logic, including Controllers, Models, and Views.
- **config/**: Framework and application configuration files.
- **public/**: Publicly accessible files, including `index.php`.
- **routes/**: Defines application routes.
- **storage/**: Logs, cache, and other temporary files.

---

## 4. Configuration

Configuration is managed via the `.env` file in the root directory.

### Example `.env` File:
```env
APP_NAME=Kibalanga
APP_KEY=1fweCere43JVhfDdf31SK
APP_URL=http://localhost:8080

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=example_db
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## 5. Routing

Define your routes in the `/index.php` file.

### Example:
```php
Route::get('', 'Welcome');

Route::get('about', 'about');

Route::post('registration', [userController::class, 'register']);
```

---

## 6. Controllers

Controllers handle the application logic and are stored in the `app/Controller` directory.

### Example:
```php
namespace App\Controllers;

class PageController {
    public function register() {
        return ['redirect' => 'home'];
    }
}
```

---

## 7. Views and Templating

Views are stored in the `/Views` directory and support a simple templating engine.

### Example View (about.php):
```html
<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
</head>
<body>
    <h1>Home Kibalanga</h1>
</body>
</html>
```

To render a view:
```php
return view('about');
```

---

## 8. Database Interaction

### Database Configuration:
Edit the `.env` file to set up your database credentials.

### Example Query:
```php
use App\Models\User;

$users = User::all();
```

---

## 9. Custom Features

### Middleware:
Kibalanga supports middleware for request filtering.

---

## 10. Deployment

### Steps:
1. Set up your production environment.
2. Configure `.env` for production settings.
3. Point your web server to the `public` directory.
4. Optimize the application:

---

## 11. API Reference

Coming soon!

---

## 12. Examples

### Simple Example:
Create a basic "Hello World" application.

#### `index.php`:
```php
Route::get('hello', 'hello');
```

---

## 13. FAQs

### Q: How do I enable debugging?
A: Set `APP_DEBUG=true` in the `.env` file.

---

## 14. Contributing

We welcome contributions! Please follow these steps:
1. Fork the repository.
2. Create a feature branch.
3. Submit a pull request.

---

Thank you for using Kibalanga! If you have any questions or feedback, feel free to reach out.



[![Deploy to Koyeb](https://www.koyeb.com/static/images/deploy/button.svg)](https://app.koyeb.com/deploy?name=eshod-b-security-company-ltd&type=git&repository=SamTechnologyTz%2FESHOD-B-SECURITY-COMPANY-LTD&branch=main&builder=buildpack&env%5B%5D=&ports=8000%3Bhttp%3B%2F)

---

- [Test now](https://eshod-security-company-ltd.koyeb.app)

  
---
<a href="https://wa.me/25578760701">Sam ochu</a>

---

- backend by SAM OCHU

---

# Laravel Manual Cookie Authentication System

A custom authentication system built with Laravel that handles user registration and login using **manual cookies** instead of Laravel's default session-based authentication.

---

## 🚀 Features

- **User Registration** — Captures Name, Email, Phone, DOB, and Password
- **Manual Cookie Login** — Authenticates users and stores their ID in a browser cookie for 24 hours
- **Custom Dashboard** — Fetches user data directly from the database using the cookie ID
- **Secure Logout** — Explicitly destroys the cookie to log the user out
- **UI** — Styled using a mix of Bootstrap and Tailwind CSS

---

## 🛠️ Requirements

- PHP 8.2+
- Composer
- Laravel 11.x

---

## 💻 Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repo-name.git
cd your-repo-name
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Environment Setup

Copy the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

> **Note:** Open the `.env` file and configure your database credentials before proceeding.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Run Migrations

```bash
php artisan migrate
```

### 5. Start the Development Server

```bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000`.

---

## 📁 Project Structure

```
app/
├── Http/
│   └── Controllers/
│       └── AuthController.php   # Handles login, register, logout
├── Models/
│   └── User.php
resources/
└── views/
    ├── auth/
    │   ├── login.blade.php
    │   └── register.blade.php
    └── dashboard.blade.php
routes/
└── web.php
```

---

## 🔐 How Cookie Authentication Works

1. On successful login, the user's ID is stored in a browser cookie valid for **24 hours**
2. Each protected route reads the cookie and queries the user from the database
3. On logout, the cookie is explicitly deleted from the browser

---


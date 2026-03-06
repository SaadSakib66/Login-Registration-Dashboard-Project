# Laravel Manual Cookie Authentication System

This project is a custom authentication system built with Laravel that handles user registration and login using **manual cookies** instead of Laravel's default session-based authentication.

## 🚀 Features
- **User Registration**: Captures Name, Email, Phone, DOB, and Password.
- **Manual Cookie Login**: Authenticates users and stores their ID in a browser cookie for 24 hours.
- **Custom Dashboard**: Fetches user data directly from the database using the cookie ID.
- **Secure Logout**: Explicitly destroys the cookie to log the user out.
- **UI**: Styled using a mix of Bootstrap and Tailwind CSS.

## 🛠️ Requirements
- PHP 8.2+
- Composer
- Laravel 11.x

## 💻 Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/your-username/your-repo-name.git](https://github.com/your-username/your-repo-name.git)
   cd your-repo-name

```

2. **Install dependencies:**
```bash
composer install

```


3. **Environment Setup:**
* Copy `.env.example` to `.env`.
* Configure your database (MySQL/SQLite) in the `.env` file.


```bash
cp .env.example .env
php artisan key:generate

```


4. **Run Migrations:**
```bash
php artisan migrate

```


5. **Start the Server:**
```bash
php artisan serve

```
```

```markdown
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

2. **Install PHP dependencies:**
```bash
composer install

```


3. **Environment Setup:**
* Copy the environment file:
```bash
cp .env.example .env

```


* Generate the application key:
```bash
php artisan key:generate

```


* **Note:** Open the `.env` file and configure your database settings (DB_DATABASE, DB_USERNAME, etc.).


4. **Run Migrations:**
```bash
php artisan migrate

```


5. **Start the Local Development Server:**
```bash
php artisan serve

```

```

```

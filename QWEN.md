# Project Context for Qwen Code

## Project Overview

This project is a **ThinkPHP 8** application. ThinkPHP is a popular PHP framework that provides a rich set of features for building web applications. This specific version requires PHP 8.0 or higher.

Key features of this project setup include:
-   Uses `topthink/framework` version 8.x.
-   Uses `topthink/think-orm` for database interactions.
-   Follows PSR-4 autoloading standards.
-   Configured for a default timezone of 'Asia/Bahrain'.
-   Includes basic routing configuration.
-   Environment-based database configuration (`.env` file expected).

The application appears to have a basic structure with a default controller (`app/controller/Index.php`) and routes defined in `route/app.php`.

## Running and Development

### Starting the Development Server

To start the built-in PHP development server, use the following command from the project root:

```bash
php think run
```

This will typically start the server on `http://localhost:8000`. The `think` file is the command-line entry point for the application.

### Key Commands

-   **Run Development Server:** `php think run`
-   **Install Dependencies (if composer.json changes):** `composer install`
-   **Update Dependencies:** `composer update`

The `composer.json` file defines scripts that run automatically after autoload dumping, such as service discovery and vendor publishing.

## Development Conventions

-   **Language:** PHP 8.0+
-   **Architecture:** MVC (Model-View-Controller) as per ThinkPHP conventions.
-   **Autoloading:** PSR-4. Application classes are autoloaded from the `app` directory under the `app\\` namespace.
-   **Routing:** Defined in files under the `route` directory (e.g., `route/app.php`).
-   **Controllers:** Located in `app/controller/`. Extend `app/BaseController.php`.
-   **Configuration:** Stored in `config/` directory, often using environment variables (e.g., `config/database.php`).
-   **Database:** Configuration is managed via environment variables. ORM is provided by `think-orm`.
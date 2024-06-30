# Application Documentation

## Overview

This document provides an overview of the architecture and structure of the application, outlining how requests are handled, the directory structure inspired by Laravel, and key components that make up the system.

## Getting Started

To start the project, follow these steps:

1. **Setup Database:**
   - Use the setup instructions in `setup/setup_db.txt` to configure your database.

2. **Run the Development Server:**
   - Navigate to the `public` directory in your project.
   - Use PHP's built-in web server by running:
     ```
     php -S localhost:8080
     ```
     This will start a local server at `http://localhost:8080`.

   - Alternatively, you can use XAMPP or another local development environment.

3. **Deployment (Optional):**
   - If deploying to Vercel, ensure you have configured the `vercel.json` file located at the root of your project.

## Request Handling

Requests in the application are handled through the following sequence:

1. **Entry Point:** Requests start at `public/index.php`.
2. **Routing:** The `web.php` file defines application routes.
3. **Authentication:** Routes related to authentication are defined in `auth.php`.
4. **URL and Handler:** Each route specifies a URL and a corresponding handler function.

## Directory Structure

The directory structure is organized and follows conventions similar to Laravel:

- **Views:** Contains frontend files organized by entity:
  - `auth/`: Authentication-related views.
  - `job/`: Views related to job entities.
  - `components/`: Reusable components like `nav.php`.
  - `errors/`: Error pages.

- **Controllers:** Handles data processing and interaction with the database.

- **Models:** Contains the models that interact with the database using predefined queries.

- **Support:**
  - **autoload.php:** Automatically loads classes and functions based on namespaces.
  - **Model.php:** Abstract class defining common model functions.
  - **DB.php:** Manages database connections using the singleton design pattern to maintain one connection throughout.
  - **Router.php:** Registers HTTP verbs (GET, POST, PUT, DELETE) and routes from `routes` directory.
  - **Auth.php:** Manages authentication-related operations.

- **Contracts:** Contains interface definitions:
  - **DataBaseInterface.php:** Specifies methods to be implemented by database-related classes.
  - **ModelInterface.php:** Specifies methods to be implemented by model classes.

- **Helper:** Contains `functions.php` for globally accessible functions.

- **Setup:** Includes files for database setup (`setup/db_setup.php`), XAMPP download (`setup/xampp_download.php`), and Git download (`setup/git_download.php`).

- **Script:** Contains simplified artisan-like scripts for generating models and controllers from templates.

- **Console:** Includes `Console.php` defining a `Console` class for handling console operations.

## MVC Design Pattern

The application architecture follows the Model-View-Controller (MVC) design pattern:

- **Model:** Located in the `Models` directory, provides data access and manipulation methods.
- **View:** Located in the `Views` directory, responsible for presenting data to the user.
- **Controller:** Located in the `Controllers` directory, processes user requests, interacts with models, and selects views to render.

## Conclusion

This documentation outlines the structure, flow, and key components of the application. It provides insights into how requests are processed, the organization of directories following Laravel conventions, the use of interfaces for defining contracts, and the implementation of the MVC pattern for structured development. Additional components such as setup scripts, helper functions, and a simplified command-line interface further enhance the application's functionality and maintainability.

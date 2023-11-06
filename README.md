# Real Estate Management System

This project is a Real Estate Management System built using the Laravel PHP framework. It leverages Composer for package management and includes several additional packages for enhanced functionality.

## Features
- User authentication and authorization using Laravel's built-in features.
- Permission and role management using the Spatie package.
- Blade components for efficient view rendering.
- Generation of PDF and Excel formats using the PhpOffice package.
- Styling with Tailwind CSS.

## Design Patterns
- MVC (Model-View-Controller) architectural pattern for structuring the application.
- Implementation of the Atomic Design Pattern for component-based UI design.

## Project Overview
The main idea behind this project is to allow guests to view all available real estate listings. However, if a guest wishes to make a booking (while not logged in), they will be redirected to the login page. If they do not have an existing account, they will need to register before logging in.

Upon registration, users are assigned the 'user' role along with the corresponding permissions. Each role grants different views and functionality:
- **User Role**: Can view listings, schedule appointments, and respond to appointment requests.
- **Agent Role**: Can add, edit, and delete real estate listings. They can also export listings to PDF or Excel format. Additionally, agents can respond to appointment requests and view their history. A search functionality is provided to filter requests by users.
- **Admin Role**: Has full control over users, properties, locations, property types, etc.

## Getting Started
1. Clone the repository.
2. Run `composer install` to install project dependencies.
3. Set up your environment variables, including database configuration and any required API keys.
4. Run migrations with `php artisan migrate`.
5. Seed the database with initial data using `php artisan db:seed`.

Feel free to explore the codebase and adapt it to your specific needs. If you have any questions or need further assistance, please don't hesitate to reach out. Happy coding!

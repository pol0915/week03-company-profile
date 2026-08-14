# PawBili: Pet Supplies Online Shop

A responsive multi-page company profile website for **PawBili**, a fictional online pet supplies shop, developed using the Laravel framework for the Week 3 Client-Server Technologies activity.

---

# 1. Introduction

## What is a Company Profile Website?

A company profile website is an online platform that introduces a business, its identity, products or services, mission, vision, and contact information. It serves as a digital representation of a company and provides visitors with a convenient way to learn about the business.

## Why Businesses Need One

Businesses need an online presence to make information about their products and services accessible to customers. A company profile website can improve visibility, communicate a company's identity, establish credibility, and provide an easy way for customers to find important information.

## Purpose of the Project

For this project, a fictional company called **PawBili** was created.

PawBili is an online pet supplies shop that provides pet owners with convenient access to everyday pet products such as food, treats, grooming products, accessories, and wellness essentials.

The project demonstrates the use of Laravel features including:

- MVC architecture
- Laravel routing
- Controllers
- Blade templating
- Reusable layouts and components
- Responsive web design
- Git version control

---

# 2. Objectives

The main objectives of the project are to:

1. Develop a responsive multi-page company profile website using Laravel.
2. Implement Laravel routes for the required pages.
3. Create and use a `CompanyController`.
4. Apply the Model-View-Controller (MVC) architecture.
5. Use Blade templates and reusable components.
6. Create a reusable navigation bar and footer.
7. Develop Home, About, Services, and Contact pages.
8. Organize the project using Laravel's standard folder structure.
9. Apply responsive and consistent web design.
10. Use Git to track the development of the project through meaningful commits.

---

# 3. MVC Architecture

## What is MVC?

MVC stands for **Model-View-Controller**. It is an architectural pattern that separates an application's responsibilities into different components.

- **Model** – handles application data and database-related operations.
- **View** – handles the presentation and user interface.
- **Controller** – handles requests and connects the application's routes to the appropriate views.

## MVC in Laravel

Laravel follows the MVC architecture to help developers organize their applications and separate different responsibilities. This makes applications easier to maintain, understand, and expand.

In PawBili, the primary request flow is:

```text
Client / Browser
       ↓
Route (routes/web.php)
       ↓
CompanyController
       ↓
Blade View
       ↓
HTML Response
       ↓
Browser

---

## PawBili MVC Components

### Route

The routes in `routes/web.php` determine which controller method handles each URL.

### Controller

`CompanyController.php` handles the four main page requests and returns the appropriate Blade view.

### View

The Blade files inside `resources/views/pages/` contain the actual page presentation and content.

## Architecture Diagram

![PawBili MVC Architecture](documentation/mvc.png)

---

# 4. Laravel Routing

## What is Routing?

Routing determines how an application responds to requests made to specific URLs. In Laravel, routes can connect URLs to controller methods.

## Routes Used in PawBili

The project uses `GET` routes for the four required pages:

    Route::get('/', [CompanyController::class, 'home']);
    Route::get('/about', [CompanyController::class, 'about']);
    Route::get('/services', [CompanyController::class, 'services']);
    Route::get('/contact', [CompanyController::class, 'contact']);

## Route Table

| URL | Controller Method | Page |
|---|---|---|
| `/` | `home()` | Home |
| `/about` | `about()` | About |
| `/services` | `services()` | Services |
| `/contact` | `contact()` | Contact |

These routes allow visitors to access the different pages of the PawBili website through their corresponding URLs.

## Route Definitions Screenshot

The route definitions screenshot is stored in:

`screenshots/pawbili others/`

---

# 5. Controllers

## Purpose of Controllers

Controllers handle incoming requests and determine what response should be returned to the user. In Laravel, controllers commonly connect route requests to views.

## CompanyController

The PawBili website uses `CompanyController.php` to handle the four required pages.

The controller contains the following methods:

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

Each method returns the Blade view associated with its page.

## Benefits of Using a Controller

Using a controller keeps the route definitions organized and separates request handling from the presentation layer. It also makes the application easier to maintain and expand.

## Controller Screenshot

The controller screenshot is stored in:

`screenshots/pawbili others/controller.png`

---

# 6. Blade Templating Engine

## What is Blade?

Blade is Laravel's built-in templating engine. It provides a simple way to organize HTML and PHP-based templates while allowing layouts and components to be reused.

## Blade Layout

The project uses a shared layout:

`resources/views/layouts/app.blade.php`

The shared layout contains the common structure of the website, including the page title, navigation bar, main content area, and footer.

## Blade Components

Reusable components were created for:

`resources/views/components/navbar.blade.php`

`resources/views/components/footer.blade.php`

This allows the same navigation bar and footer to be used across multiple pages without duplicating the same code.

## Blade Page Views

The main pages are stored inside:

`resources/views/pages/`

They include:

- `about.blade.php`
- `contact.blade.php`
- `home.blade.php`
- `services.blade.php`

## Blade Directives

The project uses Blade directives such as:

- `@include`
- `@yield`
- `@section`
- `@extends`

These directives help connect the individual page views to the reusable layout and components.

## Blade Layout Screenshot

The Blade layout screenshot is stored in:

`screenshots/pawbili others/blade layout.png`

---

# 7. Laravel Folder Structure

The PawBili project follows Laravel's standard project organization.

    week03-company-profile/
    │
    ├── app/
    │   └── Http/
    │       └── Controllers/
    │           └── CompanyController.php
    │
    ├── bootstrap/
    ├── config/
    ├── database/
    │
    ├── documentation/
    │   └── mvc.png
    │
    ├── public/
    │   └── images/
    │
    ├── resources/
    │   ├── css/
    │   │   └── app.css
    │   │
    │   ├── js/
    │   │
    │   └── views/
    │       ├── components/
    │       │   ├── footer.blade.php
    │       │   └── navbar.blade.php
    │       │
    │       ├── layouts/
    │       │   └── app.blade.php
    │       │
    │       └── pages/
    │           ├── about.blade.php
    │           ├── contact.blade.php
    │           ├── home.blade.php
    │           └── services.blade.php
    │
    ├── routes/
    │   └── web.php
    │
    ├── screenshots/
    │
    ├── storage/
    ├── tests/
    ├── vendor/
    │
    ├── artisan
    ├── composer.json
    ├── package.json
    └── README.md

## Folder Purposes

| Folder | Purpose |
|---|---|
| `app/` | Contains the application's controllers and other PHP application logic. |
| `routes/` | Contains Laravel route definitions. |
| `resources/` | Contains Blade views, CSS, and JavaScript source files. |
| `public/` | Contains publicly accessible assets such as images. |
| `documentation/` | Contains project documentation such as the MVC diagram. |
| `screenshots/` | Contains screenshots used as project evidence. |
| `database/` | Contains migrations, factories, and seeders. |
| `config/` | Contains Laravel configuration files. |
| `storage/` | Contains application-generated files and logs. |
| `tests/` | Contains automated tests. |

---

# 8. Website Pages

## Home Page

The Home page serves as the landing page of PawBili. It introduces the company and presents the main message:

**Everything Your Pet Needs, Just a Paw Away.**

It also provides a call-to-action button that directs users to the Services page.

The Home page screenshots are stored in:

`screenshots/pawbili home/`

## About Page

The About page explains the purpose and identity of PawBili.

It includes the company's background, mission, vision, core values, and team information.

### Mission

To make pet shopping simple, convenient, and accessible by providing quality pet supplies that help owners care for their pets with ease.

### Vision

To become a trusted online pet supply store known for convenience, quality products, and genuine care for pets and their owners.

### Core Values

**Pet-Centered Care**  
We put the needs and well-being of pets first.

**Accessibility**  
We make essential pet supplies easy and convenient to find and purchase.

**Warmth**  
We treat every customer and pet with kindness and care.

**Better Quality**  
We strive to provide reliable and quality products for everyday pet needs.

**Integrity**  
We value honesty, transparency, and responsible service.

**Love for Pets**  
We are driven by genuine appreciation and care for pets.

**Improvement**  
We continuously improve our products and services to serve pet owners better.

The About page screenshots are stored in:

`screenshots/pawbili about/`

## Services Page

The Services page presents PawBili's major product categories:

1. Pet Supplies
2. Dog Food & Treats
3. Cat Litter & Accessories
4. Aquariums & Fish Supplies
5. Bird Feeders & Food
6. Pet Grooming Products
7. Pet Health & Wellness

Each category is presented through a separate service card containing a title and description.

The Services page screenshots are stored in:

`screenshots/pawbili services/`

## Contact Page

The Contact page provides the company's contact information and a contact form interface for users who want to reach PawBili.

The Contact page screenshots are included in the screenshots folder.

---

# 9. Screenshots

The project contains screenshots demonstrating the required website pages, interface components, and Laravel implementation.

## Required Screenshots

### Home Page

Location:

`screenshots/pawbili home/`

### About Page

Location:

`screenshots/pawbili about/`

### Services Page

Location:

`screenshots/pawbili services/`

### Contact Page

The Contact Page screenshot is included in the screenshots folder.

### Navigation Bar

The Navigation Bar screenshot is included with the PawBili website screenshots.

### Footer

The Footer screenshot is included with the PawBili website screenshots.

### Route Definitions

Location:

`screenshots/pawbili others/`

### Controller

Location:

`screenshots/pawbili others/controller.png`

### Blade Layout

Location:

`screenshots/pawbili others/blade layout.png`

---

# 10. Problems Encountered

## Problem 1: Node.js and npm were initially unavailable

During the development process, the `node` and `npm` commands were initially not recognized in PowerShell.

## Problem 2: Git was not initialized

The project initially returned the following error when Git commands were used:

    fatal: not a git repository

This happened because Git had not yet been initialized in the Laravel project directory.

## Problem 3: The initial Git commit contained the entire project

The first attempt at creating the Git history placed most of the project into one initial commit. Since the requirements called for multiple meaningful commits, the Git history needed to be reorganized.

---

# 11. Solutions

## Solution to Problem 1

Node.js and npm were installed and verified using:

    node -v
    npm -v

After installation, the project's frontend dependencies were installed using:

    npm install

## Solution to Problem 2

Git was initialized inside the Laravel project directory using:

    git init

The project was then organized into meaningful commits.

## Solution to Problem 3

The Git history was reorganized into separate commits representing different stages of development.

The meaningful commits include:

    feat: create Laravel project
    feat: add company routes
    feat: create CompanyController
    feat: build reusable Blade layout and components
    feat: build Home page
    feat: build About page
    feat: build Services page
    feat: build Contact page

This provides more than the required minimum of eight meaningful commits.

---

# 12. Reflection

Developing the PawBili website helped me understand how Laravel organizes a web application using the Model-View-Controller architecture. Before this project, I mostly thought of a website as a group of pages containing HTML, CSS, and other files. Working with Laravel showed me how routes, controllers, and views can work together while keeping their responsibilities separate.

One of the most important concepts I learned was Laravel routing. The routes determine which URL a user can access and connect that URL to the appropriate controller method. This made it easier to understand what happens when a user enters a URL in a browser. Instead of directly opening a page file, the request passes through Laravel's routing system first.

I also learned how controllers are used to organize application logic. The `CompanyController` contains separate methods for the Home, About, Services, and Contact pages. Each method returns the correct Blade view. This helped me understand why controllers are useful for keeping route definitions clean and separating request handling from the presentation of the website.

Another important part of the project was learning Blade. Creating a shared layout and reusable components for the navigation bar and footer prevented me from having to duplicate the same code across every page. This showed me how reusable components can make a project easier to maintain and keep the design consistent throughout the website.

The project also improved my understanding of Git. I learned that commits should represent meaningful development stages rather than simply creating multiple commits for the sake of increasing the commit count. Organizing the PawBili project into commits for routing, controllers, layouts, and pages made the development process easier to document and understand.

Overall, the activity gave me practical experience with Laravel's MVC structure, routing, controllers, Blade templates, reusable components, responsive web design, and Git version control. It also helped me understand how the different parts of a web application work together, from a user's request to the final HTML response displayed in the browser. These concepts provide a useful foundation for developing larger and more complex web applications in the future.

---

# 13. References

Laravel. (n.d.). *Laravel documentation*. https://laravel.com/docs

MDN Web Docs. (n.d.). *CSS: Cascading Style Sheets*. https://developer.mozilla.org/en-US/docs/Web/CSS

MDN Web Docs. (n.d.). *HTML: HyperText Markup Language*. https://developer.mozilla.org/en-US/docs/Web/HTML

PHP Documentation Group. (n.d.). *PHP manual*. https://www.php.net/docs.php
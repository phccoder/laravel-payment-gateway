# Laravel Payment Gateway with TALL Stack & Stripe 🚀

This is a public project demonstrating how to integrate modern payment methods like **Apple Pay** and **Google Pay** into a Laravel application. It is built with the **TALL stack** (Tailwind CSS, Alpine.js, Livewire, and Laravel) and uses **Stripe Payment Intents** for a secure and robust payment flow.



***

## Key Features

* **Stripe Payment Intents:** Securely process payments without ever having your server handle sensitive card information.
* **Dynamic Payment Element:** Stripe's single UI component automatically displays relevant payment methods to the user (Cards, Google Pay, Apple Pay, etc.).
* **TALL Stack:** A fully reactive frontend experience built with Livewire and Alpine.js.
* **Secure API Key Handling:** Follows Laravel best practices for managing secret keys using the `.env` file.

***

## Tech Stack 💻

* [Laravel](https://laravel.com/)
* [Livewire](https://livewire.laravel.com/)
* [Alpine.js](https://alpinejs.dev/)
* [Tailwind CSS](https://tailwindcss.com/)
* [Stripe PHP SDK](https://github.com/stripe/stripe-php) & [Stripe.js](https://stripe.com/docs/js)

***

## Getting Started

Follow these instructions to get the project up and running on your local machine.

### **1. Prerequisites**

* PHP >= 8.2
* Composer
* Node.js & NPM
* A Stripe Account

### **2. Installation**

1.  **Clone the repository:**
    ```bash
    git clone [https://github.com/phccoder/laravel-payment-gateway.git](https://github.com/phccoder/laravel-payment-gateway.git)
    cd laravel-payment-gateway
    ```

2.  **Install dependencies:**
    ```bash
    composer install
    npm install
    npm run build
    ```

3.  **Set up your environment file:**
    ```bash
    cp .env.example .env
    ```

4.  **Generate an application key:**
    ```bash
    php artisan key:generate
    ```

5.  **Add your Stripe API keys:**
    * Log in to your [Stripe Dashboard](https://dashboard.stripe.com/apikeys).
    * Open your `.env` file and add your **Publishable Key** and **Secret Key**.
    ```env
    STRIPE_KEY=pk_test_YourPublishableKeyGoesHere
    STRIPE_SECRET=sk_test_YourSecretKeyGoesHere
    ```

6.  **Run the database migrations:**
    ```bash
    php artisan migrate
    ```

7.  **Serve the application:**
    ```bash
    php artisan serve
    ```

### **3. Usage**

Once the application is running, navigate to the following URL in your browser to see the payment form in action:

`http://127.0.0.1:8000/pay`

***

## Security 🔒

This project is configured to use environment variables for API keys. Your `.env` file is included in `.gitignore` by default. **Never commit your `.env` file or hardcode your secret API keys directly into your application code.**

***

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
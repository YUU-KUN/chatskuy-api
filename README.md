
<p align="center">
    <img src="/public/screenshot.png" alt="Chatskuy Landing Page"></p>

## About Chatskuy API
Chatskuy API is a generative AI RestAPI that offers smart and engaging conversations. Whether you need ideas, solutions, or just a friendly chat, Chatskuy is here to assist. Integrated with Gemini AI, Chatskuy provides meaningful and enjoyable interactions tailored to your needs.

Chatskuy Features:
- Landing Page: A welcoming and informative landing page that introduces you to Chatskuy's capabilities and helps you get started quickly.
- Question Recommendation: Get personalized question suggestions to guide your conversations and explore new topics effortlessly.
- Chat History: Easily access your previous conversations, allowing you to continue where you left off or revisit important discussions.

Code Reference:
None - I created it all by myself.


## Installation Guide
First, Clone the repository and navigate to the project directory, then:

```bash
# Setup the database
cp .env.example .env

# Install Dependencies
composer install

# Install Gemini
php artisan gemini:install

# Run database migrations
php artisan migrate:fresh

# Start the development server
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) with your browser to see the result.
Here's the Postman Documentation: https://documenter.getpostman.com/view/10035045/2sA3s6Gq7q

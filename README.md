#   Image

    php artisan storage:link

#   Model

    php artisan make:model Idea

    php artisan make:model Comment -m -c

#   Migration

    php artisan make:migration create_ideas_table

    php artisan migrate:refresh --step=2

    hp artisan make:migration add_bio_and_image_to_use

#   Controllers

    php artisan make:controller DashboardController
    php artisan make:controller ProfileController
    php artisan make:controller IdeaController
    php artisan make:controller AuthController
    php artisan make:controller UserController -r

#   Project - School Blog

    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p

    npm install alpinejs



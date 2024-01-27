#   Components

    php artisan make:component NavLink
    php artisan make:component NavButton
    php artisan make:component NavLogo
    php artisan make:component NavContainer
    php artisan make:component NavUlContainer
    php artisan make:component NavIconLink
    php artisan make:component MainContainer
    php artisan make:component AsideContainer
    php artisan make:component AsideBox
    php artisan make:component ContentBox

#   Paggination

    php artisan vendor:publish --tag=laravel-pagination

#   Image

    php artisan storage:link

#   Model

    php artisan make:model Idea

    php artisan make:model Comment -m -c

#   Migration

    php artisan make:migration create_ideas_table

    php artisan migrate:refresh --step=2

    php artisan make:migration add_bio_and_image_to_use

    php artisan make:migration create_follower_user_table --create

    php artisan make:migration remove_likes_from_ideas

    php artisan make:migration create_idea_like_table

#   Controllers

    php artisan make:controller DashboardController
    php artisan make:controller ProfileController
    php artisan make:controller IdeaController
    php artisan make:controller AuthController
    php artisan make:controller UserController -r
    php artisan make:controller FollowerController
    php artisan make:controller IdeaLikeController
    php artisan make:controller FeedController --invokable

#   Project - School Blog

    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p

    npm install alpinejs



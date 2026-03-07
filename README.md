Laravel DevOps CRUD Practice Project
==================================

This is a **DevOps practice-ready Laravel project scaffold** with:
- User CRUD
- PHPUnit Feature Test
- Docker (php-fpm, nginx, mysql)
- Jenkinsfile CI pipeline

Steps:
1. cp .env.example .env
2. docker compose up -d --build
3. docker compose exec app composer install
4. docker compose exec app php artisan key:generate
5. docker compose exec app php artisan migrate
6. docker compose exec app php artisan test
7. Visit http://localhost:8080/users

# footballteamgame's task

Sep `23

- run `docker-compose up -d`

Inside container:
- run `composer install`
- run `cp .env.example .env`
- run `php artisan key:generate`
- run `php artisan migrate`
- run `php artisan db:seed`

Check http://localhost:8888/public
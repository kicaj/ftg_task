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

[![Run in Postman](https://run.pstmn.io/button.svg)](https://elements.getpostman.com/redirect?entityId=6755146-f70e09c5-2a26-4ad8-8043-1f75fdb64a29&entityType=collection)
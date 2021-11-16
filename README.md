# Laravel IP Management API

### Installation

Install the dependencies and start the server to test the Api.

```sh
$ Composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
```

### Unit Testing

```sh
$ php artisan make:test Http/Controllers/TaskControllerTest
$ vendor/bin/phpunit tests/Unit/TaskTest.php
$ php artisan test
 ```
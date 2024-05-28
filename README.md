# PHP test

This is a simple PHP test that leverages the use of OOP and PS4-4 Autoloader.
It uses packages like `doctrine/orm`, `doctrine/dbal` to name a few.

This was built from the <a href="https://laravel.com/docs/11.x/valet" target="_blank">Laravel Valet</a> environment
so this can be accessed via `PHP_Test_Optimy`
### Installation

```
composer install
```
  - import the dbdump.sql in the "phptest" database
```
cp .env.example .env
```
  - Fill in the necessary db credentials to the `.env` file.


## Todo
This is not a complete library, although it's functional it still has
a lot of room for improvements:

 - Creating of manager / service to handle the queries instead of doing it in the bootstrap file.
 - Use of controller to handle request / response.
 - And more...

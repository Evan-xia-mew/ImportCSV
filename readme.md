<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Installation
**Clone the repository with git clone**

First We need to download Laravel 5.8 version, and install into our computer.

same as install Composer and Maatwebsite Package 

**Run composer install**

After this we need to make database connection. For this we have to open .env file and under this file we have to define Mysql database configuration details which you can see below.

**Copy .env.example file to .env** and edit database credentials there

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=testing

DB_USERNAME=****

DB_PASSWORD=****

After makiing database configuration, now in next step we will see how to make table.**Launch MySQL Workbench, and create a new schema in the connected server. Schema Name:testing**

For add fake record into Mysql database. First we want to make table in Mysql database from this Laravel 5.8 application.And for migrate data, you have to go command prompt and write following command.

**Run php artisan migrate**

This command will migrate default data from database/migrations folder and it will make user table in define Mysql database.

check Apache root path, for this we have open **app/Http/Middleware/VerifyCsrfToken** . check this class follow :

*protected $except = [
        '/result'
    ];*

Now we are ready

**Run php artisan serve**
This command will start Laravel server and give you base url of Laravel application. For test import data operation we have to write following url in browser.

**http://localhost:8000**

That's it - load the homepage


## My project specialty: ##

In my project, I built the web pages through the blade view template, control template and routing (MVC template) instead of using Laravel Excel. In the control template,do the analyzing and organizing the data, arrange and calculate by array. I’ve researched a lot of information about how to import and export CSV files through Laravel framework, however most of the time on the website, the way is added Laravel Excel third-party library to Laravel application, following service provider and aliase import and export csv xlsx files.In my opinion, although Laravel Excel's method is concise and clear, my project has a more intuitive understanding of data, path, and method in future debugging.

This is my first time  using laravel PHP Web Framework.In the Laravel documentation, I learned the facade (interface) and contract (interface). I also learned about middleware, csrf protection.






# SIMPLE CRUD | AJAX CRUD | RESTFUL API | UNIT TESTING for Laravel 5.4

Asynchronous actions on a Laravel resource controller. For step by step instructions, visit my [blog post](http://www.jmkleger.com/post/ajax-crud-for-laravel-5-4).

## Installation

Clone the repo
```
git clone https://github.com/mednasr/Laravel_Project.git
```

Move to the newly created folder and install all dependencies:
```
cd Laravel_Project
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```

Open your favorite browser and visit the newly created app.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel Example Application (laravel-example-1)

-   uses laravel version 8
-   simple `Post` CRUD example

## Setup Instruction

-   download the repository (main branch) by either downloading the zip or using git clone command

```bash
git clone https://gitlab.com/PrijalBista/laravel-example-1.git
```

-   copy content of `.env.example` to a new file named `.env` in project root directory.

```bash
cp .env.example .env
```

-   Install all the dependencies with composer

```bash
composer install
```

-   create a new database (use `phpmyadmin` if u use `xampp`). Example database name: `laravel_example_1`

-   update the db connection information in .env file. Heres an example for my setup.

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_example_1
DB_USERNAME=root
DB_PASSWORD=
```

-   Generate a key for laravel project

```bash
php artisan key:generate
```

-   Run migrations (create tables in db)

```bash
php artisan migrate
```

-   Finally serve the project using

```bash
php artisan serve
```

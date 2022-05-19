## Requirements

- PHP >= 8.0
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

1) Clone the repository, keep .env file using .env.example file copy and your db changes in .env file.

``` bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=backend
DB_USERNAME=root
DB_PASSWORD=password
```

``` bash
public/uploads
```

2) Install and update composer packages.

``` bash
composer install
```

``` bash
composer update
```

3) Install and update node modules.

``` bash
npm install
```

``` bash
npm update
```

3) Run database migration.

``` bash
php artisan migrate
```

4) Generate passport and application keys.

``` bash
php artisan passport:install
```

``` bash
php artisan key:generate
```

5) Clear cache, session, view etc.

``` bash
php artisan cache:clear
```

``` bash
php artisan view:clear
```

``` bash
php artisan clear-compiled
```

``` bash
composer dump-autoload
```

``` bash
php artisan optimize
```

``` bash
php artisan optimize:clear
```

6) Add dummy data

``` bash
php artisan db:seed
```

7) Start server, open <a href="http://127.0.0.1:8000" target="_blank">Frontend</a> and <a href="http://127.0.0.1:8000/backend" target="_blank">Backend</a>(admin@admin.com / password) in browser.

``` bash
php artisan serve
```
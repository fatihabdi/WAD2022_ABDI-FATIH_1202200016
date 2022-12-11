# MODUL 5 LARAVEL

## Getting Started
Dokumentasi buat bang hash

- Copy file .env.example jadi .env
```bash
cp .env.example .env
```

- Ubah port sama nama database di file **.env**
```bash
DB_PORT=your_mysql_port
DB_DATABASE=your_database_name
```

- Install Dependencies
```bash
composer install
```

- Generate Key
```bash
php artisan key:generate
```

- Migrate database
```bash
php artisan migrate
```

- Link storage
```bash
php artisan storage:link
```
- Seed Database
```bash
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=CarSeeder
```

- Run the server
```bash
php artisan serve
```
- Buka url di browser
``` 
localhost:8000 or 127.0.0.1:8000
```

## Seeder Database
This Seeder available in /database/seeders/ file <br/>
- UserSeeder
```bash
Email : tes@gmail.com
Password : 12345678
```
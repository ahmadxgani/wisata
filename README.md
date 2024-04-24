## Destinasi Wisata | Ujikom :"
Menyediakan rekomendasi tempat wisata di suatu wilayah.

### Default admin account
username: admin
password: password

### Usage

setup `.env` and run:

```
composer install
npm install
npm run build
php artisan migrate:fresh --seed
php artisan storage:link
php artisan key:generate
```
## Destinasi Wisata | Ujikom :"

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
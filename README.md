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

### Apache web server

See [the arch wiki](https://wiki.archlinux.org/title/Apache_HTTP_Server) for complete guide on setup PHP, TLS, and virtual host

see [the Wikipedia](https://en.wikipedia.org/wiki/X.509) for more information about certificate and encrpytion.

### Create self-signed certificate

copied from [Github Issue](https://github.com/eduardsui/tlse/issues/92#:~:text=also%20for%20the%20certificate%2C%20I%20use%20the%20self%2Dsigned%20one%2C%20generated%20by%20running%20this%20command%3A)

```
openssl req -new -nodes -x509 -newkey rsa:2048 \
-days 3650 -keyout privkey.pem -out fullchain.pem \
-subj "/C=XX/ST=StateName/L=CityName/O=CompanyName/OU=CompanySectionName/CN=CommonNameOrHostname" \
-addext "subjectAltName = DNS:localhost"
```

inspect the cert: `openssl x509 -in fullchain.pem -text -noout`

combine private and pub: `cat privkey.pem fullchain.pem > localhost.crt`

and then install the cert to the system as root certificate. on linux system you can use `trust --verbose anchor --store localhost.crt`.

to verify, `trust list` and search for label `localhost`

### Links
- [Wikipedia](https://en.wikipedia.org/wiki/Certificate_signing_request)

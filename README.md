## Mobilerider Homework

- Instructions can be found [here](https://docs.google.com/document/d/1IQcQZdt1BQa_7U64hK1EQ_ZQI_p7L4rNFWMfRy_RnFY/edit?ts=60e73fe0)

#### Set Up
- Set up a local server (I used https://www.mamp.info/en/downloads/) and create a `mobile-rider` databse in phpmyadmin or wherever is easiert
- Clone the project into the proper director (`/Applications/MAMP/htdocs`)

```
git clone
cd mobile-rider-auth
composer install
php artisan migrate
php artisan db:seed
cp .env.example .env
php artisan serve
```

### User Information
```
username: adamhundley@gmail.com
password: 123
```

### Routes
- http://localhost:8000/signin
- http://localhost:8000/signout

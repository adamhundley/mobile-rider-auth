## Mobilerider Homework

- Instructions can be found [here](https://docs.google.com/document/d/1IQcQZdt1BQa_7U64hK1EQ_ZQI_p7L4rNFWMfRy_RnFY/edit?ts=60e73fe0)

#### Set Up
```
git clone
cd mobile-rider-auth
composer install
php artisan migrate
php artisan db:seed
touch .env
// Add what's in .env.example to your .env file
php artisan serve
```
- Set up a local server (I used https://www.mamp.info/en/downloads/) with mysql and a users table

#### User Information
```
username: adamhundley@gmail.com
password: 123
```

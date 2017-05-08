# Instructions

- Run `composer install` after cloning to download `vendor`-directory.
- Copy `.env.example` to `.env` and edit appropriately
- Change in `/config/database.php`, change `charset` to `utf8` and `collation` to `utf8_unicode_ci`  
- Run `php artisan migrate`
- Run `php artisan db:seed`

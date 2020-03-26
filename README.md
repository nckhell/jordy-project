## Installation

Run `composer install` from the root directory

## Database (artisan) commands

**Create all the tables**
`php artisan migrate`

**Create a seed**
`php artisan make:seeder UsersTableSeeder`

**Seed the database**
`php artisan db:seed`

**Reset the database**
`php artisan migrate:refresh --seed`
OR
`php artisan migrate:reset`

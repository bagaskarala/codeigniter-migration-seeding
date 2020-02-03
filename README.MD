# Codeigniter Migration Seed Boilerplate

Plain codeigniter added by **migration** and **seeding** using CLI, also add migrate UI to ease migration process

## Requirements
- Install composer and PHP
- You can run PHP and composer on terminal
- Set config database.php based on yours

## Usage
- Run `composer install`
- Testing CLI
  - Run this command `php index.php tools message "Hellow world"` and `php index.php tools help`

## Migration Tutorial
- Assume we are going to migrate *Brands* table, make sure using capital case
- Create migration file ,run `php index.php tools migration Brands`
- Execute migration, run `php index.php tools migrate`

## Seeding Tutorial
- Create seed file, run `php index.php tools seeder Brands`
- Execute seeding, run `php index.php tools seed Brands`

## Migration management UI
- Open YOUR_BASE_URL/migrate


## Credit
- https://github.com/natanfelles/codeigniter-migrate
- https://kode-blog.io/codeigniter-migration

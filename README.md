# laravel-thai-address
Thai provincial database with latitude and longitude.

## Setup
Add package dependency to your project

```bash
composer require uatthaphon/laravel-thai-address
```

Before Laravel 5.5, add package's service provider to your project's `config/app.php`

```php
'providers' => [
  ...

  Uatthaphon\ThaiAddress\ThaiAddressServiceProvider::class,
],
```

Run publishing to publish 3 tagging => `migrations` `csv` `seeds`

```bash
php artisan vendor:publish
```

After all has been published you can create tables by running the migrations

```bash
php artisan migrate
```

Then run seeder, it will grab csv and fill them into each tables

```bash
php artisan db:seed --class=ThailandAddressSeeder
```

## Usage
You can use available models for thai address tables

```php
use Uatthaphon\ThaiAddress\Models\ThailandProvince;
use Uatthaphon\ThaiAddress\Models\ThailandDistrict;
use Uatthaphon\ThaiAddress\Models\ThailandSubdistrict;

...

/**
 * Available Relationships
 */

// list all districts under the province
app(ThailandProvince::class)->find(1)->districts()->get();

// get province of the district
app(ThailandDistrict::class)->find(1)->province;
// list all sub districtes under the district
app(ThailandDistrict::class)->find(1)->subdistricts()->get();

// get district of the subdistrict
app(ThailandSubdistrict::class)->find(1)->district;
// get province of the subdistrict
app(ThailandSubdistrict::class)->find(1)->province;
```

## Credits

This project wouldn't exist without the awesome database source by [aaronamm/thai-administrative-division-province-district-subdistrict-sql](https://github.com/aaronamm/thai-administrative-division-province-district-subdistrict-sql)

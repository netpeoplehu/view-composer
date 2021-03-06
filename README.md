# View composers for Laravel
###

* [Requirement](#requirement)
* [Installation](#installation)
    * [Laravel 5.4](#5.4)
    * [Laravel 5.5+](#5.5+)
* [Usage](#usage)

# Requirement
❗️ Laravel >= 5.4

# Installation

## 5.4
1. Download with composer 
```bash
composer require netpeoplehu/view-composer
```
2. Add service provider to the app config `config/app.php`
```php
Netpeople\ViewComposer\Providers\ViewComposerServiceProvider::class,
```
3. Publish package config
```bash
php artisan vendor:publish --provider=Netpeople\\ViewComposer\\Providers\\ViewComposerServiceProvider
````

## 5.5+
1. Download with composer 
```bash
composer require netpeoplehu/view-composer
```
3. Publish package config
```bash
php artisan vendor:publish --provider=Netpeople\\ViewComposer\\Providers\\ViewComposerServiceProvider
````

# Usage
Generate your first composer
```bash
php artisan make:composer ExampleComposer
```

Edit config (`config/view-composers.php`)
```php
    App\Http\ViewComposers\ExampleComposer::class => [
        'welcome',
        'layout.main'
    ]
```

Edit ExampleComposer (`{appNameSpace}/Http/ViewComposers/ExampleComposer.php`)
```php
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('example', 'It works');
    }
```

# License
### [MIT](https://opensource.org/licenses/MIT)

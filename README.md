# View composers for Laravel
###

## Requirement
❗️ Laravel >= 5.4

## Installation
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
php artisan vendor:publush --tag=config
````

## Usage
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
        $view->with('example', 'It\'s work');
    }
```

## License
### [MIT](https://opensource.org/licenses/MIT)
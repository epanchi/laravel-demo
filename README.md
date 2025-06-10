# Installing filamente
Documentation: https://filamentphp.com/docs/3.x/panels/installation

```
composer require filament/filament:"^3.3" -W

php artisan filament:install --panels
```

# Database 
```
php artisan make:migration
```

- Copy user information to frontend_user table
```
INSERT INTO frontend_user SELECT * FROM users;
```

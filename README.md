# Installing filamente
Documentation: https://filamentphp.com/docs/3.x/panels/installation

```
composer require filament/filament:"^3.3" -W

php artisan filament:install --panels

php artisan vendor:publish --tag=filament-config
```

# Database 
```
php artisan make:migration
```

- Copy user information to frontend_user table
```
INSERT INTO frontend_user SELECT * FROM users;
```

After delete migration table
```



CREATE TABLE `migrations` (
  `version` bigint NOT NULL AUTO_INCREMENT,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

passoword: 0987654321
```
$2y$12$x7X21fxpdjDgti1r0e5gbOWiC6tset5Ib/2vYo5Np8b6JskJIgX1. 
```

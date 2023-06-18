vendor/bin/composer update
vendor/bin/composer i
vendor/bin/composer require laravel/sail --dev
php artisan sail:install
sudo service apache2 stop
vendor/bin/sail up -d
vendor/bin/sail artisan migrate:fresh --seed

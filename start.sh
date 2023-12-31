sudo service apache2 stop
composer install
php artisan sail:install
php -r "copy('.env.example', '.env');"

while IFS="" read -r p || [ -n "$p" ]
do
  if printf '%s' "$p" | grep -Eq '^APP_KEY'; then
    key=$(php artisan key:generate --show)
    echo "APP_KEY=$key" >> .envv
    printf '%s\n' "APP_KEY generated and set"
  else
    #printf '%s\n' "$p"
    echo "$p" >> .envv
  fi

done < .env

cp .envv .env
rm .envv

./vendor/bin/sail up -d


./vendor/bin/sail artisan migrate:fresh --seed

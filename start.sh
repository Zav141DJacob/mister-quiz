php artisan sail:install
sudo service apache2 stop
php -r "copy('.env.example', '.env');"
vendor/bin/sail up -d

while IFS="" read -r p || [ -n "$p" ]
do
  if printf '%s' "$p" | grep -Eq '^APP_KEY'; then
    key=$(vendor/bin/sail artisan key:generate --show)
    echo "APP_KEY=$key" >> .envv
    printf '%s\n' "APP_KEY generated and set"
  else
    #printf '%s\n' "$p"
    echo "$p" >> .envv
  fi

done < .env

cp .envv .env
rm .envv

vendor/bin/sail artisan migrate:fresh --seed

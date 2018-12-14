# projeto
Sistema de Gestão de Clientes

git clone https://github.com/bythiago/Gestao-de-Clientes.git

<<<<<<< HEAD
cd Gestao-de-Clientes
=======
``` bash
cd projeto
```
>>>>>>> parent of 3de6adb... Update README.md

sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache

composer install && composer dump-autoload

cp .env.example .env
php artisan key:generate


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate

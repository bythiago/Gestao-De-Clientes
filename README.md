# Sistema de Gestão de Clientes
> Instruções para instalação do projeto

``` bash
git clone https://github.com/bythiago/Gestao-de-Clientes.git

cd Gestao-de-Clientes
```

``` bash
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
```

``` bash
composer install && composer dump-autoload
``` 

``` bash
cp .env.example .env
```

``` bash
php artisan key:generate
```

``` text

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel
DB_USERNAME=root
DB_PASSWORD=
```

``` bash
php artisan migrate
``` 

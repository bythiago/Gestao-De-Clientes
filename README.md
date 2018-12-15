# Sistema de Gestão de Clientes
> Instruções para instalação do projeto

1. Clonando o projeto

``` bash
git clone https://github.com/bythiago/Gestao-de-Clientes.git && cd Gestao-de-Clientes
```

2. O Laravel requer permissão de leitura e escrita nos diretórios "storage" e "bootstrap/cache', portanto, altere as permissões desses diretórios executando os comandos abaixo.

``` bash
sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap/cache
```

3. Execute o comando para instalar todos pacotes PHP necessários.

``` bash
composer install --no-dev --optimize-autoloader
```

4. Execute o comando para copiar configurações da aplicação

``` bash
cp .env.example .env
```

5. Seguindo a ordem, edite o arquivo que você acabou de copiar *.env*, então configure o seu banco de dados

``` text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Laravel
DB_USERNAME=root
DB_PASSWORD=
```

6. Utilize o comando para gerar uma chave para sua aplicação.

``` bash
php artisan key:generate
```

7. Para finalizar, utilize próximo comando, ele irá criar as tabelas do banco de dados.
``` bash
php artisan migrate --seed
```

8. A aplicação está pronta para ser executada atraves do endereço

[http://localhost/Gestao-de-Clientes/](http://localhost/Gestao-de-Clientes/)

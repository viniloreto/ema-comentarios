# Ema_Comentarios

## Composer
Baixar o [composer](https://getcomposer.org/download/)

### Laravel
Ir até a pasta do projeto pelo CMD e digitar 
```
composer global require laravel/installer
```

Após isso digitar 
```
composer install
```

Em Seguida digitar 
```
composer update
```

#### Banco de dados
Para configurar o banco, basta baixar o MySql e criar uma DB.

O projeto vem com um arquivo Env de exemplo, basta renomea-lo e configurar com as informações do seu banco.

Feito isso, subir o banco localmente.

##### Rodando o projeto
Feito os passos acima para rodar o projeto é necessario rodar as migrations:
```
php artisan migrations
```

Em seguida, para subir o sistema localmente basta digitar 
```
php artisan serve
```
# KM-TEST-API

Application API symfony


## Installation
### cloner le projet

```sh
git clone https://github.com/jyres/km-test-api.git

```

### installer les dépendances

```sh
cd km-test-api
```
```sh
composer install
```

### installer les packages utiles
```sh
composer require api
```
```sh
composer require maker --dev
```

### configuration générale

créer le fichier .env et configurer la variable DATABASE_URL.

### creer les tables dans la BD et y insérer des données génériques

```sh
php bin/console make:migration
```
```sh
php bin/console doctrine:migrations:migrate
```
```sh
php bin/console doctrine:fixtures:load
```

### lancer l'application sur le port 8000 (neccessite l'installation du symfony CLI sur https://symfony.com/download)

```sh
symfony server:start --port=8000
```
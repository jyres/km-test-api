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

créer le fichier .env à partir du fichier .env.example et configurer la variable DATABASE_URL.

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

### Exemples de requettes API

enregistrer une reservation

```sh
curl --location --request POST 'http://127.0.0.1:8000/reservations' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'id_user=1' \
--data-urlencode 'id_bureau=2' \
--data-urlencode 'date_debut_reservation=2025-07-16 19:00:00' \
--data-urlencode 'date_fin_reservation=2025-07-17 19:00:00'
```

lister les réservation d'un utilisateur

```sh
symfony server:start --port=8080
```
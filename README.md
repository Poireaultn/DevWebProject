# Projet Web - Gestion des Équipements

## Installation rapide

Si le projet est déjà installé avec toutes les dépendances, voici les commandes essentielles pour démarrer :

```bash
# Mettre à jour la base de données
php artisan migrate

# Remplir la base de données avec les données de test
php artisan db:seed

# Lancer le serveur de développement
php artisan serve
```

Le site sera accessible à l'adresse : http://127.0.0.1:8000

## Installation complète

Si vous clonez le projet pour la première fois :

```bash
# Installer les dépendances PHP
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Configurer la base de données dans le fichier .env

# Exécuter les migrations
php artisan migrate

# Remplir la base de données
php artisan db:seed

# Installer les dépendances Node.js
npm install

# Compiler les assets
npm run dev

# Lancer le serveur
php artisan serve
```

## Fonctionnalités

Le projet permet de gérer différents équipements :
- Lumières
- Vidéoprojecteurs
- Détecteurs de fumée
- Panneaux d'affichage
- Chauffages
- Volets
- Occupation des salles
- Réservations de salles
- Emploi du temps
- Parking
- Parking à vélos

## Routes principales

- `/visualisation` : Vue d'ensemble des équipements
- `/gestion` : Interface de gestion des équipements
- `/information` : Informations générales
- `/administration` : Interface d'administration

## Structure du Projet

* `app/` - Contient la logique de l'application
* `resources/`
# Projet de Gestion d'École

Ce projet permet de gérer les salles, les réservations et les objets connectés d'une école.

## Configuration requise

- PHP 8.3.6
- Laravel 12.0
- MySQL/MariaDB

## Installation

1. Cloner le projet :
```bash
git clone [URL_DU_REPO]
```

2. Installer les dépendances :
```bash
composer install
```

3. Copier le fichier d'environnement :
```bash
cp .env.example .env
```

4. Configurer la base de données dans le fichier `.env`

5. Générer la clé d'application :
```bash
php artisan key:generate
```

6. Exécuter les migrations et les seeders :
```bash
php artisan migrate:fresh --seed
```

## Structure des données

### Salles
- PAU E109 à PAU E509 : Salles de classe
- Bureau FASSI DIEUDONNE : Bureau professeur
- Bureau DECOURCHELLE INES : Bureau professeur
- Salle des Associations : Espace commun
- Cafétéria : Espace commun
- Bibliothèque : Espace commun

### Objets connectés

#### Chauffage
- Un chauffage central unique pour tout le bâtiment
- Modes : chauffage/climatisation
- Température réglable entre 15°C et 30°C

#### Lumières
- Une lumière par salle
- États : allumée/éteinte

#### Volets
- Un volet par salle
- États : ouvert/fermé

### Réservations de salles
- Durée : 1 heure
- Possibilité de réserver un créneau consécutif
- Les bureaux des professeurs ne sont pas réservables
- Informations requises :
  - Motif de la réservation
  - Heure de début
  - Réservé par (nom de l'utilisateur)

## Fonctionnalités

### Module de visualisation
- État des salles (libre/occupée/réservée)
- Pourcentage de salles vides
- État des objets connectés
- Emploi du temps des salles
- Réservations en cours et à venir

### Module de gestion
- Gestion des réservations de salles
- Contrôle des objets connectés
- Gestion de l'occupation des salles

## Routes principales

### Visualisation
- `/visualisation/rooms` : État des salles
- `/visualisation/schedule` : Emploi du temps
- `/visualisation/lights` : État des lumières
- `/visualisation/heaters` : État du chauffage
- `/visualisation/shutters` : État des volets

### Gestion
- `/gestion/rooms` : Gestion des salles
- `/gestion/lights` : Gestion des lumières
- `/gestion/heaters` : Gestion du chauffage
- `/gestion/shutters` : Gestion des volets

## Prérequis

- PHP >= 8.1
- Composer
- MySQL
- Node.js (optionnel)

## Configuration de la Base de Données

Si vous rencontrez des problèmes avec la base de données, suivez ces étapes :

1. Vérifiez votre fichier `.env` et assurez-vous qu'il contient les bonnes informations :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projetweb
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

2. Exécutez les commandes suivantes dans l'ordre :
```bash
# Vider les caches
php artisan config:clear
php artisan route:clear
php artisan cache:clear

# Exécuter les migrations
php artisan migrate:fresh
# OU
php artisan migrate
```

3. Si vous avez toujours des problèmes, vérifiez que :
   - MySQL est bien installé et en cours d'exécution
   - La base de données spécifiée dans `.env` existe
   - L'utilisateur MySQL a les droits nécessaires

## Configuration des Données

Pour voir les données dans les sections "Visualisation" et "Gestion", suivez ces étapes :

1. Exécutez les scripts de création des données :
```bash
php create_shutters.php
php create_heaters.php
```

2. Vérifiez que les migrations sont à jour :
```bash
php artisan migrate:fresh
```

3. Vérifiez que les routes sont correctement configurées :
```bash
php artisan route:list
```

4. Si vous ne voyez toujours pas les données, vérifiez que :
   - Les scripts de création ont été exécutés avec succès
   - Les migrations ont été exécutées sans erreur
   - Les routes sont correctement définies

## Contribution

1. Fork le projet
2. Créer une branche pour votre fonctionnalité :
```bash
git checkout -b nom-de-la-fonctionnalite
```
3. Commiter vos changements :
```bash
git commit -m "Description de vos modifications"
```
4. Pousser vers la branche :
```bash
git push origin nom-de-la-fonctionnalite
```
5. Ouvrir une Pull Request sur GitHub

## Licence

Ce projet est sous licence MIT.

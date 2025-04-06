# Projet Web - Site de Gestion

Un site web moderne développé avec Laravel pour la gestion et l'administration de contenu.

## Installation Rapide

1. Cloner le projet :
```bash
git clone https://github.com/Poireaultn/DevWebProject.git
cd DevWebProject
```

2. Installer les dépendances :
```bash
composer install
npm install
```

3. Configurer l'environnement :
```bash
cp .env.example .env
php artisan key:generate
```

4. Configurer la base de données dans le fichier `.env` :
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=projetweb
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

5. Créer la base de données :
```sql
CREATE DATABASE projetweb;
```

6. Initialiser la base de données avec les données de test :
```bash
php artisan migrate:fresh --seed
```

7. Démarrer le serveur :
```bash
php artisan serve
```

L'application sera accessible à l'adresse : http://localhost:8000

## Fonctionnalités

* Gestion des objets connectés :
  * Volets roulants
  * Chauffage central
  * Éclairage
  * Détecteurs de fumée
  * Panneaux d'affichage
  * Vidéoprojecteurs

* Gestion des espaces :
  * Occupation des salles
  * Réservation de salles
  * Parking voitures
  * Parking vélos

* Visualisation en temps réel :
  * État des objets connectés
  * Occupation des espaces
  * Planning des salles

## Structure du Projet

* `app/` - Contient la logique de l'application
* `resources/` - Contient les vues et les assets
* `routes/` - Définit les routes de l'application
* `database/` - Contient les migrations et les seeders
* `public/` - Contient les fichiers accessibles publiquement

## Utilisateur de Test

Un utilisateur de test est créé automatiquement :
- Email : test@example.com
- Mot de passe : password

## Dépannage

Si vous rencontrez des problèmes :

1. Vider les caches :
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

2. Vérifier les migrations :
```bash
php artisan migrate:status
```

3. Réinitialiser la base de données :
```bash
php artisan migrate:fresh --seed
```

## Contribution

1. Fork le projet
2. Créer une branche pour votre fonctionnalité
3. Commiter vos changements
4. Pousser vers la branche
5. Ouvrir une Pull Request

## Licence

Ce projet est sous licence MIT.

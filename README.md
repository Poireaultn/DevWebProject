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


1. Installer les dépendances PHP
```bash
composer install
```

2. Copier le fichier d'environnement
```bash
cp .env.example .env
```

3. Modifier le fichier env pour ajouter vos identifiants sql
```
DB_USERNAME=[username_sql]
DB_PASSWORD=[mdp_sql]
```

4. Générer la clé d'application
```bash
php artisan key:generate
```

5. Initialisation de la base de données
   
    5.1. Créer la base de données en vous connectant à votre sql :
   ```
    CREATE DATABASE projetweb;
   ```

    5.2. Importer les données :
    ```bash
    mysql -u root -p projetweb < database/projetweb.sql
    ```

6. Exécuter les migrations
```bash
php artisan migrate
```

7. Remplir la base de données
```bash
php artisan db:seed
```

8. Installer les dépendances Node.js
```bash
npm install
```

9. Compiler les assets
```bash
npm run dev
```

10. Lancer le serveur
```bash
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

## Comptes de connection

1. Admin :
   ```
   Login : admin@cytech.fr
   MDP : admin123
    ```
3. Professeur :
   ```
   Login : prof@cytech.fr
   MDP : prof123
   ```
5. Etudiant :
   ```
   Login : etudiant@cytech.fr
   MDP : etudiant123
   ```

## Routes principales

- `/visualisation` : Vue d'ensemble des équipements
- `/gestion` : Interface de gestion des équipements
- `/information` : Informations générales
- `/administration` : Interface d'administration

## Structure du Projet

* `app/` - Contient la logique de l'application
* `resources/`

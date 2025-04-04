# Projet Web - Site de Gestion

Un site web moderne développé avec Laravel pour la gestion et l'administration de contenu.

## Fonctionnalités

- Barre de navigation responsive
- Sections principales :
  - Information
  - Visualisation
  - Gestion
  - Administration
- Design moderne avec Bootstrap 5
- Interface utilisateur intuitive
- Système d'authentification

## Prérequis

- PHP >= 8.1
- Composer
- MySQL
- Node.js (optionnel)

## Installation

1. Cloner le projet :
```bash
git clone https://github.com/Poireaultn/DevWebProject.git
```

2. Installer les dépendances PHP :
```bash
composer install
```

3. Copier le fichier .env :
```bash
cp .env.example .env
```

4. Configurer la base de données :
   - Ouvrir le fichier `.env`
   - Modifier les paramètres suivants selon votre configuration MySQL :
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=projetweb
     DB_USERNAME=votre_nom_utilisateur
     DB_PASSWORD=votre_mot_de_passe
     ```
   - Créer la base de données :
     ```sql
     CREATE DATABASE projetweb;
     ```

5. Générer la clé d'application :
```bash
php artisan key:generate
```

6. Lancer les migrations :
```bash
php artisan migrate
```

7. Créer un utilisateur administrateur :
```bash
php artisan tinker
```
Puis dans la console tinker :
```php
$user = new App\Models\User;
$user->name = 'Admin';
$user->email = 'admin@example.com';
$user->password = Hash::make('admin123');
$user->save();
```

8. Démarrer le serveur :
```bash
php artisan serve
```

## Structure du Projet

- `app/` - Contient la logique de l'application
- `resources/` - Contient les vues et les assets
- `routes/` - Définit les routes de l'application
- `public/` - Contient les fichiers accessibles publiquement
- `config/` - Contient les fichiers de configuration

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

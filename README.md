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

4. Générer la clé d'application :
```bash
php artisan key:generate
```

5. Configurer la base de données dans le fichier .env

6. Lancer les migrations :
```bash
php artisan migrate
```

7. Démarrer le serveur :
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
2. Créer une branche pour votre fonctionnalité
3. Commiter vos changements
4. Pousser vers la branche
5. Ouvrir une Pull Request

## Licence

Ce projet est sous licence MIT.

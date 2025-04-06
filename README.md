# Projet de Gestion d'École

Ce projet permet de gérer les salles, les réservations et les objets connectés d'une école.

## Configuration requise

- PHP 8.3.6
- Laravel 12.0
- MySQL/MariaDB
- Composer
- Node.js (optionnel)

## Installation

1. Cloner le projet :
```bash
git clone https://github.com/Poireaultn/DevWebProject.git
cd DevWebProject
```

2. Installer les dépendances :
```bash
composer install
```

3. Copier le fichier d'environnement :
```bash
cp .env.example .env
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

5. Générer la clé d'application :
```bash
php artisan key:generate
```

6. Créer la base de données :
```sql
CREATE DATABASE projetweb;
```

7. Exécuter les migrations et créer les données initiales :
```bash
php artisan migrate:fresh
php create_heaters.php
php create_lights.php
php create_shutters.php
php create_room_occupancy.php
php create_display_panels.php
php create_smoke_detectors.php
php create_projectors.php
```

8. Démarrer le serveur :
```bash
# Vérifier si le port 8002 est disponible
lsof -i :8002

# Si le port est occupé, tuer le processus
kill -9 $(lsof -t -i:8002)

# Démarrer le serveur
php artisan serve --port=8002
```

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

#### Panneaux d'affichage
- Un panneau par salle
- États : allumé/éteint
- Contenu personnalisable
- Interface de gestion dédiée

#### Détecteurs de fumée
- Un détecteur par salle
- États : actif/inactif
- Détection de fumée
- Interface de gestion dédiée

#### Vidéoprojecteurs
- Un projecteur par salle
- États : allumé/éteint
- Sélection de la source (HDMI1, HDMI2, VGA, USB)
- Réglage de la luminosité
- Interface de gestion dédiée

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
- Visualisation des panneaux d'affichage
- Visualisation des détecteurs de fumée
- Visualisation des vidéoprojecteurs

### Module de gestion
- Gestion des réservations de salles
- Contrôle des objets connectés
- Gestion de l'occupation des salles
- Gestion des panneaux d'affichage
- Gestion des détecteurs de fumée
- Gestion des vidéoprojecteurs

## Résolution des problèmes courants

1. **Les objets connectés ne s'affichent pas**
   - Vérifiez que les migrations ont bien été exécutées
   - Vérifiez que les scripts de création ont bien été exécutés
   - Réexécutez les migrations et les scripts de création

2. **L'emploi du temps est vide**
   - Vérifiez que le seeder des cours a bien été exécuté
   - Réexécutez les migrations et les seeders

3. **Erreur de connexion à la base de données**
   - Vérifiez les informations de connexion dans le fichier `.env`
   - Vérifiez que le service MySQL est bien démarré
   - Vérifiez que la base de données existe

4. **Le port 8002 est déjà utilisé**
   - Vérifiez les processus en cours : `lsof -i :8002`
   - Arrêtez le processus existant : `kill -9 $(lsof -t -i:8002)`
   - Redémarrez le serveur : `php artisan serve --port=8002`

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
```

3. Créez les données initiales :
```bash
php create_heaters.php
php create_lights.php
php create_shutters.php
php create_room_occupancy.php
php create_display_panels.php
php create_smoke_detectors.php
php create_projectors.php
```

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

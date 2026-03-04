# Laravel Task Manager

Une application de gestion de tâches moderne construite avec **Laravel 12**, **Blade**, **Tailwind CSS** et **Alpine.js**.

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=flat&logo=tailwind-css&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green.svg)

## 📋 Table des matières

- [Fonctionnalités](#-fonctionnalités)
- [Technologies utilisées](#-technologies-utilisées)
- [Prérequis](#-prérequis)
- [Installation](#-installation)
- [Utilisation](#-utilisation)
- [Structure du projet](#-structure-du-projet)
- [Tests](#-tests)
- [Captures d'écran](#-captures-décran)
- [Contribuer](#-contribuer)
- [Licence](#-licence)

## ✨ Fonctionnalités

### Gestion des tâches
- ✅ **CRUD complet** - Créer, lire, modifier et supprimer des tâches
- 📊 **Statuts** - À faire, En cours, Terminé
- 🔥 **Priorités** - Basse, Moyenne, Haute
- 📅 **Dates d'échéance** - Définir des deadlines pour chaque tâche
- 🔍 **Recherche** - Rechercher dans les titres et descriptions
- 🏷️ **Filtres** - Filtrer par statut, priorité et catégorie

### Gestion des catégories
- 📁 Création de catégories personnalisées
- 🎨 Codes couleur hexadécimaux pour une identification visuelle
- 📂 Association des tâches aux catégories

### Authentification & Sécurité
- 🔐 Système d'authentification complet (Laravel Breeze)
- 👤 Inscription et connexion sécurisées
- ✉️ Vérification d'email
- 🔑 Réinitialisation de mot de passe
- 🛡️ Politiques d'autorisation (Policies) pour la protection des tâches
- 👤 Gestion du profil utilisateur

### Multi-utilisateurs
- 🔒 Chaque utilisateur possède ses propres tâches et catégories
- 🚫 Isolation des données par utilisateur

## 🛠 Technologies utilisées

| Backend | Frontend | Outils |
|---------|----------|--------|
| Laravel 12 | Blade Templates | Vite 7 |
| PHP 8.2+ | Tailwind CSS 4 | Alpine.js 3 |
| Eloquent ORM | Components réutilisables | Laravel Pail |
| Migrations | Responsive Design | Laravel Pint |
| Form Requests | | PHPUnit |

## 📦 Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- **PHP** >= 8.2
- **Composer** (gestionnaire de dépendances PHP)
- **Node.js** >= 18.x et **npm**
- **SQLite** (ou un autre SGBD : MySQL, PostgreSQL)
- **Git**

## 🚀 Installation

### 1. Cloner le repository

```bash
git clone https://github.com/MarvinLeRouge/laravel-task-manager.git
cd laravel-task-manager
```

### 2. Installer les dépendances

```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances Node.js
npm install
```

### 3. Configurer l'environnement

```bash
# Copier le fichier .env.example vers .env
cp .env.example .env

# Générer la clé d'application
php artisan key:generate
```

### 4. Configurer la base de données

Par défaut, le projet utilise **SQLite**. Créez le fichier de base de données :

```bash
touch database/database.sqlite
```

Puis lancez les migrations :

```bash
php artisan migrate
```

### 5. Compiler les assets

```bash
# Pour le développement (avec hot-reload)
npm run dev

# Ou pour la production
npm run build
```

### 6. Lancer le serveur de développement

```bash
# Option 1 : Utiliser le script composer (recommandé)
composer dev

# Option 2 : Serveur Laravel classique
php artisan serve
```

L'application sera accessible à l'adresse : http://localhost:8000

## 💡 Utilisation

### Commandes disponibles

| Commande | Description |
|----------|-------------|
| `composer dev` | Lance le serveur avec hot-reload (server, queue, logs, vite) |
| `composer test` | Exécute la suite de tests |
| `npm run dev` | Lance Vite en mode développement |
| `npm run build` | Compile les assets pour la production |
| `php artisan migrate` | Exécute les migrations |
| `php artisan migrate:fresh --seed` | Réinitialise la BDD avec les seeders |

### Script d'installation rapide

```bash
composer setup
```

Ce script exécute automatiquement :
- `composer install`
- Copie `.env.example` vers `.env`
- Génère la clé d'application
- Exécute les migrations
- `npm install`
- `npm run build`

## 📁 Structure du projet

```
laravel-task-manager/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── CategoryController.php    # CRUD des catégories
│   │   │   ├── TaskController.php        # CRUD des tâches
│   │   │   ├── TaskFilterController.php  # Filtrage des tâches
│   │   │   └── ProfileController.php     # Gestion du profil
│   │   └── Requests/
│   │       ├── StoreTaskRequest.php      # Validation création tâche
│   │       ├── UpdateTaskRequest.php     # Validation modification tâche
│   │       └── ...
│   ├── Models/
│   │   ├── Task.php                      # Modèle Task
│   │   ├── Category.php                  # Modèle Category
│   │   └── User.php                      # Modèle User
│   └── Policies/
│       └── TaskPolicy.php                # Autorisations Task
├── database/
│   ├── migrations/                       # Migrations de la BDD
│   ├── factories/                        # Factories pour les tests
│   └── seeders/                          # Seeders
├── resources/
│   ├── views/
│   │   ├── tasks/                        # Vues des tâches
│   │   ├── categories/                   # Vues des catégories
│   │   ├── layouts/                      # Layouts Blade
│   │   └── components/                   # Components Blade
│   ├── js/
│   └── css/
├── routes/
│   ├── web.php                           # Routes web
│   └── auth.php                          # Routes d'authentification
└── tests/
    ├── Feature/                          # Tests fonctionnels
    └── Unit/                             # Tests unitaires
```

## 🧪 Tests

Le projet inclut une suite de tests pour garantir la qualité du code.

```bash
# Exécuter tous les tests
composer test

# Ou directement avec PHPUnit
php artisan test
```

## 📸 Captures d'écran

> Ajoutez ici des captures d'écran de votre application :
> - Page d'accueil / Dashboard
> - Liste des tâches avec filtres
> - Formulaire de création/modification
> - Gestion des catégories

## 🤝 Contribuer

Les contributions sont les bienvenues ! Voici comment vous pouvez contribuer :

1. Forkez le projet
2. Créez une branche (`git checkout -b feature/AmazingFeature`)
3. Commitez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Pushez vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

## 📄 Licence

Ce projet est distribué sous la licence [MIT](LICENSE).

---

## 🎓 À propos

Ce projet a été développé dans le cadre d'un apprentissage de **Laravel** et des bonnes pratiques du développement web moderne. Il démontre la maîtrise des concepts suivants :

- Architecture MVC avec Laravel
- Authentification et autorisation
- Validation des formulaires (Form Requests)
- Relations Eloquent (One-to-Many, Polymorphic)
- Tests automatisés avec PHPUnit
- Intégration frontend avec Tailwind CSS et Alpine.js
- Build d'assets avec Vite

---

<div align="center">

**Développé avec ❤️ par Jean Ceugniet**

[⬆ Retour en haut](#laravel-task-manager)

</div>

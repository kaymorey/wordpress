# 🛍️ Projet Nais - WordPress Custom Theme

## 🛠️ Stack Technique

* **Environnement :** Docker (WordPress + MariaDB + PHP 8.x)
* **Frontend :** Vite.js, Tailwind CSS, Stimulus
* **Backend :** WordPress (Thème Custom)
* **Gestionnaires de paquets :**
    * `pnpm` (Frontend / JS)
    * `composer` (Backend / PHP)
* **Architecture :**
    * Custom Post Types via `jjgrainger/posttypes`
    * Custom Fields via `Carbon Fields`

---

## 🚀 Installation & Démarrage

### 1. Pré-requis
* composer
* pnpm

### 2. Initialisation du projet
Cloner le repo et lancer les conteneurs :

```bash
git clone <url-du-repo>
mv wordpress nais
cd nais
docker compose up -d
```

Lancer l'installation du projet wordpress :

- Se rendre sur http://localhost:8000/
- Choisir une langue et remplir les informations demandées
- Cliquer sur "Installer wordpress"

Installer les dépendances et lancer le watcher front :
```bash
cd wp-content/themes/nais-theme
composer install
pnpm install
pnpm dev
```

Le site est accessible à l'adresse http://localhost:8000/, et l'admin à l'adresse http://localhost:8000/wp-admin
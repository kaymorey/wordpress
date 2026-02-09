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

Cloner le repo et lancer les conteneurs :

```bash
git clone <url-du-repo>
cd nais-project
docker compose up -d
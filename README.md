# Cocoon-projet/di Application de démonstartion

Réalisation d'un mini framework mvc

### Librairies utilisées pour le fonctionnement

[zendframework/zend-diactoros](https://github.com/zendframework/zend-diactoros) PSR-7 http message

[league/plates](https://github.com/thephpleague/plates) Système de template php natif

[nikic/fast-route](https://github.com/nikic/FastRoute) Router pour php

[cocoon-projet/di](https://github.com/cocoon-projet/di) Conteneur d'injection de dépendances

# Architecture

![Alt Architecture](app.jpeg)

* **app**: pour les controlleurs et les "models"
* **config**: contient le fichier pour enregistrer les services
* **database**: pour la base de donnée de l'application
* **public**: point d'entrée de l'application avec le fichier index.php
* **ressources**: contient les vues de l'application
* **routes**: contient les routes de l'application dans le fichier web.php
* **src**: contient les fichiers de fonctionnement de l'application

## Démarrer l'application


```
php -S 0.0.0.0:8000 -t public/
```

## Screenshot de l'application

![Alt screenshot](screenshot.jpeg)





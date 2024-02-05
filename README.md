
# Plateforme de Communication et de Marketing

Ce projet vise à développer une plateforme web interne pour une entreprise en pleine croissance dans le secteur de la communication et du marketing. L'objectif principal est de centraliser et de rationaliser ses opérations en ligne, tout en améliorant la communication, la gestion de l'information et la collaboration au sein de l'équipe.

## Fonctionnalités

### 1. Gestion de Newsletter avec Spatie

La plateforme permet à l'entreprise d'envoyer des newsletters régulières à ses clients et partenaires. L'intégration du package Spatie Newsletter facilite la création, l'envoi et le suivi des campagnes de newsletters. Les fonctionnalités de gestion des abonnements et des listes de diffusion sont intuitives et conviviales.

### 2. Authentification avec Gestion des Rôles (Policies et Guards)

La sécurité et la confidentialité des données sont primordiales. Le système d'authentification robuste est basé sur les politiques et gardes de Laravel. Trois rôles distincts sont définis : Administrateur, Rédacteur et Membre. Chaque rôle a des autorisations spécifiques pour accéder et modifier certaines parties de la plateforme.

### 3. Fonctionnalités Forgot Password et Remember Me

Pour assurer une expérience utilisateur fluide, la plateforme inclut les fonctionnalités "forgot password" pour permettre aux utilisateurs de réinitialiser leur mot de passe, ainsi que la fonction "remember me" pour faciliter la connexion automatique.

### 4. Media Library avec Spatie

La gestion des médias est un élément clé de la plateforme. Spatie Media Library permet aux utilisateurs de télécharger, organiser et partager des fichiers multimédias tels que des images, des vidéos et des documents. Chaque média est associé à un utilisateur ou à un projet spécifique.

### 5. Soft Delete

Pour éviter la perte accidentelle de données, la plateforme met en œuvre la fonctionnalité "soft delete". Cela signifie que les enregistrements ne sont pas supprimés physiquement de la base de données, mais plutôt marqués comme supprimés, offrant ainsi la possibilité de les restaurer si nécessaire.

### 6. Middleware

Des middleware sont mis en place pour gérer les autorisations spécifiques aux rôles. Cela garantit que chaque utilisateur a accès uniquement aux fonctionnalités qui lui sont autorisées en fonction de son rôle.

### 7. Génération PDF

La plateforme peut générer des fichiers PDF à partir de données spécifiques. Par exemple, un rapport mensuel agrégeant les performances des campagnes de newsletters ou un récapitulatif des médias téléchargés sur une période donnée.

### 8. Modélisation avec 3 Rôles

La base de données est modélisée de manière à prendre en charge les trois rôles définis (Administrateur, Rédacteur, Membre). Chaque rôle a des tables et des relations spécifiques, assurant ainsi une séparation claire des données et des responsabilités au sein de la plateforme.

En intégrant ces fonctionnalités, la plateforme offre à notre client une solution complète et personnalisée pour répondre à ses besoins internes en matière de communication, de collaboration et de gestion d'informations.

## Installation

1. Clonez ce repository sur votre machine locale.
2. Assurez-vous d'avoir PHP et Composer installés localement.
3. Exécutez `composer install` pour installer les dépendances du projet.
4. Configurez votre base de données dans le fichier `.env`.
5. Exécutez les migrations avec la commande `php artisan migrate`.
6. Lancez le serveur de développement avec `php artisan serve`.

## Auteur

- [Maryam](https://github.com/Youcode-Classe-E-2023-2024/Maryam_Jammar_NewsLatter.git)

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE.md](LICENSE.md) pour plus de détails.

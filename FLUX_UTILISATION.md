# Flux d’utilisation — DaybydayCRM

Ce document décrit, pas à pas, comment utiliser DaybydayCRM au quotidien pour gérer vos clients, leads, tâches, projets, factures, paiements, rendez‑vous et documents.

## Prérequis et accès

- Compte administrateur par défaut (après seed) : 
  - Email : admin@admin.com
  - Mot de passe : admin123
- Compte démo (si vous avez inséré les données de démonstration) :
  - Email : demo@daybydaycrm.com
  - Mot de passe : Daybydaycrm123

> Si ces comptes n’existent pas, exécutez les migrations et seeders ou créez un utilisateur via l’écran d’inscription.

---

## 1) Paramétrage initial (admin)

- Créez/paramétrez les utilisateurs et leurs rôles/permissions.
- Vérifiez les paramètres généraux (langue, devise, numérotation des factures).
- Ajoutez des produits/services récurrents si vous facturez souvent les mêmes éléments.
- Facultatif : connectez un fournisseur de stockage (ex. Dropbox/Google Drive) et configurez l’intégration de paiement si nécessaire.

Résultat attendu : l’espace est prêt pour créer des clients, suivre des leads et produire des factures.

---

## 2) Gestion des clients et contacts

- Créez un client avec ses informations principales (coordonnées, société).
- Ajoutez des contacts (personnes) associés au client.
- Ajoutez des documents liés au client (contrats, devis signés, etc.).

Résultat attendu : chaque client possède sa fiche complète, prête à recevoir des leads, tâches, projets et documents.

---

## 3) Leads (prospects) → Offres → Factures

Ce flux couvre le cycle commercial de l’opportunité à la facturation.

1. Créez un Lead et assignez un responsable.
2. Suivez les statuts du Lead (ex. nouveau, en cours, gagné/perdu), ajoutez des commentaires et pièces jointes.
3. Créez une Offre (devis) à partir du Lead, ajoutez des lignes (produits/services, quantités, prix, taxes).
4. Envoyez ou téléchargez l’Offre pour le client.
5. Une fois acceptée, convertissez l’Offre en Facture ou créez directement une Facture liée au client/lead.
6. Enregistrez les Paiements (totaux ou partiels). Le statut de la facture se met à jour (ex. payée, partiellement payée, en retard).
7. Le cas échéant, émettez un Avoir (crédit) et rattachez‑le à une facture.

Résultat attendu : le tunnel de vente est tracé de bout en bout, avec une facture et un paiement enregistrés.

---

## 4) Projets et tâches

- Créez un Projet pour regrouper les travaux liés à un client ou une mission.
- Créez des Tâches et assignez‑les à des utilisateurs.
- Ajoutez commentaires et documents sur les tâches/projets.
- Enregistrez le temps passé (si activé) pour le suivi et la facturation éventuelle.

Résultat attendu : vision claire de l’avancement (qui fait quoi, quand, combien de temps), prête à alimenter la facturation au besoin.

---

## 5) Rendez‑vous / Calendrier

- Créez des Rendez‑vous liés à un client, une tâche ou un lead.
- Consultez le calendrier pour visualiser la charge, replanifier et éviter les conflits.

Résultat attendu : un agenda partagé permettant de préparer les échanges clients et les jalons projet.

---

## 6) Documents

- Téléversez des fichiers par client, projet, tâche ou lead.
- Si un fournisseur de stockage est configuré, les fichiers sont synchronisés avec le service choisi.

Résultat attendu : tous les fichiers sont centralisés au bon endroit, accessibles depuis les fiches correspondantes.

---

## 7) Notifications et mentions

- Recevez des notifications lors des actions importantes (création, mise à jour, assignation, commentaire).
- Utilisez les mentions @utilisateur dans les commentaires pour notifier directement un collègue.

Résultat attendu : collaboration fluide et suivi en temps réel des changements.

---

## 8) Recherche globale

- Utilisez la barre de recherche pour trouver clients, leads, tâches, projets, factures, etc.
- Les résultats agrègent les sources clés et facilitent la navigation.

Résultat attendu : accès rapide à l’information sans connaître l’emplacement exact.

---

## 9) Rôles et permissions

- Définissez des rôles (ex. Admin, Manager, Collaborateur) et attribuez‑les aux utilisateurs.
- Les permissions contrôlent l’accès aux modules (lecture/écriture/suppression).

Résultat attendu : sécurité et cloisonnement adaptés à l’organisation.

---

## 10) Tableau de bord

- Visualisez un aperçu des activités récentes, tâches, leads, factures en retard, etc.
- Utilisez les graphiques pour suivre les tendances (créations, paiements, charge).

Résultat attendu : vision d’ensemble pour piloter l’activité au quotidien.

---

## 11) Bonnes pratiques

- Renseignez systématiquement les commentaires et pièces jointes pour conserver l’historique.
- Tenez à jour les statuts des leads et des factures pour une reporting fiable.
- Mentionnez les collègues concernés pour fluidifier la collaboration.
- Planifiez les rendez‑vous directement depuis les entités (lead/tâche/projet) pour garder le contexte.

---

## 12) Dépannage rapide

- Impossible de se connecter : vérifiez que l’utilisateur existe ou réinitialisez le mot de passe.
- Pas de clients/leads visibles : assurez‑vous que votre rôle dispose des permissions requises.
- Problème d’upload : vérifiez la configuration du stockage (local/Dropbox/Google Drive) et les droits d’écriture.
- Recherche vide : confirmez l’indexation (si une recherche avancée est activée) et les filtres utilisés.

---

## Résumé des parcours

- Commercial : Lead → Offre → Facture → Paiement/Avoir.
- Production : Projet → Tâches → Temps → (Facturation si nécessaire).
- Relation client : Documents → Rendez‑vous → Commentaires/Notifications.

Ce flux couvre l’essentiel pour démarrer rapidement et structurer votre activité dans DaybydayCRM.


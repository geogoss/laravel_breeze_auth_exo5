Laravel_auth_exo_5:

fonctionnalité
-Rajouter un champ prenom, age, adresse et faire en sorte que les données soient rajouté dans la table à l'enregistrement
-Rajouter un système de rôle pour les users (foreign key). 
-Un compte avec le role 'admin' doit être créer par défaut dans votre seeder. 
-Pour les autres users, donner le role 'membre' par défaut pendant leurs enregistrements. 

Affichage
-Dans la page home : Toutes les données de l'utilisateur connecté dans une card
-dans la page admin( dashboard )  : Toutes les données des utilisateurs avec le role 'admin' dans des cards + button show & delete (sauf pour celui qui est connecté)
-dans la page roles : Tous les rôles disponibles (admin, staff, membres) + create(add un role) & delete
-dans la page user : Tous les utilisateurs qui n'ont pas le rôles 'admin' dans un tableau. Possibiliter de modifier(même le rôle), et supp un user.
-button logout fonctionnel

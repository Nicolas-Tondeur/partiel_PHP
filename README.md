# Tondeur Nicolas

## Pour les exercices de PHP, basculer sur la branche master

Question 2 B) <br>
requête pour créer un personnage : ```INSERT INTO `personnes` (`id`, `nom`, `age`) VALUES (NULL, 'Carlos', '30')```

Question 3 B) <br>
requête pour afficher le personnage et sa voiture : ```SELECT nom, voiture FROM `personne` ```

Question 3 C) <br>
requête pour afficher le personnage et sa voiture : ```SELECT nom, sport FROM `personne` ```

Question  4 <br>
requête qui permet d'afficher uniquement les utilisateurs qui participent au sport "concours de mangeur de pâté de crabe" 
et qui possède la voiture "sous marin" : ```SELECT * FROM `personnes` WHERE sport LIKE "concours de mangeur de pâté de crabe" AND voiture LIKE "sous marin"```






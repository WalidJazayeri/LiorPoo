<?php

/**
 * CE FICHIER A POUR BUT D'AFFICHER LA PAGE D'ACCUEIL !
 * 
 * On va donc se connecter à la base de données, récupérer les articles du plus récent au plus ancien (SELECT * FROM articles ORDER BY created_at DESC)
 * puis on va boucler dessus pour afficher chacun d'entre eux
 */
require_once ('libraries/database.php');
require_once ('libraries/utils.php');



/**
 * 2. Récupération des articles + connect pdo
 */
// On utilisera ici la méthode query (pas besoin de préparation car aucune variable n'entre en jeu)
// On fouille le résultat pour en extraire les données réelles
$articles = findAllArticles();

/**
 * 3. Affichage
 */
$pageTitle = "Accueil";
render('articles/index',compact('pageTitle','articles'));
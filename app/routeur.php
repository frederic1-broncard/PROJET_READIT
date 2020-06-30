<?php
/*
./app/routeur.php
ROUTEUR CENTRAL
*/






//Route par default
//Pattern: /
//CTRL: postsControleur
//Action: index
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);

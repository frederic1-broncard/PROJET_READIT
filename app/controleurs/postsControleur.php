<?php
/*
./app/controleurs/postsControleur.php
*/
namespace App\Controleurs\PostsControleur;

function indexAction(\PDO $connexion){
  //je demande la liste des postsControleur
  //pour cela je dois modifier les variables externes via global
  GLOBAL $content, $title;

$content = 'HELLO BERNABE';
$title = '<h1>WAWA</h1>';
}

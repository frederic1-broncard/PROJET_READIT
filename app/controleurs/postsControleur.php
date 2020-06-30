<?php
/*
./app/controleurs/postsControleur.php
*/
namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele ; //voir $posts plus bas le use use est utilisé lorsque il y a plusieurs fois actions a faire dessus
function indexAction(\PDO $connexion){
  //je mets dans $posts la liste des 10 derniers posts que je demande au modèle
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion); //puisque ceci va être utilisé plusieurs fois on a fait un Use plus haut reprenant une partie du namespace jusque la partie en vert

  //donc concretement je charge la vue posts/index liste dans $content
GLOBAL $title, $content;
$title = "Blog";
ob_start();
include '../app/vues/posts/index.php';
$content = ob_get_clean();

}

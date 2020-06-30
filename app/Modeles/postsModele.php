<?php
/*
./app/modeles/postsModele.php
*/

namespace App\Modeles\PostsModele;

function findAll(\PDO $connexion) {
  $sql = " SELECT *

           FROM posts
           ORDER BY created_at DESC
           LIMIT 10;";
  $rs = $connexion ->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC); //tableau indexé de tableau associatif
}
//tous ceci va se retrouver dans $posts  bvvbnvbnvbn

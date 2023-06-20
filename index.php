<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php'); ?>
</head>

<body>

   <?php

   $activeContent = array(
      "index" => "active",
      "courses" => "",
      "articles" => "",
      "pageboard"=>""
   );

   include('includes/navbar.php');

   ?>

   <div class="block">
      <h1>
         Bienvenue,
      </h1>
      <p>
         sur le site web d'un taupin ayant pour objectif de partager des ressources pratiques acquises durant deux année
         de CPGE. Je propose des fiches de révisions et cours polycopiés ou manuscrits adaptés de cours dispensés par
         mes professeurs de CPGE ou de livres et d'internet. Si certains extraits vous paraissent familiers, nous avons
         probablement les même lectures. Ce site propose des contenus de mathématique, de physique, d'informatique
         pratique et théorique, quelques ressources LaTeX pour correctement débuter ainsi que pour répondre à quelques
         questions de confirmés qui feront écho à des problèmes que j'aurais rencontrés durant mon apprentissage, afin
         de partager mon expérience. <br>
      </p>
      <div class="disclaim">
         <strong>Disclaimer</strong> Ce site est en développement perpetuel, certains éléments de contenus ou de forme
         pourraient ne pas être complètement à jour, si vous repérez des erreurs (orthographe, contenu, forme, fond,
         faille de code,...) faites le moi parvenir, je serais d'autant plus ravi de pouvoir améliorer cette page.
      </div>
   </div>



   


   <?php include('includes/jsincludes.php'); ?>

   <?php include('includes/footer.php'); ?>
</body>

</html>
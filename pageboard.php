<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php'); ?>
</head>

<body>

   <?php

   $activeContent = array(
      "index" => "",
      "courses" => "",
      "articles" => "",
      "pageboard" => "active"
   );

   include('includes/navbar.php');

   ?>

   <div class="container board-title">
      <h1>Tableau de bord de la page web</h1>
   </div>

   <div class="container board">
      <div class="board-column maj">
         <div class="tablecase salmon">
            <h3>Mises à jour</h3>
            <p>Le projet étant "expérimental", je publierais régulièrement un registre des correctifs apportés au site
               web, afin de montrer les différentes étapes par lesquelles je suis passé lors de la construction.</p>
            <table>
               <tr>
                  <th>Version</th>
                  <th>Corrections apportées</th>
                  <th>Date de MAJ</th>
               </tr>
               <tr>
                  <td>1.0.0</td>
                  <td>Création de la base du site : page d'accueil, tableau de bord, registre des cours, implémentation
                     du système de publication.</td>
                  <td>20/06/2023</td>
               </tr>
            </table>
         </div>
      </div>
      <div class="board-column info">
         <div class="tablecase blue">
            <h3>Objectifs de conception du site</h3>
            <ul style="list-style-type:none;">
               <li>
               <i class="fa-solid fa-circle-check"></i> Creer une plateforme accessible à tous les préparationnaires pour permettre le téléchargement simple de fiches de révisions et de cours.
               </li>
               <li>
               <i class="fa-solid fa-circle-xmark"></i> Creer un répertoire de publications contenant des théorèmes, lois, cours, informations pratiques, explications pertinentes pour une meilleure compréhension des programmes.[A venir]
               </li>
               <li>
               <i class="fa-solid fa-circle-xmark"></i> Publier une banque d'éxercices types corrigés.[A venir]
               </li>
            </ul>
         </div>
      </div>
   </div>


   <?php include('includes/jsincludes.php'); ?>

   <?php include('includes/footer.php'); ?>
</body>

</html>
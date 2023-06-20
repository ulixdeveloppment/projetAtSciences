<!DOCTYPE html>
<html lang="en">

<head>
   <?php include('includes/header.php'); ?>
</head>

<body>

   <?php

   $activeContent = array(
      "index" => "",
      "courses" => "active",
      "articles" => "",
      "pageboard" => ""
   );

   include('includes/navbar.php');
   include('includes/loadCourses.php');
   ?>

   <!-- Notice de la page -->
   <div class="container">
      <p>Les cours et les fiches de révisions manuscrites et polycopiées sont organisée selon trois grandes catégories
         <span class="topic">.Mathématiques</span>,
         <span class="topic">.Physique</span>,
         <span class="topic">.Informatique</span>.
         Les badges bleus indiquent les filières CPGE ayant probablement dans leurs programmes les notions proposées ou
         des notions annexe. Attention, en aucun cas cette liste ne fait office de programme officiel pour les filières
         CPGE. Pour les programmes officiels, s'orienter vers <a href="https://prepas.org/index.php?rubrique=53">le site
            prepa.org</a>
      </p>
      <p>
         <code style="font-size:1.2em;">&lt;Notice&gt;</code> Les fichiers proposés sont fournis en pdf. Quand elles sont
         disponibles, les sources Latex
         accompagnent le pdf. Parfois les documents sont également réalisés grâce à un éditeur de texte classique muni
         d'outil d'équations, ou encore manuscrits. Dans chaque cas un logo indique le type de fichier.
      </p>
   </div>


   <!-- Dropdown principal -->
   <div class="detailsblock">
      <div class="content">
         <!-- Mathématiques -->
         <details open>
            <summary>
               Mathématiques <span class="filial">MPSI</span><span class="filial">PCSI</span><span
                  class="filial">MP</span><span class="filial">PSI</span><span class="filial">PC</span><span
                  class="filial">BCPST</span>
            </summary>
            <div class="panelcontent">
               <ul>
                  <li class="tree-section year">MPSI (Ex Math Sup)</li>
                  <?php
                     DBtoFormat($select_images, "mathematiques", "1");
                  ?>
                  <li class="tree-section year">MP (Ex Math spé)</li>
                  <?php
                     DBtoFormat($select_images, "mathematiques", "2");
                  ?>
               </ul>
            </div>
         </details>

         <!-- Physique -->
         <details>
            <summary>
               Physique <span class="filial">MPSI</span><span class="filial">PCSI</span><span
                  class="filial">MP</span><span class="filial">PSI</span><span class="filial">PC</span><span
                  class="filial">BCPST</span>
            </summary>
            <div class="panelcontent">
               <ul>
                  <li class="tree-section year">MPSI (Ex Math Sup)</li>
                  <?php
                     DBtoFormat($select_images, "physique", "1");
                  ?>
                  <li class="tree-section year">MP (Ex Math spé)</li>
                  <?php
                     DBtoFormat($select_images, "physique", "2");
                  ?>
               </ul>
            </div>
         </details>

         <!-- Informatique -->
         <details>
            <summary>
               Informatique <span class="filial">MPSI</span><span class="filial">MP</span>
            </summary>
            <div class="panelcontent">
               Almost anything you'd like. The <code>&lt;details&gt;</code> element allows all <a
                  href="https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Content_categories#flow_content"
                  target="_blank">flow content</a>, which is basically everything.
            </div>
         </details>
      </div>
   </div>

   <?php include('includes/jsincludes.php'); ?>

   <?php include('includes/footer.php'); ?>
</body>

</html>
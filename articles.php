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
      "articles" => "active",
      "pageboard"=>""
   );

   include('includes/navbar.php');

   ?>

   <div class="container">
      <h1>La page "Articles" seras prochainement disponible.</h1>
      <p>
         Cette page comprendras une série de publications sur les thèmes de mathématiques, physique, informatique, ainsi que certaines en rapport avec la prépa.
      </p>
   </div>


   <?php include('includes/jsincludes.php'); ?>

   <?php include('includes/footer.php'); ?>
</body>

</html>
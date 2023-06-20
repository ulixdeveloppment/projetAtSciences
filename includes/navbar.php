<?php
$navlink_attributes = [
    ['fa fa-fw fa-home'],
    ['fa fa-fw fa-solid fa-file-pdf'],
    ['fa fa-fw fa-regular fa-pen-to-square'],
    ['fa fa-fw fa-solid fa-database']
];



?>
<div class="topnav" id="myTopnav">
    <a class="<?= $activeContent["index"] ?>" href="index.php"><i class="<?= $navlink_attributes[0][0] ?>"></i>Accueil</a>
    <a class="<?= $activeContent["courses"] ?>" href="courses.php"><i class="<?= $navlink_attributes[1][0] ?>"></i>Cours et fiches</a>
    <a class="<?= $activeContent["articles"] ?>" href="articles.php"><i class="<?= $navlink_attributes[2][0] ?>"></i>Articles</a>
    <a class="<?= $activeContent["pageboard"] ?>" href="pageboard.php"><i class="<?= $navlink_attributes[3][0] ?>"></i>Tableau de Bord du site</a>
    <a href="javascript:void(0);" class="icon" onclick="dropdown()">
        <i class="fa fa-bars"></i>
    </a>

</div>
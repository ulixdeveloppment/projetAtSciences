<?php
$navlink_attributes = [
    ['fa fa-fw fa-home'],
    ['fa fa-fw fa-solid fa-file-pdf'],
    ['fa fa-fw fa-regular fa-pen-to-square'],
];



?>
<div class="topnav" id="myTopnav">
    <a class="<?= $activeContent["index"] ?>" href="#"><i class="<?= $navlink_attributes[0][0] ?>"></i>Accueil</a>
    <a class="<?= $activeContent["courses"] ?>" href="#"><i class="<?= $navlink_attributes[1][0] ?>"></i>Cours et fiches</a>
    <a class="<?= $activeContent["articles"] ?>" href="#"><i class="<?= $navlink_attributes[2][0] ?>"></i>Articles</a>
    <a href="javascript:void(0);" class="icon" onclick="dropdown()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<?php 
require_once(__DIR__."/../variables.php");
?>

<header id="header">
    <div class="navbarTrigger"><i class="fas fa-bars"></i></div>
    <div class="navbar">
        <div class="navbarTrigger" style="background-color: transparent;"><i class="fas fa-bars"></i></div>
        <div class="sommaire">
            <a href="#header" class="btnSommaire">Home</a>
            <a href="#monParcours" class="btnSommaire">Mon parcours</a>
            <a href="#monCaractere" class="btnSommaire">Mon caractère</a>
            <a href="#mesCompetences" class="btnSommaire">Mes compétences</a>
            <a href="#mesProjets" class="btnSommaire">Mes projets</a>
            <a href="#meContacter" class="btnSommaire">Me contacter</a>
        </div>
    </div>
    <img id="photoMain" src="<?php $me["photoLink"] ?>" alt="profil_IMG" />
    <h2><?= $me["firstname"]." ".$me["lastname"] ?></h2>
    <div class="row">
        <h3 id="roleMain_invisible">x</h3>
        <h3 id="roleMain"></h3>
    </div>
    <div class="row socialHeader"> <!--Social Network-->
        <a class="socialHeaderUnit" target="blank" href="<?= $socialLinks["LinkedIn"] ?>"><i class="fab fa-linkedin"></i></a>
        <a class="socialHeaderUnit" target="blank" href="<?= $socialLinks["Facebook"] ?>"><i class="fab fa-facebook-square"></i></a>
        <a class="socialHeaderUnit" target="blank" href="<?= $socialLinks["Instagram"] ?>"><i class="fab fa-instagram"></i></a>
    </div>
</header>
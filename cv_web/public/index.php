<?php

require_once(__DIR__."/../src/php/functions.php");
require_once(__DIR__."/../src/php/variables.php");
$pageTitle = "BF Maxime";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $pageTitle ?></title>
    <meta lastname="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/style_responsive.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/CSS++.css"> <!--Librairie CSS personnelle-->
    <link rel="stylesheet" href="./css/fadeUpPerso.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
</head>
<body>
    <!-- Home -->
    <?php require_once("../src/php/components/home.php"); ?>

    <!-- Mon Parcours -->
    <?php require_once("../src/php/components/parcours.php"); ?>

    <!-- Mon Caractère -->
    <?php require_once("../src/php/components/caractere.php"); ?>

    <!-- Mes compétences -->
    <?php require_once("../src/php/components/skills.php"); ?>

    <!-- Mes projets -->
    <?php require_once("../src/php/components/project.php"); ?>

    <!-- Me contacter -->
    <?php require_once("../src/php/components/contact.php"); ?>

    <!-- Footer -->
    <footer>
        
    </footer>

<script src="./javascript/app.js"></script>
<script src="./javascript/fadeUpPerso.js"></script> <!-- Librairie fadeUp personnelle -->
</body>
</html>
<?php
require_once(__DIR__."/../database_co.php");
$prepare = $db->prepare("SELECT * FROM project_slide");
$prepare->execute();
$projects = $prepare->fetchAll(PDO::FETCH_ASSOC);
// print("<pre>"); die(var_dump($projects));
?>
<div class="conteneur zoneBlue" id="mesProjets">
    <div class="zoneTitle fadeUp-b">Mes projets</div>
    <div class="container">
        <div class="row fadeUp-b">
            <div class="sliderBtn" id="sliderBtnLeft"><</div>
            <div class="slider">
                <div class="slides">
                    <?php foreach($projects as $project){ ?>
                        <a class="slide" href="https://www.foodtruckonline.fr/" target="blank" style="background-color: #0E0E88;">
                            <h2> <?= $project["title"] ?> </h2>
                            <p> <?= $project["content"] ?> </p>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="sliderBtn" id="sliderBtnRight">></div>
        </div>
    </div>
</div>

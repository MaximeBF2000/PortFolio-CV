<?php
require_once(__DIR__."/../database_co.php");
$prepare = $db->prepare("SELECT * FROM parcours_step");
$prepare->execute();
$parcours = $prepare->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="conteneur zoneWhite" id="monParcours">
    <div class="zoneTitle fadeUp-b">Mon parcours</div>

    <?php foreach($parcours as $parcoursStep){ ?>
        <div class="row rowZone fadeUp-b">
            <div class="iconeZone iconeBlue">
                <i class="<?= $parcoursStep["icon_class"] ?>"></i>
            </div>
            <div class="textZone">
                <div class="title_zone"> <?= $parcoursStep["title"] ?> </div>
                <p> <?= $parcoursStep["content"] ?> </p>
            </div>                    
        </div>
    <?php } ?>
</div>


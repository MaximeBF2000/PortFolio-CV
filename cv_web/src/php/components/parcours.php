<div class="conteneur zoneWhite" id="monParcours">
    <div class="zoneTitle fadeUp-b">Mon parcours</div>

    <?php foreach($parcours as $parcoursStep){ ?>
        <div class="row rowZone fadeUp-b">
            <div class="iconeZone iconeBlue">
                <i class="<?= $parcoursStep["iconClassAwesome"] ?>"></i>
            </div>
            <div class="textZone">
                <div class="title_zone"> <?= $parcoursStep["title"] ?> </div>
                <p> <?= $parcoursStep["textContent"] ?> </p>
            </div>                    
        </div>
    <?php } ?>
</div>


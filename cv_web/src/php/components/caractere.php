<div class="conteneur zoneBlue" id="monCaractere">
    <div class="zoneTitle fadeUp-b">Mon caractère</div>
    <?php for($i = 0; $i < count($caracteres); $i++){ if($i % 2 === 0){ ?>
        <div class="rowFull rowZone">
            <div class="col rowFull fadeUp-b">
                <div class="col iconeZone iconeWhite">
                    <i class="<?= $caracteres[$i]["iconClassAwesome"] ?>"></i>
                </div>
                <div class="col" style="flex: 3;">
                    <div class="textZone">
                        <div class="title_zone"> <?= $caracteres[$i]["title"] ?> </div>
                        <p>
                            <?= $caracteres[$i]["textContent"] ?>
                        </p>            
                    </div>
                </div>
            </div>
    <?php } else{ ?>
            <div class="col rowFull fadeUp-b">
                <div class="col iconeZone iconeWhite">
                    <i class="<?= $caracteres[$i]["iconClassAwesome"] ?>"></i>
                </div>
                <div class="col" style="flex: 3;">
                    <div class="textZone">
                        <div class="title_zone"> <?= $caracteres[$i]["title"] ?> </div>
                        <p>
                            <?= $caracteres[$i]["textContent"] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>
</div>
<?php if($i % 2 === 1){ ?> </div> <?php } ?>
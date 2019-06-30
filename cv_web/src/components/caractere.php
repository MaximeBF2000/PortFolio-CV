<?php
require_once(__DIR__."/../database_co.php");
$prepare = $db->prepare("SELECT * FROM caractere");
$prepare->execute();
$caracteres = $prepare->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="conteneur zoneBlue" id="monCaractere">
    <div class="zoneTitle fadeUp-b">Mon caractère</div>
    <?php for($i = 0; $i < count($caracteres); $i++){ if($i % 2 === 0){ ?>
        <div class="rowFull rowZone">
            <div class="col rowFull fadeUp-b">
                <div class="col iconeZone iconeWhite">
                    <i class="<?= $caracteres[$i]["icon_class"] ?>"></i>
                </div>
                <div class="col" style="flex: 3;">
                    <div class="textZone">
                        <div class="title_zone"> <?= $caracteres[$i]["title"] ?> </div>
                        <p>
                            <?= $caracteres[$i]["content"] ?>
                        </p>            
                    </div>
                </div>
            </div>
    <?php } else{ ?>
            <div class="col rowFull fadeUp-b">
                <div class="col iconeZone iconeWhite">
                    <i class="<?= $caracteres[$i]["icon_class"] ?>"></i>
                </div>
                <div class="col" style="flex: 3;">
                    <div class="textZone">
                        <div class="title_zone"> <?= $caracteres[$i]["title"] ?> </div>
                        <p>
                            <?= $caracteres[$i]["content"] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php }} ?>
</div>
<?php if($i % 2 === 1){ ?> </div> <?php } ?>
<?php
require_once(__DIR__."/../variables.php");
require_once(__DIR__."/../database_co.php");
$prepare = $db->prepare("SELECT * FROM skill_categorie");
$prepare->execute();
$skillCategories = $prepare->fetchAll(PDO::FETCH_ASSOC);
$prepare2 = $db->prepare("SELECT * FROM skills");
$prepare2->execute();
$skills = $prepare2->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="conteneur zoneWhite" id="mesCompetences">
    <div class="zoneTitle fadeUp-b"> Mes compétences </div>

    <?php foreach($skillCategories as $skillCategorie){ ?>
        <div class="rowFull fadeUp-b">
            <div class="col imgSkillsParent">
                <img src="<?= $skillCategorie["imgLink"] ?>" class="imgSkills" alt="imgSkill" />
            </div>
            <div class="col" style="flex: 2;">
                <div class="title_zone"> 
                    <?= $skillCategorie["title"] ?>
                </div>
                <div class="skills">
                    <?php foreach($skills as $skill){
                        if($skill["categorie"] === $skillCategorie["categorie"]){ ?>
                        <div class="statBarContainer fadeUp-b">
                            <div class="statBarStat" style="width: <?= $skill["level"]."%" ?>; background: <?= $skill["bgColor"] ?>;"></div>
                            <div class="statBarInfo"> <?= $skill["name"]." : ".$skill["level"]."%" ?> </div> <!-- PROBLEM HERE -->
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php //foreach($skillCategories as $skillCategorie){ ?> 

<?php
require_once(__DIR__."/../variables.php");
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
                    <?php foreach($skillCategorie["skills"] as $skill){ ?>
                        <div class="statBarContainer fadeUp-b">
                            <div class="statBarStat" style="width: <?= $skill["masteryLevel"]."%" ?>; background: <?= $skill["bgColor"] ?>;"></div>
                            <div class="statBarInfo"> <?= $skill["name"]." : ".$skill["masteryLevel"]."%" ?> </div> <!-- PROBLEM HERE -->
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php //foreach($skillCategories as $skillCategorie){ ?> 

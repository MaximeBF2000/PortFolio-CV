<div class="conteneur zoneBlue" id="mesProjets">
    <div class="zoneTitle fadeUp-b">Mes projets</div>
    <div class="container">
        <div class="row fadeUp-b">
            <div class="sliderBtn" id="sliderBtnLeft"><</div>
            <div class="slider">
                <div class="slides">
                    <?php foreach($projects as $project){ ?>
                        <a class="slide" href="https://www.foodtruckonline.fr/" target="blank" style="background: <?= $project["bgColor"] ?>;">
                            <h2> <?= $project["title"] ?> </h2>
                            <p> <?= $project["textContent"] ?> </p>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="sliderBtn" id="sliderBtnRight">></div>
        </div>
    </div>
</div>

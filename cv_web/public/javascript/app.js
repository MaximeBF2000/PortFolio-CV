window.onload = function(){

    //Navbar dynamique

    const d = document;
    let navbarShowBool = 0;


    d.querySelectorAll('.navbarTrigger').forEach(function(element){
        element.addEventListener('click', navbarShow)
    })
    d.querySelectorAll('.btnSommaire').forEach(function(element){
        element.addEventListener('click', navbarShow)
    })


    function navbarShow(){
        if(navbarShowBool == 0){
            d.querySelector(".navbar").classList.add("navbarShow");
            navbarShowBool++;
        }
        else if(navbarShowBool == 1){
            d.querySelector(".navbar").classList.remove("navbarShow");
            navbarShowBool--;
        }    
    }

    //Ecriture automatique role

    const roleMain = d.querySelector("h3#roleMain");
    const role_ecritureAutomatique = "Developper - Ynov Lyon"; //PHP export needed
    let role_indexEcritureAutomatique = 0;
    let role_sensEcritureAutomatique = true;


    setInterval(() => {
        if(role_sensEcritureAutomatique === true){
            role_indexEcritureAutomatique += 1;
            roleMain.textContent = role_ecritureAutomatique.slice(0, role_indexEcritureAutomatique);
            if(role_indexEcritureAutomatique === role_ecritureAutomatique.length){
                setTimeout(() => {
                    role_sensEcritureAutomatique = false;
                }, 2000);
            }
        }
        else{
            role_indexEcritureAutomatique -= 1;
            roleMain.textContent = role_ecritureAutomatique.slice(0, role_indexEcritureAutomatique);
            if(role_indexEcritureAutomatique === 0){
                role_sensEcritureAutomatique = true;
            }
        }
    }, 80);


    //Slider mesProjets

    const slides = d.querySelector(".slides");
    const slideArray = d.querySelectorAll(".slide");
    const sliderBtnL = d.querySelector("#sliderBtnLeft");
    const sliderBtnR = d.querySelector("#sliderBtnRight");
    const slideWidth = 900;
    let positionPx = 0;
    let positionNum = 1;
    let positionMax = 0;


    slideArray.forEach((e) => {
        e.style.width = slideWidth + "px"; // Set the width of one slide
        positionMax += 1; // Set the number of slides
    });


    sliderBtnL.addEventListener("click", slideLeft);
    sliderBtnR.addEventListener("click", slideRight);


    function slideLeft(){
        if(positionNum !== 1){
           positionPx = positionPx + slideWidth;
           slides.style.left = positionPx + "px";
           positionNum--;
        }
        else{
            positionPx = positionPx - (slideWidth*(positionMax-1));
            slides.style.left = positionPx + "px";
            positionNum = positionMax;
        }
    }
    function slideRight(){
        if(positionNum !== positionMax){
            positionPx = positionPx - slideWidth;
            slides.style.left = positionPx + "px";
            positionNum++;
        }
        else{
            positionPx = positionPx + (slideWidth*(positionMax-1));
            slides.style.left = positionPx + "px";
            positionNum = 1;
        }
    }


    // setInterval(() =>{ slideRight(); }, 5000);

}
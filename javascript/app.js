window.onload = function(){

    //Navbar dynamique

    //Déclaration de variable
    var d = document;
    var navbarShowBool = 0;


    //EventListener
    d.querySelectorAll('.navbarTrigger').forEach(function(element){
        element.addEventListener('click', navbarShow)
    })
    d.querySelectorAll('.btnSommaire').forEach(function(element){
        element.addEventListener('click', navbarShow)
    })


    //Creation de fonction
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


    //Slider mesProjets

    //Déclaration de variable
    var slides = d.querySelector(".slides");
    var sliderBtnL = d.querySelector("#sliderBtnLeft");
    var sliderBtnR = d.querySelector("#sliderBtnRight");
    var positionPx = 0;
    var positionNum = 1;
    var positionMax = 3;

    //EventListener
    sliderBtnL.addEventListener("click", slideLeft);
    sliderBtnR.addEventListener("click", slideRight);

    //Creation de fonction
    function slideLeft(){
        if(positionNum !== 1){
           positionPx = positionPx + 900;
           slides.style.left = positionPx + "px";
           positionNum--;
        }
        else{
            positionPx = positionPx - (900*(3-1));
            slides.style.left = positionPx + "px";
            positionNum = positionMax;
        }
    }
    function slideRight(){
        if(positionNum !== positionMax){
            positionPx = positionPx - 900;
            slides.style.left = positionPx + "px";
            positionNum++;
        }
        else{
            positionPx = positionPx + (900*(3-1));
            slides.style.left = positionPx + "px";
            positionNum = 1;
        }
    }

    //Appel de fonctions
    setInterval(() =>{ slideRight(); }, 5000);

}
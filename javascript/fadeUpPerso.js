function HTML_fadeUp(){
    let fadeUp_elements;
    let windowHeight;
    let positionFromTop;
    function init(){
        fadeUp_elements = document.querySelectorAll(".fadeUp-b");
        windowHeight = window.innerHeight;
        eventL();
        checkPosition();
    }
    function eventL(){
        window.addEventListener("scroll", checkPosition);
        window.addEventListener("resize", init);
    }
    function checkPosition(){            
        fadeUp_elements.forEach((e) => {
            positionFromTop = e.getBoundingClientRect().top;
            if(positionFromTop - windowHeight <= 0){
                e.classList.remove("fadeUp-b");
                e.classList.add("fadeUp");
            }
            if(positionFromTop - windowHeight > 0){
                e.classList.remove("fadeUp");
                e.classList.add("fadeUp-b");
            }

            // Bouton navbar CVweb
            // let navBtn_height = positionFromTop + document.querySelector("#header").clientHeight();
        })
    }
    return { init: init }; 
}
HTML_fadeUp().init();

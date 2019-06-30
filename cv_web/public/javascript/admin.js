window.onload = function(){

    const d = document;
    /* ----------------------------- Admin modify form ---------------------------- */

    let editBtnAll = d.querySelectorAll(".editBtn");

    editBtnAll.forEach((e)=>{
        e.addEventListener("click", () => {
            for(let i=3; i <= 7; i += 2){
                console.log(e.parentNode.parentNode.childNodes[i]);
                let Textvalue = e.parentNode.parentNode.childNodes[i].textContent
                e.parentNode.parentNode.childNodes[i].innerHTML = "<input/>";
                e.parentNode.parentNode.childNodes[i].firstChild.setAttribute("value", Textvalue);
            }
            e.parentNode.parentNode.childNodes[9].innerHTML = "<button class='updateBtn' type='submit'> Update </button>";
            
        });
    });


}
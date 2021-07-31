var menu = document.querySelector('.menu');
var btnToggle = document.querySelector('.btnMenuMobile');
let isOpen = false;



btnToggle.addEventListener('click', function(){
    if(isOpen){
        menu.style.display = "none";
        btnToggle.style.marginLeft = "0";
        isOpen = false;
    }else{
        menu.style.display = "block";

        let windowWidth = window.innerWidth;
        if(windowWidth > 400){
            btnToggle.style.marginLeft = "270px";   
        }else{
            btnToggle.style.marginLeft = "90vw";
        }
        isOpen = true;
    }
})

window.onresize = function(){
    let windowWidth = window.innerWidth;
    if(windowWidth > 1100){
        menu.style.display = "block";
    }else{
        if(isOpen){
            menu.style.display = "block";
        }else{
            menu.style.display = "none";
        }
    }
    if(windowWidth > 400 && isOpen){
        btnToggle.style.marginLeft = "270px";   
    }else if(windowWidth < 400 && isOpen){
        btnToggle.style.marginLeft = "90vw";
    }
};

let windowWidth = window.innerWidth;
if(windowWidth < 1100){
    btnToggle.style.marginLeft = "0";
    menu.style.display = "none";
}
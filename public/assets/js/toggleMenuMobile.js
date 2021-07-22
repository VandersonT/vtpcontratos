/*Toggle Menu To Mobile*/
let btnOpen = document.querySelector('.icon-menu-mobile');
let menu = document.querySelector('.box-menu');
let btnClose = document.querySelector('.menu-mobile-close');
let isOpen = false;

btnOpen.addEventListener("click", function(){
    menu.style.display = "block";
    btnClose.style.display = "block";
    isOpen = true;
})

btnClose.addEventListener("click", function(){
    menu.style.display = "none";
    btnClose.style.display = "none";
    isOpen = false;
})


/*If is mobile active animation*/
let windowWidth = window.innerWidth;
if(windowWidth <= 1100){
    menu.classList.add('animate__bounceInLeft');
}


/*Detects screen size when resized and enables or disables animation*/
window.onresize = function(){
    let windowWidth = window.innerWidth;
    if(windowWidth > 1100){
        menu.classList.remove('animate__bounceInLeft');
        menu.style.display = "block";
    }else{
        menu.classList.add('animate__bounceInLeft');
        if(isOpen){
            menu.style.display = "block";
        }else{
            menu.style.display = "none";
        }
    }
};
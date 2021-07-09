/*Toggle Menu To Mobile*/
let menu = document.querySelector('.fillMenu');
let btnClose = document.querySelector('.fillMenuClose');
let btnOpen = document.querySelector('.fillMenuOpen');
let isOpen = true;

btnClose.addEventListener("click", function(){
        menu.style.display = "none";
        btnClose.style.display = "none";
        btnOpen.style.display = "block";
        isOpen = false;
})

btnOpen.addEventListener("click", function(){
        btnOpen.style.display = "none";
        menu.style.display = "block";
        btnClose.style.display = "block";
        isOpen = true;
})

window.onresize = function(){
    let windowWidth = window.innerWidth;
    if(windowWidth >= 1100){
        menu.style.display = "block";
        btnClose.style.display = "none";
        btnOpen.style.display = "none";
    }else{
        if(isOpen){
            menu.style.display = "block";
            btnClose.style.display = "block";
            btnOpen.style.display = "none";
        }else{
            menu.style.display = "none";
            btnClose.style.display = "none";
            btnOpen.style.display = "block";
        }
    }
}
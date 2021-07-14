/*SelectedAndHover.js*/

let menuBtns = document.getElementById('menu');
let btns = menuBtns.getElementsByTagName('li');

menuBtns.addEventListener("mousemove", function(e){
    if(themeMode == 'light'){
        e.target.style.background = "rgb(140, 140, 140)";
    }else{
        e.target.style.background = "rgb(16, 16, 18)";
    }
})

menuBtns.addEventListener("mouseout", function(e){
    if(themeMode == 'light'){
        e.target.style.background = "rgb(184, 184, 184)";
    }else{
        e.target.style.background = "rgb(23, 23, 26)";
    }
})
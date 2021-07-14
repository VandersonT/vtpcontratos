/*---------------------VARIABLES---------------------*/
let btnTheme = document.querySelector('.darkMode');
let menuItens = document.getElementById('menu');
let itens = menuItens.getElementsByTagName('li');
let transition = "1s";
/*---------------------------------------------------*/

if(themeMode == 'dark'){
    changeThemeToDark();
}

function changeThemeToDark(){
    for(let i = 0; i < itens.length; i++){
        document.querySelectorAll('.menu li')[i].style.background = "rgb(23, 23, 26)";
        document.querySelectorAll('.menu a')[i].style.color = "gray";
    }
    document.body.style.background = "rgb(18, 18, 20)";
    document.body.style.color = "gray";
    document.querySelector('.bar-mobile').style.background = "rgb(9, 9, 10)";
    document.querySelector('.box-menu').style.background = "rgb(18, 18, 20)";
    document.getElementById('logo').style.backgroundImage = "url('assets/images/mainImgDark.jpg')";

    if(document.querySelector('.showcase')){
        document.querySelector('.showcase').style.background = "rgb(20, 20, 20)";
    }
    if(document.querySelector('.showcase')){
        document.querySelector('.showcase').style.border = "1px solid rgb(13, 13, 13)";
    }
    document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(77, 77, 77)');
    if(document.querySelector('.packageStorage')){
        document.querySelector('.packageStorage').style.background = "rgb(20, 20, 20)";
    }   
    if(document.querySelector('.packageStorage')){
        document.querySelector('.packageStorage').style.border = "1px solid rgb(13, 13, 13)";
    } 
    document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(77, 77, 77)');
    if(document.querySelector('.contractStorage')){
        document.querySelector('.contractStorage').style.background = "rgb(20, 20, 20)";
    }
    if(document.querySelector('.contractStorage')){
        document.querySelector('.contractStorage').style.border = "1px solid rgb(13, 13, 13)";
    }

}
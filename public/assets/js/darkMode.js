/*---------------------VARIABLES---------------------*/
let btnTheme = document.querySelector('.darkMode');
let menuItens = document.getElementById('menu');
let itens = menuItens.getElementsByTagName('li');
let transition = "1s";
/*---------------------------------------------------*/

/*
if(themeMode == "light"){
    alert("light");
}else{
    alert("dark");
}
*/

if(!Cookies.get("isLight", "false")){
    Cookies.set("isLight", 'true');
}else{
    if(Cookies.get("isLight") == "false"){
        changeThemeToDark();
    }else{
        changeThemeToLight();
    }
}

btnTheme.addEventListener("click", function(){
    if(Cookies.get("isLight") == "true"){
        activeFadein()
        changeThemeToDark();
        desactiveFadein()
        Cookies.set("isLight", "false");
    }else{
        activeFadein()
        changeThemeToLight();
        desactiveFadein();
        Cookies.set("isLight", "true");
    }
})

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

    switch(document.title){
        case 'Gerador de Contrato':
            document.querySelector('.showcase').style.background = "rgb(20, 20, 20)";
            document.querySelector('.showcase').style.border = "1px solid rgb(13, 13, 13)";
            document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(77, 77, 77)');
            document.querySelector('.packageStorage').style.background = "rgb(20, 20, 20)";
            document.querySelector('.packageStorage').style.border = "1px solid rgb(13, 13, 13)";
            break;
        case 'Gerador de Contrato - Salvos':
            document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(77, 77, 77)');
            document.querySelector('.contractStorage').style.background = "rgb(20, 20, 20)";
            document.querySelector('.contractStorage').style.border = "1px solid rgb(13, 13, 13)";
            break;
    }

}

function changeThemeToLight(){
    for(let i = 0; i < itens.length; i++){
        document.querySelectorAll('.menu li')[i].style.background = "rgb(184, 184, 184)";
        document.querySelectorAll('.menu a')[i].style.color = "rgb(37, 37, 37)";
    }
    document.body.style.background = "rgb(199, 199, 199)";
    document.body.style.color = "rgb(27, 27, 27)";
    document.querySelector('.bar-mobile').style.background = "rgb(167, 167, 167)";
    document.querySelector('.box-menu').style.background = "rgb(170, 170, 170)";
    document.getElementById('logo').style.backgroundImage = "url('assets/images/mainImg.jpg')";

    switch(document.title){
        case 'Gerador de Contrato':
            document.querySelector('.showcase').style.background = "rgb(163, 163, 163)";
            document.querySelector('.showcase').style.border = "1px solid rgb(109, 109, 109)";
            document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(231, 231, 231)');
            document.querySelector('.packageStorage').style.background = "rgb(163, 163, 163)";
            document.querySelector('.packageStorage').style.border = "1px solid rgb(109, 109, 109)";
            break;
        case 'Gerador de Contrato - Salvos':
            document.documentElement.style.setProperty('--backgroundContractSingle', 'rgb(231, 231, 231)');
            document.querySelector('.contractStorage').style.background = "rgb(163, 163, 163)";
            document.querySelector('.contractStorage').style.border = "1px solid rgb(109, 109, 109)";
            break;
    }

}

function activeFadein(){
    for(let i = 0; i < itens.length; i++){
        document.querySelectorAll('.menu li')[i].style.transition = transition;
        document.querySelectorAll('.menu a')[i].style.transition = transition;
    }
    document.body.style.transition = transition;
    document.body.style.transition = transition;
    document.querySelector('.bar-mobile').style.transition = transition;
    document.querySelector('.box-menu').style.transition = transition;
    document.getElementById('logo').style.transition = transition;

    switch(document.title){
        case 'Gerador de Contrato':
            document.querySelector('.showcase').style.transition = transition;
            document.querySelector('.favoriteSigle').style.transition = transition;
            document.querySelector('.packageStorage').style.transition = transition;
            break;
        case 'Gerador de Contrato - Salvos':
            document.querySelector('.contractSingle').style.transition = transition;
            document.querySelector('.contractStorage').style.transition = transition;
            break;
    }

}

function desactiveFadein(){
    setTimeout(() => {
        for(let i = 0; i < itens.length; i++){
            document.querySelectorAll('.menu li')[i].style.transition = "0s";
            document.querySelectorAll('.menu a')[i].style.transition = "0s";
        }
        document.body.style.transition = "0s";;
        document.body.style.transition = "0s";;
        document.querySelector('.bar-mobile').style.transition = "0s";
        document.querySelector('.box-menu').style.transition = "0s";
        document.getElementById('logo').style.transition = "0s";
    
        switch(document.title){
            case 'Gerador de Contrato':
                document.querySelector('.showcase').style.transition = "0s";
                document.querySelector('.favoriteSigle').style.transition = "0s";
                document.querySelector('.packageStorage').style.transition = "0s";
                break;
            case 'Gerador de Contrato - Salvos':
                document.querySelector('.contractSingle').style.transition = "0s";
                document.querySelector('.contractStorage').style.transition = "0s";
                break;
        }
        
    }, transition);
}
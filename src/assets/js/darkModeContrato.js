if(themeMode == 'dark'){
    contractThemeDark();
}

function contractThemeDark(){
    document.querySelector('.fillMenu').style.background = "rgb(28, 28, 28)";
    document.querySelector('.barMenu').style.background = "rgb(28, 28, 28)";
    document.querySelector('.barMenu').style.color = "gray";
    document.body.style.background = "rgb(46, 46, 46)";
    document.documentElement.style.setProperty('--backgroundInput', 'rgb(64, 64, 64)');
    document.documentElement.style.setProperty('--color', 'gray');
}
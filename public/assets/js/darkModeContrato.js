/*---------------------VARIABLES---------------------*/
let transition = "1s";
/*---------------------------------------------------*/

if(!Cookies.get("isLight")){
    Cookies.set("isLight", 'true');
}else{
    if(Cookies.get("isLight") == "false"){
        contractThemeDark();
    }
}

function contractThemeDark(){
    document.body.style.background = "rgb(36, 36, 36)";
    document.body.style.color = "gray";
    document.querySelector('.barMenu').style.background = "rgb(20, 20, 20)";
    document.querySelector('.fillMenu').style.background = "rgb(20, 20, 20)";
    document.querySelector('.fillMenu').style.border = "1px solid rgb(10, 10, 10)";
    document.documentElement.style.setProperty('--backgroundInput', 'rgb(70, 70, 70)');
    document.querySelector('.setFavorite').style.color = "gray";}
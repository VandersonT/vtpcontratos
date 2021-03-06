/*---------------------------------------BTN_ACTIVE_LOGO--------------------------------------------------*/
let toggleLogo = document.querySelector('.toggleLogo');
let logoIsActive = false;
toggleLogo.addEventListener('click', function(e){
    
    if(logo == ''){
        e.preventDefault();
        alert("Você precisa definir uma logo no seu perfil para poder usa-la aqui!");
        return false;
    }

    if(logoIsActive){
        document.querySelector('.box-logo').style.display = 'none';
        logoIsActive = false;
    }else{
        document.querySelector('.box-logo').style.display = 'block';
        logoIsActive = true;
    }
})
/*--------------------------------------------------------------------------------------------------------*/



/*---------------------------------------BTN_ACTIVE_SIGNATURE--------------------------------------------------*/
let toggleSignature = document.querySelector('.toggleSignature');
let signatureIsActive = false;

toggleSignature.addEventListener('click', function(e){
    
    if(signature == ''){
        e.preventDefault();
        alert("Você precisa enviar sua assinatura no seu perfil para poder usa-la aqui!");
        return false;
    }

    if(signatureIsActive){
        document.querySelector('.whiteLine').style.display = 'block';
        document.querySelector('.singleSignature img').style.display = 'none';
        signatureIsActive = false;
    }else{
        document.querySelector('.whiteLine').style.display = 'none';
        document.querySelector('.singleSignature img').style.display = 'block';
        signatureIsActive = true;
    }
})
/*--------------------------------------------------------------------------------------------------------*/


/*----------------------------------------BTN_GENERATE----------------------------------------------------*/
let generateBtn = document.querySelector('.generateBtn');

generateBtn.addEventListener('click', function(e){
    e.preventDefault();

    prepareToPrint();
    
    window.print();

    returnToNormal();
})
/*--------------------------------------------------------------------------------------------------------*/




/*-------------------------------------BTN_TOGGLE_MENU----------------------------------------------------*/
var menu = document.querySelector('.fillMenu');
var btnToggle = document.querySelector('.toggleMenu');
let isOpen = true;

btnToggle.addEventListener('click', function(){
    if(isOpen){
        menu.style.display = "none";
        btnToggle.style.marginLeft = "0";
        isOpen = false;
    }else{
        menu.style.display = "block";

        if(windowWidth <= 500){
            btnToggle.style.marginLeft = "85vw";
        }else{
            btnToggle.style.marginLeft = "420px";
        }

        isOpen = true;
    }
})

let windowWidth = window.innerWidth;
if(windowWidth <= 1250){
    btnToggle.style.display = "block";
}else{
    btnToggle.style.display = "none";
}
window.onresize = function(){
    verifyMenu();
};

/*--------------------------------------------------------------------------------------------------------*/


/*-------------------------------------------FUNCTIONS----------------------------------------------------*/
function verifyMenu(){
    let windowWidth = window.innerWidth;
    if(windowWidth <= 1250){

        btnToggle.style.display = "block";
        if(isOpen){

            if(windowWidth <= 500){
                btnToggle.style.marginLeft = "85vw";
            }else{
                btnToggle.style.marginLeft = "420px";
            }

            menu.style.display = "block";
        }else{
            btnToggle.style.marginLeft = "0";
            menu.style.display = "none";
        }

    }else{
        btnToggle.style.display = "none";
        menu.style.display = "block";
    }
}

function prepareToPrint(){
    document.querySelector('.fillMenu').style.display = 'none';
    document.querySelector('.barMenu').style.display = 'none';
    document.querySelector('.warning').style.display = 'none';
    document.querySelector('.warning').style.display = 'none';
    
    document.querySelector('.contractSingle').style.width = "100%";
    document.querySelector('.contractSingle').style.marginLeft = "0";
    document.querySelector('.contractSingle').style.marginBottom = "0";
    document.querySelector('.contractSingle').style.position = "absolute";
    document.querySelector('.contractSingle').style.padding = "0";
}

function returnToNormal(){
    document.querySelector('.fillMenu').style.display = 'block';
    document.querySelector('.barMenu').style.display = 'flex';
    document.querySelector('.warning').style.display = 'block';
    
    let windowWidth = window.innerWidth;
    if(windowWidth > 1250){
        document.querySelector('.contractSingle').style.width = "calc(100% - 480px)";
        document.querySelector('.contractSingle').style.marginLeft = "450px";
        document.querySelector('.contractSingle').style.marginBottom = "60px";
        document.querySelector('.contractSingle').style.position = "initial";
        document.querySelector('.contractSingle').style.padding = "30px";
    }else{
        document.querySelector('.contractSingle').style.width = "90vw";
        document.querySelector('.contractSingle').style.marginBottom = "60px";
        document.querySelector('.contractSingle').style.position = "initial";
        document.querySelector('.contractSingle').style.padding = "20px";
        document.querySelector('.contractSingle').style.margin = "0 auto";
    }

}
/*--------------------------------------------------------------------------------------------------------*/
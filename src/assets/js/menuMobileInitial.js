/*Mobile Menu*/
let closeMenuMobileI = document.querySelector('.closeMenuMobile');
let mobileMenuI = document.querySelector('.mobileMenu');
let btnMenuMobileI = document.querySelector('.btnMenuMobile');

btnMenuMobileI.addEventListener('click', function(){
    mobileMenuI.style.display = 'flex';
    closeMenuMobileI.style.display = 'block';
})


closeMenuMobileI.addEventListener('click', function(){
    mobileMenuI.style.display = 'none';
    closeMenuMobileI.style.display = 'none';
})

let scrollArrowIndicate = document.querySelector('.indicate');

scrollArrowIndicate.addEventListener('click', function(){
    var height = window.screen.height;

    window.scroll(0, height - 175)
})
// MENU MOBILE

function menuMobileInit(){
    let icone = document.querySelector('.icone');
    let menu = document.querySelector('.menu');

    function menuOpen(){
        icone.classList.toggle('icon-x');
        menu.classList.toggle('ativo');
    }
    
    icone.addEventListener('click', menuOpen);
}

menuMobileInit();

// MENU MOVEL

let header = document.querySelector('.header');

function menuMovel(){
    if(window.scrollY > 0){
        header.classList.add('menu-movel');
        header.style.transition="0.5s";
    } else {
        header.classList.remove('menu-movel'); 
    }
}

window.addEventListener('scroll', menuMovel)

 // ADD BLUR ON NAME H1

function initBlur(){  

    let blur = document.querySelector('.bg-text');

    function blurFunc(){
        blur.style.filter="blur(0)";
        blur.style.transition="3.5s";    
    }


    window.addEventListener('load', blurFunc);
}

initBlur();


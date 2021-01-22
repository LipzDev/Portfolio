function menuCelular() {
    const icon = document.querySelector('.icon');
    const menuMobile = document.querySelector('.menu-mobile');

    icon.addEventListener('click', function(){    
        menuMobile.classList.toggle('disabled');
        icon.classList.toggle('icon-x');
    });

    menuMobile.addEventListener('click', function(){
        menuMobile.classList.add('disabled');
        icon.classList.remove('icon-x');
    });
}

menuCelular();


// MENU-MODULAR

function menuMovel() {
    const headerModular = document.querySelector('.header');

    window.addEventListener('scroll', function(){
        if(window.scrollY > 0){
            headerModular.classList.add('header-modular');
        } else {
            headerModular.classList.remove('header-modular');
        }   
    });
}

menuMovel();


// MODAL

function modalProjetos(){
    const imgSite = document.querySelectorAll('.projeto-box img');
    const modal = document.querySelector('.modal');
    const recebeImagem = document.querySelector('.modal img');

    imgSite.forEach(item => {
        item.addEventListener('click', function(){
          let pegaImagem = item.getAttribute('src');        
            recebeImagem.setAttribute('src', pegaImagem);
            modal.classList.add('enabled'); 
        });
    })

    // FECHAR O MODAL

    modal.addEventListener('click', function(){
        modal.classList.remove('enabled'); 
    });
    const fecharModal = document.querySelector('.modal i');
    fecharModal.addEventListener('click', function(){
        modal.classList.remove('enabled'); 
    });
}

modalProjetos();

// MAPA

function localizacaoMapa() {
    const mapa = document.querySelector('.mapa');
    mapa.addEventListener('click', function(){
        mapa.classList.toggle('localizacao');
    });
}

localizacaoMapa();

// SCROLL TO SECTION

function initScrollSuave() {
    const linksInternos = document.querySelectorAll('.header a[href^="#"]');

    function scrollToSection(event) {
        event.preventDefault();
        const href = event.currentTarget.getAttribute('href');
        const section = document.querySelector(href);

        section.scrollIntoView({
            behavior: "smooth",
            block: "start",
        });
    }

    linksInternos.forEach((link) => {
        link.addEventListener('click', scrollToSection);
    });
}

initScrollSuave();


// ANIMAÇÃO AO SCROLL

function sectionMove(){
    const sections = document.querySelectorAll('.js-scroll');

    const windowMetade = window.innerHeight * 0.6;

    function animaScroll() {
        sections.forEach((section) => {
            const sectionTop = section.getBoundingClientRect().top - windowMetade;

            if(sectionTop < 0) {
                section.classList.add('ativo');
            }
        });
    }

    window.addEventListener('scroll', animaScroll);
}

sectionMove();


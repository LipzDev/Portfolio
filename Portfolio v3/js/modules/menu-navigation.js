export default function initMenuNavigation(){
   let sections = document.querySelectorAll('section');  
  
   function animaScroll(){
      sections.forEach((section, indice) => {
         let sectionTop = section.getBoundingClientRect().top;
         let sectionBottom = section.getBoundingClientRect().bottom;
         let teste1 = document.querySelectorAll('.menu-navigation a');

         if(sectionTop < 100) { 
            teste1[indice].classList.add('actived');
         } else if (sectionBottom > 100){

            if(teste1[indice] == undefined){

               // NÃO FAÇA NADA !

            } else {
               teste1[indice].classList.remove('actived');
            }
         }         
      });  
     }

   window.addEventListener('scroll', animaScroll);

   // PLAY SOUND
   const sound = document.querySelector('.menu-navigation audio');
   const buttons = document.querySelectorAll('.menu-navigation a');

   buttons.forEach((item) => {
      item.addEventListener('click', function(){
         sound.play();
      });
   })
}
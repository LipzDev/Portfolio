// MENU MOVEL

export default function initMenuMovel(){
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

}

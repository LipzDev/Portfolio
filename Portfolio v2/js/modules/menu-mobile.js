// MENU MOBILE

export default function initMenuMobile(){
   let menu = document.querySelector('.menu-mobile');
   let icon = document.querySelector('.icon')

   function openMenu(){
       menu.classList.toggle('ativo');
       icon.classList.toggle('icon-x');    
   }

   icon.addEventListener('click', openMenu);

   // CLOSE MENU

   let menuLink = document.querySelectorAll('.menu-mobile a');

   menuLink.forEach(click => {
       
       function closeMenu(){
           menu.classList.remove('ativo');
           icon.classList.remove('icon-x');
       }    

   click.addEventListener('click', closeMenu);

   });
}

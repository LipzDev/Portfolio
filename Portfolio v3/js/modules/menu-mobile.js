export default function initMenuMobile(){
   const icon = document.querySelector('.icon');
   const menuMobile = document.querySelector('.menu-mobile');
   const menuLi = document.querySelectorAll('.menu-mobile li');

   function menu(){
      icon.classList.toggle('active-icon-x');
      menuMobile.classList.toggle('active-menu-mobile');
   }

   icon.addEventListener('click', menu);

   menuLi.forEach((item) => {
      item.addEventListener('click', menu);
   });
}
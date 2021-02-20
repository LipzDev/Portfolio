export default function initMenuNavigation(){
   const menuNavigation = document.querySelectorAll('.menu-navigation button');

   menuNavigation.forEach((item) => {
      item.addEventListener('click', function(){
         let menuActive = document.querySelector('.actived');

         if(menuActive.classList.contains('actived')){
            menuActive.classList.remove('actived');
         }
         item.classList.add('actived');

         let sound = document.querySelector('.menu-navigation audio');
         sound.play();
      });
   });


   console.log(window.innerHeight);
   console.log(window.innerWidth);
}
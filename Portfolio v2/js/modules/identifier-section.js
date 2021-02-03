export default function initIdentifierSection(){

   let menu = document.querySelectorAll('.menu-desktop li');

   menu.forEach((item) => {
      item.addEventListener('click', function(){
         
         let sectionActived = document.querySelector('.actived');

         if(sectionActived.classList.contains('actived')){
            sectionActived.classList.remove('actived');
         }

         item.classList.add('actived');

      });
   });















}
export default function initScrollToSection(){
   const linksInternos = document.querySelectorAll('.header a[href^="#"');
   const explorar = document.querySelector('.button a[href^="#"');
   const menuNavigation = document.querySelectorAll('.menu-navigation a[href^="#"');

   function scrollToSection(event) {
      event.preventDefault();
      const href = event.currentTarget.getAttribute('href');
      const section = document.querySelector(href);
      const topo = section.offsetTop;
      window.scrollTo({
         top: topo,
         behavior: "smooth",
      });
   }

   linksInternos.forEach((link) => {
      link.addEventListener('click', scrollToSection);
   });

   explorar.addEventListener('click', scrollToSection);
   
   menuNavigation.forEach((item) => {
      item.addEventListener('click', scrollToSection);
   });
}


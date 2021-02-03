// SCROLL TO SECTION

export default function initScrollToSection(){
   const linksInternos = document.querySelectorAll('.header a[href^="#"]');

   function scrollToSection(event) {
       event.preventDefault();
       const href = event.currentTarget.getAttribute('href');
       const section = document.querySelector(href);
       const topo = section.offsetTop;
       window.scrollTo({
           top: topo - 250,
           behavior: "smooth",
       });
   }
   
   linksInternos.forEach((link) => {
       link.addEventListener('click', scrollToSection);
   });
}
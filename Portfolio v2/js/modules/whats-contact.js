// ABRIR WHATSAPP

export default function initWhatsContact(){
   let iconeWhats = document.querySelector('.icon-w');
   let whatsmsg = document.querySelector('.message');

   function openWhats(){
       whatsmsg.classList.toggle('msg-ativo');
   }

   iconeWhats.addEventListener('click', openWhats);
}





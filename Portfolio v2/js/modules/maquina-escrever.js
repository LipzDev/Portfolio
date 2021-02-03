// MAQUINA DE ESCREVER

export default function initMaquinaDeEscrever(){
   function typeWrite(elemento){
       titulo.style.opacity="1";
       const textoArray = elemento.innerHTML.split('');
       elemento.innerHTML = "";
       textoArray.forEach((letra, i) => {
           setTimeout(() => elemento.innerHTML += letra, 185 * i);
       });
   }   
   
   const titulo = document.querySelector('.bg-text p');
   typeWrite(titulo);    
}


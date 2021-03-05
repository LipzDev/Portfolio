// MENSAGEM QUE APARECE AO ENVIAR FORMULÁRIO

export default function initToast(){

   let urlAtual = window.location.href.toLowerCase();  

   if(urlAtual.includes('sucesso')){
        let success = document.querySelector(".success p");

        success.style.visibility="visible";
        success.style.opacity="1";
        success.style.top="0";  

        setInterval(() => {            
            success.style.visibility="hidden";
            success.style.opacity="0";
            success.style.top="-20rem";  
        }, 3000);

        setInterval(() => {
            window.location.href="index.php"; 
        }, 3500);
   } 

   else if(urlAtual.includes('falha')){
       let error = document.querySelector(".error p");

       error.style.visibility="visible";
       error.style.opacity="1";
       error.style.top="0"; 

       setInterval(() => {            
            error.style.visibility="hidden";
            error.style.opacity="0";
            error.style.top="-20rem";  
        }, 3000);
     
        setInterval(() => {
            window.location.href="index.php"; 
        }, 3500);
   }
}
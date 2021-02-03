// MENSAGEM DE ERRO OU SUCESSO AO ENVIAR DADOS NO FORMULARIO

// MENSAGEM QUE APARECE AO ENVIAR FORMULÁRIO

export default function initToast(){
    if(window.location.href === "https://filipe-dev.epizy.com/index.php?status=Sucesso"){
    let success = document.querySelector(".success p");

    success.style.visibility="initial";
    success.style.top="0";  

    setInterval(() => {            
    success.style.visibility="hidden";
    success.style.top="-200px";  
    }, 3000);

    setInterval(() => {
        window.location.href="index.php"; 
    }, 3500);
    } 

    else if(window.location.href === "https://filipe-dev.epizy.com/index.php?status=Falha"){

        let error = document.querySelector(".error p");

        error.style.visibility="initial";
        error.style.top="0";  

        setInterval(() => {            
            error.style.visibility="hidden";
            error.style.top="-200px";
        }, 3000);

        setInterval(() => {
            window.location.href="index.php"; 
        }, 3500);
    } 
}
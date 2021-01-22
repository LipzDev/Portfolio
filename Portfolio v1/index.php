<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Desenvolvedor Front - End</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
        <!--Tags para SEO-->
        <meta name="copyright" content="Lipz © 2020">
        <meta name="keywords" content="portifólio, programador web, front-end, desenvolvedor de websites">
        <meta name="description" content="Portifolio v1.0, espero que gostem!.">
        <meta name="autor" content="Lipz">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;1,200;1,400;1,500&display=swap" rel="stylesheet">
        <!--Arquivos externos-->   
        <link href="css/style.css" rel="stylesheet">
        <!-- Responsivo -->
        <link href="css/responsive.css" rel="stylesheet" type="text/css">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/e6b1f34d6c.js" crossorigin="anonymous"></script>
        <!--Ícone do site--> 
        <link rel="shortcut icon" href="img/logomarca/logo.png" type="image/x-icon">        
    </head>
    <body>

    <!-- HEADER -->

     <header class="header">
         <div class="container">
             <div class="header-item">
                 
                <div class="logomarca">
                    <img src="img/logomarca/logo.png">
                </div>

                <nav class="menu-desktop">
                    <ul>
                        <li><a href="#inicio">Home</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </nav>

                <div class="icon">
                    <div class="um"></div>
                    <div class="dois"></div>
                    <div class="tres"></div>
                </div>

                <nav class="menu-mobile disabled">
                    <ul>
                        <li><a href="#inicio"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#sobre"><i class="fas fa-chevron-circle-right"></i> Sobre</a></li>
                        <li><a href="#contato"><i class="fas fa-phone"></i> Contato</a></li>
                    </ul>
                </nav>

             </div>
         </div>
     </header>
        
    <!-- BACKGROUND -->

     <section class="background"  id="inicio">
         <div class="container">
             <div class="background-item">

                 <div class="bg-text">
                     <h1>Design<br>Responsivo</h1>
                     <p>Aqui você encontra um design totalmente responsivo para todos os tipos de celulares, tablets ou computadores, garantindo a você o acesso em qualquer dispositivo!</p>
                 </div>

                 <div class="bg-mobile">
                     <img src="img/mobile.png" alt="Foto de iphone">
                 </div>
             </div>
         </div>         
     </section>

    <!-- SEO -->

     <section class="seo" id="sobre">         
         <div class="container">
             <div class="seo-itens js-scroll">
                <div class="texto1">
                    <h2>O que é SEO ?</h2>
                    <p>É o conjunto de estratégias com o objetivo de potencializar e melhorar o posicionamento de um site nas buscas do google.</p>
                </div>

                <div class="img1">
                    <img src="img/img1.png" alt="ilustração SEO">
                </div>
             </div>
         </div>
     </section>

    <!-- CLEAN CODE -->

     <section class="clean-code">
        <div class="container">
            <div class="clean-code-itens js-scroll">

                <div class="img2">
                    <img src="img/img2.png" alt="imagem de código de programação">
                </div>

                <div class="texto2">
                    <h3>Clean code</h3>
                    <p>Tentamos sempre criar um código limpo e bem organizado, o que facilita em futuras mudanças ou manutenções e pode também melhorar a performance do seu website!</p>
                </div>
            </div>
        </div>
     </section>

    <!-- LISTA -->

    <section class="lista">       
        <div class="lista-bg">
            <h4>Inscreva-se em nossa lista.</h4>
            <form class="lista-itens" action="formulario/capturaEmail.php" method="post">
                <input type="email" placeholder="Insira seu email aqui." name="capturaEmail">
                <input type="submit" value="Enviar" acao="Enviar">
            </form>
        </div>        
    </section>

    <!-- PROJETOS -->

    <section class="projetos">
        <div class="modal">
            <i class="fas fa-times-circle"></i>
            <img src="img/sites/site1.png">
        </div>

        <div class="container">
            <div class="projeto-chamada">
                <h2>Projetos</h2>
            </div>

            <div class="projeto-itens">
                <div class="projeto-box">
                    <img src="img/sites/site1.png" alt="foto da landing page">
                    <p>Landing page criado do zero para fins de estudo das tecnicas de flexbox, grid, UX/UI e SEO.</p>
                </div>

                <div class="projeto-box">
                    <img src="img/sites/site2.png" alt="foto da landing page">                    
                    <p>Site feito durante estudos sobre modern layout e tecnicas de responsividade.</p>
                </div>

                <div class="projeto-box">
                    <img src="img/sites/site3.png" alt="foto da landing page">
                    <p>Site institucional desenvolvido para mecânica utilizando as tecnicas de flexbox e grid.</p>
                </div>

                <div class="projeto-box">
                    <img src="img/sites/site4.png" alt="foto da landing page">
                    <p>Site codificado do zero com base em um layout pronto.</p>
                </div>
            </div>  

        </div>
    </section>

    <!-- CONTATO -->

    <section class="contato" id="contato">
        <div class="container">
            <div class="grid-estrutura">

                <div class="titulo-form">
                    <h5>Contato</h5>
                </div>

                <div class="formulario">
                    <form method="post" action="formulario/formulario.php">
                        <input type="text" placeholder="Insira seu nome." name="nome">
                        <input type="email" placeholder="Insira seu email." name="email">
                        <input type="text" placeholder="Insira o assunto." name="assunto">
                        <textarea placeholder="Digite sua mensagem." name="mensagem"></textarea>
                        <input type="submit" value="Enviar" acao="Enviar">
                    </form>
                </div>

                <div class="local">
                    <div class="local-itens">
                        <h2>Quem sou eu ?</h2>
                        <p>Me chamo Filipe e sou um estudante de Análise e desenvolvimento de sistemas que está no primeiro ano de faculdade e que pretende aprender cada vez mais esta área!</p>
                    </div>  
                    
                    <div class="local-itens">
                        <h2>Onde estou ?</h2>
                        <p>Moro em Dracena interior de São Paulo.</p>
                    </div> 

                    <div class="local-itens">
                        <h2>Contato</h2>
                        <p>(18) 9 9685-5200</p>
                    </div>

                    <div class="local-itens">
                        <a href="https://api.whatsapp.com/send?phone=+5518996855200"  target="_blank"><i class="fab fa-whatsapp-square"></i></a>
                        <a href="https://www.linkedin.com/in/filipe-gomes-0750891b4/"  target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/lipz_dev/"  target="_blank"><i class="fab fa-instagram-square"></i></a>
                    </div>
                </div>

                <div class="mapa"> <!--ADICIONAR localizacao-->
                    <a href="https://www.google.com.br/maps/@-21.4790219,-51.5369425,13.25z" target="_blank">Dracena / SP - CEP 17900-000</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <footer class="footer">
        <div class="botao-whats">
            <a href="https://api.whatsapp.com/send?phone=+5518996855200"  target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        
        <div class="container">
            <div class="footer-itens">
                <a href="#">© All rights reserved by - Lipz</a>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    </body>
</html>
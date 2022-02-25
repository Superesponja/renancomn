 <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Renan Com N - Informação com Diversão</title><!-- Até 70 caracteres-->
        
        
        <!-- CADA PÁGINA DO SITE DEVE TER SEU TÍTULO E DESCRIÇÕES PRÓPRIOS. OS DOIS ITENS DEVEM SER IGUAIS-->
        <meta name="description" content="Artigos sobre religião, dicas para a vida práticae curiosidades diversas. Landpage: Tenha um site para divulgar seu trabalho!"> <!-- Descrição do site, exibida abaixo do título no google. Até 140 caracteres-->
        
        <meta property="og:type" content="website"/> <!-- Conteúdo do site -->
        <meta property="og:title" content="Renan Com N - Informação com Diversão"/><!-- Título-->
        <meta property="og:description" content="Artigos sobre religião, dicas para a vida práticae curiosidades diversas. Landpage: Tenha um site para divulgar seu trabalho!"/><!-- Mesma descrição-->
        <meta property="og:url" content="http://www.renancomn.com.br"/>
        <meta property="og:image" content="http://www.renancomn.com.br/img/og-image.png"/>
        
        <meta name="viewport" content="width=device-width, initial=scale=1"> <!-- características da visualização em tela-->
        <link rel="shortcut icon" href="favicon.ico">
        
        
        <!-- ANTIGOS CSSs teste
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsivo.css">
        
        <link rel="stylesheet" href="css/style.css">-->

        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">



        <script> document.documentElement.classList.add("js");</script>
    </head>

    <body>



        <header class="header">
            <div class="container">
                <a href="index.html" class="grid-4">
                    <img src="img/logo-peq.svg" alt="Renan com N">
                </a>
                <nav class="header_menu grid-12">
                    <ul>
                        <li><a href="index.html" class="menu_ativo">Home</a></li>
                        <li><a href="renanzices.html">Renanzices</a></li>
                        <li><a href="portfolio.html">portfolio</a></li>
                        <li><a href="sobre.html">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Introdução /-->
        <section class="introducao">
            <div class="container">
                <h1 data-anime="400" class="fadeInDown">Renan<br>Com</h1>
                
                <div class="grid-8 btn">
                    <a href="renanzices.html">Renanzices</a>                
                </div>    
                <div class="grid-8 direita btn">
                    <a href="portfolio.html">Portfólio</a>
                </div>                
            </div>
        </section>

        <!-- Renanzices /-->
        <section class="renanzices">            
            <div class="container">
                <h2 class="subtitulo_home">Renanzices</h2>
                <ul class="renanzices_lista">

                    <li class="grid-1-3">
                        <div class="renanzices_icone">
                            <img src="img/thinking.svg" alt="Opinião">
                        </div>
                        <h3>Opinião</h3>
                        <p>A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.</p>
                    </li>

                    <li class="grid-1-3">
                        <div class="renanzices_icone">
                            <img src="img/lamp.svg" alt="Hacks">
                        </div>
                        <h3>Hacks</h3>
                        <p>A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso..</p>

                    <li class="grid-1-3">
                        <div class="renanzices_icone">
                            <img src="img/cross.svg" alt="Crentices">
                        </div>
                        <h3>Crentices</h3>
                        <p>A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso.A ligeira raposa marrom ataca o cão preguiçoso..</p>
                    </li>
                </ul>
                <div class="call">
                    <p>clique aqui para acessar as Reanzices</p>
                    <a href="renanzices.html" class="btn-link">Renanzices</a>
                </div>
            </div>
        </section>
        <!-- Fim dos Produtos/ início do Portfólio-->
        <section class="portfolio">
            <div class="container">
                <h2 class="subtitulo_home">portfolio</h2>
                <ul class="portfolio_lista">
                    <li class="grid-8"><img src="img/dalecrim_quadrado.png" alt="logo branco "></li>
                    <li class="grid-8"><img src="img/convite_quadrado.png" alt=" logo verde"></li>
                    <li class="grid-16"><img src="img/dalecrim_largo.png" alt=" logo verde"></li>
                </ul>
                <div class="call">
                    <p>conheça o nosso portfólio</p>
                    <a href="portfolio.html" class="btn-link">Portfólio</a>
                </div>
            </div>
        </section>

        <footer>
            <div class="footer">
                <div class="container">
                    <div class="grid-8 footer_historia">
                        <h3>Nossa História</h3>
                        <p>A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso.</p>
                    </div>

                    <div class="grid-4 footer_contato">
                        <h3>Contato</h3>
                        <ul>
                            <li>- (99) 99999-9999</li>
                            <li>- renan@renancomn.com.br</li>
                            <li>- Tremembé-SP</li>
                        </ul>
                    </div>

                    <div class="grid-4 footer_redes">
                        <h3>Redes Sociais</h3>
                        <ul>
                            <li><a href="https://www.youtube.com/channel/UC4SKMSOEzng2HAdbgMJZIJw/" target="_blank"><img src="img/redes-sociais/youtube.svg" alt="icone youtube"></a></li>
                            <li><a href="https://www.facebook.com/Me-Salva-Solu%C3%A7%C3%B5es-em-Inform%C3%A1tica-384925065463463/" target="_blank"><img src="img/redes-sociais/facebook.svg" alt="icone facebook"></a></li>
                            <li><a href="https://www.linkedin.com/in/renan-r-santana/" target="_blank"><img src="img/redes-sociais/ln.svg" alt="icone linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Copyright-->
            <div class="copy">
                <div class="container">
                    <p class="grid-16"> Renan Com N. 2021- Todos os Direitos Reservados</p>
                </div>
            </div>
        </footer>

        <script src="./js/simple-anime.js"></script>
        <script src="./js/script.js"></script>


    </body>
</html>
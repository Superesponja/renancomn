 <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Renan Com N - Saiba mais sobre a gente</title>        
        <meta name="description" content="Nossa história e informações de contato (12)99999-9999 renan@renancomn.com.br"> <!-- Descrição do site, exibida abaixo do título no google. Até 140 caracteres-->
        
        <meta property="og:type" content="website"/> <!-- Conteúdo do site -->
        <meta property="og:title" content="Renan Com N - Saiba mais sobre a gente"/><!-- Título-->
        <meta property="og:description" content="Nossa história e informações de contato (12)99999-9999 renan@renancomn.com.br"/><!-- Mesma descrição-->
        <meta property="og:url" content="http://www.renancomn.com.br/sobre.html"/>
        <meta property="og:image" content="http://www.renancomn.com.br/img/og-image.png"/>
        
        <meta name="viewport" content="width=device-width, initial=scale=1"> <!-- características da visualização em tela-->
        <link rel="shortcut icon" href="favicon.ico">    

        <!-- ANTIGOS CSSs 
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsivo.css">
        -->
        <link rel="stylesheet" href="css/style.css">
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="renanzices.html">Renanzices</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="sobre.html" class="menu_ativo">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Introdução /-->
        <section class="introducao_interna">
            <div class="container">
                <h1>Sobre</h1>
                <div class="sobre_conteudo">
                    <div class="grid-8 sobre_autor">
                        <h2 class="subtitulo">O Autor</h2>
                        <img src="img/sobre/perfil.png" alt="Foto do Renan Naruto">                        
                        <p>A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. </p>                                        
                    </div>

                    <div class="grid-8 sobre_projeto">
                        <h2 class="subtitulo">O Projeto</h2>
                        <img src="img/sobre/logo_sobre.png" alt="Foto do Renan Naruto">
                        <p>A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. A ligeira raposa marrom ataca o cão preguiçoso. </p>                    
                    </div>
                </div>

            </div>
        </section>


        <section class="faleconosco container">
            <h2 class="subtitulo_home">Fale Conosoco</h2>
            <form id="form_faleconosco" method="POST" action="./enviar.php" class="grid-8 form_faleconosco formphp">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone" name="telefone">

                <!-- Proteção contra SPAM-->
                <label class="nao-aparece"> Se você não é um robô, deixe em branco.</label> 
                <input type="text" class="nao-aparece" name="leaveblank">
                <label class="nao-aparece"> Se você não é um robô, não mude este campo.</label> 
                <input type="text" class="nao-aparece" name="dontchange" value="http://">


                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <button id="enviar" name="enviar" type="submit" class="btn-link">Enviar</button>
            </form>

            <div class="grid-8 sobre_dados">
                <h3>Dados</h3>                
                <span>Email: renancomn.com.br</span>
                <span class="urtimo-span">(12) 99999-9999</span>                

                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="https://www.youtube.com/channel/UC4SKMSOEzng2HAdbgMJZIJw/" target="_blank"><img src="img/sobre/youtube.svg" alt="icone youtube"></a></li>
                    <li><a href="https://www.facebook.com/Me-Salva-Solu%C3%A7%C3%B5es-em-Inform%C3%A1tica-384925065463463/" target="_blank"><img src="img/sobre/facebook.svg" alt="icone facebook"></a></li>
                    <li><a href="https://www.linkedin.com/in/renan-r-santana/" target="_blank"><img src="img/sobre/ln.svg" alt="icone linkedin"></a></li>
                </ul>   

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

        <script src="js/simple-form.js"></script>

    </body>
</html>
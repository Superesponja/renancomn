<?php get_header(); ?>

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






        <?php get_footer(); ?>
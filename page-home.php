<?php 
//Template Name: Home
get_header();
?>


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

        <?php get_footer(); ?>
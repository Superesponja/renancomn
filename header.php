<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name'); ?></title><!-- Até 70 caracteres-->
        
        
        <!-- CADA PÁGINA DO SITE DEVE TER SEU TÍTULO E DESCRIÇÕES PRÓPRIOS. OS DOIS ITENS DEVEM SER IGUAIS-->
        <meta name="description" content="Artigos sobre religião, dicas para a vida práticae curiosidades diversas. Landpage: Tenha um site para divulgar seu trabalho!"> <!-- Descrição do site, exibida abaixo do título no google. Até 140 caracteres-->
        
        <meta property="og:type" content="website"/> <!-- Conteúdo do site -->
        <meta property="og:title" content="<?php bloginfo('name'); ?>"/><!-- Título-->
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
        <!-- Início Wordpress Header -->
        <?php wp_head(); ?>
        <!-- Fim Wordpress Header -->
    </head>

    <body>



        <header class="header">
            <div class="container">
                <a href="index.html" class="grid-4">
                    <img src="img/logo-peq.svg" alt="Renan com N">
                </a>
                <nav class="header_menu grid-12">
                    <ul>
                        <li><a href="/" class="menu_ativo">Home</a></li>
                        <li><a href="/renanzices">Renanzices</a></li>
                        <li><a href="/portfolio">portfolio</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<?php get_header(); ?>

<div class="site-container">
    <div class="site-pusher">

        <?php include_once("sections/navbar.php"); ?>

        <div class="site-content">
            <?php include_once("sections/highlights.php"); ?>
            <div class="logo-grande">
            <div class="container">    

                <?php include_once("sections/section-conheca.php"); ?>
            </div>
            </div>
            <div class="faixa-intersep"> 
                <div class="nome-faixa"> 
                    Interoperabilidade Semântica de Informações em Segurança Pública
                    <div class="sub-nome-faixa"> Um projeto: 
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/nemo-sobre.svg" class="img-logo">
                    </div>
                </div>
            </div>
        </div>

        <div class="site-cache" id="site-cache"></div>
    </div>
</div>

<?php get_footer(); ?>
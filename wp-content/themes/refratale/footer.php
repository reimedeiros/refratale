<?php
$template_directory = get_template_directory_uri() . "/img/";
?>
<div class="container fonte-cinza fonte-size24">
    <div class="row">
        <div class="col s12">
            <div class="col s6">
                <div class="row negrito">Endereço</div>
                <div class="row ">Av. Clóvis Torres Soares, 402, 57.245-318, Lot. Senador Rui Palmeira</div>
                <div class="row ">São Miguel dos Campos, AL</div>
                <div class="row ">
                    <a href="<?php echo get_site_url(); ?>" class="brand-logo">
                        <img class="logo logo-rodape" src="<?php echo $template_directory . 'logo.png' ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col s4">
                <div class="row negrito">Contato</div>
                <div class="row">(82) 9 9919-9432</div>
                <div class="row">(82) 9 9304-0385</div>
                <div class="row">contato@refratale.com.br</div>
                <div class="row">contato2@refratale.com.br</div>
            </div>
            <div class="col s2">
                <div class="row negrito">Menu</div>
                <div class="row menu-rodape">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'bottom_menu'
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fundo-cinza-escuro rodape-copy">
    <div class="container fonte-branca">
        <div class="row margin-bottom-20">
            <div class="col s7">
                <p>Copyright © Refratale Serviços Eireli - EPP 2021. Todos os direitios reservados. </p>
            </div>
            <div class="col s5 right-align">
                <p>Desenvolvido por: <a href="">Agência Leva</a></p>
            </div>
        </div>
    </div>
</div>

</body>

</html>
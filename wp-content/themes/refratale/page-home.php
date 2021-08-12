<?php

get_header();
$template_directory = get_template_directory_uri() . "/img/";
?>

<div class="imagem-fundo-destaque">
    <div class="container">
        <div class="center-align">
            <div class="row pontos">
                ••••••••••••••••••••••••••••••••••••••••••••••••••
            </div>
            <div class="row texto-destaque">
                "Para alcançar um serviço perfeito, a segurança precisa ser um valor."
            </div>
            <div class="row pontos">
                ••••••••••••••••••••••••••••••••••••••••••••••••••
            </div>
            <div class="row center-align">
                <a class="waves-effect waves-light btn btn-laranja">Conheça-nos</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row center-align">
        <h3>Serviços</h3>
    </div>
    <div class="row center-align">
        <div class="col s4">
            <div class="titulo-serviço-home">serviço 1</div>
            <div class="row">
                <img class="img-servico-home" src="<?php echo $template_directory . '1.jpg' ?>" alt="">
            </div>
        </div>
        <div class="col s4">
            <div class="titulo-serviço-home">serviço 2</div>
            <div class="row">
                <img class="img-servico-home" src="<?php echo $template_directory . '1.jpg' ?>" alt="">
            </div>
        </div>
        <div class="col s4">
            <div class="titulo-serviço-home">serviço 3</div>
            <div class="row">
                <img class="img-servico-home" src="<?php echo $template_directory . '1.jpg' ?>" alt="">
            </div>
        </div>
    </div>
    <div class="row center-align">
        <a class="waves-effect waves-light btn btn-laranja">Mais Serviços</a>
    </div>
</div>

<?php get_footer(); ?>
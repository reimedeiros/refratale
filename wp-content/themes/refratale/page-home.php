<?php

get_header();
$template_directory = get_template_directory_uri() . "/img/";
?>

<div class="imagem-fundo-destaque">
    <!-- Início IMG DESTAQUE -->
    <?php
    if (have_posts()) :
        query_posts(array('category_name'  => 'img_destaque', 'posts_per_page' => 1));
        while (have_posts()) : the_post();
            $image = get_field('imagem');
            if (!empty($image)) :
    ?>
                <div class="img-destaque">
                    <img class="img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" height="616" />
                </div>

                <div class="container">
                    <div class="row">
                        <div class="descricao-destaque">
                            <?php the_content(); ?>
                            <div class="row center-align">
                                <a href="#" class="waves-effect waves-light btn btn-laranja">Conheça-nos</a>
                            </div>
                        </div>
                    </div>

                </div>
        <?php
            endif;
        endwhile;
    else :
        ?>
        <p>Nenhum imagem cadastrado !</p>
    <?php
    endif;
    ?>

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

<!-- Início IMG PARALLAX -->
<?php
if (have_posts()) :
    query_posts(array('category_name'  => 'parallax', 'posts_per_page' => 1));
    while (have_posts()) : the_post();
        $image = get_field('imagem');
        if (!empty($image)) :
?>
            <div class="parallax-container">
                <div class="parallax">
                    <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
    <?php
        endif;
    endwhile;
else :
    ?>
    <p>Nenhum parallax cadastrado !</p>
<?php
endif;
?>

<!-- Início do carousel BLOG -->
<div class="container">
    <div class="row center-align">
        <h3>Blog</h3>
    </div>
    <div class="row">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>Left Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
                    <div class="caption right-align">
                        <h3>Right Aligned Caption</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
                <li>
                    <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>
            </ul>
        </div>

        <div class="row center-align btn-blog">
            <a class="waves-effect waves-light btn btn-laranja">Mais Posts</a>
        </div>

    </div>

</div>
<!-- Início NOSSOS CLIENTES -->

<div class="fundo-cinza">
    <div class="container">
        <div class="row center-align padding-top10">
            <h3>Nossos Clientes</h3>
        </div>
        <div class="row">
            <div class="carousel">
                <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
                <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
                <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
                <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
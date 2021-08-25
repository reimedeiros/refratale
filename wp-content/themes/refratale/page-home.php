<?php

get_header();
$template_directory = get_template_directory_uri() . "/img/";
?>

<div class="imagem-fundo-destaque">
    <!-- Início IMG DESTAQUE -->
    <?php
    if (have_posts()) :
        // query_posts(array('category_name'  => 'img_destaque', 'posts_per_page' => 1));
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

        $image = get_field('parallax_home');
        if (!empty($image)) :
?>
            <div class="parallax-container">
                <div class="parallax">
                    <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
    <?php
        endif;
?>

<!-- Início do carousel BLOG -->
 <?php get_template_part('template-parts/blog-home'); ?>
<!-- Início NOSSOS CLIENTES -->

<div class="fundo-cinza-claro">
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
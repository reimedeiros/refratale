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
                                <a href="sobre-nos" class="waves-effect waves-light btn btn-laranja">Conheça-nos</a>
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
        <?php

        if (have_posts()) :
            query_posts(array('category_name'  => 'serviços', 'posts_per_page' => 3));
            $contador = 1;
            while (have_posts()) : the_post();
                $imagem = get_field('imagem');
                if (!empty($image)) :
        ?>


                    <div class="col s4">
                        <div class="titulo-serviço-home"><?php the_title(); ?></div>
                        <div class="row">
                            <a href="<?php the_permalink(); ?>">
                                <img class="img-servicos-home" src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" />
                            </a>
                        </div>
                    </div>


        <?php
                endif;
            endwhile;
        endif;
        ?>
    </div>
    <div class="row center-align">
        <a href="servicos" class="waves-effect waves-light btn btn-laranja">Mais Serviços</a>
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
        <div class="row center-align">

            <?php

            if (have_posts()) :
                query_posts(array('category_name'  => 'clientes', 'posts_per_page' => 6));

                // echo "<h1>". $posicoes[1] ."</h1>";

                while (have_posts()) : the_post();
                    $imagem = get_field('logotipo');
                    if (!empty($imagem)) :
            ?>
                        <div class="col s12 m4">
                            <a class="carousel-item" href="<?php the_permalink();?>">
                                <img class="img-cliente" src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" />
                            </a>
                        </div>

            <?php
                    endif;
                endwhile;
            endif;

            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
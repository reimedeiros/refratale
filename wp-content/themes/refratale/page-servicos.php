<?php get_header(); ?>

<!-- Início IMG PARALLAX -->
<?php
if (have_posts()) :
    $contador = 0;

    while (have_posts()) : the_post();

        $image = get_field('imagem_parallax');
        if (!empty($image)) :
?>
            <div class="parallax-container">
                <div class="parallax">
                    <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="row center-align">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>

            </div>
<?php
        endif;
    endwhile;
endif;

?>

<div class="container">

    <div class="row">
        <?php

        if (have_posts()) :
            query_posts(array('category_name'  => 'serviços', 'posts_per_page' => 9));
            $contador = 1;
            while (have_posts()) : the_post();
                $imagem = get_field('imagem');
                if (!empty($image)) :
        ?>


                    <div class="row servico-<?php echo $contador; ?>">

                        <?php
                        if ($contador % 2 == 0) {
                        ?>

                        <div class="card-servico-par col s11 m11 fundo-cinza-claro">
                            <div class="col s12 m5 imagem-servico">
                                <img class="img-servico" src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($imagem['alt']); ?>" />
                            </div>
                            <div class="col s12 m7 servico-par">
                                <div class="row titulo-servico left-align">
                                    <span class="card-title" title="<?php the_title(); ?>"><?php the_title(); ?></span>
                                </div>
                                <div class="row descricao">
                                    <p>
                                        <?php
                                        the_excerpt();
                                        ?>
                                    </p>
                                </div>
                                <div class="row card-servico-action">
                                    <a href="<?php the_permalink(); ?>">Saiba mais</a>
                                </div>
                            </div>
                        </div>


                        <?php
                        } else {
                        ?>
                        <div class="card-servico-impar col s11 m11 offset-s1 offset-m1 fundo-cinza-claro">
                            <div class="col s12 m7 servico-impar">
                                <div class="row titulo-servico right-align">
                                    <span class="card-title" title="<?php the_title();  ?>"><?php the_title(); ?></span>
                                </div>
                                <div class="row descricao">
                                    <p>
                                        <?php
                                        the_excerpt();
                                        ?>
                                    </p>
                                </div>
                                <div class="row card-servico-action">
                                    <a href="<?php the_permalink();?>">Saiba mais</a>
                                </div>
                            </div>
                            <div class="col s12 m5 imagem-servico">
                            <img class="img-servico" src="<?php echo esc_url($imagem['url']);?>" alt="<?php echo esc_attr($imagem['alt']);?>" />
                            </div>
                        </div>
                        <?php
                        }

                        ?>


                    </div>

        <?php
                    $contador += 1;
                endif;
            endwhile;
        endif;
        ?>
    </div>

</div>



<?php get_footer(); ?>
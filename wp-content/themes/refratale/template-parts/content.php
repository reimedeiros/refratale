<article <?php post_class(); ?>>
    <?php
    $image = get_field('imagem_destaque');
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
    <div class="container">
        <div class="row">
            <div class="row center-align titulo-single">
                <h3><?php the_title(); ?></h3>
            </div>
            <div class="row resumo-single">
                <p>
                    <?php
                    if (get_field('resumo')) {
                        the_field('resumo');
                    }
                    ?>
                </p>
            </div>
            <div class="row conteudo-single">
                <p>
                    <?php
                    the_content();
                    ?>
                </p>
            </div>

        </div>
    </div>
    <div class="bg-referencia">
        <div class="container">
            <div class="row">
                <div class="referencia col s12 center-align">
                    <?php
                    if (get_field('referencia_descricao') && get_field('referencia_url')) {
                    ?>
                        Referência: <a href="<?php the_field('referencia_url'); ?>" target="_blank"><?php the_field('referencia_descricao'); ?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row align-center">
                <div class="autor">
                    <div class="col autor-img">
                        <?php echo get_avatar(get_the_author_id(), 80); ?>
                    </div>
                    <div class="col autor-nome">
                        <h4> Autor:
                            <?php the_author_firstname(); ?>
                            <?php the_author_lastname(); ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>
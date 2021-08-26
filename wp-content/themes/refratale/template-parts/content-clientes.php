<article <?php post_class(); ?>>
    <?php
    $image = get_field('logotipo');
    if (!empty($image)) :
    ?>

        <div class="container">
            <div class="center-align">
                <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="url-cliente center-align">
                <?php
                if (get_field('site')) {
                ?>
                    Site: <a target="_blank" href="<?php the_field('site'); ?>" target="_blank"><?php the_title(); ?></a>
                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="row center-align titulo-single">
                    <h3><?php the_title(); ?></h3>
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

    <?php
    endif;
    ?>
</article>
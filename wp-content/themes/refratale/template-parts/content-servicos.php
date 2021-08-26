<article <?php post_class(); ?>>
    <?php
    $image = get_field('imagem');
    if (!empty($image)) :
    ?>
        <div class="parallax-container">
            <div class="parallax">
                <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        </div>
        <div class="container">
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

            <div class="row">
                <?php
                $images = get_field('galeria');
                if ($images) : ?>
                    <div class="gallery">
                        <div class="row">

                            <?php foreach ($images as $image) : ?>

                                <div class="col s6 m3">
                                    <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>">
                                        <img src="<?php echo $image['sizes']['thumbnail']; ?>" title="<?php echo $image['caption']; ?>" class="img-galeria" />
                                    </a>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </div>

    <?php
    endif;
    ?>
</article>
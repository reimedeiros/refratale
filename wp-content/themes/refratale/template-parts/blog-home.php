<div class="container">
    <div class="row center-align">
        <h3>Blog</h3>
    </div>
    <div class="row">
        <div class="slider">
            <ul class="slides">
                <?php
                if (have_posts()) :
                    query_posts(array('category_name'  => 'blog', 'posts_per_page' => 4));
                    while (have_posts()) : the_post();
                        $image = get_field('imagem_destaque');
                        if (!empty($image)) :

                ?>
                            <li>
                            <img class="img-cobertura" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <div class="caption center-align">
                                    <h3><?php the_title();?></h3>
                                    <p class="light grey-text text-lighten-3"><?php the_excerpt(); ?></p>
                                    <div class="row btn-blog-home">
                                        <a href="<?php the_permalink(); ?>">Saiba mais</a>
                                    </div>
                                </div>
                            </li>
                <?php

                        endif;
                    endwhile;
                endif;

                ?>
            </ul>
        </div>

        <div class="row center-align btn-blog">
            <a href="blog" class="waves-effect waves-light btn btn-laranja">Mais Posts</a>
        </div>

    </div>

</div>
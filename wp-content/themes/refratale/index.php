<?php get_header(); ?>

<?php
if (have_posts()) :
    query_posts(array('category_name'  => 'blog_page', 'posts_per_page' => 1));
    while (have_posts()) : the_post();
        $image = get_field('imagem_parallax');
        if (!empty($image)) :
?>

            <div class="parallax-container">
                <div class="parallax">
                    <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
            <div class="container margin-top40">
                <div class="row">
                    <div class="col s12">
                        <div class="row center-align">
                            <h3>Blog</h3>
                        </div>
                    </div>
                </div>
            </div>


    <?php
        endif;
    endwhile;
else :
    ?>
    <p>Nenhum post cadastrado !</p>
<?php
endif;
?>




<?php
if (have_posts()) :
    query_posts(array('category_name'  => 'blog', 'posts_per_page' => 9));
    while (have_posts()) : the_post();
        $image = get_field('imagem_destaque');
        if (!empty($image)) :
?>

            <div class="container">


                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </div>
                            <div class="card-content">
                                <span class="card-title"><?php the_title(); ?></span>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="card-action">
                                <a href="<?php the_permalink(); ?>">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

    <?php
        endif;
    endwhile;
else :
    ?>
    <p>Nenhum post cadastrado !</p>
<?php
endif;
?>


</div>

<?php get_footer(); ?>
<?php get_header(); ?>
<!-- Início IMG PARALLAX -->
<?php
if (have_posts()) :
    // query_posts(array('category_name'  => 'sobre_nos', 'posts_per_page' => 1));
    while (have_posts()) : the_post();

        $image = get_field('imagem_parallax');
        if (!empty($image)) :
?>
            <div class="parallax-container">
                <div class="parallax">
                    <img class="img-parallax" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
            </div>
        <?php endif;  ?>
        <div class="container margin-top40">
            <div class="row">
                <div class="col s12">
                    <div class="col s6">
                        <div class="row center-align">
                            <h3 class="margin-top0 margin-bottom0"><?php the_title();?></h3>
                        </div>
                        <div class="row descricao_sobre_nos">
                            <p>
                                <?php the_content();?>    
                            </p>
                        </div>
                        <div class="row center-align">
                            <h3 class="margin-top0 margin-bottom0">Missão</h3>
                        </div>
                        <div class="row descricao_sobre_nos">
                            <p>

                            <?php 
                                if(get_field('missao')){
                                    the_field('missao');
                                }
                            ?> 
                            
                            </p>
                        </div>
                        <div class="row center-align">
                            <h3 class="margin-top0 margin-bottom0">Visão</h3>
                        </div>
                        <div class="row descricao_sobre_nos">
                            <p>
                            <?php 
                                if(get_field('visao')){
                                    the_field('visao');
                                }
                            ?> 
                            </p>
                        </div>
                        <div class="row center-align">
                            <h3 class="margin-top0 margin-bottom0">Valores</h3>
                        </div>
                        <div class="row descricao_sobre_nos">
                            <p>
                            <?php 
                                if(get_field('valores')){
                                    the_field('valores');
                                }
                            ?> 
                            </p>
                        </div>
                    </div>
                    <div class="col s6 overflow-hidden">
                        <?php
                            $image = get_field('imagem_side');
                            if (!empty($image)) :?>
                                <img class="img-side" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-cobertura">
            <div class="container">
                <div class="row center-align padding-top10">
                            <h3>Cobertura</h3>
                        </div>
                <div class="row col s12 padding-bottom20">
                    <div class="col s6">
                        <?php
                            $image = get_field('imagem_cobertura');
                            if (!empty($image)) :?>
                                <img class="img-cobertura" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php
                            endif;
                        ?>
                    </div>
                    <div class="col s6 cidades">
                        <?php 
                            if(get_field('cobertura')){
                                the_field('cobertura');
                            }
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    <?php
    
    endwhile;
else :
    ?>
    <p>Nenhum post cadastrado !</p>
<?php
endif;
?>



<?php get_footer(); ?>
<?php get_header(); ?>

<?php
if (have_posts()) :
    // query_posts(array('category_name'  => 'contato', 'posts_per_page' => 1));
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
                    <div class="row center-align">
                        <h3>Contato</h3>
                    </div>
                    <div class="row">
                        <?php 
                           the_content();
                        ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="fundo-cinza-claro">
            <div class="container">
                <div class="row center-align margin-bottom-20 padding-top20">
                    
                    <h3>
                    <?php 
                        if(get_field('area_cinza')){
                            the_field('area_cinza');
                        }
                    ?> 
                    </h3>
                </div>
                <div class="row btn-whatsapp center-align padding-bottom50">
                    <a class="fonte-verde" href="<?php if(get_field('link_botao_whatsapp')){ the_field('link_botao_whatsapp');}?>" target="_blank">
                    <?php 
                        if(get_field('texto_botao_whatsapp')){
                            the_field('texto_botao_whatsapp');
                        }
                    ?> 
                    </a>
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
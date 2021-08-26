<?php get_header(); ?>
		<?php

        while (have_posts()) : the_post();
            $category = get_the_category();
            $nameCategory = $category[0]->cat_name;

            // echo $nameCategory;
            if($nameCategory == "Blog"):
                get_template_part('template-parts/content', 'single');
            elseif($nameCategory == "Serviços"):
                get_template_part('template-parts/content-servicos', 'single');
            elseif($nameCategory == "Clientes"):
                get_template_part('template-parts/content-clientes', 'single');
            endif;
        ?>
    <?php
        endwhile;
    ?>  


<?php get_footer(); ?>

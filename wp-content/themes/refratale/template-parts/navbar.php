<?php
$template_directory = get_template_directory_uri() . "/img/";
?>

<nav class="navbar">
    <div class="nav-wrapper container">
        <a href="<?php echo get_site_url(); ?>" class="brand-logo">
            <img class="logo" src="<?php echo $template_directory . 'logo.png' ?>" alt="">
        </a>
        <?php //the_custom_logo(); 
        ?>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top_menu'
                )
            ); ?>
        </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
</ul>
<div class="topo60">
    &nbsp;
</div>
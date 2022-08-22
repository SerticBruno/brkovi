<?php

$header = get_field('header', 'option');
$logo = $header['logo']['url']; 

?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <div class="logo-wrapper">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <img src="<?php echo $logo ?>" alt="">
            </a>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
                <span class="navbar-toggler-icon-line"></span>
                <span class="navbar-toggler-icon-line"></span>
                <span class="navbar-toggler-icon-line"></span>
            </div>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <?php wp_nav_menu( array( 
                'theme_location' => 'primary', 
                'depth' => 2,
                'menu_class' => 'navbar-nav ',
                'fallback_cb'   => false,
                'add_li_class'  => '',
            ) ); ?>
        </div>
    </div>
</nav>
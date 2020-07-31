<header id="masthead" class="site-header header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-9">
                <div class="site-branding">
                    <div class="logo">
                        <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_mod('brand_logo'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 col-3 text-right">

                <nav id="site-navigation" class="main-navigation desktop">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                    <div class="hamburger-wrapper">
                        <div class="hamburger-menu">
                            <span class="line medium"></span>
                            <span class="line short"></span>
                            <span class="line long"></span>
                        </div>
                    </div>
                </nav><!-- #site-navigation -->
    </div>

</header><!-- #masthead -->
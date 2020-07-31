<aside>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logo">
                    <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_mod('brand_logo'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            </div>
        </div>
    </div>
</aside>
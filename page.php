<?php
get_header();
?>
    <section class="front-hero">
        <div class="container">
            <div class="row herorow align-items-center">
                <div class="col-12">
                    <div class="front-content">
                        <img src="<?= url( '/assets/images/150.png')?>" alt="">
                        <h1><?= the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
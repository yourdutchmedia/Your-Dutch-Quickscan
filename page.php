<?php
get_header();
?>

    <section class="hero pb-0">
        <div class="container">
            <div class="row hero-row align-items-center">
                <div class="col-12">
                    <div class="title">
                        <h1><?= field('hero_titel') ?><span class="dot">.</span></h1>
                    </div>
                    <div class="subtitle">
                        <p><?= field('hero_subtekst') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quickscan-form">
        <div class="container">
            <div class="row quickscan-row align-items-center">
                <div class="col-12">
                    <div class="form">
                        <?= do_shortcode('[gravityform id="1"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>
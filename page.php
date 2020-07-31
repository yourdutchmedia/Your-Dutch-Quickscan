<?php
get_header();
?>

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12"></div>
            </div>
        </div>
    </section>

    <section class="quickscan-form">
        <div class="overlay-mobile"></div>
        <div class="container">
            <div class="row quickscan-row align-items-center">
                <div class="col-12">
                    <div class="title">
                        <h1><?= field('quickscan_titel') ?></h1>
                    </div>
                    <div class="subtext">
                        <?= field('quickscan_subtekst') ?>
                    </div>
                    <div class="form">
                        <?= do_shortcode('[gravityform id="1"]') ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="gradient"></div>
    </section>

<?php
get_footer();
?>
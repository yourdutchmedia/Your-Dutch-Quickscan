<?php
get_header();
?>

<section class="thanks" style="background-image: url(<?= field('bedankt_achtergrond') ?>)">
    <div class="overlay"></div>
    <div class="logo"><?= wp_img('bedankt_logo') ?></div>
    <div class="container">
        <div class="row thnx-row align-items-center">
            <div class="col-12">
                <div class="border-top"></div>
                <div class="border-bottom"></div>
                <div class="title text-center">
                    <h1><?= field('bedankt_titel') ?></h1>
                </div>
                <div class="subtitle text-center">
                    <h2><?= field('bedankt_subtitel') ?></h2>
                </div>
                <div class="button text-center">
                    <a href="<?= field('bedankt_button_link') ?>"><?= field('bedankt_button_tekst') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>

</main>
<footer>
    <div class="container">
    <div class="row text-left">
            <div class="col-md-4 contactinformation">
                <?php dynamic_sidebar( 'footer_widget_1' ); ?>
            </div>
            <div class="col-md-4 footermenu">
                <?php dynamic_sidebar( 'footer_widget_2' ); ?>
            </div>
            <div class="col-md-4 footermenu">
                <?php dynamic_sidebar( 'footer_widget_3' ); ?>
            </div>
        </div>
    </div>

</footer>
<div class="copyright text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>© Copyright - <b><!--site title --></b> 2019 | Website door: <b> <a target="_blank" href="https://www.yourdutchmedia.nl/">Your Dutch Media</a></b></p>
            </div>
        </div>
    </div>

</div>

<?php
wp_footer()
?>

<!-- scripts -->
<script type="text/javascript" src="<?= url('/assets/dist/js/main.js') ?>"></script>
<!-- end scripts -->

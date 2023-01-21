<?php 
/*
Template Name: contact
*/
get_header('contact'); ?>

<!--==============================================================
ContactPage
============================================================== -->
<section class="ContactPage">
    <div class="wrapper">
        <div class="section__title fadein">
            <h2>Contact</h2>
            <p>お問い合わせ</p>
            <p class="caution">以下の内容で送信します。よろしいですか？</p>
            <?php if( is_page('contact')):?>
                <script type="text/javascript">
                    if($('.mw_wp_form_confirm')) {
                        $('.caution').css('display', 'block');
                    }
                </script>
                <?php endif;?>
        </div>
        <?php the_content(); ?>
        
    </div>
</section>

<?php get_footer(); ?>
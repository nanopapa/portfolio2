<?php get_header('Works-subpage'); ?>
<!--==============================================================
Works
============================================================== -->
<div class="wrapper">
    <section class="Works">
        <div class="section__title fadein">
            <h2>Works</h2>
            <p>制作実績</p>
        </div>

    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Travel01.png" alt="トラベルブログ　スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Travel02.png" alt="トラベルブログ　スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Travel03.png" alt="トラベルブログ　スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa.github.io/Coding-Travel/">https://nanopapa.github.io/Coding-Travel/</a></dd>
            <dt>サイトの概要</dt>
            <dd>旅するブロガーが旅行記事を公開するためのサイトです。<br>
                ・2カラムで左にブログ記事、右にプロフィール、ランキング、アーカイブを確認できるようになっています。<br>
                ・レスポンシブでヘッダーメニューが横スクロールされるように実装されています。
            </dt>
            <dd>HTML/CSS</dd>
            <dt>作業範囲</dt>
            <dd>コーディング</dd>
        </dl>

    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer('Works-subpage'); ?>
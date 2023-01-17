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
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Dogrun.png" alt="ドッグラン　スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Dogrun02.png" alt="ドッグラン　スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Dogrun03.png" alt="ドッグラン　スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa-samplesite.com/index.html/">https://nanopapa-samplesite.com/index.html/</a></dd>
            <dt>サイトの概要</dt>
            <dd>ドッグカフェのサイトを作成しました。飼い主とわんちゃんとのふれあいがより鮮明に伝わるように画像を多めに使用しました。<br>
                ・JavaScriptを使用し、トップ画面はSlickによるスライドショーで自動で画像が切り替わります。<br>
                ・レスポンシブ対応も行っており、スマートフォンからのアクセスにも対応しています。</dd>
            <dt>使用した言語/ツール</dt>
            <dd>HTML/CSS/JavaScript/Photoshop</dd>
            <dt>作業範囲</dt>
            <dd>デザイン/コーディング</dd>
        </dl>

    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer('Works-subpage'); ?>
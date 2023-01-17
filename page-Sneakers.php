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
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Sneakers.png" alt="スニーカー専門店　スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Sneakers02.png" alt="スニーカー専門店　スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Sneakers03.png" alt="スニーカー専門店　スライド画像33"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa.github.io/CodingSneakers/">https://nanopapa.github.io/CodingSneakers/</a></dd>
            <dt>サイトの概要</dt>
            <dd>スニーカー専門店のサイトです。トップページに動画を取り入れることでスニーカーのファッショナブル感を演出しています。<br>
                JavaScript(jQuery)を使用し、スムーススクロールやフェードインを使用し躍動感のあるサイトにしています。</dd>
            <dt>使用した言語/ツール</dt>
            <dd>HTML/CSS/JavaScript</dd>
            <dt>作業範囲</dt>
            <dd>コーディング</dd>
        </dl>

    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer('Works-subpage'); ?>
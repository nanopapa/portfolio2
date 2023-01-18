<?php get_header(); ?>
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
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/Works__img/Works__Profilesite.png" alt="プロフィールサイト　スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/Works__img/Works__Profilesite02.png" alt="プロフィールサイト　スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/images/Works__img/Works__Profilesite03.png" alt="プロフィールサイト　スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa.github.io/cording-myworks/">https://nanopapa.github.io/cording-myworks/</a></dd>
            <dt>サイトの概要</dt>
            <dd>フォトグラファーのポートフォリオ用のサイトを制作しました。<br>
                ・近況を伝えるNEWS一覧を作成しました。自分の活動をよりリアルタイムに伝えることが可能です。<br>
                ・お問い合わせフォームを実装し、仕事を直接依頼できる仕様にしています。</dd>
            <dt>使用した言語/ツール</dt>
            <dd>HTML/CSS</dd>
            <dt>作業範囲</dt>
            <dd>コーディング</dd>
        </dl>

    </section>
</div>

<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>
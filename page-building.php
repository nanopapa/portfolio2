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
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Aonokensetsu.png" alt="蒼乃建設 スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Aonokensetsu02.png" alt="蒼乃建設 スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Aonokensetsu03.png" alt="蒼乃建設 スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa.github.io/cording-aonokensetu/">https://nanopapa.github.io/cording-aonokensetu/</a></dd>
            <dt>サイトの概要</dt>
            <dd>建設会社のサイトを制作しました。文字をあまり使用せずサイト全体を非常にシンプルにし、画像を多めに取り入れることにより、施工した建物など実績を視覚的にイメージしやすくなるようにしています。
                レスポンシブデザインに対応し、ハンバーガーメニューを実装しています。クリックするとメニューが展開し、パソコン、スマートフォン両方に対応しています。</dd>
            <dt>使用した言語/ツール</dt>
            <dd>HTML/CSS/JavaScript</dd>
            <dt>作業範囲</dt>
            <dd>コーディング</dd>
        </dl>

    </section>
</div>

<!--==============================================================
contact
============================================================== -->
<div class="Contact">
    <div class="section__title fadein">
        <h2>Contact</h2>
        <p>お問い合わせ</p>
    </div>

    <p>お仕事のご依頼やご相談はこちら<br>
        お気軽にご連絡ください！
    </p>
<div class="wrapper">
    <div class="button__more ">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
    </div>
</div>
</div>

<!--==============================================================
footer
============================================================== -->
<?php get_footer('Works-subpage'); ?>
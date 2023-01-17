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
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Cafe.png" alt="カフェサイト スライド画像1"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Cafe02.png" alt="カフェサイト スライド画像2"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>./images/Works__img/Works__Cafe03.png" alt="カフェサイト スライド画像3"></div>
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
    </div>

        <dl class="Works__details">
            <dt>URL</dt>
            <dd><a href="https://nanopapa.github.io/CodingCafe/">https://nanopapa.github.io/CodingCafe/</a></dd>
            <dt>サイトの概要</dt>
            <dd>カフェのサイトを作成しました。パララックスという視差効果を利用し、各セクションタイトルに奥行き感を演出しています。モダンで落ち着いた雰囲気のサイトに仕上げ、静かに自分の時間を過ごせることをイメージしています。
            </dd>
            <dt>使用した言語/ツール</dt>
            <dd>HTML/CSS</dd>
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

<?php get_footer('Works-subpage'); ?>
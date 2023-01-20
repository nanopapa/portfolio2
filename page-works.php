<?php 
/*
Template Name: works
*/

get_header(); ?>
<!--==============================================================
About
============================================================== -->
<div class="wrapper">
    <section class="Works">
            <div class="section__title fadein">
                <h2>Works</h2>
                <p>制作実績</p>
            </div>

            <ul>
        <li>
            <a href="<?php echo esc_url(home_url('/Kindergarden/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works_Kindergarden.png" alt="幼稚園サイト画像">
                <p>幼稚園サイト作成</p>
            </a>
            </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Sneakers/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Sneakers.png" alt="スニーカー専門店の画像">
                <p>スニーカー専門店のサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Profilesite/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__ProfileSite.png" alt="プロフィールサイト画像">
                <p>プロフィールサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Dogrun/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Dogrun.png" alt="ドッグランサイト画像">
                <p>ドッグランのサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Officedesign/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Officedesign.png" alt="オフィスデザイン会社の画像">
                <p>オフィスデザイン会社のサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Cafe/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__CoffieSite.png" alt="カフェのサイト画像">
                <p>カフェのサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Travel/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Travel.png" alt="トラベルブログ画像">
                <p>ブログサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Building/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Aonokensetsu.png" alt="蒼乃建設画像">
                <p>建設会社のサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Englishschool/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Englishschool.png" alt="英会話スクール画像">
                <p>英会話スクールのサイト作成</p>
            </a>
        </li>
        <li>
            <a href="<?php echo esc_url(home_url('/Myportfolio/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Top__img/Works__Myportfolio.png" alt="ポートフォリオサイト画像">
                <p>ポートフォリオサイト作成</p>
            </a>
        </li>
    </ul>
        
</div>
<?php get_template_part('contact-part'); ?>
<?php get_footer(); ?>
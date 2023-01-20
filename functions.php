<?php

// swiper
function swiper(){
    wp_register_style(
        "swiper-css",
        "https://unpkg.com/swiper@8/swiper-bundle.min.css"
    );
    wp_enqueue_style( 'swiper-css' );

    wp_enqueue_script(
        "swiper-js",
        "https://unpkg.com/swiper@8/swiper-bundle.min.js",
        array(),
        false,
        true
    );

    wp_enqueue_script('swiper-bundle03','https://unpkg.com/swiper/swiper-bundle.js', array(), '1.0', true);
    wp_enqueue_script('swiper-bundle04','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '1.0', true,);
}
add_action( 'wp_enqueue_scripts', 'swiper' );



// CSS,JavaScript
function my_scripts() {
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('Unna', 'https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap');
    wp_enqueue_style('swiper-bundle-min', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style('swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.css');

    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset__css/reset.css');
    if(is_page('service')){
    wp_enqueue_style( 'service', get_template_directory_uri() . '/css/Service__css/Service.css');
    }elseif(is_page('about')){
    wp_enqueue_style('about2', get_template_directory_uri() . '/css/About__css/About.css');
    }elseif(is_page('works')){
    wp_enqueue_style( 'works', get_template_directory_uri() . '/css/Works__css/Works__mainpage.css');
    }elseif(is_page('contact')){
    wp_enqueue_style( 'contact', get_template_directory_uri() . '/css/Contact__css/Contact.css');
    }elseif(is_page(array('Cafe','building','Dogrun','Englishschool','Kindergarden', 'Myportfolio','Officedesign','Profilesite','Sneakers','Travel'))){
    wp_enqueue_style( 'sub-page', get_template_directory_uri() . '/css/Works__css/Works__subpage.css');
    }elseif(is_home() || is_front_page()){
    wp_enqueue_style( 'style', get_template_directory_uri() .'/style.css');
    }

    wp_enqueue_script('javascript', get_template_directory_uri() . '/javascript/main.js', array(), '1.0', true);

}
    add_action( 'wp_enqueue_scripts', 'my_scripts' );


?>


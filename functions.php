<?php
/**
 * فعال‌سازی ویژگی‌های پشتیبانی قالب
 */
function autodm_features() {
    // فعال‌سازی تایتل داینامیک
    add_theme_support('title-tag');
    // فعال‌سازی تصویر شاخص
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'autodm_features');

/**
 * بارگذاری فایل‌های CSS و JS
 */
function autodm_load_assets() {
    
    // ==========================================
    // 1. بارگذاری استایل‌ها (CSS)
    // ==========================================
    
    // لود کردن فایل فونت‌ها (اولویت اول)
    wp_enqueue_style('autodm-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0');

    // لود کردن استایل انیمیشن‌های AOS
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0');

    // لود کردن فایل CSS اصلی طراحی شما
    wp_enqueue_style('autodm-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');

    // لود کردن استایل ریشه وردپرس (style.css) - وابسته به فونت‌ها و مین سی‌اس‌اس
    wp_enqueue_style('autodm-style', get_stylesheet_uri(), array('autodm-fonts', 'autodm-main-css'), '1.0');


    // ==========================================
    // 2. بارگذاری اسکریپت‌ها (JS)
    // ==========================================

    // لود کردن اسکریپت انیمیشن‌های AOS (شما این را در کد قبلی فراموش کرده بودید)
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true);

    // لود کردن فایل JS اصلی (main.js) - وابسته به جی‌کوئری
    wp_enqueue_script('autodm-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);

    // لود کردن فایل script.js
    wp_enqueue_script('autodm-script-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'autodm_load_assets');
function add_custom_favicon_ico() {
    echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
    echo '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" type="image/x-icon" />';
}
add_action('wp_head', 'add_custom_favicon_ico');

?>

<?php
function shimizu_enqueue_styles() {
  wp_enqueue_style('shimizu-style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'shimizu_enqueue_styles');

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

<?php
function shimizu_enqueue_styles() {
  wp_enqueue_style('shimizu-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'shimizu_enqueue_styles');

<?php

add_action('after_setup_theme', 'mysecondwp_setup');
function mysecondwp_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('aside', 'video', 'image', 'status', 'link'));
}

add_action('wp_enqueue_scripts', 'mysecondwp_files');
function mysecondwp_files()
{
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_script('masonry-script', '//cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js', NULL, '4.2.2', true);
  wp_enqueue_script('theme-script', get_theme_file_uri('/script.js'), NULL, '1.0', true);
}

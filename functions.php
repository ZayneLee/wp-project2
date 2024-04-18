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

function postMeta()
{ ?>
  <div class="post-meta">
    <?php echo get_avatar(get_the_author_meta('ID'), '18', '', '', array('class' => array())); ?>
    <span class="post-author">
      <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author_meta('display_name'); ?></a>
    </span> |
    <span class="post-time">
      <?php the_time('Y-m-d'); ?>
    </span> |
    Cat: <?php the_category(); ?> <?php echo (has_tag() ? '| Tag: ' : ''); ?>
    <?php the_tags('', ', ', ''); ?>
    <?php
    if (is_single()) {
      echo '|';
      previous_post_link('%link', '&laquo; Prev');
      next_post_link('%link', 'Next &raquo;');
    }
    ?>
  </div>
<?php }

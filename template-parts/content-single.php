<article id="post" <?php post_class('grid-item') ?>>
    <?php
    if (has_post_thumbnail()) { ?>

        <div class="post-featured">
            <img src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium')[0]) ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachement_image_alt', true) ?>" class="post-featured-image">
        </div>

    <?php }
    ?>

    <div class="article-body">
        <h4><?php the_title(); ?></h4>
        <p>
            <?php
            the_content()
            ?>
        </p>
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
    </div>
</article>
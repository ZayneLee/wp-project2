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
        <?php postMeta() ?>
    </div>
</article>
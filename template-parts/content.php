<article id="post" <?php post_class('grid-item') ?>>
    <?php
    if (has_post_thumbnail()) { ?>

        <a href="<?php the_permalink(); ?>" class="post-featured">
            <img src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium')[0]) ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachement_image_alt', true) ?>" class="post-featured-image">
        </a>

    <?php }
    ?>

    <div class="article-body">
        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <p>
            <?php
            if (has_excerpt()) {
                echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(), 30);
            }
            ?>
        </p>
        <?php postMeta() ?>
    </div>
</article>
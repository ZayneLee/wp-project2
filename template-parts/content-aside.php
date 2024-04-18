<article id="post" <?php post_class('grid-item') ?>>
    <div class="article-body">
        <h5>
            <a href="<?php the_permalink() ?>"><?php the_content() ?></a>
        </h5>
        <small class="post-meta">
            <?php echo get_avatar(get_the_author_meta('ID'), '18', '', '', array('class' => array())); ?>
            <span class="post-author">
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author_meta('display_name'); ?></a>
            </span> |
            <cite><?php the_time('Y-m-d') ?></cite>
        </small>
    </div>
</article>
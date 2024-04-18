<?php get_header() ?>
<div class="container"></div>
<div class="section-content">
    <main>
        <?php
        while (have_posts()) {
            the_post(); ?>
            <section id="page-banner" style="background-image: url('<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]) ?>');">
                <div class="overlay">
                    <div class="section-content">
                        <h3><?php the_title() ?></h3>
                    </div>
                </div>
            </section>

            <section id="page-content" <?php post_class() ?>>
                <aside>
                    <ul class="page-list">
                        <?php
                        wp_list_pages(array('title_li' => '')) ?>
                    </ul>
                </aside>
                <article>
                    <?php the_content() ?>
                </article>
            </section>
        <?php }
        ?>
    </main>
</div>
</div>
<?php get_footer() ?>
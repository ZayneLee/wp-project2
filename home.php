<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?>
    </title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="container">
        <div class="section-content">
            <?php

            if (have_posts()) { ?>
                <main class="grid">

                    <?php
                    while (have_posts()) {
                        the_post();

                        get_template_part('template-parts/content', get_post_format());
                    }
                    ?>

                </main>

                <div class="pagination">
                    <?php the_posts_pagination(); ?>
                </div>
            <?php } else {
                echo '<p>Sorry, no posts.</p>';
            }

            ?>
        </div>
    </div>
    <?php wp_footer() ?>
</body>

</html>
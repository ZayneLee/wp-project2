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
    <h1>hello world!</h1>
  </div>
  <?php wp_footer() ?>
</body>

</html>